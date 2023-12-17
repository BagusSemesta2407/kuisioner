<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Untuk manipulasi tanggal
use App\Models\User;

class UpdateSemester extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'semester:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update semester for students';

    /**
     * Execute the console command.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $currentDate = Carbon::now();
        $currentMonth = $currentDate->month;

        if ($currentMonth === 2 || $currentMonth === 8) {
            // Lakukan logika update semester di sini
            // Contoh: Update semester mahasiswa
            User::where('tingkat', '<', 8)->update(['tingkat' => DB::raw('tingkat + 1')]);

            $this->info('Semester updated successfully.');
        } else {
            $this->info('No semester update needed.');
        }
    }
}
