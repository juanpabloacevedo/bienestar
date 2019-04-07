@extends('admin.layouts.base_cms')

@section('content')
<div class="row">
    <div class="col m12 s12">
        <div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div>
                
                    <ul>
                    <table class="table striped">
                    <title>Lista de clases</title>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>clase</th>
                                <th>periodo</th>
                                <th>espacio deportivo</th>
                                <th>cupos</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @if($clases->count()==0)
                            vacío 
                            @endif
                            @foreach($clases as $clase)
                            <tr>
                            <td>{{$clase->id}}</td>
                            <td>{{$clase->name}}</td>
                            <!--verficar segundo nivel para saltar a tercer nivel-->
                            <td>@if(isset($clase->periodo)) {{$clase->periodo->name}} @endif</td>
                            <td>@if(isset($clase->espaciodeportivo)) {{$clase->espaciodeportivo->name}} @endif</td>
                            <td>{{$clase->cupos}}</td>
                            <td><button id="borrar"><i class="small material-icons">delete</i></button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registerclase') }}"><i class="material-icons">add</i></a>
                    </ul>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
