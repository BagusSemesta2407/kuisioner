<?php
namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');

        // dd($file);
        // Validasi file
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        // Import data dari file Excel
        Excel::import(new UsersImport, $file);

        return redirect()->back()->with('success', 'Data berhasil diimport');
    }
}
