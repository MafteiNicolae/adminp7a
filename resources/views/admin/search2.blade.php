@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Consum') }}</div>
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Apartament</th>
                                    <th scope="col">Contor buc rece</th>
                                    <th scope="col">Contor buc cald</th>
                                    @for($i=0; $i < \App\Models\Apartament::max('nrbai'); $i++)
                                        <th scope="col">Contor baie {{$i+1}} rece</th>
                                        <th scope="col">Contor baie {{$i+1}} calda</th>
                                    @endfor
                                </tr>
                            </thead>
                            @foreach(App\Models\Apartament::all() as $apartament)
                                <tr>
                                    <td>{{$apartament->nrap}}</td>
                                    @foreach(App\Models\Contor::all() as $rand)
                                        {{--            @foreach($contorl as $rand)--}}
                                        @if($apartament->id == $rand->ap_id && $rand->luna == $lunasch)
                                            @foreach(App\Models\Contor::all() as $rand2)
                                                {{--                    @foreach($contorl as $rand2)--}}
                                                @if($apartament->id == $rand2->ap_id && $rand2->luna == ($lunasch-1))
                                                    @for($i=0; $i<count($rand->contoare); $i++)
                                                        <td>{{$rand->contoare[$i] - $rand2->contoare[$i]}}</td>
                                                    @endfor
                                               @endif
                                           @endforeach
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
