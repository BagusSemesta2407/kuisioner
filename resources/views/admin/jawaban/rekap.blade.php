@extends('layouts.main')

@section('title', 'Rekap Jawaban ')

@section('additional')
    <style>
        .ellipsis {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .text-center {
            text-align: center !important;
            vertical-align: middle !important;
        }

        td.ellipsis>* {
            max-width: 200px;
            margin-bottom: 0;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        td.line3 {
            width: 450px;
        }

        td.line3>* {
            max-width: 450px;
            margin-bottom: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            white-space: break-spaces;
        }
    </style>
@endsection

@section('content')
    <div class="my-4 card">
        <div class="card-body">
            <h3 class="mb-3">Rekapitulasi Layanan {{ $layanan }}</h3>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @if ($layanan == 'semua')
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="persepsi-tab" data-toggle="tab" data-target="#persepsi" type="button"
                        role="tab" aria-controls="persepsi" aria-selected="true">Persepsi dan Harapan</button>
                    </li>
                @endif
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="gap-tab" data-toggle="tab" data-target="#gap" type="button"
                        role="tab" aria-controls="gap" aria-selected="false">Gap</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                @if ($layanan == 'semua')
                    <div class="tab-pane fade show active" id="persepsi" role="tabpanel" aria-labelledby="persepsi-tab">
                        @include('admin.jawaban.rekap-harapan-persepsi')
                    </div>
                @endif
                <div class="tab-pane fade {{ $layanan != 'semua' ? 'show active' : '' }}" id="gap" role="tabpanel" aria-labelledby="gap-tab">
                    @include('admin.jawaban.rekap-gap')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
