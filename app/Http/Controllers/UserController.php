<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jabatan;

class UserController extends Controller
{
    // Menampilkan halaman form untuk membuat user baru
    public function index() {
        $users = User::all();
        return view('Admin.SUBUSER.index', compact('users'));
    }

    // Menampilkan form untuk membuat user baru
    public function create()
    {
        return view('Admin.SUBUSER.create');
    }

    // Menyimpan user baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'user_id' => 'required|integer|unique:users|max:20',
            'email' => [
                'required',
                'email',
                'unique:users',
                function ($attribute, $value, $fail) {
                    if (!str_ends_with($value, '@gmail.com')) {
                        $fail('Email harus diakhiri dengan @gmail.com.');
                    }
                },
            ],
            'username' => 'required|string|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'unit_organisasi' => [
                'nullable',
                'string',
                function ($attribute, $value, $fail) {
                    if (User::where('unit_organisasi', $value)->exists()) {
                        $fail('Unit Organisasi sudah ada.');
                    }
                },
            ],
        ]);
        User::create([
            'user_id' => $request->user_id,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'unit_organisasi' => $request->unit_organisasi,
            'role' => 'Admin Skpd', // Set role ke Admin Skpd
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    // Menampilkan detail user
    public function show(User $user)
    {
        return view('Admin.SUBUSER.show', compact('user'));
    }

    // Menampilkan form untuk mengedit user
    public function edit(User $user)
    {
        return view('Admin.SUBUSER.edit', compact('user'));
    }

    // Memperbarui user
    public function update(Request $request, User $user)
{
    $validated = $request->validate([
        'username' => 'required|string|max:255',
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $user->username = $request->input('username');

    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }

    $user->save();

    return redirect()->route('user.index')->with('success', 'User updated successfully');
}


    // Menghapus user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}