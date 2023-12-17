@extends('layouts.main')

@section('title', 'Kuesioner')

@section('content')
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
    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            @if( Auth::user()->role == 'jurusan' )
                @include('admin.dashboard.jurusan')
            @endif
            @if( Auth::user()->role == 'mahasiswa' )
                @include('admin.dashboard.mahasiswa')
            @endif
            @if( Auth::user()->role == 'p4mp' )
                @include('admin.dashboard.p4mp')
            @endif
        </div>
    </div>
@endsection