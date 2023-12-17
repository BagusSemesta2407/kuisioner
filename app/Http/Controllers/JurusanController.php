<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan=Jurusan::all();

        return view('admin.jurusan.index', [
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
        Jurusan::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $data=[
            'name' => $request->name
        ];

        Jurusan::where('id', $jurusan->id)->update($data);

        return redirect()->back()->with('success', 'Data berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan=Jurusan::find($jurusan->id);

        $jurusan->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
