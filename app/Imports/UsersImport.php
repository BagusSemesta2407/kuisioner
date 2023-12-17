<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;


class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new User([
            'name' => $row[0],
            'username' => $row[1],
            'role' => 'mahasiswa',
            'periode' => $row[2],
            'tingkat' => $row[3],
            'jurusan' => $row[4],
            'prodi' => $row[5],
            'password' => Hash::make($row[6]),
        ]);
    }
}
