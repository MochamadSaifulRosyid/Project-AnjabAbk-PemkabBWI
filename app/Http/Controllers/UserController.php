<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Unor;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Admin.SUBUSER.index', compact('users'));
    }

    public function create()
    {
        $unors = Unor::all();
        return view('Admin.SUBUSER.create', compact('unors'));
    }

    public function store(Request $request)
{
    // Validasi input, tanpa 'user_id'
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
        'role' => 'required|string|in:Super Admin,Admin Skpd,Admin Unor',
        'KD_UNOR' => 'required|string|exists:unor,KD_UNOR',
        'NM_UNOR' => 'required|string|max:255',
    ]);

    // Mendapatkan user_id berikutnya
    $user_id = User::getNextUserId();

    User::create([
        'user_id' => $user_id,
        'username' => $request->username,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'KD_UNOR' => $request->KD_UNOR,
        'NM_UNOR' => $request->NM_UNOR,
        'role' => $request->role,
    ]);

    return redirect()->route('user.index')->with('success', 'User created successfully.');
}


    public function show(User $user)
    {
        return view('Admin.SUBUSER.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('Admin.SUBUSER.edit', compact('user'));
    }

    public function update(Request $request, User $user)
{
    $user->access_status = !$user->access_status; // Toggle status
    $user->save();

    return redirect()->route('user.index')->with('success', $user->access_status ? 'User access successfully activated.' : 'User access successfully deactivated.');
}



    // Fungsi untuk mengaktifkan kembali akses
    public function activate(Request $request, User $user)
    {
        $user->access_status = true;
        $user->save();

        return redirect()->route('user.index')->with('success', 'User access successfully activated.');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }

    public function getUserById($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function getUnitsByRole(Request $request)
    {
        $role = $request->input('role');
        
        // Fetch units based on the role
        $unors = Unor::all();

        return response()->json($unors);
    }
    public function dashboard()
    {
        $user = Auth::user();
        
        // Periksa apakah akses dinonaktifkan
        if (!$user->access_status) {
            return redirect()->route('access.denied');
        }

        // Jika akses aktif, lanjutkan ke halaman dashboard
        return view('dashboard');
    }

}