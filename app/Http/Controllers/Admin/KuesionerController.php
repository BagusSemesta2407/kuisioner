<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kuesioner;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kuesioner.index');
    }

    public function kategori($kategori)
    {
        if ($kategori == "semua") {
            $data['kuesioners'] = Kuesioner::all();
        }else{
            $data['kuesioners'] = Kuesioner::where('kategori',$kategori)->get();
        }
        $data['kategori'] = $kategori;
        return view('admin.kuesioner.pertanyaan',$data);
    }

    public function pertanyaan()
    {
        $data['kuesioners'] = Kuesioner::all();  
        $categories = [
            ['Tata Pamong','TataPamong'], 
            ['Kemahasiswaan','Kemahasiswaan'], 
            ['Sarana Prasana','SaranaPrasana'], 
            ['Keuangan','Keuangan'], 
            ['Pendidikan','Pendidikan'], 
            ['Penelitian','Penelitian']];
        $aspects = ['tangibles', 'reliability', 'responsiveness', 'assurance', 'empathy'];
        
        foreach ($categories as $category) {
            $data[$category[1]] = Kuesioner::where('kategori', $category[0])->get();
            foreach ($aspects as $aspect) {
                $data[$aspect . '_' . $category[1]] = Kuesioner::where('kategori', $category[0])->where('aspek', $aspect)->get();
            }
        }        
        return view('admin.kuesioner.jawaban',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'aspek' => 'required',
            // 'periode' => 'required',
            'pertanyaan' => 'required',
        ]);
    
        Kuesioner::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'aspek' => 'required',
            // 'periode' => 'required',
            'pertanyaan' => 'required',
        ]);

        Kuesioner::find($id)->update($request->all());

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Kuesioner::find($id)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
