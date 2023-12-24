@extends('layouts.main')

@section('title')
    Data user Jurusan
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success border-0 bg-success alert-dismissible fade show">
            <div class="text-white"><i class='bx bxs-check-circle'></i> {{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- For each Error -->
    @if ($errors->any())
        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
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
            <h1>Data user Jurusan</h1>
            <!-- Alert -->
            <button type="button" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#TambahModal">
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
                        <form method="POST" action="{{ route('admin-jurusan.store') }}">
                            @csrf
                            <input type='hidden' name='role' value="jurusan">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Masukan Nama" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username"
                                            placeholder="Masukan username" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="jurusan_id" class="form-label">Jurusan</label>
                                        <select class="form-select" name="jurusan_id" id="jurusan_id" required>
                                            <option value="" selected disabled>Pilih Jurusan</option>
                                            @foreach ($jurusan as $jr)
                                                <option value="{{ $jr->id }}"
                                                    {{ old('jurusan_id') == $jr->id ? 'selected' : '' }}>
                                                    {{ $jr->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="program_studi_id" class="form-label">Program Studi</label>
                                        <select class="form-select" name="program_studi_id" id="program_studi_id" required>
                                            <option value="" selected disabled>Pilih Program Studi</option>
                                            @foreach ($programStudi as $ps)
                                                <option value="{{ $ps->id }}"
                                                    {{ old('program_studi_id') == $ps->id ? 'selected' : '' }}>
                                                    {{ $ps->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Masukan Password user" required>
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
            <table id="user" class="table table-striped table-light" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $users)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->username }}</td>
                            <td>
                                {{-- @switch($user->jurusan)
                                    @case('mi')
                                        Jurusan Teknologi Informasi dan Komputer
                                        @break
                                    @case('a')
                                        Jurusan Pertanian
                                        @break
                                    @case('tppm')
                                        Jurusan Teknik Perawatan dan Perbaikan Mesin
                                        @break
                                        @case('k')
                                        Jurusan Kesehatan
                                        @break
                                    @default
                                        Jurusan Tidak Diketahui
                                @endswitch --}}
                                {{ @$users->jurusan->name }}
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning px-4 py-2" data-bs-toggle="modal"
                                    data-bs-target="#EditModal{{ $users->id }}">
                                    Edit
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="EditModal{{ $users->id }}" tabindex="-1"
                                    aria-labelledby="EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('admin-jurusan.update', $users->id) }}">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Nama</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="name" placeholder="Masukan Nama"
                                                                value="{{ $users->name }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text" name="username" class="form-control"
                                                                id="username" placeholder="Masukan Usename"
                                                                value="{{ $users->username }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-12">
                                                            <label for="jurusan_id" class="form-label">Jurusan</label>
                                                            <select class="form-select" name="jurusan_id" id="jurusan_id" required>
                                                                <option value="" selected disabled>Pilih Jurusan</option>
                                                                @foreach ($jurusan as $jr)
                                                                    <option value="{{ $jr->id }}"
                                                                        {{ old('jurusan_id', $users->jurusan_id) == $jr->id ? 'selected' : '' }}>
                                                                        {{ $jr->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="mb-3 col-12">
                                                            <label for="program_studi_id" class="form-label">Program Studi</label>
                                                            <select class="form-select" name="program_studi_id" id="program_studi_id" required>
                                                                <option value="" selected disabled>Pilih Program Studi</option>
                                                                @foreach ($programStudi as $ps)
                                                                    <option value="{{ $ps->id }}"
                                                                        {{ old('program_studi_id', $users->program_studi_id) == $ps->id ? 'selected' : '' }}>
                                                                        {{ $ps->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary px-4 py-2"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning px-4 py-2">Edit
                                                        Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger px-4 py-2" data-bs-toggle="modal"
                                    data-bs-target="#DeleteModal{{ $users->id }}">
                                    Delete
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="DeleteModal{{ $users->id }}" tabindex="-1"
                                    aria-labelledby="DeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST"
                                                action="{{ route('admin-jurusan.destroy', $users->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data <b>{{ $users->name }}</b> ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary px-4 py-2"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger px-4 py-2">Hapus
                                                        Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info px-4 py-2" data-bs-toggle="modal"
                                    data-bs-target="#Password{{ $users->id }}">
                                    Password
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="Password{{ $users->id }}" tabindex="-1"
                                    aria-labelledby="PasswordLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="PasswordLabel">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('pw-reset', $users->id) }}">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text" name="username" readonly
                                                                class="form-control" id="username"
                                                                value="{{ $users->username }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Password Baru</label>
                                                            <input type="password" name="password" class="form-control"
                                                                id="password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary px-4 py-2"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info px-4 py-2">Ubah
                                                        Password</button>
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

@section('script')
    <script>
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
                        width: '15%',
                        targets: 2
                    },
                    {
                        width: '10%',
                        targets: 3
                    },
                    {
                        width: '30%',
                        targets: 4
                    },
                ]
            });
        });
    </script>
@endsection
