<div class="my-2 row g-3">
    <div class="col-xl-12">
        <h5>Tabel Gap Penilaian Layanan Tata Pamong</h5>
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
                    @if (!empty($TataPamong['tangibles']['gap']))
                        @foreach ($TataPamong['tangibles']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($TataPamong['tangibles']['gap'])+1 }}" class="text-center">Tangibles</td>
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
                                    <td class="text-center">{{ $TataPamong['tangibles']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $TataPamong['tangibles']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $TataPamong['tangibles']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $TataPamong['tangibles']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($TataPamong['reliability']['gap']))
                        @foreach ($TataPamong['reliability']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($TataPamong['reliability']['gap'])+1 }}" class="text-center">Reliability
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
                                    <td class="text-center">{{ $TataPamong['reliability']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $TataPamong['reliability']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $TataPamong['reliability']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $TataPamong['reliability']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($TataPamong['responsiveness']['gap']))
                        @foreach ($TataPamong['responsiveness']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($TataPamong['responsiveness']['gap'])+1 }}" class="text-center">
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
                                    <td class="text-center">{{ $TataPamong['responsiveness']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $TataPamong['responsiveness']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $TataPamong['responsiveness']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $TataPamong['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($TataPamong['assurance']['gap']))
                        @foreach ($TataPamong['assurance']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($TataPamong['assurance']['gap'])+1 }}" class="text-center">Assurance</td>
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
                                    <td class="text-center">{{ $TataPamong['assurance']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $TataPamong['assurance']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $TataPamong['assurance']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $TataPamong['assurance']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($TataPamong['emphaty']['gap']))
                        @foreach ($TataPamong['emphaty']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($TataPamong['emphaty']['gap'])+1 }}" class="text-center">Emphaty</td>
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
                                    <td class="text-center">{{ $TataPamong['emphaty']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $TataPamong['emphaty']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $TataPamong['emphaty']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $TataPamong['emphaty']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
