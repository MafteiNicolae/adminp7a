@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Alegere luna consum' }}</div>
                        <form action="#" method="get">
                            <div class="form-group">
                                <label>Selecteaza luna de calcul</label>
                                <input class="form-control" type="number" name="lunasch">
                            </div>

                                <button class="btn btn-primary" type="submit">Alege luna</button>

                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
