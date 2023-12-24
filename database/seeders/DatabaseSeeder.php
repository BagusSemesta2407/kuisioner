<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'username' => '12345',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknologi Informasi dan Komputer',
            'username' => 'ajmi',
            'role' => 'jurusan',
            // 'jurusan' => 'mi',
            'password' => bcrypt('ajmi'),
        ]);
        User::create([
            'name' => 'Admin Jurusan Pertanian',
            'username' => 'aja',
            'role' => 'jurusan',
            // 'jurusan' => 'a',
            'password' => bcrypt('aja'),
        ]);
        User::create([
            'name' => 'Admin Jurusan Kesehatan',
            'username' => 'ajk',
            'role' => 'jurusan',
            // 'jurusan' => 'k',
            'password' => bcrypt('ajk'),
        ]);
        User::create([
            'name' => 'Admin Jurusan TPPM',
            'username' => 'ajtppm',
            'role' => 'jurusan',
            // 'jurusan' => 'tppm',
            'password' => bcrypt('ajtppm'),
        ]);
        User::create([
            'name' => 'p4mp',
            'username' => 'p4mp',
            'role' => 'p4mp',
            'password' => bcrypt('p4mp'),
        ]);
        $this->call(PertanyaanSeed::class);
    }
}
