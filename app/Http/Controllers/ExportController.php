<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;
use App\Models\Kuesioner;
use App\Models\Jawaban;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class ExportController extends Controller
{


    public function jawaban(Request $request)
    {        
        $request->validate([
            'kategori' => 'required',
        ]);

        $data['periodes'] = Jawaban::selectRaw('YEAR(created_at) as year')
        ->groupBy('year')
        ->get();
        $kategoris = [
            ['Tata Pamong','TataPamong'], 
            ['Kemahasiswaan','Kemahasiswaan'], 
            ['Sarana Prasana','SaranaPrasana'], 
            ['Keuangan','Keuangan'], 
            ['Pendidikan','Pendidikan'], 
            ['Penelitian','Penelitian']];
        $aspeks = ['tangibles', 'reliability', 'responsiveness', 'assurance', 'empathy'];

        foreach ($data['periodes'] as $periode) {
            foreach ($kategoris as $kategori) {
                foreach ($aspeks as $aspek) {
                    $kuesioner = Kuesioner::where('kategori', $kategori[0])->where('aspek', $aspek)->whereYear('created_at', $periode->year)->get();
                    $data[$kategori[1]][$aspek]['aspek'] = $aspek;
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
                        $data[$kategori[1]][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] = round(($stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5) / $total_responden, 2);

                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['stm'] = $stm;
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['km'] = $km;
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['cm'] = $cm;
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['m'] = $m;
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai']['sm'] = $sm;
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['total_responden'] = $total_responden;
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['nilai_harapan'] = $stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5;
                        $data[$kategori[1]][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'] = round(($stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5) / $total_responden, 2);

                        // calculate gap
                        $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['layanan'] = $kategori[0];
                        $data[$kategori[1]][$aspek]['gap'][$kuesionerItem->id]['aspek'] = $aspek;
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
                } 
            }
        }
        $data['kategori'] = $request->kategori;
        $pdf = PDF::loadView('admin.export.jawaban', $data);
    
        return $pdf->download('example.pdf');
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
