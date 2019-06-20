@extends('admin.layouts.base_cms')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reservas</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registerreserva') }}">
                        <!-- csrf token a nivel global-->
                        {{ csrf_field() }}
                        <div class="form-group">
        <label for="id_espacio" class="col-md-4 control-label">Espacio</label>
        <div class="col-md-6">                            
            <select id="id_espacio"  name="id_espacio">
                @foreach($espacios as $espacio)
                    <option value="{{$espacio->id}}">{{$espacio->nombre_espacio}}</option>  
                @endforeach                          
            </select>
        </div>
        <div class="form-group">
        <label for="id_clase" class="col-md-4 control-label">Clase</label>
        <div class="col-md-6">                            
            <select id="id_clase"  name="id_clase">
                @foreach($clases as $clase)
                    <option value="{{$clase->id}}">{{$clase->name}}</option>  
                @endforeach                          
            </select>
        </div>
        <div class="form-group">
        <label for="inicio_dia" class="col-md-4 control-label">Inicio</label>
                <div class="col-md-6">
                <input type="text" class="datepicker" datetime="2017-02-14" name="inicio_dia" format="yyyy-mm-dd">
                <input type="time" datetime="2017-02-14" name="inicio_hora">
                </div>
        </div>
        <div class="form-group">
        <label for="fin_dia" class="col-md-4 control-label">fin</label>
                <div class="col-md-6">
             <input type="text" class="datepicker" datetime="2017-02-14" name="fin_dia" format="yyyy-mm-dd">
                <input type="time" datetime="2017-02-14" name="fin_hora">
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
