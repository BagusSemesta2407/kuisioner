@extends('layouts.main')

@section('title')
    Pernyataan {{ $kategori }}
@endsection

@section('additional')
    <style>
        td.line3>* {
            max-width: 600px;
            margin-bottom: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            white-space: break-spaces;
        }

        table{
            width: 100% !important;
        }
    </style>
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
            <h1>Data Pernyataan</h1>
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
                        <form method="POST" action="{{ route('kuesioner.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="kategori" class="form-label">Layanan</label>
                                        <select class="form-select" name="kategori" id="kategori" required>
                                            <option value="Tata Pamong">Tata Pamong</option>
                                            <option value="Kemahasiswaan">Kemahasiswaan</option>
                                            <option value="Sarana Prasana">Sarana Prasana</option>
                                            <option value="Keuangan">Keuangan</option>
                                            <option value="Pendidikan">Pendidikan</option>
                                            <option value="Penelitian">Penelitian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="aspek" class="form-label">Aspek</label>
                                        <select class="form-select" name="aspek" id="aspek" required>
                                            <option value="tangibles">Tangibles</option>
                                            <option value="reliability">Reliability</option>
                                            <option value="responsiveness">Responsiveness</option>
                                            <option value="assurance">Assurance</option>
                                            <option value="empathy">Empathy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="pertanyaan" class="form-label">Pernyataan</label>
                                        <textarea name="pertanyaan" class="form-control" id="pertanyaan1" placeholder="Masukan Pertanyaan" required> </textarea>
                                        {{-- <x-forms.tinymce-editor/> --}}
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
            <table id="user" class="table table-striped table-light">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Layanan</th>
                        <th>Aspek</th>
                        <th>Pernyataan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kuesioners as $kuesioner)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kuesioner->kategori }}</td>
                            <td>{{ $kuesioner->aspek }}</td>
                            <td class="line3">{!! $kuesioner->pertanyaan !!}</td>
                            <td>
                                <button type="button" class="btn btn-warning px-4 py-2" data-bs-toggle="modal" data-bs-target="#EditModal{{$kuesioner->id}}">
                                    Edit
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="EditModal{{$kuesioner->id}}" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('kuesioner.update',$kuesioner->id) }}">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="kategori" class="form-label">Layanan</label>
                                                            <select class="form-select" name="kategori" id="kategori" required>
                                                                <option value="Tata Pamong" {{ $kuesioner->kategori == 'Tata Pamong' ? 'selected' : '' }}>
                                                                    Tata Pamong
                                                                </option>
                                                                <option value="Kemahasiswaan" {{ $kuesioner->kategori == 'Kemahasiswaan' ? 'selected' : '' }}>
                                                                    Kemahasiswaan
                                                                </option>
                                                                <option value="Sarana Prasana" {{ $kuesioner->kategori == 'Sarana Prasana' ? 'selected' : '' }}>
                                                                    Sarana Prasana
                                                                </option>
                                                                <option value="Keuangan" {{ $kuesioner->kategori == 'Keuangan' ? 'selected' : '' }}>
                                                                    Keuangan
                                                                </option>
                                                                <option value="Pendidikan" {{ $kuesioner->kategori == 'Pendidikan' ? 'selected' : '' }}>
                                                                    Pendidikan
                                                                </option>
                                                                <option value="Penelitian" {{ $kuesioner->kategori == 'Penelitian' ? 'selected' : '' }}>
                                                                    Penelitian
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="aspek" class="form-label">Aspek</label>
                                                            <select class="form-select" name="aspek" id="aspek" required>
                                                                <option value="tangibles" {{ $kuesioner->aspek == 'tangibles' ? 'selected' : '' }}>Tangibles</option>
                                                                <option value="reliability" {{ $kuesioner->aspek == 'reliability' ? 'selected' : '' }}>Reliability</option>
                                                                <option value="responsiveness" {{ $kuesioner->aspek == 'responsiveness' ? 'selected' : '' }}>Responsiveness</option>
                                                                <option value="assurance" {{ $kuesioner->aspek == 'assurance' ? 'selected' : '' }}>Assurance</option>
                                                                <option value="empathy" {{ $kuesioner->aspek == 'empathy' ? 'selected' : '' }}>Empathy</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label for="pertanyaan" class="form-label">Pernyataan</label>
                                                            <textarea name="pertanyaan" class="form-control" id="pertanyaan2" placeholder="Masukan Pertanyaan" required>{{ $kuesioner->pertanyaan }}</textarea>
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
                                <button type="button" class="btn btn-danger px-4 py-2" data-bs-toggle="modal" data-bs-target="#DeleteModal{{$kuesioner->id}}">
                                    Delete
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="DeleteModal{{$kuesioner->id}}" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{route('kuesioner.destroy', $kuesioner->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data</b> ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary px-4 py-2" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger px-4 py-2">Hapus Data</button>
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
                    { width: '5%', targets: 0 }, 
                    { width: '15%', targets: 1 }, 
                    { width: '15%', targets: 2 }, 
                    { width: '45%', targets: 3 }, 
                    { width: '20%', targets: 4 }, 
                ]
            });
        });
    </script>
@endsection