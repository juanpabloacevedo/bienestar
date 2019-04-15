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
            <h2>Reservas</h2>
                <thead>
                    <tr>
                    <th>nombre reserva</th>
                        <th>clase</th>
                        <th>espacio</th>
                        <th>fecha inicio</th>
                        <th>fecha fin</th>   
                        <th>periodo</th>                     
                    </tr>
                </thead>
                <tbody>                            
                    @if($reservas->count()==0)
                    no hay reservas registradas
                    @endif
                    @foreach($reservas as $reserva)
                    <tr>                    
                    <td>{{$reserva->name}}</td>
                    <td>{{$reserva->clase->name}}</td>
                    <td>{{$reserva->espacio->nombre_espacio}}</td>
                    <td>{{$reserva->inicio}}</td>
                    <td>{{$reserva->fin}}</td>
                    <td>{{$reserva->clase->periodo->name }}</td>                   
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registerreserva') }}"><i class="material-icons">add</i></a>
                    
        </ul>
    </div>
</div>
@endsection
