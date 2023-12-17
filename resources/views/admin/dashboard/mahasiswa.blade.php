<h2 class="pr-5">Selamat datang {{ Auth::user()->name }}, </h2>
<h3>
    Di sistem informasi  kualitas layanan terhadap kepuasan mahasiswa politeknik negeri subang
</h3>

@if ($riwayat > 0)
    <button class="mt-3 btn btn-primary" {{ $riwayat > 0 ? 'disabled' : '' }}>Lakukan Kuesioner!</button>
    <p class="mt-3 text-secondary">Anda sudah mengisi kuesioner tahun ini</p>
    <a class="btn btn-primary" href="{{ route('jawaban.detail',['id'=>Auth::user()->id ]) }}">Lihat Riwayat Kuesioner!</a>
@else
    <a class="mt-3 btn btn-primary" href="{{ route('kuesioner.pertanyaan') }}" {{ $riwayat > 0 ? 'disabled' : '' }}>Lakukan Kuesioner!</a>
@endif