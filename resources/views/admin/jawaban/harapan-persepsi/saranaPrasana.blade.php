<div class="my-5 row g-3">
    <h2 class="text-center">Layanan Sarana Prasana</h2>

    <div class="col-xl-6">
        <h5 class="text-center">Tabel Rekapitulasi Persepsi</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th rowspan="2" colspan="2" class="text-center">Item</th>
                        <th colspan="5" class="text-center">Jumlah Jawaban</th>
                        <th rowspan="2" class="text-center">Total</th>
                    </tr>
                    <tr>
                        <th class="text-center">STB</th>
                        <th class="text-center">KB</th>
                        <th class="text-center">CB</th>
                        <th class="text-center">B</th>
                        <th class="text-center">SB</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($SaranaPrasana['tangibles']['persepsi']))
                        @foreach ($SaranaPrasana['tangibles']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['tangibles']['persepsi']) }}" class="text-center">Tangibles</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['kb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['b'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sb'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['reliability']['persepsi']))
                        @foreach ($SaranaPrasana['reliability']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['reliability']['persepsi']) }}" class="text-center">Reliability
                                    </td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['kb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['b'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sb'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['responsiveness']['persepsi']))
                        @foreach ($SaranaPrasana['responsiveness']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['responsiveness']['persepsi']) }}" class="text-center">
                                        Responsiveness</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['kb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['b'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sb'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['assurance']['persepsi']))
                        @foreach ($SaranaPrasana['assurance']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['assurance']['persepsi']) }}" class="text-center">Assurance
                                    </td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['kb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['b'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sb'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['emphaty']['persepsi']))
                        @foreach ($SaranaPrasana['emphaty']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['emphaty']['persepsi']) }}" class="text-center">Emphaty</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['kb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cb'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['b'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sb'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-xl-6">
        <h5 class="text-center">Tabel Rekapitulasi Harapan</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th rowspan="2" colspan="2" class="text-center">Item</th>
                        <th colspan="5" class="text-center">Jumlah Jawaban</th>
                        <th rowspan="2" class="text-center">Total</th>
                    </tr>
                    <tr>
                        <th class="text-center">STM</th>
                        <th class="text-center">KM</th>
                        <th class="text-center">CM</th>
                        <th class="text-center">M</th>
                        <th class="text-center">SM</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($SaranaPrasana['tangibles']['harapan']))
                        @foreach ($SaranaPrasana['tangibles']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['tangibles']['harapan']) }}" class="text-center">Tangibles</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['km'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['m'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sm'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['reliability']['harapan']))
                        @foreach ($SaranaPrasana['reliability']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['reliability']['harapan']) }}" class="text-center">Reliability
                                    </td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['km'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['m'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sm'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['responsiveness']['harapan']))
                        @foreach ($SaranaPrasana['responsiveness']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['responsiveness']['harapan']) }}" class="text-center">
                                        Responsiveness</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['km'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['m'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sm'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['assurance']['harapan']))
                        @foreach ($SaranaPrasana['assurance']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['assurance']['harapan']) }}" class="text-center">Assurance</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['km'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['m'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sm'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['emphaty']['harapan']))
                        @foreach ($SaranaPrasana['emphaty']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['emphaty']['harapan']) }}" class="text-center">Emphaty</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td class="text-center">{{ $rekap['nilai']['stm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['km'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['cm'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['m'] }}</td>
                                <td class="text-center">{{ $rekap['nilai']['sm'] }}</td>
                                <td class="text-center">{{ $rekap['total_responden'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-xl-6">
        <h5>Tabel Hasil Persepsi</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr style="height: 50px">
                        <th colspan="2" class="text-center">Item</th>
                        <th class="text-center">Nilai Persepsi</th>
                        <th class="text-center">Nilai Rata-Rata Persepsi</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($SaranaPrasana['tangibles']['persepsi']))
                        @foreach ($SaranaPrasana['tangibles']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['tangibles']['persepsi']) }}" class="text-center">Tangibles
                                    </td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_persepsi'] }}</td>
                                <td>{{ $rekap['r_nilai_persepsi'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['reliability']['persepsi']))
                        @foreach ($SaranaPrasana['reliability']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['reliability']['persepsi']) }}" class="text-center">Reliability
                                    </td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_persepsi'] }}</td>
                                <td>{{ $rekap['r_nilai_persepsi'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['responsiveness']['persepsi']))
                        @foreach ($SaranaPrasana['responsiveness']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['responsiveness']['persepsi']) }}" class="text-center">
                                        Responsiveness</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_persepsi'] }}</td>
                                <td>{{ $rekap['r_nilai_persepsi'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['assurance']['persepsi']))
                        @foreach ($SaranaPrasana['assurance']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['assurance']['persepsi']) }}" class="text-center">Assurance
                                    </td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_persepsi'] }}</td>
                                <td>{{ $rekap['r_nilai_persepsi'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['emphaty']['persepsi']))
                        @foreach ($SaranaPrasana['emphaty']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['emphaty']['persepsi']) }}" class="text-center">Emphaty</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_persepsi'] }}</td>
                                <td>{{ $rekap['r_nilai_persepsi'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-xl-6">
        <h5>Tabel Hasil Harapan</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr style="height: 50px">
                        <th colspan="2" class="text-center">Item</th>
                        <th class="text-center">Nilai Harapan</th>
                        <th class="text-center">Nilai Rata-Rata Harapan</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($SaranaPrasana['tangibles']['harapan']))
                        @foreach ($SaranaPrasana['tangibles']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['tangibles']['harapan']) }}" class="text-center">Tangibles</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_harapan'] }}</td>
                                <td>{{ $rekap['r_nilai_harapan'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['reliability']['harapan']))
                        @foreach ($SaranaPrasana['reliability']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['reliability']['harapan']) }}" class="text-center">Reliability
                                    </td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_harapan'] }}</td>
                                <td>{{ $rekap['r_nilai_harapan'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['responsiveness']['harapan']))
                        @foreach ($SaranaPrasana['responsiveness']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['responsiveness']['harapan']) }}" class="text-center">
                                        Responsiveness</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_harapan'] }}</td>
                                <td>{{ $rekap['r_nilai_harapan'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['assurance']['harapan']))
                        @foreach ($SaranaPrasana['assurance']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['assurance']['harapan']) }}" class="text-center">Assurance</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_harapan'] }}</td>
                                <td>{{ $rekap['r_nilai_harapan'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($SaranaPrasana['emphaty']['harapan']))
                        @foreach ($SaranaPrasana['emphaty']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($SaranaPrasana['emphaty']['harapan']) }}" class="text-center">Emphaty</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_harapan'] }}</td>
                                <td>{{ $rekap['r_nilai_harapan'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
