@extends('admin.layouts.base_cms')

@section('content')
<div class="row">
    <div class="col m12 s12">
        <div>Gimnasio Virtual</div>
        <h1>Modulo de Administrador</h1>
        <div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            Actualmente estas logueado como: 
            {{Auth::user()->rol->name}}
            <div class="title m-b-md">
                <h2>{{Auth::user()->name}}</h2>
                Gimnasio USTA Version 0.0000000001
                <div>
                <h2>Lista y estado de usuarios</h2>
                    <ul>
                    <table class="table striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>inasistencias</th>
                                <th>rol</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @if($users->count()==0)
                            vacío
                            @endif
                            @foreach($users as $user)
                            <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->apellido}}</td>
                            <td>@if(isset($user->asistencias)){{$user->asistencias->count()}}@else 0 @endif</td>
                            <td>{{$user->rol->name}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                   
                    </ul>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
