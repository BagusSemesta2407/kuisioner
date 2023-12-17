<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kuesioner;
use App\Models\Jawaban;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function home(){
        if ( auth()->user()->role == 'jurusan' ) {
            $data['mi'] = User::where('jurusan', 'Jurusan Teknologi Informasi dan Komputer')->count();
            $data['a'] = User::where('jurusan', 'Jurusan Pertanian')->count();
            $data['k'] = User::where('jurusan', 'Jurusan Kesehatan')->count();
            $data['tppm'] = User::where('jurusan', 'Jurusan Teknik Perawatan dan Perbaikan Mesin')->count();
        }elseif ( auth()->user()->role == 'p4mp') {
            $data['mi'] = Jawaban::join('users', 'users.id', '=', 'jawaban.id_user')
                            ->where('users.jurusan', 'Jurusan Teknologi Informasi dan Komputer')
                            ->distinct('users.id')
                            ->count('users.id');
            $data['a'] = Jawaban::join('users', 'users.id', '=', 'jawaban.id_user')
                            ->where('users.jurusan', 'Jurusan Pertanian')
                            ->distinct('users.id')
                            ->count('users.id');
            $data['k'] = Jawaban::join('users', 'users.id', '=', 'jawaban.id_user')
                            ->where('users.jurusan', 'Jurusan Kesehatan')
                            ->distinct('users.id')
                            ->count('users.id');
            $data['tppm'] = Jawaban::join('users', 'users.id', '=', 'jawaban.id_user')
                            ->where('users.jurusan', 'Jurusan Teknik Perawatan dan Perbaikan Mesin')
                            ->distinct('users.id')
                            ->count('users.id');
        }elseif ( auth()->user()->role == 'mahasiswa') {
            $data['riwayat'] = Jawaban::where('id_user', auth()->user()->id)->where('created_at', 'like', date('Y-m-d').'%')->count();
        }

        $kategoris = [
            ['Tata Pamong','TataPamong'],
            ['Kemahasiswaan','Kemahasiswaan'],
            ['Sarana Prasana','SaranaPrasana'],
            ['Keuangan','Keuangan'],
            ['Pendidikan','Pendidikan'],
            ['Penelitian','Penelitian']];
        $aspeks = ['tangibles', 'reliability', 'responsiveness', 'assurance', 'empathy'];

        foreach ($kategoris as $kategori) {
            $data[$kategori[1]]['harapan'] = [];
            $data[$kategori[1]]['persepsi'] = [];
            $data[$kategori[1]]['gap'] = [];
            foreach ($aspeks as $aspek) {
                $kuesioner = Kuesioner::where('kategori', $kategori[0])->where('aspek', $aspek)->get();
                $data[$kategori[1]][$aspek]['persepsi'] = [];
                $data[$kategori[1]][$aspek]['harapan'] = [];
                $data[$kategori[1]][$aspek]['gap'] = [];

                foreach ($kuesioner as $kuesionerItem) {
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];
                    // total responden
                    $total_responden = 0;

                    // persepsi
                    $stb = 0;
                    $kb = 0;
                    $cb = 0;
                    $b = 0;
                    $sb = 0;

                    // harapan
                    $stm = 0;
                    $km = 0;
                    $cm = 0;
                    $m = 0;
                    $sm = 0;

                    // calculate total skor persepsi and harapan
                    foreach ($kuesionerItem->jawabans as $tjawaban) {
                        $tnilai = json_decode($tjawaban->jawaban);
                        foreach ($tnilai as $nilai) {
                            if ($nilai[0] == $kuesionerItem->id) {
                                $total_responden++;

                                // persepsi
                                switch ($nilai[1]) {
                                    case 'STB':
                                        $stb++;
                                        break;
                                    case 'KB':
                                        $kb++;
                                        break;
                                    case 'CB':
                                        $cb++;
                                        break;
                                    case 'B':
                                        $b++;
                                        break;
                                    case 'SB':
                                        $sb++;
                                        break;
                                }

                                // harapan
                                switch ($nilai[2]) {
                                    case 'STM':
                                        $stm++;
                                        break;
                                    case 'KM':
                                        $km++;
                                        break;
                                    case 'CM':
                                        $cm++;
                                        break;
                                    case 'M':
                                        $m++;
                                        break;
                                    case 'SM':
                                        $sm++;
                                        break;
                                }
                            }
                        }
                    }

                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['stb'] = $stb;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['kb'] = $kb;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['cb'] = $cb;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['b'] = $b;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['sb'] = $sb;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['total_responden'] = $total_responden;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai_persepsi'] = $stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5;
                    if($total_responden != 0){
                        $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] = round(($stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5) / $total_responden, 2);
                    }else{
                        $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] = round(($stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5), 2);
                    }

                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['stm'] = $stm;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['km'] = $km;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['cm'] = $cm;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['m'] = $m;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['sm'] = $sm;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['total_responden'] = $total_responden;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai_harapan'] = $stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5;
                    if($total_responden != 0){
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'] = round(($stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5) / $total_responden, 2);
                    }else{
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'] = round(($stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5), 2);
                    }
                    // calculate gap
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['r_nilai_persepsi'] = $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'];
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['r_nilai_harapan'] = $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'];
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['nilai'] = $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] - $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'];
                    // konversi gap
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['konversi_nilai'] = $this->konversi_gap($data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['nilai']);
                }

                // pluck data gap r_nilai_persepsi
                $pluck_data_gap_r_nilai_persepsi = collect($data[$kategori[1]][$aspek]['gap'])->pluck('r_nilai_persepsi')->toArray();
                // calculate mean data gap r_nilai_persepsi
                $data[$kategori[1]][$aspek]['mean_gap_r_nilai_persepsi'] = count($pluck_data_gap_r_nilai_persepsi) > 0 ? round(array_sum($pluck_data_gap_r_nilai_persepsi) / count($pluck_data_gap_r_nilai_persepsi), 2) : 0;
                // pluck data gap r_nilai_harapan
                $pluck_data_gap_r_nilai_harapan = collect($data[$kategori[1]][$aspek]['gap'])->pluck('r_nilai_harapan')->toArray();
                // calculate mean data gap r_nilai_harapan
                $data[$kategori[1]][$aspek]['mean_gap_r_nilai_harapan'] = count($pluck_data_gap_r_nilai_harapan) > 0 ? round(array_sum($pluck_data_gap_r_nilai_harapan) / count($pluck_data_gap_r_nilai_harapan), 2) : 0;

                // calculate mean data gap nilai from r persepsi and r harapan
                $data[$kategori[1]][$aspek]['mean_gap_nilai'] = $data[$kategori[1]][$aspek]['mean_gap_r_nilai_persepsi'] - $data[$kategori[1]][$aspek]['mean_gap_r_nilai_harapan'];

                // konversi mean gap nilai
                $data[$kategori[1]][$aspek]['konversi_mean_gap_nilai'] = $this->konversi_gap($data[$kategori[1]][$aspek]['mean_gap_nilai']);
                array_push($data[$kategori[1]]['harapan'], $data[$kategori[1]][$aspek]['mean_gap_r_nilai_harapan']);
                array_push($data[$kategori[1]]['persepsi'], $data[$kategori[1]][$aspek]['mean_gap_r_nilai_persepsi']);
                array_push($data[$kategori[1]]['gap'], $data[$kategori[1]][$aspek]['mean_gap_nilai']);
            }
        }
        $data['aspek'] = ['tangibles', 'reliability', 'responsiveness', 'assurance', 'empathy'];
        $data['layanan'] = ['Tata Pamong', 'Kemahasiswaan', 'Sarana Prasana', 'Keuangan', 'Pendidikan', 'Penelitian'];

        return view('admin.index',$data);
    }

    public function home_p4mp($jurusan, $tingkat, $periode){
        $data['jurusan'] = $jurusan;
        $data['tingkat'] = $tingkat;
        if ($periode != 'semua') {
            $data['periode'] = ($periode - 1) . '/' . $periode;
        }else{
            $data['periode'] = $periode;
        }
        $data['mi'] = Jawaban::join('users', 'users.id', '=', 'jawaban.id_user')
                        ->where('users.jurusan', 'Jurusan Teknologi Informasi dan Komputer')
                        ->when($tingkat != 'semua', function ($query) use ($data) {
                            return $query->where('tingkat', $data['tingkat']);
                        })
                        ->when($periode != 'semua', function ($query) use ($data) {
                            return $query->where('periode', $data['periode']);
                        })
                        ->distinct('users.id')
                        ->count('users.id');
        $data['a'] = Jawaban::join('users', 'users.id', '=', 'jawaban.id_user')
                        ->where('users.jurusan', 'Jurusan Pertanian')
                        ->when($tingkat != 'semua', function ($query) use ($data) {
                            return $query->where('tingkat', $data['tingkat']);
                        })
                        ->when($periode != 'semua', function ($query) use ($data) {
                            return $query->where('periode', $data['periode']);
                        })
                        ->distinct('users.id')
                        ->count('users.id');
        $data['k'] = Jawaban::join('users', 'users.id', '=', 'jawaban.id_user')
                        ->where('users.jurusan', 'Jurusan Kesehatan')
                        ->when($tingkat != 'semua', function ($query) use ($data) {
                            return $query->where('tingkat', $data['tingkat']);
                        })
                        ->when($periode != 'semua', function ($query) use ($data) {
                            return $query->where('periode', $data['periode']);
                        })
                        ->distinct('users.id')
                        ->count('users.id');
        $data['tppm'] = Jawaban::join('users', 'users.id', '=', 'jawaban.id_user')
                        ->where('users.jurusan', 'Jurusan Teknik Perawatan dan Perbaikan Mesin')
                        ->when($tingkat != 'semua', function ($query) use ($data) {
                            return $query->where('tingkat', $data['tingkat']);
                        })
                        ->when($periode != 'semua', function ($query) use ($data) {
                            return $query->where('periode', $data['periode']);
                        })
                        ->distinct('users.id')
                        ->count('users.id');

        $kategoris = [
            ['Tata Pamong','TataPamong'],
            ['Kemahasiswaan','Kemahasiswaan'],
            ['Sarana Prasana','SaranaPrasana'],
            ['Keuangan','Keuangan'],
            ['Pendidikan','Pendidikan'],
            ['Penelitian','Penelitian']];
        $aspeks = ['tangibles', 'reliability', 'responsiveness', 'assurance', 'empathy'];
        foreach ($kategoris as $kategori) {
            $data[$kategori[1]]['harapan'] = [];
            $data[$kategori[1]]['persepsi'] = [];
            $data[$kategori[1]]['gap'] = [];
            foreach ($aspeks as $aspek) {
                $kuesioner = Kuesioner::where('kategori', $kategori[0])->where('aspek', $aspek)->get();
                $data[$kategori[1]][$aspek]['persepsi'] = [];
                $data[$kategori[1]][$aspek]['harapan'] = [];
                $data[$kategori[1]][$aspek]['gap'] = [];

                foreach ($kuesioner as $kuesionerItem) {
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];
                    // total responden
                    $total_responden = 0;

                    // persepsi
                    $stb = 0;
                    $kb = 0;
                    $cb = 0;
                    $b = 0;
                    $sb = 0;

                    // harapan
                    $stm = 0;
                    $km = 0;
                    $cm = 0;
                    $m = 0;
                    $sm = 0;
                    // calculate total skor persepsi and harapan
                    foreach ($kuesionerItem->jawabans as $tjawaban) {
                        if(
                            ($tjawaban->user->periode == $data['periode'] || $data['periode'] == 'semua') &&
                            ($tjawaban->user->jurusan == $jurusan || $jurusan == 'semua') &&
                            ($tjawaban->user->tingkat == $tingkat || $tingkat == 'semua')
                        ){
                            $tnilai = json_decode($tjawaban->jawaban);
                            foreach ($tnilai as $nilai) {
                                if ($nilai[0] == $kuesionerItem->id) {
                                    $total_responden++;

                                    // persepsi
                                    switch ($nilai[1]) {
                                        case 'STB':
                                            $stb++;
                                            break;
                                        case 'KB':
                                            $kb++;
                                            break;
                                        case 'CB':
                                            $cb++;
                                            break;
                                        case 'B':
                                            $b++;
                                            break;
                                        case 'SB':
                                            $sb++;
                                            break;
                                    }

                                    // harapan
                                    switch ($nilai[2]) {
                                        case 'STM':
                                            $stm++;
                                            break;
                                        case 'KM':
                                            $km++;
                                            break;
                                        case 'CM':
                                            $cm++;
                                            break;
                                        case 'M':
                                            $m++;
                                            break;
                                        case 'SM':
                                            $sm++;
                                            break;
                                    }
                                }
                            }
                        }
                    }

                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['stb'] = $stb;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['kb'] = $kb;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['cb'] = $cb;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['b'] = $b;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['sb'] = $sb;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['total_responden'] = $total_responden;
                    $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['nilai_persepsi'] = $stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5;
                    if($total_responden != 0){
                        $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] = round(($stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5) / $total_responden, 2);
                    }else{
                        $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] = round(($stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5), 2);
                    }

                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['stm'] = $stm;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['km'] = $km;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['cm'] = $cm;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['m'] = $m;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['sm'] = $sm;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['total_responden'] = $total_responden;
                    $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai_harapan'] = $stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5;
                    if($total_responden != 0){
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'] = round(($stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5) / $total_responden, 2);
                    }else{
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'] = round(($stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5), 2);
                    }
                    // calculate gap
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['r_nilai_persepsi'] = $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'];
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['r_nilai_harapan'] = $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'];
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['nilai'] = $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] - $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'];
                    // konversi gap
                    $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['konversi_nilai'] = $this->konversi_gap($data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['nilai']);
                }

                // pluck data gap r_nilai_persepsi
                $pluck_data_gap_r_nilai_persepsi = collect($data[$kategori[1]][$aspek]['gap'])->pluck('r_nilai_persepsi')->toArray();
                // calculate mean data gap r_nilai_persepsi
                $data[$kategori[1]][$aspek]['mean_gap_r_nilai_persepsi'] = count($pluck_data_gap_r_nilai_persepsi) > 0 ? round(array_sum($pluck_data_gap_r_nilai_persepsi) / count($pluck_data_gap_r_nilai_persepsi), 2) : 0;
                // pluck data gap r_nilai_harapan
                $pluck_data_gap_r_nilai_harapan = collect($data[$kategori[1]][$aspek]['gap'])->pluck('r_nilai_harapan')->toArray();
                // calculate mean data gap r_nilai_harapan
                $data[$kategori[1]][$aspek]['mean_gap_r_nilai_harapan'] = count($pluck_data_gap_r_nilai_harapan) > 0 ? round(array_sum($pluck_data_gap_r_nilai_harapan) / count($pluck_data_gap_r_nilai_harapan), 2) : 0;

                // calculate mean data gap nilai from r persepsi and r harapan
                $data[$kategori[1]][$aspek]['mean_gap_nilai'] = $data[$kategori[1]][$aspek]['mean_gap_r_nilai_persepsi'] - $data[$kategori[1]][$aspek]['mean_gap_r_nilai_harapan'];

                // konversi mean gap nilai
                $data[$kategori[1]][$aspek]['konversi_mean_gap_nilai'] = $this->konversi_gap($data[$kategori[1]][$aspek]['mean_gap_nilai']);
                array_push($data[$kategori[1]]['harapan'], $data[$kategori[1]][$aspek]['mean_gap_r_nilai_harapan']);
                array_push($data[$kategori[1]]['persepsi'], $data[$kategori[1]][$aspek]['mean_gap_r_nilai_persepsi']);
                array_push($data[$kategori[1]]['gap'], $data[$kategori[1]][$aspek]['mean_gap_nilai']);
            }
        }
        $data['aspek'] = ['tangibles', 'reliability', 'responsiveness', 'assurance', 'empathy'];
        $data['layanan'] = ['Tata Pamong', 'Kemahasiswaan', 'Sarana Prasana', 'Keuangan', 'Pendidikan', 'Penelitian'];
        $data['periode'] = $periode;
        return view('admin.index',$data);
    }

    public function index($role)
    {
        $data['users'] = User::where('role', $role)->get();
        $data['role'] = $role;
        switch ($role) {
            case 'mahasiswa':
                if (auth()->user()->role == 'jurusan') {
                    $data['users'] = User::where('role', $role)->where('jurusan', auth()->user()->jurusan)->get();
                }
                return view('admin.user.mahasiswa', $data);
                break;
            case 'jurusan':
                return view('admin.user.jurusan', $data);
                break;
            case 'p4mp':
                return view('admin.user.p4mp', $data);
                break;
            default:
                return view('admin.user.index', $data);
        }
    }

    public function mahasiswa($jurusan, $tingkat, $periode)
    {
        $data['jurusan'] = $jurusan;
        $data['tingkat'] = $tingkat;
        if ($periode != 'semua') {
            $data['periode'] = ($periode - 1) . '/' . $periode;
        }else{
            $data['periode'] = $periode;
        }
        // dd($data['periode']);
        $data['users'] = User::where('role', 'mahasiswa')
                            ->when($jurusan != 'semua', function ($query) use ($data) {
                                return $query->where('jurusan', $data['jurusan']);
                            })
                            ->when($tingkat != 'semua', function ($query) use ($data) {
                                return $query->where('tingkat', $data['tingkat']);
                            })
                            ->when($periode != 'semua', function ($query) use ($data) {
                                return $query->where('periode', $data['periode']);
                            })
                            ->get();
        $data['periode'] = $periode;
        return view('admin.user.mahasiswa', $data);
    }

    public function jurusan($jurusan)
    {
        $data['jurusan'] = $jurusan;

        // dd($data['periode']);
        $data['users'] = User::where('role', 'jurusan')
                            ->when($jurusan != 'semua', function ($query) use ($data) {
                                return $query->where('jurusan', $data['jurusan']);
                            })
                            ->get();
        return view('admin.user.jurusan', $data);
    }


    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));

        User::create($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'unique:users,username,'.$id,
        ]);

        User::find($id)->update($request->all());

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function resetPassword(Request $request,$id)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));

        User::find($id)->update($data);
        return redirect()->route('user.index')->with('success', 'Password berhasil diubah');
    }

    public function ubahPersepsi($persepsi)
    {
        switch ($persepsi) {
            case 'STB':
                return '1';
            case 'KB':
                return '2';
            case 'CB':
                return '3';
            case 'B':
                return '4';
            case 'SB':
                return '5';
            default:
                return $persepsi;
        }
    }

    public function ubahHarapan($harapan)
    {
        switch ($harapan) {
            case 'STM':
                return '1';
            case 'KM':
                return '2';
            case 'CM':
                return '3';
            case 'M':
                return '4';
            case 'SM':
                return '5';
            default:
                return $harapan;
        }
    }

    public function konversi_gap($gap){
        if($gap >= -4 && $gap <= -2.4){
            return 'Sangat Tidak Baik';
        }elseif($gap >= -2.4 && $gap <= -0.8){
            return 'Tidak Baik';
        }elseif($gap >= -0.8 && $gap <= 0.8){
            return 'Cukup Baik';
        }elseif($gap >= 0.8 && $gap <= 2.4){
            return 'Baik';
        }elseif($gap >= 2.4 && $gap <= 4){
            return 'Sangat Baik';
        }else{
            return 'Tidak Diketahui';
        }
    }
}
