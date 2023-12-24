<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminJurusanControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::where('role', 'jurusan')->get();
        $jurusan=Jurusan::all();
        $programStudi=ProgramStudi::all();

        return view('admin.adminJurusan.index', [
            'user' => $user,
            'jurusan'=>$jurusan,
            'programStudi'=>$programStudi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'role' => 'jurusan',
            'jurusan_id' => $request->jurusan_id,
            'program_studi_id' => $request->program_studi_id,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data=[
            'name' => $request->name,
            'username' => $request->username,
            'role' => 'jurusan',
            'jurusan_id' => $request->jurusan_id,
            'program_studi_id' => $request->program_studi_id,
        ];


        User::where('id', $id)->update($data);

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user=User::find($id);

        $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function pwReset(Request $request, $id)
    {

        User::where('id', $id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Password berhasil diubah');
    }
}
