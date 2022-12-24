@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Modificare contoare' }}</div>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                    @endif
                    <div class="card-body">

                        {{--                        @foreach($apartaments as $apartament)--}}
                        <form action="{{route('contors.update', $contor->id)}}" method="POST">@csrf
                            {{method_field('PUT')}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label>Apartamentul</label>--}}
                            {{--                                    <input type="text" name="ap_id" value="{{$apartament->nrap}}" disabled>--}}
                            {{--                                    <input type="hidden" name="ap_id" value="{{$apartament->id}}">--}}
                            {{--                                    <input value="{{$apartament->id}}" name="ap_id" class="form-control">--}}
                            {{--                                </div>--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label>Luna</label>--}}
                            {{--                                    @if(\Carbon\Carbon::now()->day<11)--}}
                            {{--                                        <input value="{{\Carbon\Carbon::now()->month-1}}" name="luna" class="form-control">--}}
                            {{--                                    @else--}}
                            {{--                                        <input value="{{\Carbon\Carbon::now()->month}}" name="luna" class="form-control">--}}
                            {{--                                    @endif--}}
                            {{--                                </div>--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label>An</label>--}}
                            {{--                                    <input value="{{\Carbon\Carbon::now()->year}}" name="an" class="form-control">--}}
                            {{--                                </div>--}}
                            <div class="form-group">
                                <label>Contor bucatarie rece</label>
                                <input type="text" name="contoare[]" value="{{$contor->contoare[0]}}" class="form-control">
                                <br>
                                <label>Contor bucatarie calda</label>
                                <input type="text" name="contoare[]" value="{{$contor->contoare[1]}}" class="form-control">
                                <br>
                                @for($i=2; $i<count($contor->contoare); $i=$i+2)
                                    <label>Contor baie {{$i/2}} rece</label>
                                    <input type="number" name="contoare[]" value="{{$contor->contoare[$i]}}" class="form-control">
                                    <br>
                                    <label>Contor baie {{$i/2}} calda</label>
                                    <input type="number" name="contoare[]" value="{{$contor->contoare[$i+1]}}" class="form-control">
                                    <br>
                                @endfor
                            </div>

                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Modifica</button>
                                <a href="{{route('admin.contors.index')}}" class="btn btn-secondary">Inapoi</a>
                            </div>
                        </form>

                        {{--                        @endforeach--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

