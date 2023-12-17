<div class="my-5 row g-3">
    <h2 class="text-center">Layanan Kemahasiswaan</h2>
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
                    @if (!empty($Kemahasiswaan['tangibles']['persepsi']))
                        @foreach ($Kemahasiswaan['tangibles']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['tangibles']['persepsi']) }}" class="text-center">Tangibles</td>
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

                    @if (!empty($Kemahasiswaan['reliability']['persepsi']))
                        @foreach ($Kemahasiswaan['reliability']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['reliability']['persepsi']) }}" class="text-center">Reliability
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

                    @if (!empty($Kemahasiswaan['responsiveness']['persepsi']))
                        @foreach ($Kemahasiswaan['responsiveness']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['responsiveness']['persepsi']) }}" class="text-center">
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

                    @if (!empty($Kemahasiswaan['assurance']['persepsi']))
                        @foreach ($Kemahasiswaan['assurance']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['assurance']['persepsi']) }}" class="text-center">Assurance
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

                    @if (!empty($Kemahasiswaan['emphaty']['persepsi']))
                        @foreach ($Kemahasiswaan['emphaty']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['emphaty']['persepsi']) }}" class="text-center">Emphaty</td>
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
                    @if (!empty($Kemahasiswaan['tangibles']['harapan']))
                        @foreach ($Kemahasiswaan['tangibles']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['tangibles']['harapan']) }}" class="text-center">Tangibles</td>
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

                    @if (!empty($Kemahasiswaan['reliability']['harapan']))
                        @foreach ($Kemahasiswaan['reliability']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['reliability']['harapan']) }}" class="text-center">Reliability
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

                    @if (!empty($Kemahasiswaan['responsiveness']['harapan']))
                        @foreach ($Kemahasiswaan['responsiveness']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['responsiveness']['harapan']) }}" class="text-center">
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

                    @if (!empty($Kemahasiswaan['assurance']['harapan']))
                        @foreach ($Kemahasiswaan['assurance']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['assurance']['harapan']) }}" class="text-center">Assurance</td>
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

                    @if (!empty($Kemahasiswaan['emphaty']['harapan']))
                        @foreach ($Kemahasiswaan['emphaty']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['emphaty']['harapan']) }}" class="text-center">Emphaty</td>
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
                    @if (!empty($Kemahasiswaan['tangibles']['persepsi']))
                        @foreach ($Kemahasiswaan['tangibles']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['tangibles']['persepsi']) }}" class="text-center">Tangibles
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

                    @if (!empty($Kemahasiswaan['reliability']['persepsi']))
                        @foreach ($Kemahasiswaan['reliability']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['reliability']['persepsi']) }}" class="text-center">Reliability
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

                    @if (!empty($Kemahasiswaan['responsiveness']['persepsi']))
                        @foreach ($Kemahasiswaan['responsiveness']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['responsiveness']['persepsi']) }}" class="text-center">
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

                    @if (!empty($Kemahasiswaan['assurance']['persepsi']))
                        @foreach ($Kemahasiswaan['assurance']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['assurance']['persepsi']) }}" class="text-center">Assurance
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

                    @if (!empty($Kemahasiswaan['emphaty']['persepsi']))
                        @foreach ($Kemahasiswaan['emphaty']['persepsi'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['emphaty']['persepsi']) }}" class="text-center">Emphaty</td>
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
                    @if (!empty($Kemahasiswaan['tangibles']['harapan']))
                        @foreach ($Kemahasiswaan['tangibles']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['tangibles']['harapan']) }}" class="text-center">Tangibles</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_harapan'] }}</td>
                                <td>{{ $rekap['r_nilai_harapan'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($Kemahasiswaan['reliability']['harapan']))
                        @foreach ($Kemahasiswaan['reliability']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['reliability']['harapan']) }}" class="text-center">Reliability
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

                    @if (!empty($Kemahasiswaan['responsiveness']['harapan']))
                        @foreach ($Kemahasiswaan['responsiveness']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['responsiveness']['harapan']) }}" class="text-center">
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

                    @if (!empty($Kemahasiswaan['assurance']['harapan']))
                        @foreach ($Kemahasiswaan['assurance']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['assurance']['harapan']) }}" class="text-center">Assurance</td>
                                @endif
                                <td class="ellipsis">
                                    {!! $rekap['pertanyaan'] !!}
                                </td>
                                <td>{{ $rekap['nilai_harapan'] }}</td>
                                <td>{{ $rekap['r_nilai_harapan'] }}</td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($Kemahasiswaan['emphaty']['harapan']))
                        @foreach ($Kemahasiswaan['emphaty']['harapan'] as $rekap)
                            <tr>
                                @if ($loop->first)
                                    <td rowspan="{{ count($Kemahasiswaan['emphaty']['harapan']) }}" class="text-center">Emphaty</td>
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
