<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use App\Models\Jurusan;
use App\Models\Kuesioner;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        redirect()->route('kuesioner.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function kategori(Request $request, $periode)
    {
        $filter=(object)[
            'jurusan_id' => $request
        ];
        if ($periode != 'semua') {
            $data['jawabans'] = Jawaban::filter($filter)
            ->whereYear('created_at', $periode)
                ->get();
        } else {
            $data['jawabans'] = Jawaban::all();
        }

        $data['periodes'] = Jawaban::filter($filter)
        ->selectRaw('YEAR(created_at) as year')
            ->groupBy('year')
            ->get();
        $jurusan=Jurusan::whereHas('user.jawaban')->get();

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
                $data[$kategori[1]][$periode->year]['totalGap'] = 0; 
                foreach ($aspeks as $aspek) {
                    $kuesioner = Kuesioner::where('kategori', $kategori[0])->where('aspek', $aspek)->whereYear('created_at', $periode->year)->get();
                    $data[$kategori[1]][$periode->year][$aspek]['aspek'] = $aspek;
                    $data[$kategori[1]][$periode->year][$aspek]['persepsi'] = [];
                    $data[$kategori[1]][$periode->year][$aspek]['harapan'] = [];
                    $data[$kategori[1]][$periode->year][$aspek]['gap'] = [];
                    foreach ($kuesioner as $kuesionerItem) {
                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];
                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];
                        $data[$kategori[1]][$periode->year][$aspek]['gap'][$kuesionerItem->id] = ['pertanyaan' => $kuesionerItem->pertanyaan, 'aspek' => $kuesionerItem->aspek];

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

                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['stb'] = $stb;
                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['kb'] = $kb;
                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['cb'] = $cb;
                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['b'] = $b;
                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['nilai']['sb'] = $sb;
                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['total_responden'] = $total_responden;
                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['nilai_persepsi'] = $stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5;
                        $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] = round(($stb * 1 + $kb * 2 + $cb * 3 + $b * 4 + $sb * 5) / $total_responden, 2);

                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['nilai']['stm'] = $stm;
                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['nilai']['km'] = $km;
                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['nilai']['cm'] = $cm;
                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['nilai']['m'] = $m;
                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['nilai']['sm'] = $sm;
                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['total_responden'] = $total_responden;
                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['nilai_harapan'] = $stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5;
                        $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'] = round(($stm * 1 + $km * 2 + $cm * 3 + $m * 4 + $sm * 5) / $total_responden, 2);

                        // calculate gap
                        $data[$kategori[1]][$periode->year][$aspek]['gap'][$kuesionerItem->id]['layanan'] = $kategori[0];
                        $data[$kategori[1]][$periode->year][$aspek]['gap'][$kuesionerItem->id]['aspek'] = $aspek;
                        $data[$kategori[1]][$periode->year][$aspek]['gap'][$kuesionerItem->id]['r_nilai_persepsi'] = $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'];
                        $data[$kategori[1]][$periode->year][$aspek]['gap'][$kuesionerItem->id]['r_nilai_harapan'] = $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'];
                        $data[$kategori[1]][$periode->year][$aspek]['gap'][$kuesionerItem->id]['nilai'] = $data[$kategori[1]][$periode->year][$aspek]['persepsi'][$kuesionerItem->id]['r_nilai_persepsi'] - $data[$kategori[1]][$periode->year][$aspek]['harapan'][$kuesionerItem->id]['r_nilai_harapan'];
                        // konversi gap
                        $data[$kategori[1]][$periode->year][$aspek]['gap'][$kuesionerItem->id]['konversi_nilai'] = $this->konversi_gap($data[$kategori[1]][$periode->year][$aspek]['gap'][$kuesionerItem->id]['nilai']);
                    }
                    
                    // pluck data gap r_nilai_persepsi
                    $pluck_data_gap_r_nilai_persepsi = collect($data[$kategori[1]][$periode->year][$aspek]['gap'])->pluck('r_nilai_persepsi')->toArray();
                    // calculate mean data gap r_nilai_persepsi
                    $data[$kategori[1]][$periode->year][$aspek]['mean_gap_r_nilai_persepsi'] = count($pluck_data_gap_r_nilai_persepsi) > 0 ? round(array_sum($pluck_data_gap_r_nilai_persepsi) / count($pluck_data_gap_r_nilai_persepsi), 2) : 0;
                    // pluck data gap r_nilai_harapan
                    $pluck_data_gap_r_nilai_harapan = collect($data[$kategori[1]][$periode->year][$aspek]['gap'])->pluck('r_nilai_harapan')->toArray();
                    // calculate mean data gap r_nilai_harapan
                    $data[$kategori[1]][$periode->year][$aspek]['mean_gap_r_nilai_harapan'] = count($pluck_data_gap_r_nilai_harapan) > 0 ? round(array_sum($pluck_data_gap_r_nilai_harapan) / count($pluck_data_gap_r_nilai_harapan), 2) : 0;
                    
                    // calculate mean data gap nilai from r persepsi and r harapan
                    $data[$kategori[1]][$periode->year][$aspek]['mean_gap_nilai'] = $data[$kategori[1]][$periode->year][$aspek]['mean_gap_r_nilai_persepsi'] - $data[$kategori[1]][$periode->year][$aspek]['mean_gap_r_nilai_harapan'];

                    // konversi mean gap nilai
                    $data[$kategori[1]][$periode->year][$aspek]['konversi_mean_gap_nilai'] = $this->konversi_gap($data[$kategori[1]][$periode->year][$aspek]['mean_gap_nilai']);
                    $data[$kategori[1]][$periode->year]['totalGap'] += $data[$kategori[1]][$periode->year][$aspek]['mean_gap_nilai']; 
                } 
                $data[$kategori[1]][$periode->year]['tahun'] = $tjawaban->created_at->format('Y');
                $data[$kategori[1]][$periode->year]['totalGap'] = $data[$kategori[1]][$periode->year]['totalGap'] / 5;
                $data[$kategori[1]][$periode->year]['konversi_totalGap'] = $this->konversi_gap($data[$kategori[1]][$periode->year]['totalGap']);
            }
        }
        return view('admin.jawaban.index', $data, [
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if (isset($data['tataPamong'])) {
            $pertanyaan = [];
            $jawaban_P = [];
            $jawaban_H = [];
    
            foreach ($data as $key => $value) {
                if (strpos($key, 'tp_pertanyaan_') === 0) {
                    $index = substr($key, strlen('tp_pertanyaan_'));
                    $pertanyaan[$index] = $value;
                } elseif (strpos($key, 'tp_radio_P_') === 0) {
                    $index = substr($key, strlen('tp_radio_P_'));
                    $jawaban_P[$index] = $value;
                } elseif (strpos($key, 'tp_radio_H_') === 0) {
                    $index = substr($key, strlen('tp_radio_H_'));
                    $jawaban_H[$index] = $value;
                }
            }
    
            $mergedData = [];
    
            foreach ($pertanyaan as $index => $value) {
                $mergedData[] = [$value, $jawaban_P[$index], $jawaban_H[$index]];
            }

            $data['id_user'] = auth()->user()->id;
            $data['kategori'] = $data['tataPamong'];
            $data['jawaban'] = json_encode($mergedData);
            Jawaban::create($data);
        }

        if (isset($data['kemahasiswaan'])) {
            $pertanyaan = [];
            $jawaban_P = [];
            $jawaban_H = [];
    
            foreach ($data as $key => $value) {
                if (strpos($key, 'km_pertanyaan_') === 0) {
                    $index = substr($key, strlen('km_pertanyaan_'));
                    $pertanyaan[$index] = $value;
                } elseif (strpos($key, 'km_radio_P_') === 0) {
                    $index = substr($key, strlen('km_radio_P_'));
                    $jawaban_P[$index] = $value;
                } elseif (strpos($key, 'km_radio_H_') === 0) {
                    $index = substr($key, strlen('km_radio_H_'));
                    $jawaban_H[$index] = $value;
                }
            }
    
            $mergedData = [];
    
            foreach ($pertanyaan as $index => $value) {
                $mergedData[] = [$value, $jawaban_P[$index], $jawaban_H[$index]];
            }

            $data['id_user'] = auth()->user()->id;
            $data['kategori'] = $data['kemahasiswaan'];
            $data['jawaban'] = json_encode($mergedData);
            Jawaban::create($data);
        }

        if (isset($data['saranaPrasana'])) {
            $pertanyaan = [];
            $jawaban_P = [];
            $jawaban_H = [];
    
            foreach ($data as $key => $value) {
                if (strpos($key, 'sp_pertanyaan_') === 0) {
                    $index = substr($key, strlen('sp_pertanyaan_'));
                    $pertanyaan[$index] = $value;
                } elseif (strpos($key, 'sp_radio_P_') === 0) {
                    $index = substr($key, strlen('sp_radio_P_'));
                    $jawaban_P[$index] = $value;
                } elseif (strpos($key, 'sp_radio_H_') === 0) {
                    $index = substr($key, strlen('sp_radio_H_'));
                    $jawaban_H[$index] = $value;
                }
            }
    
            $mergedData = [];
    
            foreach ($pertanyaan as $index => $value) {
                $mergedData[] = [$value, $jawaban_P[$index], $jawaban_H[$index]];
            }

            $data['id_user'] = auth()->user()->id;
            $data['kategori'] = $data['saranaPrasana'];
            $data['jawaban'] = json_encode($mergedData);
            Jawaban::create($data);
        }

        if (isset($data['keuangan'])) {
            $pertanyaan = [];
            $jawaban_P = [];
            $jawaban_H = [];
    
            foreach ($data as $key => $value) {
                if (strpos($key, 'ku_pertanyaan_') === 0) {
                    $index = substr($key, strlen('ku_pertanyaan_'));
                    $pertanyaan[$index] = $value;
                } elseif (strpos($key, 'ku_radio_P_') === 0) {
                    $index = substr($key, strlen('ku_radio_P_'));
                    $jawaban_P[$index] = $value;
                } elseif (strpos($key, 'ku_radio_H_') === 0) {
                    $index = substr($key, strlen('ku_radio_H_'));
                    $jawaban_H[$index] = $value;
                }
            }
    
            $mergedData = [];
    
            foreach ($pertanyaan as $index => $value) {
                $mergedData[] = [$value, $jawaban_P[$index], $jawaban_H[$index]];
            }

            $data['id_user'] = auth()->user()->id;
            $data['kategori'] = $data['keuangan'];
            $data['jawaban'] = json_encode($mergedData);
            Jawaban::create($data);
        }

        if (isset($data['pendidikan'])) {
            $pertanyaan = [];
            $jawaban_P = [];
            $jawaban_H = [];
    
            foreach ($data as $key => $value) {
                if (strpos($key, 'pd_pertanyaan_') === 0) {
                    $index = substr($key, strlen('pd_pertanyaan_'));
                    $pertanyaan[$index] = $value;
                } elseif (strpos($key, 'pd_radio_P_') === 0) {
                    $index = substr($key, strlen('pd_radio_P_'));
                    $jawaban_P[$index] = $value;
                } elseif (strpos($key, 'pd_radio_H_') === 0) {
                    $index = substr($key, strlen('pd_radio_H_'));
                    $jawaban_H[$index] = $value;
                }
            }
    
            $mergedData = [];
    
            foreach ($pertanyaan as $index => $value) {
                $mergedData[] = [$value, $jawaban_P[$index], $jawaban_H[$index]];
            }

            $data['id_user'] = auth()->user()->id;
            $data['kategori'] = $data['pendidikan'];
            $data['jawaban'] = json_encode($mergedData);
            Jawaban::create($data);
        }

        if (isset($data['penelitian'])) {
            $pertanyaan = [];
            $jawaban_P = [];
            $jawaban_H = [];
    
            foreach ($data as $key => $value) {
                if (strpos($key, 'pn_pertanyaan_') === 0) {
                    $index = substr($key, strlen('pn_pertanyaan_'));
                    $pertanyaan[$index] = $value;
                } elseif (strpos($key, 'pn_radio_P_') === 0) {
                    $index = substr($key, strlen('pn_radio_P_'));
                    $jawaban_P[$index] = $value;
                } elseif (strpos($key, 'pn_radio_H_') === 0) {
                    $index = substr($key, strlen('pn_radio_H_'));
                    $jawaban_H[$index] = $value;
                }
            }
    
            $mergedData = [];
    
            foreach ($pertanyaan as $index => $value) {
                $mergedData[] = [$value, $jawaban_P[$index], $jawaban_H[$index]];
            }

            $data['id_user'] = auth()->user()->id;
            $data['kategori'] = $data['penelitian'];
            $data['jawaban'] = json_encode($mergedData);
            Jawaban::create($data);
        }

        return redirect()->route('admin')->with('success', 'Jawaban anda terekam, terimakasih!');
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $data['jawaban'] = Jawaban::where('id_user', $id)->get();

        foreach ($data['jawaban'] as $item) {
            $data['kategori'] = $item->kategori;
            switch ($data['kategori']) {
                case 'Tata Pamong':
                    $kategoriName = 'TataPamong';
                    break;
                case 'Kemahasiswaan':
                    $kategoriName = 'Kemahasiswaan';
                    break;
                case 'Sarana Prasana':
                    $kategoriName = 'SaranaPrasana';
                    break;
                case 'Keuangan':
                    $kategoriName = 'Keuangan';
                    break;
                case 'Pendidikan':
                    $kategoriName = 'Pendidikan';
                    break;
                case 'Penelitian':
                    $kategoriName = 'Penelitian';
                    break;
                default:
                    // Lakukan sesuatu jika tidak ada kategori yang cocok
                    break;
            }
            $jawaban = json_decode($item['jawaban'], true);
            $data['kuesioners'] = [];

            foreach ($jawaban as $jawabanItem) {
                $kategori = $jawabanItem[0];
                $jawabanArray = array_slice($jawabanItem, 1);

                $tangibles = Kuesioner::where('id', $kategori)->where('aspek', 'tangibles')->first();
                if ($tangibles) {
                    $data[$kategoriName]['tangibles'][] = [
                        'kuesioner' => $tangibles,
                        'jawaban' => $jawabanArray
                    ];
                }

                $reliability = Kuesioner::where('id', $kategori)->where('aspek', 'reliability')->first();
                if ($reliability) {
                    $data[$kategoriName]['reliability'][] = [
                        'kuesioner' => $reliability,
                        'jawaban' => $jawabanArray
                    ];
                }

                $responsiveness = Kuesioner::where('id', $kategori)->where('aspek', 'responsiveness')->first();
                if ($responsiveness) {
                    $data[$kategoriName]['responsiveness'][] = [
                        'kuesioner' => $responsiveness,
                        'jawaban' => $jawabanArray
                    ];
                }

                $assurance = Kuesioner::where('id', $kategori)->where('aspek', 'assurance')->first();
                if ($assurance) {
                    $data[$kategoriName]['assurance'][] = [
                        'kuesioner' => $assurance,
                        'jawaban' => $jawabanArray
                    ];
                }

                $empathy = Kuesioner::where('id', $kategori)->where('aspek', 'empathy')->first();
                if ($empathy) {
                    $data[$kategoriName]['empathy'][] = [
                        'kuesioner' => $empathy,
                        'jawaban' => $jawabanArray
                    ];
                }
            }
            $data['created_at'] = $item->created_at;
        }
        return view('admin.jawaban.detail', $data);
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


    public function rekap($layanan)
    {
        $data['layanan'] = $layanan;
        $kategoris = [
            ['Tata Pamong','TataPamong'], 
            ['Kemahasiswaan','Kemahasiswaan'], 
            ['Sarana Prasana','SaranaPrasana'], 
            ['Keuangan','Keuangan'], 
            ['Pendidikan','Pendidikan'], 
            ['Penelitian','Penelitian']];
        $aspeks = ['tangibles', 'reliability', 'responsiveness', 'assurance', 'empathy'];

        foreach ($kategoris as $kategori) {
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
        return view('admin.jawaban.rekap', $data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        //
    }

    public function destroy($id)
    {
        Jawaban::find($id)->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
