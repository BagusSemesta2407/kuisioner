<div class="my-2 row g-3">
    <div class="col-xl-12">
        <h5>Tabel Gap Penilaian Layanan Penelitian</h5>
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
                    @if (!empty($Penelitian['tangibles']['gap']))
                        @foreach ($Penelitian['tangibles']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Penelitian['tangibles']['gap'])+1 }}" class="text-center">Tangibles</td>
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
                                    <td class="text-center">{{ $Penelitian['tangibles']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Penelitian['tangibles']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Penelitian['tangibles']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Penelitian['tangibles']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Penelitian['reliability']['gap']))
                        @foreach ($Penelitian['reliability']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Penelitian['reliability']['gap'])+1 }}" class="text-center">Reliability
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
                                    <td class="text-center">{{ $Penelitian['reliability']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Penelitian['reliability']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Penelitian['reliability']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Penelitian['reliability']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Penelitian['responsiveness']['gap']))
                        @foreach ($Penelitian['responsiveness']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Penelitian['responsiveness']['gap'])+1 }}" class="text-center">
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
                                    <td class="text-center">{{ $Penelitian['responsiveness']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Penelitian['responsiveness']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Penelitian['responsiveness']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Penelitian['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Penelitian['assurance']['gap']))
                        @foreach ($Penelitian['assurance']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Penelitian['assurance']['gap'])+1 }}" class="text-center">Assurance</td>
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
                                    <td class="text-center">{{ $Penelitian['assurance']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Penelitian['assurance']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Penelitian['assurance']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Penelitian['assurance']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Penelitian['emphaty']['gap']))
                        @foreach ($Penelitian['emphaty']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Penelitian['emphaty']['gap'])+1 }}" class="text-center">Emphaty</td>
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
                                    <td class="text-center">{{ $Penelitian['emphaty']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Penelitian['emphaty']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Penelitian['emphaty']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Penelitian['emphaty']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
