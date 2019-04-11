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
            <h2>Lista y estado de usuarios</h2>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>inasistencias</th>
                        <th>rol</th>
                        <th>estado</th>
                        <th>sancionado</th>
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
                    <td><div class="switch">
                        <label>
                        con sancion
                        <input type="checkbox">
                        <span class="lever"></span>
                        sin sancion
                        </label>
                    </div>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </ul>
    </div>
</div>
<a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registeradmin') }}"><i class="material-icons">add</i></a>
@endsection
