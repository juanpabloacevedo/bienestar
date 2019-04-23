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
            <h2>Asistencias</h2>
            <div class="row">
                    <div class="bsc col m12 s12"></div>
                    <div><i class="material-icons prefix">search</i><input id="bsc_clase" type="text" placeholder="clase" name="bsc_clase"></div>
            </div>
                <thead style="text-align:center; background-color:blue">
                    <tr>
                    <th>id</th>
                    <th>clase</th>
                    <th>apellido</th>
                    <th>numero</th>
                    <th>fecha inicial</th>
                    <th>fecha final</th>
                    <th>asistentes</th>                                                    
                    </tr>
                </thead>
                <tbody>                            
                    @if($reservas->count()==0)
                    no hay reservas registradas
                    @endif
                    @foreach($reservas as $reserva)
                    <tr style="text-align:center; background-color:yellow">                    
                    <td>{{$reserva->id}}</td>
                    <td>{{$reserva->clase->name}}</td>
                    <td>{{$reserva->clase->espaciodeportivo->user->name}}</td>
                    <td>{{$reserva->inicio}}</td>
                    <td>{{$reserva->fin}}</td>                                         
                    </tr>
                        </tbody>
                        @endforeach     
                         </table>
            
                    
        </ul>
    </div>
</div>
@endsection
