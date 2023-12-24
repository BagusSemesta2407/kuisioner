<div class="mb-3 row">
    <div class="col-5">
        <select class="form-select" name="jurusan" id="jurusan_filter" required>
            <option value="" disabled>Pilih Jurusan</option>
            <option value="{{ route('admin-p4mp',['jurusan'=>'semua', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'semua' ? 'selected' : '' }}>Semua</option>
            <option value="{{ route('admin-p4mp',['jurusan'=>'Jurusan Teknologi Informasi dan Komputer', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'Jurusan Teknologi Informasi dan Komputer' ? 'selected' : '' }}> Jurusan Teknologi Informasi dan Komputer</option>
            <option value="{{ route('admin-p4mp',['jurusan'=>'Jurusan Pertanian', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'Jurusan Pertanian' ? 'selected' : '' }}>Jurusan Pertanian</option>
            <option value="{{ route('admin-p4mp',['jurusan'=>'Jurusan Kesehatan', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'Jurusan Kesehatan' ? 'selected' : '' }}>Jurusan Kesehatan</option>
            <option value="{{ route('admin-p4mp',['jurusan'=>'Jurusan Teknik Perawatan dan Perbaikan Mesin', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'Jurusan Teknik Perawatan dan Perbaikan Mesin' ? 'selected' : '' }}>Jurusan Teknik Perawatan dan Perbaikan Mesin</option>
        </select>
    </div>
    <div class="col-2">
        <select class="form-select" name="periode" id="tingkat_filter" required>
            <option value="" disabled>Pilih Semester</option>
            <option value="{{ route('admin-p4mp',['jurusan'=>$jurusan, 'tingkat'=>'semua', 'periode'=>$periode]) }}" {{ $tingkat == 'semua' ? 'selected' : '' }}>Semua</option>
            @for ($i = 1; $i <= 8; $i++)
                <option value="{{ route('admin-p4mp',['jurusan'=>$jurusan, 'tingkat'=>$i, 'periode'=>$periode]) }}" {{ $tingkat == $i ? 'selected' : '' }}>Semester {{ $i }}</option>
            @endfor
        </select>
    </div>
    <div class="col-2">
        <select class="form-select" name="periode" id="periode_filter" required>
            <option value="" disabled>Pilih Periode</option>
            <option value="{{ route('admin-p4mp',['jurusan'=>$jurusan, 'tingkat'=>$tingkat, 'periode'=>'semua']) }}" {{ $periode == 'semua' ? 'selected' : '' }}>Semua</option>
            @for ($i = 2015; $i <= 2025; $i++)
                <option value="{{ route('admin-p4mp',['jurusan'=>$jurusan, 'tingkat'=>$tingkat, 'periode'=>$i]) }}" {{ $periode == $i  ? 'selected' : '' }}>{{ $i-1 }}/{{ $i }}</option>
            @endfor
        </select>
    </div>
</div>
<div class="row">
    @if ($jurusan == 'Jurusan Teknologi Informasi dan Komputer' || $jurusan == "semua")
        <div class="mb-4 col-md-6 transparent">
            <div style="min-height: 150px" class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4 h3 ">Jurusan Teknologi Informasi dan Komputer</p>
                    {{-- <p class="h5" > {{ $mi }} Mahasiswa Telah Mengisi Kuesioner </p> --}}
                </div>
            </div>
        </div>
    @endif
    @if ($jurusan == 'Jurusan Pertanian' || $jurusan == "semua")
        <div class="mb-4 col-md-6 transparent">
            <div style="min-height: 150px" class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4 h3 ">Jurusan Pertanian</p>
                    {{-- <p class="h5" > {{ $a }} Mahasiswa Telah Mengisi Kuesioner </p> --}}
                </div>
            </div>
        </div>
    @endif
    @if ($jurusan == 'Jurusan Kesehatan' || $jurusan == "semua")
        <div class="mb-4 col-md-6 transparent">
            <div style="min-height: 150px" class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4 h3 ">Jurusan Kesehatan</p>
                    {{-- <p class="h5" > {{ $k }} Mahasiswa Telah Mengisi Kuesioner </p> --}}
                </div>
            </div>
        </div>
    @endif
    @if ($jurusan == 'Jurusan Teknik Perawatan dan Perbaikan Mesin' || $jurusan == "semua")
        <div class="mb-4 col-md-6 transparent">
            <div style="min-height: 150px" class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4 h3 ">Jurusan Teknik Perawatan dan Perbaikan Mesin</p>
                    {{-- <p class="h5" > {{ $tppm }} Mahasiswa Telah Mengisi Kuesioner </p> --}}
                </div>
            </div>
        </div>
    @endif
</div>
<div class="row">
    @foreach ($layanan as $item)
        <div class="col-6">
            <div class="card my-2">
                <div class="card-header">
                    Layanan {{ $item }}
                </div>
                <div class="card-body">
                    <canvas id="myChart{{ $loop->iteration }}"></canvas>
                </div>
            </div>
        </div>
    @endforeach

</div>

@section('script')
    <script>
        $(document).ready(function () {
            $('#jurusan_filter').change(function() {
                // Ambil nilai dari dropdown
                var selectedValue = $(this).val();

                // Redirect ke route sesuai dengan nilai yang dipilih
                if (selectedValue !== '') {
                    window.location.href = selectedValue;
                }
            });
            $('#tingkat_filter').change(function() {
                // Ambil nilai dari dropdown
                var selectedValue = $(this).val();

                // Redirect ke route sesuai dengan nilai yang dipilih
                if (selectedValue !== '') {
                    window.location.href = selectedValue;
                }
            });
            $('#periode_filter').change(function() {
                // Ambil nilai dari dropdown
                var selectedValue = $(this).val();

                // Redirect ke route sesuai dengan nilai yang dipilih
                if (selectedValue !== '') {
                    window.location.href = selectedValue;
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx1 = document.getElementById('myChart1');
        new Chart(ctx1, {
            type: 'bar',
            data: {
            labels: {!! json_encode($aspek) !!},
            datasets: [
                {
                    label: 'Harapan',
                    data: {{ json_encode($TataPamong['harapan']) }},
                    borderWidth: 1
                },
                {
                    label: 'Persepsi',
                    data: {{ json_encode($TataPamong['persepsi']) }},
                    borderWidth: 1
                },
                {
                    label: 'Gap',
                    data: {{ json_encode($TataPamong['gap']) }},
                    borderWidth: 1
                }
            ]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        const ctx2 = document.getElementById('myChart2');
        new Chart(ctx2, {
            type: 'bar',
            data: {
            labels: {!! json_encode($aspek) !!},
            datasets: [
                {
                    label: 'Harapan',
                    data: {{ json_encode($Kemahasiswaan['harapan']) }},
                    borderWidth: 1
                },
                {
                    label: 'Persepsi',
                    data: {{ json_encode($Kemahasiswaan['persepsi']) }},
                    borderWidth: 1
                },
                {
                    label: 'Gap',
                    data: {{ json_encode($Kemahasiswaan['gap']) }},
                    borderWidth: 1
                }
            ]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        const ctx3 = document.getElementById('myChart3');
        new Chart(ctx3, {
            type: 'bar',
            data: {
            labels: {!! json_encode($aspek) !!},
            datasets: [
                {
                    label: 'Harapan',
                    data: {{ json_encode($SaranaPrasana['harapan']) }},
                    borderWidth: 1
                },
                {
                    label: 'Persepsi',
                    data: {{ json_encode($SaranaPrasana['persepsi']) }},
                    borderWidth: 1
                },
                {
                    label: 'Gap',
                    data: {{ json_encode($SaranaPrasana['gap']) }},
                    borderWidth: 1
                }
            ]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        const ctx4 = document.getElementById('myChart4');
        new Chart(ctx4, {
            type: 'bar',
            data: {
            labels: {!! json_encode($aspek) !!},
            datasets: [
                {
                    label: 'Harapan',
                    data: {{ json_encode($Keuangan['harapan']) }},
                    borderWidth: 1
                },
                {
                    label: 'Persepsi',
                    data: {{ json_encode($Keuangan['persepsi']) }},
                    borderWidth: 1
                },
                {
                    label: 'Gap',
                    data: {{ json_encode($Keuangan['gap']) }},
                    borderWidth: 1
                }
            ]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        const ctx5 = document.getElementById('myChart5');
        new Chart(ctx5, {
            type: 'bar',
            data: {
            labels: {!! json_encode($aspek) !!},
            datasets: [
                {
                    label: 'Harapan',
                    data: {{ json_encode($Pendidikan['harapan']) }},
                    borderWidth: 1
                },
                {
                    label: 'Persepsi',
                    data: {{ json_encode($Pendidikan['persepsi']) }},
                    borderWidth: 1
                },
                {
                    label: 'Gap',
                    data: {{ json_encode($Pendidikan['gap']) }},
                    borderWidth: 1
                }
            ]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        const ctx6 = document.getElementById('myChart6');
        new Chart(ctx6, {
            type: 'bar',
            data: {
            labels: {!! json_encode($aspek) !!},
            datasets: [
                {
                    label: 'Harapan',
                    data: {{ json_encode($Penelitian['harapan']) }},
                    borderWidth: 1
                },
                {
                    label: 'Persepsi',
                    data: {{ json_encode($Penelitian['persepsi']) }},
                    borderWidth: 1
                },
                {
                    label: 'Gap',
                    data: {{ json_encode($Penelitian['gap']) }},
                    borderWidth: 1
                }
            ]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

    </script>
@endsection
