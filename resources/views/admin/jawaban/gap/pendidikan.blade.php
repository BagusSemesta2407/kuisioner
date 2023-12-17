<div class="my-2 row g-3">
    <div class="col-xl-12">
        <h5>Tabel Gap Penilaian Layanan Pendidikan</h5>
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
                    @if (!empty($Pendidikan['tangibles']['gap']))
                        @foreach ($Pendidikan['tangibles']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Pendidikan['tangibles']['gap'])+1 }}" class="text-center">Tangibles</td>
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
                                    <td class="text-center">{{ $Pendidikan['tangibles']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['tangibles']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['tangibles']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['tangibles']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Pendidikan['reliability']['gap']))
                        @foreach ($Pendidikan['reliability']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Pendidikan['reliability']['gap'])+1 }}" class="text-center">Reliability
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
                                    <td class="text-center">{{ $Pendidikan['reliability']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['reliability']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['reliability']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['reliability']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Pendidikan['responsiveness']['gap']))
                        @foreach ($Pendidikan['responsiveness']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Pendidikan['responsiveness']['gap'])+1 }}" class="text-center">
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
                                    <td class="text-center">{{ $Pendidikan['responsiveness']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['responsiveness']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['responsiveness']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Pendidikan['assurance']['gap']))
                        @foreach ($Pendidikan['assurance']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Pendidikan['assurance']['gap'])+1 }}" class="text-center">Assurance</td>
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
                                    <td class="text-center">{{ $Pendidikan['assurance']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['assurance']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['assurance']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['assurance']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($Pendidikan['emphaty']['gap']))
                        @foreach ($Pendidikan['emphaty']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Pendidikan['emphaty']['gap'])+1 }}" class="text-center">Emphaty</td>
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
                                    <td class="text-center">{{ $Pendidikan['emphaty']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['emphaty']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['emphaty']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $Pendidikan['emphaty']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
