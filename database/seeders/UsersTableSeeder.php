<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        User::create([
            'user_id' => '1',
            'KD_UNOR' => '8800000000',
            'username' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'Super Admin',
            'NM_UNOR' => 'Pemerintah Kabupaten Banyuwangi',
            'access' => json_encode([
                'analisis_jabatan' => 1,
                'analisis_beban_kerja' => 1,
                'laporan' => 1,
            ]),
        ]);

        // Create admin SKPD user
        User::create([
            'user_id' => '2',
            'KD_UNOR' => '8801000000',
            'username' => 'Admin SKPD',
            'email' => 'adminskpd@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'Admin Skpd',
            'NM_UNOR' => 'Sekretariat Daerah',
            'access' => json_encode([
                'analisis_jabatan' => 1,
                'analisis_beban_kerja' => 1,
                'laporan' => 1,
            ]),
        ]);
    }
}