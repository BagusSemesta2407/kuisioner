<div class="card my-3">
    <div class="card-body">
        <h2 class="my-2">Pendidikan</h2>
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
                @if ($tangibles_Pendidikan->count() > 0)
                    <input type="hidden" name="pendidikan" value="Pendidikan">
                    @foreach($tangibles_Pendidikan as $key => $item)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ $tangibles_Pendidikan->count() }}" scope="row" class="text-center">Tangibles</th>
                            @endif
                            <input type="hidden" name="pd_pertanyaan_{{ $item->id }}" value="{{ $item->id }}">
                            <td class="line3">{!! $item->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_1" value="STB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_2" value="KB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_3" value="CB" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_4" value="B">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_5" value="SB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_1" value="STM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_2" value="KM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_3" value="CM" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_4" value="M">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_5" value="SM">
                            </td>
                        </tr>
                    @endforeach
                @endif

                @if ($reliability_Pendidikan->count() > 0)
                    <input type="hidden" name="pendidikan" value="Pendidikan">
                    @foreach($reliability_Pendidikan as $key => $item)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ $reliability_Pendidikan->count() }}" scope="row" class="text-center">Reliability</th>
                            @endif
                            <input type="hidden" name="pd_pertanyaan_{{ $item->id }}" value="{{ $item->id }}">
                            <td class="line3">{!! $item->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_1" value="STB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_2" value="KB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_3" value="CB" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_4" value="B">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_5" value="SB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_1" value="STM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_2" value="KM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_3" value="CM" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_4" value="M">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_5" value="SM">
                            </td>
                        </tr>
                    @endforeach
                @endif

                @if ($responsiveness_Pendidikan->count() > 0)
                    <input type="hidden" name="pendidikan" value="Pendidikan">
                    @foreach($responsiveness_Pendidikan as $key => $item)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ $responsiveness_Pendidikan->count() }}" scope="row" class="text-center">Responsiveness</th>
                            @endif
                            <input type="hidden" name="pd_pertanyaan_{{ $item->id }}" value="{{ $item->id }}">
                            <td class="line3">{!! $item->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_1" value="STB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_2" value="KB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_3" value="CB" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_4" value="B">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_5" value="SB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_1" value="STM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_2" value="KM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_3" value="CM" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_4" value="M">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_5" value="SM">
                            </td>
                        </tr>
                    @endforeach
                @endif

                @if ($assurance_Pendidikan->count() > 0)
                    <input type="hidden" name="pendidikan" value="Pendidikan">
                    @foreach($assurance_Pendidikan as $key => $item)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ $assurance_Pendidikan->count() }}" scope="row" class="text-center">Assurance</th>
                            @endif
                            <input type="hidden" name="pd_pertanyaan_{{ $item->id }}" value="{{ $item->id }}">
                            <td class="line3">{!! $item->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_1" value="STB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_2" value="KB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_3" value="CB" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_4" value="B">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_5" value="SB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_1" value="STM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_2" value="KM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_3" value="CM" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_4" value="M">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_5" value="SM">
                            </td>
                        </tr>
                    @endforeach
                @endif

                @if ($empathy_Pendidikan->count() > 0)
                    <input type="hidden" name="pendidikan" value="Pendidikan">
                    @foreach($empathy_Pendidikan as $key => $item)
                        <tr>
                            @if($key === 0)
                                <th rowspan="{{ $empathy_Pendidikan->count() }}" scope="row" class="text-center">Empathy</th>
                            @endif
                            <input type="hidden" name="pd_pertanyaan_{{ $item->id }}" value="{{ $item->id }}">
                            <td class="line3">{!! $item->pertanyaan !!}</td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_1" value="STB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_2" value="KB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_3" value="CB" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_4" value="B">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_P_{{ $item->id }}" id="radio_P_{{ $item->id }}_5" value="SB">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_1" value="STM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_2" value="KM">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_3" value="CM" checked>
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_4" value="M">
                            </td>
                            <td>
                                <input class="form-check-input position-static ml-1" type="radio" name="pd_radio_H_{{ $item->id }}" id="radio_H_{{ $item->id }}_5" value="SM">
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>