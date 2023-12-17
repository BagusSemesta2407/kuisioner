<div class="row">
    @if ( Auth::user()->jurusan == 'mi' )
        <div class="col-md-6 mb-4 transparent">
            <div style="min-height: 150px" class="card card-dark-blue">
                <div class="card-body">
                    <p class="h3 mb-4 ">Jurusan Teknologi Informasi dan Komputer</p>
                    <p class="h4" > {{ $mi }} Mahasiswa </p>
                </div>
            </div>
        </div>
    @endif
    @if ( Auth::user()->jurusan == 'a' )
    <div class="col-md-6 mb-4 transparent">
        <div style="min-height: 150px" class="card card-dark-blue">
            <div class="card-body">
                <p class="h3 mb-4 ">Jurusan Pertanian</p>
                <p class="h4" > {{ $a }} Mahasiswa </p>
            </div>
        </div>
    </div>
    @endif
    @if ( Auth::user()->jurusan == 'k' )
    <div class="col-md-6 mb-4 transparent">
        <div style="min-height: 150px" class="card card-dark-blue">
            <div class="card-body">
                <p class="h3 mb-4 ">Jurusan Kesehatan</p>
                <p class="h4" > {{ $k }} Mahasiswa </p>
            </div>
        </div>
    </div>
    @endif
    @if ( Auth::user()->jurusan == 'tppm' )
    <div class="col-md-6 mb-4 transparent">
        <div style="min-height: 150px" class="card card-dark-blue">
            <div class="card-body">
                <p class="h3 mb-4 ">Jurusan Teknik Perawatan dan Perbaikan Mesin</p>
                <p class="h4" > {{ $tppm }} Mahasiswa </p>
            </div>
        </div>
    </div>
    @endif
</div>
