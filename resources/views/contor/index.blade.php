@extends('sablon.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ 'Lista contoare' }}</div>

                    <div class="card-body">
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nr ap</th>
                                <th scope="col">Luna</th>
                                <th scope="col">An</th>
                                <th scope="col">Nr pers</th>
                                <th scope="col">Contor buc rece</th>
                                <th scope="col">Contor buc calda</th>
                                @for($i=0; $i < \App\Models\Apartament::max('nrbai'); $i++)
                                    <th>Contor baie {{$i+1}} rece</th>
                                    <th>Contor baie {{$i+1}} calda</th>
                                @endfor
                                <th>Modifica</th>
                                <th>Sterge</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contors as $linie)
                                <tr>
                                    <td>{{$linie->apart->nrap}}</td>
                                    <td>{{$linie->luna}}</td>
                                    <td>{{$linie->an}}</td>
                                    <td>{{$linie->nrpers}}</td>

                                        <?php $j=0 ?>
                                    @foreach($linie->contoare as $contoare)
                                        <td>{{$contoare}}</td>
                                            <?php $j = $j+1; ?>
                                    @endforeach
                                    @for($y=$j; $y<\App\Models\Apartament::max('nrbai')*2+2; $y++)
                                        <td></td>
                                    @endfor
                                    <td><a href="{{route('contors.edit', [$linie->id])}}" class="btn btn-sm btn-primary">Modifica</a></td>
                                    <td>
                                        <form action="{{route('contors.destroy', [$linie->id])}}" method="POST" >@csrf
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
