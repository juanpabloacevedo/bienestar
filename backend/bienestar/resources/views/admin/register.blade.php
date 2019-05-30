@extends('admin.layouts.base_cms')

@section('content')
<div class="container">
    @if(!Auth::user())
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Usuarios</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registeradmin') }}">
                        <!-- csrf token a nivel global-->
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="codigo" class="col-md-4 control-label">Codigo</label>

                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control" name="codigo" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="celular" class="col-md-4 control-label">Celular</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control" name="celular" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="usuario" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"required>
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <input id="foto" type="text" class="form-control" name="foto">
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="id_doc" class="col-md-4 control-label">Tipo de documento</label>
                            <div class="col-md-6">
                            
                            <select id="id_doc"  name="id_doc">
                           
                            @foreach($tipo_documentos as $tipo_documento)
                                <option value="{{$tipo_documento->id}}">{{$tipo_documento->nombre_documento}}</option>  
                            @endforeach                          
                            </select>
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="id_rol" class="col-md-4 control-label">Tipo de usuario</label>
                            <div class="col-md-6">
                            
                            <select id="id_rol"  name="id_rol">
                           
                            @foreach($roles as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>  
                            @endforeach                          
                            </select>
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="numero_documento" class="col-md-4 control-label">Numero de documento</label>

                            <div class="col-md-6">
                                <input id="numero_documento" type="text" class="form-control" name="numero_documento" required>
                            </div>
                        </div>                                      
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                    @if(session('errors')!=null)
                    {{session('errors')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
@else
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>@endif
</div>
@endsection
