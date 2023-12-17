<div class="my-2 row g-3">
    <div class="col-xl-12">
        <h5>Tabel Gap Penilaian Layanan Sarana Prasana</h5>
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
                    @if (!empty($SaranaPrasana['tangibles']['gap']))
                        @foreach ($SaranaPrasana['tangibles']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['tangibles']['gap'])+1 }}" class="text-center">Tangibles</td>
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
                                    <td class="text-center">{{ $SaranaPrasana['tangibles']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['tangibles']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['tangibles']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['tangibles']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['reliability']['gap']))
                        @foreach ($SaranaPrasana['reliability']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['reliability']['gap'])+1 }}" class="text-center">Reliability
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
                                    <td class="text-center">{{ $SaranaPrasana['reliability']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['reliability']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['reliability']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['reliability']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['responsiveness']['gap']))
                        @foreach ($SaranaPrasana['responsiveness']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['responsiveness']['gap'])+1 }}" class="text-center">
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
                                    <td class="text-center">{{ $SaranaPrasana['responsiveness']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['responsiveness']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['responsiveness']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['responsiveness']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['assurance']['gap']))
                        @foreach ($SaranaPrasana['assurance']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['assurance']['gap'])+1 }}" class="text-center">Assurance</td>
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
                                    <td class="text-center">{{ $SaranaPrasana['assurance']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['assurance']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['assurance']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['assurance']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['emphaty']['gap']))
                        @foreach ($SaranaPrasana['emphaty']['gap'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['emphaty']['gap'])+1 }}" class="text-center">Emphaty</td>
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
                                    <td class="text-center">{{ $SaranaPrasana['emphaty']['mean_gap_r_nilai_persepsi'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['emphaty']['mean_gap_r_nilai_harapan'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['emphaty']['mean_gap_nilai'] }}</td>
                                    <td class="text-center">{{ $SaranaPrasana['emphaty']['konversi_mean_gap_nilai'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
