@extends('layouts.main')

@section('title')
    Laporan Rekap
@endsection

@section('addtional')
    <style>
        .border-right {}
    </style>
@endsection

@section('content')
    @if (session('success'))
        <div class="border-0 alert alert-success bg-success alert-dismissible fade show">
            <div class="text-white"><i class='bx bxs-check-circle'></i> {{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- For each Error -->
    @if (isset($TataPamong) &&
            isset($Kemahasiswaan) &&
            isset($SaranaPrasana) &&
            isset($Keuangan) &&
            isset($Pendidikan) &&
            isset($Penelitian))
        <div class="card">
            <div class="card-body">
                <h1>Data Laporan</h1>
                <div class="mb-3 d-flex">
                    <a href="{{ route('jawaban.rekap', ['kategori' => 'semua']) }}" class="btn btn-primary mx-1">Rekap</a>
                    <form action="{{ route('export.jawaban') }}" method="POST">
                        @csrf
                        <input type="hidden" name="kategori" value="semua">
                        <button type="submit" class="btn btn-info mx-1">Cetak</button>
                    </form>

                </div>
                <div class="mb-3 row">
                    <div class="col-5">
                        <form action="#">
                            <select class="form-select" name="jurusan_id" id="jurusan_filter" required>
                                <option value="" selected disabled>Pilih Jurusan</option>
                                @foreach ($jurusan as $jr)
                                    <option value="{{ $jr->id }}"
                                        {{ request()->jurusan_id ? (request()->jurusan_id == $jr->id ? 'selected' : '') : '' }}>
                                        {{ $jr->name }}</option>
                                @endforeach
                            </select>
                            <div class="col-md-2 col-sm-12 d-flex mt-auto">
                                <button type="submit" class="btn btn-success mx-1">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <table id="user" class="table table-striped table-light">
                    <thead class="table-dark">
                        <tr>
                            <th>Tahun</th>
                            <th>Layanan</th>
                            <th>Aspek</th>
                            <th>Nilai Gap</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('admin.jawaban.index.tataPamong')
                        @include('admin.jawaban.index.kemahasiswaan')
                        @include('admin.jawaban.index.saranaPrasana')
                        @include('admin.jawaban.index.keuangan')
                        @include('admin.jawaban.index.pendidikan')
                        @include('admin.jawaban.index.penelitian')
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <h4>Keterangan Interval Gap : </h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td><strong>Nilai Gap</strong></td>
                                    <td><strong>Keterangan</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>1. -4 - (-2.4)</strong></td>
                                    <td>Sangat Tidak Baik</td>
                                </tr>
                                <tr>
                                    <td><strong>2. >(-2.4) - (-0.8)</strong></td>
                                    <td>Kurang Baik</td>
                                </tr>
                                <tr>
                                    <td><strong>3. >(-0.8) - 0.8</strong></td>
                                    <td>Cukup Baik</td>
                                </tr>
                                <tr>
                                    <td><strong>4. >0,8 - 2.4</strong></td>
                                    <td>Baik</td>
                                </tr>
                                <tr>
                                    <td><strong>5. >(2.4) - 4</strong></td>
                                    <td>Sangat Baik</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body">
                <h1>Data Kosong</h1>
                <p class="h5">Mahasiswa belum mengisi kuesioner</p>
            </div>
        </div>
    @endif
@endsection

@section('script')
    <script>
        function redirectToSelectedRoute() {
            var selectElement = document.getElementById("periode");
            var selectedValue = selectElement.options[selectElement.selectedIndex].value;
            window.location.href = selectedValue;
        }

        $(document).ready(function() {
            $('#user').DataTable({
                columnDefs: [{
                        width: '10%',
                        targets: 0
                    },
                    {
                        width: '25%',
                        targets: 1
                    },
                    {
                        width: '20%',
                        targets: 2
                    },
                    {
                        width: '25%',
                        targets: 3
                    },
                    {
                        width: '30%',
                        targets: 4
                    },
                ],
            });
        });
    </script>
@endsection
