@extends('admin.layouts.base_cms')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Periodos Academicos</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registerperiodo') }}">
                        <!-- csrf token a nivel global-->
                        {{ csrf_field() }}
                        <h2>Registro de Periodos Academicos</h2>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateinit" class="col-md-4 control-label">Fecha Inicio</label>
                            <div class="col-md-6">
                                <input type="text" class="datepicker" name="dateinit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateend" class="col-md-4 control-label">Fecha Fin</label>
                            <div class="col-md-6">
                                <input type="text" class="datepicker" name="dateend" required>
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
</div>
@endsection
