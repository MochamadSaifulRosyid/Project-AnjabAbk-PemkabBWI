<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Unor;

class UserController extends Controller
{
    public function index()
    {

        $unors = Unor::all();

        $users = User::all();  // Ambil semua data pengguna
        return view('Admin.SUBUSER.index', compact('users', 'unors'));
    }


        public function create()
        {
            $unors = Unor::all();
            return view('Admin.SUBUSER.index', compact('unors'));
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
            'role' => 'required|string|in:Super Admin,Admin Skpd,Admin Unor',
            'KD_UNOR' => 'required|string|exists:unor,KD_UNOR',
            'NM_UNOR' => 'required|string|max:255',
        ]);

        // Cek apakah KD_UNOR sudah digunakan
        if (User::where('KD_UNOR', $request->KD_UNOR)->exists()) {
            return back()->withErrors(['KD_UNOR' => 'Unit Organisasi ini sudah digunakan.'])->withInput();
        }

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
    return response()->json([
        'id' => $user->id,
        'role' => $user->role,
        'KD_UNOR' => $user->KD_UNOR,
        'access' => json_decode($user->access, true)
    ]);
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
    if (!$user->access_status || !$this->isAccessActive($user)) {
        return redirect()->route('access.denied');
    }

    // Jika akses aktif, lanjutkan ke halaman dashboard
    return view('dashboard');
}

private function isAccessActive($user)
{
    $today = now()->toDateString();
    return ($user->access_start_date <= $today && $user->access_end_date >= $today);
}


public function updateAccess(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Validasi input tanggal
    $validator = Validator::make($request->all(), [
        'access_start_datetime' => 'nullable|date',
        'access_end_datetime' => 'nullable|date|after_or_equal:access_start_datetime',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'message' => 'Validation errors',
            'errors' => $validator->errors(),
        ], 422); // HTTP 422 Unprocessable Entity
    }

    // Ambil akses yang sudah ada
    $access = json_decode($user->access, true) ?? [];
    $access['analisis_jabatan'] = $request->input('analisis_jabatan') === '1';
    $access['analisis_beban_kerja'] = $request->input('analisis_beban_kerja') === '1';
    $access['laporan'] = $request->input('laporan') === '1';

    // Simpan data akses
    $user->access = json_encode($access);
    if ($request->filled('access_start_datetime')) {
        $user->access_start_datetime = $request->input('access_start_datetime');
    }
    if ($request->filled('access_end_datetime')) {
        $user->access_end_datetime = $request->input('access_end_datetime');
    }
    $user->save();

    return response()->json(['message' => 'User access successfully updated.'], 200);
}

}
