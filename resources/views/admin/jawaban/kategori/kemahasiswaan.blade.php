<div class="card my-3">
    <div class="card-body">
        <h2 class="my-2">Kemahasiswaan</h2>
        <table class="table">
            <thead class="bg-dark text-light text-center">
                <tr>
                    <td rowspan="2" scope="col" class="border-right">Aspek</td>
                    <td rowspan="2" scope="col" class="border-right">Pernyataan</td>
                    <td colspan="5" scope="col" class="border-right">Persepsi</td>
                    <td colspan="5" scope="col">Harapan</td>
                </tr>
                <tr>
                    <td scope="col">STB</td>
                    <td scope="col">KB</td>
                    <td scope="col">CB</td>
                    <td scope="col">B</td>
                    <td scope="col" class="border-right">SB</td>
                    <td scope="col">STM</td>
                    <td scope="col">KM</td>
                    <td scope="col">CM</td>
                    <td scope="col">M</td>
                    <td scope="col">SM</td>
                </tr>
            </thead>
            <tbody>
                @if(!empty($Kemahasiswaan['tangibles']))
                    @foreach($Kemahasiswaan['tangibles'] as $key => $kuesionerItem)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ count($Kemahasiswaan['tangibles']) }}" scope="row" class="text-center">Tangibles</th> 
                            @endif
                            <td class="line3">{!! $kuesionerItem['kuesioner']->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_1" value="STB" {{ $kuesionerItem['jawaban'][0] == 'STB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_2" value="KB" {{ $kuesionerItem['jawaban'][0] == 'KB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_3" value="CB" {{ $kuesionerItem['jawaban'][0] == 'CB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_4" value="B" {{ $kuesionerItem['jawaban'][0] == 'B' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_5" value="SB" {{ $kuesionerItem['jawaban'][0] == 'SB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_1" value="STM" {{ $kuesionerItem['jawaban'][1] == 'STM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_2" value="SM" {{ $kuesionerItem['jawaban'][1] == 'KM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_3" value="CM" {{ $kuesionerItem['jawaban'][1] == 'CM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_4" value="M" {{ $kuesionerItem['jawaban'][1] == 'M' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_5" value="SM" {{ $kuesionerItem['jawaban'][1] == 'SM' ? 'checked' : '' }} disabled>
                            </td>
                        </tr>
                    @endforeach
                @endif

                @if(!empty($Kemahasiswaan['reliability']))
                    @foreach($Kemahasiswaan['reliability'] as $key => $kuesionerItem)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ count($Kemahasiswaan['reliability']) }}" scope="row" class="text-center">Reliability</th>
                            @endif
                            <td class="line3">{!! $kuesionerItem['kuesioner']->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_1" value="STB" {{ $kuesionerItem['jawaban'][0] == 'STB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_2" value="KB" {{ $kuesionerItem['jawaban'][0] == 'KB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_3" value="CB" {{ $kuesionerItem['jawaban'][0] == 'CB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_4" value="B" {{ $kuesionerItem['jawaban'][0] == 'B' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_5" value="SB" {{ $kuesionerItem['jawaban'][0] == 'SB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_1" value="STM" {{ $kuesionerItem['jawaban'][1] == 'STM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_2" value="SM" {{ $kuesionerItem['jawaban'][1] == 'KM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_3" value="CM" {{ $kuesionerItem['jawaban'][1] == 'CM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_4" value="M" {{ $kuesionerItem['jawaban'][1] == 'M' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_5" value="SM" {{ $kuesionerItem['jawaban'][1] == 'SM' ? 'checked' : '' }} disabled>
                            </td>
                        </tr>
                    @endforeach
                @endif

                @if(!empty($Kemahasiswaan['responsiveness']))
                    @foreach($Kemahasiswaan['responsiveness'] as $key => $kuesionerItem)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ count($Kemahasiswaan['responsiveness']) }}" scope="row" class="text-center">Responsiveness</th>
                            @endif
                            <td class="line3">{!! $kuesionerItem['kuesioner']->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_1" value="SK" {{ $kuesionerItem['jawaban'][0] == 'SK' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_2" value="KB" {{ $kuesionerItem['jawaban'][0] == 'KB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_3" value="CB" {{ $kuesionerItem['jawaban'][0] == 'CB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_4" value="B" {{ $kuesionerItem['jawaban'][0] == 'B' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_5" value="SB" {{ $kuesionerItem['jawaban'][0] == 'SB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_1" value="SKM" {{ $kuesionerItem['jawaban'][1] == 'SKM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_2" value="SM" {{ $kuesionerItem['jawaban'][1] == 'KM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_3" value="CM" {{ $kuesionerItem['jawaban'][1] == 'CM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_4" value="M" {{ $kuesionerItem['jawaban'][1] == 'M' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_5" value="SM" {{ $kuesionerItem['jawaban'][1] == 'SM' ? 'checked' : '' }} disabled>
                            </td>
                        </tr>
                    @endforeach
                @endif

                @if(!empty($Kemahasiswaan['assurance']))
                    @foreach($Kemahasiswaan['assurance'] as $key => $kuesionerItem)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ count($Kemahasiswaan['assurance']) }}" scope="row" class="text-center">Assurance</th>
                            @endif
                            <td class="line3">{!! $kuesionerItem['kuesioner']->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_1" value="SK" {{ $kuesionerItem['jawaban'][0] == 'SK' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_2" value="KB" {{ $kuesionerItem['jawaban'][0] == 'KB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_3" value="CB" {{ $kuesionerItem['jawaban'][0] == 'CB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_4" value="B" {{ $kuesionerItem['jawaban'][0] == 'B' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_5" value="SB" {{ $kuesionerItem['jawaban'][0] == 'SB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_1" value="SKM" {{ $kuesionerItem['jawaban'][1] == 'SKM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_2" value="SM" {{ $kuesionerItem['jawaban'][1] == 'KM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_3" value="CM" {{ $kuesionerItem['jawaban'][1] == 'CM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_4" value="M" {{ $kuesionerItem['jawaban'][1] == 'M' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_5" value="SM" {{ $kuesionerItem['jawaban'][1] == 'SM' ? 'checked' : '' }} disabled>
                            </td>
                        </tr>
                    @endforeach
                @endif

                @if(!empty($Kemahasiswaan['empathy']))
                    @foreach($Kemahasiswaan['empathy'] as $key => $kuesionerItem)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ count($Kemahasiswaan['empathy']) }}" scope="row" class="text-center">Empathy</th>
                            @endif
                            <td class="line3">{!! $kuesionerItem['kuesioner']->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_1" value="SK" {{ $kuesionerItem['jawaban'][0] == 'SK' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_2" value="KB" {{ $kuesionerItem['jawaban'][0] == 'KB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_3" value="CB" {{ $kuesionerItem['jawaban'][0] == 'CB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_4" value="B" {{ $kuesionerItem['jawaban'][0] == 'B' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_P_{{ $kuesionerItem['kuesioner']->id }}" id="radio_P_{{ $kuesionerItem['kuesioner']->id }}_5" value="SB" {{ $kuesionerItem['jawaban'][0] == 'SB' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_1" value="SKM" {{ $kuesionerItem['jawaban'][1] == 'SKM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_2" value="SM" {{ $kuesionerItem['jawaban'][1] == 'KM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_3" value="CM" {{ $kuesionerItem['jawaban'][1] == 'CM' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_4" value="M" {{ $kuesionerItem['jawaban'][1] == 'M' ? 'checked' : '' }} disabled>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="radio_H_{{ $kuesionerItem['kuesioner']->id }}" id="radio_H_{{ $kuesionerItem['kuesioner']->id }}_5" value="SM" {{ $kuesionerItem['jawaban'][1] == 'SM' ? 'checked' : '' }} disabled>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>