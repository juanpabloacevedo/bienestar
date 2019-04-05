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
                    <title>Lista y estado de usuarios</title>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>inasistencias</th>
                                <th>rol</th>
                                <th>estado</th>
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
                            <td>{{$user->rol->activo}}</td>
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
