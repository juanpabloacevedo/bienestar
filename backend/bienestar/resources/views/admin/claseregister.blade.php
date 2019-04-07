@extends('usuarios.layouts.base_web')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registerclase') }}">
                        <!-- csrf token a nivel global-->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre clase o grupo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" min="1" max="32"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_periodo" class="col-md-4 control-label">Periodo academico</label>
                            <div class="col-md-6">                            
                            <select id="id_periodo"  name="id_periodo">
                            @foreach($periodos as $periodo)
                                <option value="{{$periodo->id}}">{{$periodo->name}}</option>  
                            @endforeach                          
                            </select>
                           </div>
                        </div>    
                        <div class="form-group">
                            <label for="id_espacio" class="col-md-4 control-label">Espacio deportivo</label>
                            <div class="col-md-6">                            
                            <select id="id_espacio"  name="id_espacio">
                            @foreach($espaciosdeportivos as $espaciodep)
                                <option value="{{$espaciodep->id}}">{{$espaciodep->name}}</option>  
                            @endforeach                          
                            </select>
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="cupos" class="col-md-4 control-label">cupos</label>

                            <div class="col-md-6">
                                <input id="cupos" type="number" class="form-control" name="cupos" min="1" max="32"required>
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
