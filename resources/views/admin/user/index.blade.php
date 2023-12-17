@extends('layouts.main')

@section('title')
    Data user
@endsection

@section("content")
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
            <h1>Data user</h1>
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
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf
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
                                    <div class="mb-3 col-12">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select" name="role" id="role" required>
                                            <option value="wadir">Wakil Direktur</option>
                                            <option value="mahasiswa">Mahasiswa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="periode" class="form-label">Peridoe</label>
                                        <select class="form-select" name="periode" id="periode" required>
                                            @for ($i = 2015; $i <= 2025; $i++)
                                                <option value="{{ $i-1 }}/{{ $i }}">{{ $i-1 }}/{{ $i }}</option>
                                            @endfor
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
            <button type="button" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#Import">
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
                                        <p for="file" class="form-label">File</p>
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
            <table id="user" class="table table-striped table-light" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>NIM</th>
                        <th>Role</th>
                        <th>Periode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->periode }}</td>
                            <td>
                                <button type="button" class="btn btn-warning px-4 py-2" data-bs-toggle="modal" data-bs-target="#EditModal{{$user->id}}">
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
                                                            <label for="role" class="form-label">Role</label>
                                                            <select class="form-select" name="role" id="role" required>
                                                                <option value="wadir" {{ $user->role == 'wadir' ? 'selected' : '' }}>Wakil Direktur</option>
                                                                <option value="mahasiswa" {{ $user->role == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <label for="periode" class="form-label">Peridoe</label>
                                                            <select class="form-select" name="periode" id="periode" required>
                                                                @for ($i = 2015; $i <= 2025; $i++)
                                                                    <option value="{{ $i-1 }}/{{ $i }}" {{ $user->periode == $i-1 . '/' . $i ? 'selected' : '' }}>{{ $i-1 }}/{{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary px-4 py-2" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning px-4 py-2">Edit Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger px-4 py-2" data-bs-toggle="modal" data-bs-target="#DeleteModal{{$user->id}}">
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
                                                    Apakah anda yakin ingin menghapus data <b>{{ $user->nama }}</b> ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary px-4 py-2" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger px-4 py-2">Hapus Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info px-4 py-2" data-bs-toggle="modal" data-bs-target="#Password{{$user->id}}">
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
                                                    <button type="button" class="btn btn-secondary px-4 py-2" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info px-4 py-2">Ubah Password</button>
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
            $('#user').DataTable({
                columnDefs: [
                    { width: '10%', targets: 0 }, 
                    { width: '25%', targets: 1 }, 
                    { width: '15%', targets: 2 }, 
                    { width: '10%', targets: 3 }, 
                    { width: '10%', targets: 4 }, 
                    { width: '30%', targets: 4 }, 
                ]
            });
        });
    </script>
@endsection