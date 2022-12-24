@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Contul meu' }}</div>

                    <div class="card-body">
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <td scope="col">Nume</td>
                                <td scope="col">Email</td>
                                <td scope="col">Modificare</td>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td><a href="{{route('users.edit', [auth()->user()])}}" class="btn btn-sm btn-primary">Modifica</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
