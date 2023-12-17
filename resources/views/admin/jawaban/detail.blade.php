@extends('layouts.main')

@section('title', 'Pertanyan')

@section('additional')
    <style>
        td.line3>* {
            max-width: 350px;
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

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-4">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" name="Nama" class="form-control" id="Nama" value="{{ Auth::user()->username }} - {{ Auth::user()->name }}" readonly/> 
                        </div>
                        <div class="mb-3 col-4">
                            <label for="Jurusan" class="form-label">Jurusan</label>
                            <input type="text" name="Jurusan" class="form-control" id="Jurusan" value="{{ Auth::user()->jurusan }}" readonly/>
                        </div>
                        <div class="mb-3 col-4">
                            <label for="created" class="form-label">Waktu Pengisian</label>
                            <input type="text" name="created" class="form-control" id="created" value="{{ $created_at }}" readonly/> 
                        </div>
                    </div>
                </div>
            </div>
            @if (!empty($TataPamong))
                @include('admin.jawaban.kategori.TataPamong')
            @endif
            @if (!empty($Kemahasiswaan))
                @include('admin.jawaban.kategori.Kemahasiswaan')
            @endif
            @if (!empty($SaranaPrasana))
                @include('admin.jawaban.kategori.SaranaPrasana')
            @endif
            @if (!empty($Keuangan))
                @include('admin.jawaban.kategori.Keuangan')
            @endif
            @if (!empty($Pendidikan))
                @include('admin.jawaban.kategori.Pendidikan')
            @endif
            @if (!empty($Penelitian))
                @include('admin.jawaban.kategori.Penelitian')
            @endif
            <a href="{{ route('admin') }}" class="btn btn-info mt-3">Kembali</a>
        </div>
    </div>
@endsection
