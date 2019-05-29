@extends('admin.layouts.base_cms')

@section('content')
<div class="row">
    <div class="col m12 s12">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <ul>
            <table class="table striped">
                <h2>Periodos Academicos</h2>
                <thead>
                    <tr>
                        <th>Periodo</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Estado</th>                        
                    </tr>
                </thead>
                <tbody>                            
                    @if($periodos->count()==0)
                    no hay periodos academicos registrados
                    @endif
                    @foreach($periodos as $periodo)
                    <tr>                    
                        <td>{{$periodo->name}}</td>
                        <td>{{$periodo->inicio}}</td>
                        <td>{{$periodo->fin}}</td>
                        <td>@if($periodo->activo==true)Activo
                        @endif</td>
                        <td>

                            <a class="waves-effect waves-light btn"><i class="material-icons">edit</i></a>
                            <a class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registerperiodo') }}"><i class="material-icons">add</i></a>

            </ul>
        </div>
    </div>
    @endsection
