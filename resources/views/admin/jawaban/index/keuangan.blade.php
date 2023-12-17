@foreach ($Keuangan as $item)
    <tr>
        <td>{{ $item['tahun'] }}</td>
        <td>Keuangan</td>
        <td>Tangibles</td>
        <td>{{ $item['tangibles']['mean_gap_nilai'] }}</td>
        <td>{{ $item['tangibles']['konversi_mean_gap_nilai'] }}</td>
        <td class="d-flex">
            <a href="{{ route('jawaban.rekap',['kategori'=>'keuangan']) }}" class="mx-1 btn btn-primary py-2 px-4">Rekap</a>
            <form action="{{ route('export.jawaban') }}" method="POST">
                @csrf
                <input type="hidden" name="kategori" value="keuangan">
                <button type="submit" class="btn btn-info py-2 px-4 mx-1">Cetak</button>
            </form>
        </td>
    </tr>
    <tr>
        <td>{{ $item['tahun'] }}</td>
        <td>Keuangan</td>
        <td>Reliability</td>
        <td>{{ $item['reliability']['mean_gap_nilai'] }}</td>
        <td>{{ $item['reliability']['konversi_mean_gap_nilai'] }}</td>
        <td class="d-flex">
            <a href="{{ route('jawaban.rekap',['kategori'=>'keuangan']) }}" class="mx-1 btn btn-primary py-2 px-4">Rekap</a>
            <form action="{{ route('export.jawaban') }}" method="POST">
                @csrf
                <input type="hidden" name="kategori" value="keuangan">
                <button type="submit" class="btn btn-info py-2 px-4 mx-1">Cetak</button>
            </form>
        </td>
    </tr>
    <tr>
        <td>{{ $item['tahun'] }}</td>
        <td>Keuangan</td>
        <td>Responsiveness</td>
        <td>{{ $item['responsiveness']['mean_gap_nilai'] }}</td>
        <td>{{ $item['responsiveness']['konversi_mean_gap_nilai'] }}</td>
        <td class="d-flex">
            <a href="{{ route('jawaban.rekap',['kategori'=>'keuangan']) }}" class="mx-1 btn btn-primary py-2 px-4">Rekap</a>
            <form action="{{ route('export.jawaban') }}" method="POST">
                @csrf
                <input type="hidden" name="kategori" value="keuangan">
                <button type="submit" class="btn btn-info py-2 px-4 mx-1">Cetak</button>
            </form>
        </td>
    </tr>
    <tr>
        <td>{{ $item['tahun'] }}</td>
        <td>Keuangan</td>
        <td>Assurance</td>
        <td>{{ $item['assurance']['mean_gap_nilai'] }}</td>
        <td>{{ $item['assurance']['konversi_mean_gap_nilai'] }}</td>
        <td class="d-flex">
            <a href="{{ route('jawaban.rekap',['kategori'=>'keuangan']) }}" class="mx-1 btn btn-primary py-2 px-4">Rekap</a>
            <form action="{{ route('export.jawaban') }}" method="POST">
                @csrf
                <input type="hidden" name="kategori" value="keuangan">
                <button type="submit" class="btn btn-info py-2 px-4 mx-1">Cetak</button>
            </form>
        </td>
    </tr>
    <tr>
        <td>{{ $item['tahun'] }}</td>
        <td>Keuangan</td>
        <td>Empathy</td>
        <td>{{ $item['empathy']['mean_gap_nilai'] }}</td>
        <td>{{ $item['empathy']['konversi_mean_gap_nilai'] }}</td>
        <td class="d-flex">
            <a href="{{ route('jawaban.rekap',['kategori'=>'keuangan']) }}" class="mx-1 btn btn-primary py-2 px-4">Rekap</a>
            <form action="{{ route('export.jawaban') }}" method="POST">
                @csrf
                <input type="hidden" name="kategori" value="keuangan">
                <button type="submit" class="btn btn-info py-2 px-4 mx-1">Cetak</button>
            </form>
        </td>
    </tr>
@endforeach