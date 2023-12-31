<?php
namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        // dd($request->all());
        $file = $request->file('file');

        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        Excel::import(new UsersImport($request->jurusan_id, $request->program_studi_id), $file);

        return redirect()->back()->with('success', 'Data berhasil diimport');
    }
}
