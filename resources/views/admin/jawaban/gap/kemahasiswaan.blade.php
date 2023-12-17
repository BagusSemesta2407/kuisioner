<div class="my-2 row g-3">
    <div class="col-xl-12">
        <h5>Tabel Gap Penilaian Layanan Kemahasiswaan</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr style="height: 50px">
                        <th colspan="2" class="text-center">Item</th>
                        <th class="text-center">Nilai Rata-Rata Persepsi</th>
                        <th class="text-center">Nilai Rata-Rata Harapan</th>
                        <th class="text-center">Gap</th>
                        <th class="text-center">Kualitas Layanan</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($Kemahasiswaan['tangibles']['gap']))
                        @foreach ($Kemahasiswaan['tangibles']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['tangibles']['gap'])+1 }}" class="text-center">Tangibles</td>
                                @endif
                                <td class="line3">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['r_nilai_persepsi'] }}</td>
                                <td class="text-center">{{ $rekap['r_nilai_harapan'] }}</td>
                                <td class="text-center">{{ $rekap['nilai'] }}</td>
                                <td class="text-center">{{ $rekap['konversi_nilai'] }}</td>
                            </tr>

                            @if ($loop->last)
                                <tr>
                                    <td class="text-center">Rata-Rata</td>
                                    <td class="text-center">{{ $Kemahasiswaan['tangibles']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['tangibles']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['tangibles']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['tangibles']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Kemahasiswaan['reliability']['gap']))
                        @foreach ($Kemahasiswaan['reliability']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['reliability']['gap'])+1 }}" class="text-center">Reliability
                                    </td>
                                @endif
                                <td class="line3">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['r_nilai_persepsi'] }}</td>
                                <td class="text-center">{{ $rekap['r_nilai_harapan'] }}</td>
                                <td class="text-center">{{ $rekap['nilai'] }}</td>
                                <td class="text-center">{{ $rekap['konversi_nilai'] }}</td>
                            </tr>

                            @if ($loop->last)
                                <tr>
                                    <td class="text-center">Rata-Rata</td>
                                    <td class="text-center">{{ $Kemahasiswaan['reliability']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['reliability']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['reliability']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['reliability']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Kemahasiswaan['responsiveness']['gap']))
                        @foreach ($Kemahasiswaan['responsiveness']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['responsiveness']['gap'])+1 }}" class="text-center">
                                        Responsiveness</td>
                                @endif
                                <td class="line3">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['r_nilai_persepsi'] }}</td>
                                <td class="text-center">{{ $rekap['r_nilai_harapan'] }}</td>
                                <td class="text-center">{{ $rekap['nilai'] }}</td>
                                <td class="text-center">{{ $rekap['konversi_nilai'] }}</td>
                            </tr>

                            @if ($loop->last)
                                <tr>
                                    <td class="text-center">Rata-Rata</td>
                                    <td class="text-center">{{ $Kemahasiswaan['responsiveness']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['responsiveness']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['responsiveness']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Kemahasiswaan['assurance']['gap']))
                        @foreach ($Kemahasiswaan['assurance']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['assurance']['gap'])+1 }}" class="text-center">Assurance</td>
                                @endif
                                <td class="line3">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['r_nilai_persepsi'] }}</td>
                                <td class="text-center">{{ $rekap['r_nilai_harapan'] }}</td>
                                <td class="text-center">{{ $rekap['nilai'] }}</td>
                                <td class="text-center">{{ $rekap['konversi_nilai'] }}</td>
                            </tr>

                            @if ($loop->last)
                                <tr>
                                    <td class="text-center">Rata-Rata</td>
                                    <td class="text-center">{{ $Kemahasiswaan['assurance']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['assurance']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['assurance']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['assurance']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Kemahasiswaan['emphaty']['gap']))
                        @foreach ($Kemahasiswaan['emphaty']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['emphaty']['gap'])+1 }}" class="text-center">Emphaty</td>
                                @endif
                                <td class="line3">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['r_nilai_persepsi'] }}</td>
                                <td class="text-center">{{ $rekap['r_nilai_harapan'] }}</td>
                                <td class="text-center">{{ $rekap['nilai'] }}</td>
                                <td class="text-center">{{ $rekap['konversi_nilai'] }}</td>
                            </tr>

                            @if ($loop->last)
                                <tr>
                                    <td class="text-center">Rata-Rata</td>
                                    <td class="text-center">{{ $Kemahasiswaan['emphaty']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['emphaty']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['emphaty']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Kemahasiswaan['emphaty']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
