@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Inregistrare contoare' }}</div>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                    @endif
                    <div class="card-body">
                        <form id="form-show" class="form-control">
                            <label>Alege apartamentul</label>

                            <select id="myselect">
                                <option value="" selected="selected"></option>
                                @foreach($apartaments as $apartament)
                                    <option value="{{$apartament->id}}">{{$apartament->nrap}}</option>
                                @endforeach
                            </select>
                        </form>


                        @foreach($apartaments as $apartament)
                            <form name="{{$apartament->id}}" id="{{$apartament->id}}" style="display: none" action="{{route('contors.store')}}" method="POST">@csrf
                                <div class="form-group">
                                    <label>Apartamentul</label>

                                    <input type="text" name="ap_id" value="{{$apartament->nrap}}" disabled>
                                    <input type="hidden" name="ap_id" value="{{$apartament->id}}">
                                </div>
                                <div class="form-group">
                                    <label>Luna</label>
                                    @if(\Carbon\Carbon::now()->day<11)
                                        <input value="{{\Carbon\Carbon::now()->month-1}}" name="luna" class="form-control">
                                    @else
                                        <input value="{{\Carbon\Carbon::now()->month}}" name="luna" class="form-control">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>An</label>
                                    <input value="{{\Carbon\Carbon::now()->year}}" name="an" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Contor bucatarie rece</label>
                                    <input type="text" name="contoare[]" class="form-control">
                                    <br>
                                    <label>Contor bucatarie calda</label>
                                    <input type="text" name="contoare[]" class="form-control">
                                    <br>
                                    @for($i=0; $i<$apartament->nrbai; $i++)
                                        <label>Contor baie {{$i+1}} rece</label>
                                        <input type="number" name="contoare[]" class="form-control">
                                        <br>
                                        <label>Contor baie {{$i+1}} calda</label>
                                        <input type="number" name="contoare[]" class="form-control">
                                        <br>
                                    @endfor
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Adauga</button>
                                    <a href="{{route('contors.create')}}" class="btn btn-secondary">Inapoi</a>
                                </div>
                            </form>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
