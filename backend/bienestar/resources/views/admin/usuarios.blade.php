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
                    <td> <form class="form-horizontal" method="POST" action="{{ route('listarclases') }}">
                        {{ csrf_field() }}
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" value="{{$user->id}}" name="user">
                                    listar
                                </button>
                            </div>
                        </div>
                    </form></td>
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
<form method="POST" action="{{ route('importcsv') }}" files="true" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="file-field input-field">
      <div class="btn">
        <span><i class="large material-icons">file_upload</i></span>
        <input type="file" name="filecsv">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
    <button class="btn waves-effect waves-light orange" type="submit" name="action">Cargar
    <i class="material-icons right">send</i>
  </button>
  </form>
@endsection
 