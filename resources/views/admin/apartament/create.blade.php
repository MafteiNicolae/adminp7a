@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Creare apartament' }}</div>
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('admin.apartaments.store')}}" method="POST">@csrf
                            <div class="form-group">
                                <label>Proprietar</label>
                                <select class="form-control @error('nrap') is-invalid @enderror" name="user_id">
                                    @foreach(App\Models\User::all() as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                                @error('nrap')
                                <spam class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </spam>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Numar apartament</label>
                                <input type="number" name="nrap" class="form-control @error('nrap') is-invalid @enderror">
                                @error('nrap')
                                <spam class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </spam>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Numar camere</label>
                                <input type="number" name="nrcam" class="form-control @error('nrcam') is-invalid @enderror">
                                @error('nrcam')
                                <spam class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </spam>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Numar bai</label>
                                <input type="number" name="nrbai" class="form-control @error('nrbai') is-invalid @enderror">
                                @error('nrbai')
                                <spam class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </spam>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Adauga</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


