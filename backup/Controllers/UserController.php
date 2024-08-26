<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan halaman form untuk membuat user baru
    public function index() {
        $users = User::all();
        return view('Admin_Unor.SUBUSER.index', compact('users'));
    }

    public function create()
    {
        return view('Admin_Unor.SUBUSER.create');
    }
public function store(Request $request)
{
    // Validasi input
    $request->validate([
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

    // Menyimpan user baru
    User::create([
        'email' => $request->email,
        'username' => $request->username,
        'password' => bcrypt($request->password),
        'unit_organisasi' => $request->unit_organisasi,
    ]);

    return redirect()->route('user.index')->with('success', 'User created successfully.');
}



    // Menghapus user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}