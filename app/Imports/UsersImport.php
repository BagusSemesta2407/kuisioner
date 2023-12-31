<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;


class UsersImport implements ToModel
{
    public function __construct($jurusanId, $programStudiId) {
        $this->jurusan_id = $jurusanId;
        $this->program_studi_id=$programStudiId;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'username' => $row[1],
            'role' => 'mahasiswa',
            'tahun_masuk' => $row[2],
            'tingkat' => $row[3],
            'jurusan_id' => $this->jurusan_id,
            'program_studi_id' => $this->program_studi_id,
            'password' => Hash::make($row[4]),
        ]);
    }
}
