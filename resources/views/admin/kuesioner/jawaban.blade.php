@extends('layouts.main')

@section('title', 'Pernyataan')

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
                    <h4>Keterangan Pengisian : </h4>
                    <p> 
                        <hr>
                        <strong>Persepsi</strong> <br>
                        STB=sangat tidak baik, KB=kurang baik, CB=cukup baik, B=baik, SB=sangat baik <br><br>
                        <strong>Harapan</strong> <br>
                        STM=sangat tidak memuaskan, KM=kurang memuaskan, CM=cukup memuaskan, M=memuaskan, SM=sangat memuaskan
                        <hr>
                    </p>
                </div>
            </div>
            <form action="{{ route('kuesioner.jawab') }}" method="post">
                @csrf
                @if ($TataPamong->count() > 0)
                    @include('admin.kuesioner.kategori.TataPamong')
                @endif
                @if ($Kemahasiswaan->count() > 0)
                    @include('admin.kuesioner.kategori.Kemahasiswaan')
                @endif
                @if ($SaranaPrasana->count() > 0)
                    @include('admin.kuesioner.kategori.SaranaPrasana')
                @endif
                @if ($Keuangan->count() > 0)
                    @include('admin.kuesioner.kategori.Keuangan')
                @endif
                @if ($Pendidikan->count() > 0)
                    @include('admin.kuesioner.kategori.Pendidikan')
                @endif
                @if ($Penelitian->count() > 0)
                    @include('admin.kuesioner.kategori.Penelitian')
                @endif

                @if ($kuesioners->count() > 0)
                    <div class="d-flex justify-content-end mt-2">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
