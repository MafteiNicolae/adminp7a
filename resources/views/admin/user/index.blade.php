@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Lista conturi utilizator' }}</div>

                    <div class="card-body">
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nr crt</th>
                                <th scope="col">Nume</th>
                                <th scope="col">Email</th>
                                <th scope="col">Modificare</th>
                                <th scope="col">Stergere</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users2 as $key=>$user)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a href="{{route('admin.users.edit', [$user->id])}}" class="btn btn-sm btn-primary">Modifica</a></td>
                                    <td>
{{--                                        <a herf="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$user->id}}">Sterge</a>--}}

{{--                                        <!-- Modal -->--}}
{{--                                        <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                            <div class="modal-dialog" role="document">--}}
{{--                                                <form action="{{route('admin.users.destroy', [$user->id])}}" method="POST" >@csrf--}}
{{--                                                    {{method_field('DELETE')}}--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header">--}}
{{--                                                            <h5 class="modal-title" id="exampleModalLabel">Confirmare stergere</h5>--}}
{{--                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                                <span aria-hidden="true">&times;</span>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            Doriti sa sterget?--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Anulare</button>--}}
{{--                                                            <button type="button" class="btn btn-primary">Sterge</button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <form action="{{route('admin.users.destroy', [$user->id])}}" method="POST" >@csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">Stergere</button>
                                        </form>
                                    </td>
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

