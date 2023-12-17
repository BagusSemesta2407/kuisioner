<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Rekap Laporan</title>
    <img src="https://i.ibb.co/B45g25w/Screenshot-2023-10-11-223714.png" alt="Kop Surat" border="0">
    <style>
        table{
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td style="text-align: center; font-weight: bold;">Layanan</td>
                <td style="text-align: center; font-weight: bold;">Aspek</td>
                <td style="text-align: center; font-weight: bold;">Nilai Gap</td>
                <td style="text-align: center; font-weight: bold;">Keterangan</td>
            </tr>
        </thead>
        <tbody>
            @if ($kategori == 'semua' || $kategori == 'tataPamong')
                <tr>
                    <td>Tata Pamong</td>
                    <td>Tangibles</td>
                    <td>{{ $TataPamong['tangibles']['mean_gap_nilai'] }}</td>
                    <td>{{ $TataPamong['tangibles']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Tata Pamong</td>
                    <td>Reliability</td>
                    <td>{{ $TataPamong['reliability']['mean_gap_nilai'] }}</td>
                    <td>{{ $TataPamong['reliability']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Tata Pamong</td>
                    <td>Responsiveness</td>
                    <td>{{ $TataPamong['responsiveness']['mean_gap_nilai'] }}</td>
                    <td>{{ $TataPamong['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Tata Pamong</td>
                    <td>Assurance</td>
                    <td>{{ $TataPamong['assurance']['mean_gap_nilai'] }}</td>
                    <td>{{ $TataPamong['assurance']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Tata Pamong</td>
                    <td>Empathy</td>
                    <td>{{ $TataPamong['empathy']['mean_gap_nilai'] }}</td>
                    <td>{{ $TataPamong['empathy']['konversi_mean_gap_nilai'] }}</td>
                </tr>
            @endif

            @if ($kategori == 'semua' || $kategori == 'kemahasiswaan')
                <tr>
                    <td>Kemahasiswaan</td>
                    <td>Tangibles</td>
                    <td>{{ $Kemahasiswaan['tangibles']['mean_gap_nilai'] }}</td>
                    <td>{{ $Kemahasiswaan['tangibles']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Kemahasiswaan</td>
                    <td>Reliability</td>
                    <td>{{ $Kemahasiswaan['reliability']['mean_gap_nilai'] }}</td>
                    <td>{{ $Kemahasiswaan['reliability']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Kemahasiswaan</td>
                    <td>Responsiveness</td>
                    <td>{{ $Kemahasiswaan['responsiveness']['mean_gap_nilai'] }}</td>
                    <td>{{ $Kemahasiswaan['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Kemahasiswaan</td>
                    <td>Assurance</td>
                    <td>{{ $Kemahasiswaan['assurance']['mean_gap_nilai'] }}</td>
                    <td>{{ $Kemahasiswaan['assurance']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Kemahasiswaan</td>
                    <td>Empathy</td>
                    <td>{{ $Kemahasiswaan['empathy']['mean_gap_nilai'] }}</td>
                    <td>{{ $Kemahasiswaan['empathy']['konversi_mean_gap_nilai'] }}</td>
                </tr>
            @endif

            @if ($kategori == 'semua' || $kategori == 'saranaPrasana')
                <tr>
                    <td>Sarana Prasana</td>
                    <td>Tangibles</td>
                    <td>{{ $SaranaPrasana['tangibles']['mean_gap_nilai'] }}</td>
                    <td>{{ $SaranaPrasana['tangibles']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Sarana Prasana</td>
                    <td>Reliability</td>
                    <td>{{ $SaranaPrasana['reliability']['mean_gap_nilai'] }}</td>
                    <td>{{ $SaranaPrasana['reliability']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Sarana Prasana</td>
                    <td>Responsiveness</td>
                    <td>{{ $SaranaPrasana['responsiveness']['mean_gap_nilai'] }}</td>
                    <td>{{ $SaranaPrasana['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Sarana Prasana</td>
                    <td>Assurance</td>
                    <td>{{ $SaranaPrasana['assurance']['mean_gap_nilai'] }}</td>
                    <td>{{ $SaranaPrasana['assurance']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Sarana Prasana</td>
                    <td>Empathy</td>
                    <td>{{ $SaranaPrasana['empathy']['mean_gap_nilai'] }}</td>
                    <td>{{ $SaranaPrasana['empathy']['konversi_mean_gap_nilai'] }}</td>
                </tr>
            @endif

            @if ($kategori == 'semua' || $kategori == 'keuangan')
                <tr>
                    <td>Keuangan</td>
                    <td>Tangibles</td>
                    <td>{{ $Keuangan['tangibles']['mean_gap_nilai'] }}</td>
                    <td>{{ $Keuangan['tangibles']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Keuangan</td>
                    <td>Reliability</td>
                    <td>{{ $Keuangan['reliability']['mean_gap_nilai'] }}</td>
                    <td>{{ $Keuangan['reliability']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Keuangan</td>
                    <td>Responsiveness</td>
                    <td>{{ $Keuangan['responsiveness']['mean_gap_nilai'] }}</td>
                    <td>{{ $Keuangan['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Keuangan</td>
                    <td>Assurance</td>
                    <td>{{ $Keuangan['assurance']['mean_gap_nilai'] }}</td>
                    <td>{{ $Keuangan['assurance']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Keuangan</td>
                    <td>Empathy</td>
                    <td>{{ $Keuangan['empathy']['mean_gap_nilai'] }}</td>
                    <td>{{ $Keuangan['empathy']['konversi_mean_gap_nilai'] }}</td>
                </tr>
            @endif

            @if ($kategori == 'semua' || $kategori == 'pendidikan')
                <tr>
                    <td>Pendidikan</td>
                    <td>Tangibles</td>
                    <td>{{ $Pendidikan['tangibles']['mean_gap_nilai'] }}</td>
                    <td>{{ $Pendidikan['tangibles']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>Reliability</td>
                    <td>{{ $Pendidikan['reliability']['mean_gap_nilai'] }}</td>
                    <td>{{ $Pendidikan['reliability']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>Responsiveness</td>
                    <td>{{ $Pendidikan['responsiveness']['mean_gap_nilai'] }}</td>
                    <td>{{ $Pendidikan['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>Assurance</td>
                    <td>{{ $Pendidikan['assurance']['mean_gap_nilai'] }}</td>
                    <td>{{ $Pendidikan['assurance']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>Empathy</td>
                    <td>{{ $Pendidikan['empathy']['mean_gap_nilai'] }}</td>
                    <td>{{ $Pendidikan['empathy']['konversi_mean_gap_nilai'] }}</td>
                </tr>
            @endif

            @if ($kategori == 'semua' || $kategori == 'penelitian')
                <tr>
                    <td>Penelitian</td>
                    <td>Tangibles</td>
                    <td>{{ $Penelitian['tangibles']['mean_gap_nilai'] }}</td>
                    <td>{{ $Penelitian['tangibles']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Penelitian</td>
                    <td>Reliability</td>
                    <td>{{ $Penelitian['reliability']['mean_gap_nilai'] }}</td>
                    <td>{{ $Penelitian['reliability']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Penelitian</td>
                    <td>Responsiveness</td>
                    <td>{{ $Penelitian['responsiveness']['mean_gap_nilai'] }}</td>
                    <td>{{ $Penelitian['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Penelitian</td>
                    <td>Assurance</td>
                    <td>{{ $Penelitian['assurance']['mean_gap_nilai'] }}</td>
                    <td>{{ $Penelitian['assurance']['konversi_mean_gap_nilai'] }}</td>
                </tr>
                <tr>
                    <td>Penelitian</td>
                    <td>Empathy</td>
                    <td>{{ $Penelitian['empathy']['mean_gap_nilai'] }}</td>
                    <td>{{ $Penelitian['empathy']['konversi_mean_gap_nilai'] }}</td>
                </tr>
            @endif

        </tbody>
    </table>
</body>
</html>
