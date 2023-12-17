@extends('layouts.main')

@section('title', 'Kuesioner')

@section('addtional')
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
    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            <div class="row">
                <div class="col-md-4 mb-4 transparent">
                    <a href="{{ route('kuesioner.pertanyaan',['kategori'=>'Tata Pamong']) }}">
                        <div style="min-height: 150px" class="card card-dark-blue">
                            <div
                                class="card-body"
                            >
                                <p
                                    class="mb-4"
                                >
                                    Responden
                                </p>
                                <h5
                                    class="fs-30"
                                >
                                    Layanan Tata pamong
                            </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 transparent">
                    <a href="{{ route('kuesioner.pertanyaan',['kategori'=>'kemahasiswaan']) }}">
                        <div style="min-height: 150px" class="card card-dark-blue">
                            <div
                                class="card-body"
                            >
                                <p
                                    class="mb-4"
                                >
                                    Responden
                                </p>
                                <h5
                                    class="fs-30"
                                >
                                    Layanan Kemahasiswaan
                            </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 transparent">
                    <a href="{{ route('kuesioner.pertanyaan',['kategori'=>'Sarana Prasana']) }}">
                        <div style="min-height: 150px" class="card card-dark-blue">
                            <div
                                class="card-body"
                            >
                                <p
                                    class="mb-4"
                                >
                                    Responden
                                </p>
                                <h5
                                    class="fs-30"
                                >
                                    Layanan Sarana dan prasarana
                            </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 transparent">
                    <a href="{{ route('kuesioner.pertanyaan',['kategori'=>'keuangan']) }}">
                        <div style="min-height: 150px" class="card card-dark-blue">
                            <div
                                class="card-body"
                            >
                                <p
                                    class="mb-4"
                                >
                                    Responden
                                </p>
                                <h5
                                    class="fs-30"
                                >
                                    Layanan Keuangan
                            </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 transparent">
                    <a href="{{ route('kuesioner.pertanyaan',['kategori'=>'pendidikan']) }}">
                        <div style="min-height: 150px" class="card card-dark-blue">
                            <div
                                class="card-body"
                            >
                                <p
                                    class="mb-4"
                                >
                                    Responden
                                </p>
                                <h5
                                    class="fs-30"
                                >
                                    Layanan Pendidikan
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 transparent">
                    <a href="{{ route('kuesioner.pertanyaan',['kategori'=>'penelitian']) }}">
                        <div style="min-height: 150px" class="card card-dark-blue">
                            <div
                                class="card-body"
                            >
                                <p
                                    class="mb-4"
                                >
                                    Responden
                                </p>
                                <h5
                                    class="fs-30"
                                >
                                    Layanan Penelitian
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
