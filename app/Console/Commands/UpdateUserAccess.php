<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;

class UpdateUserAccess extends Command
{
    protected $signature = 'user:update-access';
    protected $description = 'Update user access based on start and end datetime';

    public function handle()
    {
        $now = Carbon::now();

        // Aktifkan akses jika sekarang berada di antara waktu mulai dan waktu akhir
        User::where('access_start_datetime', '<=', $now)
            ->where('access_end_datetime', '>=', $now)
            ->update(['access' => json_encode(['analisis_jabatan' => true, 'analisis_beban_kerja' => true, 'laporan' => true])]);

        // Nonaktifkan akses jika sekarang di luar waktu tersebut
        User::where(function ($query) use ($now) {
            $query->where('access_start_datetime', '>', $now)
                  ->orWhere('access_end_datetime', '<', $now);
        })->update(['access' => json_encode(['analisis_jabatan' => false, 'analisis_beban_kerja' => false, 'laporan' => false])]);

        $this->info('User access updated successfully.');
    }
}
