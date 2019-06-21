@extends('usuarios.layouts.base_usu')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cambiar password Actual</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('changepass') }}">
                        <!-- csrf token a nivel global-->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password Actual</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password Nueva</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" required>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                                                             
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Confirmar
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
</div>
@endsection
