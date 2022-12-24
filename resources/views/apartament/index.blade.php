@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Apartamentele mele' }}</div>

                    <div class="card-body">
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nr crt</th>
                                <th scope="col">Proprietar</th>
                                <th scope="col">Numar apartament</th>
                                <th scope="col">Numar camere</th>
                                <th scope="col">Numar bai</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($apartaments as $key=>$apartament)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$apartament->user->name}}</td>
                                    <td>{{$apartament->nrap}}</td>
                                    <td>{{$apartament->nrcam}}</td>
                                    <td>{{$apartament->nrbai}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
