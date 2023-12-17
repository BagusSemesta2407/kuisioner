<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programStudi=ProgramStudi::all();
        $jurusan=Jurusan::all();

        return view('admin.programStudi.index', [
            'programStudi' => $programStudi,
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProgramStudi::create([
            'jurusan_id' => $request->jurusan_id,
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgramStudi $programStudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramStudi $programStudi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgramStudi $programStudi)
    {
        $data=[
            'jurusan_id' => $request->jurusan_id,
            'name' => $request->name,
        ];

        ProgramStudi::where('id', $programStudi->id)->update($data);

        return redirect()->back()->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramStudi $programStudi)
    {
        $programStudi=ProgramStudi::find($programStudi->id);

        $programStudi->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
