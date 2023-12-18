@extends('layouts.main')

@section('title')
    Data user Mahasiswa
@endsection

@section("content")
    @if (session('success'))
        <div class="border-0 alert alert-success bg-success alert-dismissible fade show">
            <div class="text-white"><i class='bx bxs-check-circle'></i> {{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- For each Error -->
    @if ($errors->any())
        <div class="border-0 alert alert-danger bg-danger alert-dismissible fade show">
            <div class="text-white">
                <i class='bx bxs-error-circle'></i> Error
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h1>Data user Mahasiswa</h1>
            @if (Auth::user()->role == 'p4mp')
                <button type="button" class="my-3 btn btn-success" data-bs-toggle="modal" data-bs-target="#TambahModal">
                    Tambah Data
                </button>
                <!-- Modal -->
                <div class="modal fade" id="TambahModal" tabindex="-1" aria-labelledby="TambahModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="TambahModalLabel">Tambah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf
                                <input type="hidden" name="role" value="mahasiswa">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama Mahasiswa" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">NIM</label>
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Masukan NIM Mahasiswa" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-6">
                                            <label for="periode" class="form-label">Periode</label>
                                            <select class="form-select" name="periode" id="periode" required>
                                                @for ($i = 2015; $i <= 2025; $i++)
                                                    <option value="{{ $i-1 }}/{{ $i }}">{{ $i-1 }}/{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="tingkat" class="form-label">Semester</label>
                                            <select class="form-select" name="tingkat" id="tingkat" required>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                            <label for="jurusan" class="form-label">Jurusan</label>
                                            <select class="form-select" name="jurusan" id="jurusan" required>
                                                <option value="Jurusan Teknologi Informasi dan Komputer">Jurusan Teknologi Informasi dan Komputer</option>
                                                <option value="Jurusan Pertanian">Jurusan Pertanian</option>
                                                <option value="Jurusan Kesehatan">Jurusan Kesehatan</option>
                                                <option value="Jurusan Teknik Perawatan dan Perbaikan Mesin">Jurusan Teknik Perawatan dan Perbaikan Mesin</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label for="prodi" class="form-label">Prodi</label>
                                            <select class="form-select" name="prodi" id="prodi" required>
                                                <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
                                                <option value="D3 Agroindustri">D3 Agroindustri</option>
                                                <option value="D3 Keperawatan">D3 Keperawatan</option>
                                                <option value="D3 Teknologi Rekayasa Manufaktur">D3 Teknologi Rekayasa Manufaktur</option>
                                                <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak</option>
                                                <option value="D4 Teknologi Produksi Tanaman dan Pangan">D4 Teknologi Produksi Tanaman dan Pangan</option>
                                                <option value="D4 Teknologi Rekayasa Manufaktur">D4 Teknologi Rekayasa Manufaktur</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" name="status" id="status" required>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                                <option value="Lulus">Lulus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password user" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="button" class="my-3 btn btn-dark" data-bs-toggle="modal" data-bs-target="#Import">
                    Import Data
                </button>
                <!-- Modal -->
                <div class="modal fade" id="Import" tabindex="-1" aria-labelledby="ImportLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ImportLabel">Import Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                            <span for="file" class="form-label">Contoh File : </span>
                                            <a href="{{ asset('kuesioner.xlsx') }}" download>Unduh Contoh File (.csv)</a>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <span class="text-success">File harus berekstensi .csv, .xls atau .xlsx</span>
                                            <input type="file" name="file" class="form-control" id="file" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-dark">Import Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
            <div class="mb-3 row">
                @if (Auth::user()->role = 'p4mp')
                <div class="col-5">
                    <select class="form-select" name="jurusan" id="jurusan_filter" required>
                        <option value="" disabled>Pilih Jurusan</option>
                        <option value="{{ route('user.mahasiswa',['jurusan'=>'semua', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'semua' ? 'selected' : '' }}>Jurusan</option>
                        <option value="{{ route('user.mahasiswa',['jurusan'=>'Jurusan Teknologi Informasi dan Komputer', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'Jurusan Teknologi Informasi dan Komputer' ? 'selected' : '' }}> Jurusan Teknologi Informasi dan Komputer</option>
                        <option value="{{ route('user.mahasiswa',['jurusan'=>'Jurusan Pertanian', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'Jurusan Pertanian' ? 'selected' : '' }}>Jurusan Pertanian</option>
                        <option value="{{ route('user.mahasiswa',['jurusan'=>'Jurusan Kesehatan', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'Jurusan Kesehatan' ? 'selected' : '' }}>Jurusan Kesehatan</option>
                        <option value="{{ route('user.mahasiswa',['jurusan'=>'Jurusan Teknik Perawatan dan Perbaikan Mesin', 'tingkat'=>$tingkat, 'periode'=>$periode]) }}" {{ $jurusan == 'Jurusan Teknik Perawatan dan Perbaikan Mesin' ? 'selected' : '' }}>Jurusan Teknik Perawatan dan Perbaikan Mesin</option>
                    </select>
                </div>

                <div class="col-2">
                    <select class="form-select" name="periode" id="tingkat_filter" required>
                        <option value="" disabled>Pilih Semester</option>
                        <option value="{{ route('user.mahasiswa',['jurusan'=>$jurusan, 'tingkat'=>'semua', 'periode'=>$periode]) }}" {{ $tingkat == 'semua' ? 'selected' : '' }}>Semester</option>
                        @for ($i = 1; $i <= 8; $i++)
                            <option value="{{ route('user.mahasiswa',['jurusan'=>$jurusan, 'tingkat'=>$i, 'periode'=>$periode]) }}" {{ $tingkat == $i ? 'selected' : '' }}>Semester {{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="col-2">
                    <select class="form-select" name="periode" id="periode_filter" required>
                        <option value="" disabled>Pilih Periode</option>
                        <option value="{{ route('user.mahasiswa',['jurusan'=>$jurusan, 'tingkat'=>$tingkat, 'periode'=>'semua']) }}" {{ $periode == 'semua' ? 'selected' : '' }}>Periode</option>
                        @for ($i = 2015; $i <= 2025; $i++)
                            <option value="{{ route('user.mahasiswa',['jurusan'=>$jurusan, 'tingkat'=>$tingkat, 'periode'=>$i]) }}" {{ $periode == $i  ? 'selected' : '' }}>{{ $i-1 }}/{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                @endif
            </div>
            <table id="user" class="table table-striped table-light" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Periode</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->username }} - {{ $user->name }}</td>
                            <td>{{ $user->periode }}</td>
                            <td>{{ $user->jurusan }}</td>
                            <td>{{ $user->prodi }}</td>
                            <td>
                                <button type="button" class="px-4 py-2 btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditModal{{$user->id}}">
                                    Edit
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="EditModal{{$user->id}}" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('user.update',$user->id) }}">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Nama</label>
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama Mahasiswa" value="{{ $user->name }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">NIM</label>
                                                            <input type="text" name="username" class="form-control" id="username" placeholder="Masukan NIM Mahasiswa" value="{{ $user->username }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-6">
                                                            <label for="periode" class="form-label">Periode</label>
                                                            <select class="form-select" name="periode" id="periode" required>
                                                                @for ($i = 2015; $i <= 2025; $i++)
                                                                    <option value="{{ $i-1 }}/{{ $i }}" {{ $user->periode == $i-1 . '/' . $i ? 'selected' : '' }}>{{ $i-1 }}/{{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <label for="tingkat" class="form-label">Semester</label>
                                                            <select class="form-select" name="tingkat" id="tingkat" required>
                                                                @for ($i = 1; $i <= 8; $i++)
                                                                    <option value={{ $i }} {{ $user->tingkat == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-12">
                                                            <label for="jurusan" class="form-label">Jurusan</label>
                                                            <select class="form-select" name="jurusan" id="jurusan" required>
                                                                <option value="Jurusan Teknologi Informasi dan Komputer" {{ $user->jurusan == 'mi' ? 'selected' : '' }}>
                                                                    Jurusan Teknologi Informasi dan Komputer
                                                                </option>
                                                                <option value="Jurusan Pertanian" {{ $user->jurusan == 'a' ? 'selected' : '' }}>
                                                                    Jurusan Pertanian
                                                                </option>
                                                                <option value="Jurusan Kesehatan" {{ $user->jurusan == 'k' ? 'selected' : '' }}>
                                                                    Jurusan Kesehatan
                                                                </option>
                                                                <option value="Jurusan Teknik Perawatan dan Perbaikan Mesin" {{ $user->jurusan == 'tppm' ? 'selected' : '' }}>
                                                                    Jurusan Teknik Perawatan dan Perbaikan Mesin
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-12">
                                                            <label for="jurusan" class="form-label">Prodi</label>
                                                            <select class="form-select" name="prodi" id="prodi" required>
                                                                <option value="D3 Sistem Informasi" {{ $user->prodi == 'D3 Sistem Informasi' ? 'selected' : '' }}>
                                                                    D3 Sistem Informasi
                                                                </option>
                                                                <option value="D3 Agroindustri" {{ $user->prodi == 'D3 Agroindustri' ? 'selected' : '' }}>
                                                                    D3 Agroindustri
                                                                </option>
                                                                <option value="D3 Keperawatan" {{ $user->prodi == 'D3 Keperawatan' ? 'selected' : '' }}>
                                                                    D3 Keperawatan
                                                                </option>
                                                                <option value="D3 Teknologi Rekayasa Manufaktur" {{ $user->prodi == 'D3 Teknologi Rekayasa Manufaktur' ? 'selected' : '' }}>
                                                                    D3 Teknologi Rekayasa Manufaktur
                                                                </option>
                                                                <option value="D4 Rekayasa Perangkat Lunak" {{ $user->prodi == 'D4 Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                                                                    D4 Rekayasa Perangkat Lunak
                                                                </option>
                                                                <option value="D4 Teknologi Produksi Tanaman dan Pangan" {{ $user->prodi == 'D4 Teknologi Produksi Tanaman dan Pangan' ? 'selected' : '' }}>
                                                                    D4 Teknologi Produksi Tanaman dan Pangan
                                                                </option>
                                                                <option value="D4 Teknologi Rekayasa Manufaktur" {{ $user->prodi == 'D4 Teknologi Rekayasa Manufaktur' ? 'selected' : '' }}>
                                                                    D4 Teknologi Rekayasa Manufaktur
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-12">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-select" name="status" id="status" required>
                                                                <option value="Aktif" {{ $user->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                                <option value="Tidak Aktif" {{ $user->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                                                <option value="Lulus" {{ $user->status == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="px-4 py-2 btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="px-4 py-2 btn btn-warning">Edit Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="px-4 py-2 btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeleteModal{{$user->id}}">
                                    Delete
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="DeleteModal{{$user->id}}" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{route('user.destroy', $user->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data <b>{{ $user->name }}</b> ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="px-4 py-2 btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="px-4 py-2 btn btn-danger">Hapus Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="px-4 py-2 btn btn-info" data-bs-toggle="modal" data-bs-target="#Password{{$user->id}}">
                                    Password
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="Password{{$user->id}}" tabindex="-1" aria-labelledby="PasswordLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="PasswordLabel">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('user.reset',$user->id) }}">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">NIM Mahasiswa</label>
                                                            <input type="text" name="username" readonly class="form-control" id="username" value="{{ $user->username }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Password Baru</label>
                                                            <input type="password" name="password" class="form-control" id="password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="px-4 py-2 btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="px-4 py-2 btn btn-info">Ubah Password</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section("script")
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

            $('#user').DataTable({
                columnDefs: [
                    { width: '5%', targets: 0 },
                    { width: '15%', targets: 1 },
                    { width: '10%', targets: 2 },
                    { width: '20%', targets: 3 },
                    { width: '20%', targets: 4 },
                    { width: '30%', targets: 5 },
                ]
            });
        });
    </script>
@endsection
