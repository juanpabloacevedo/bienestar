@extends('admin.layouts.base_cms')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registerespacio') }}">
                        <!-- csrf token a nivel global-->
                        {{ csrf_field() }}
                        <h2>Registro de espacio</h2>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="id_sede" class="col-md-4 control-label">Sede</label>
                            <div class="col-md-6">                            
                            <select id="id_sede"  name="id_sede">
                            @foreach($sedes as $sede)
                                <option value="{{$sede->id}}">{{$sede->name}}</option>  
                            @endforeach                          
                            </select>
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="capacidad" class="col-md-4 control-label">Capacidad</label>

                            <div class="col-md-6">
                                <input id="capacidad" type="number" class="form-control" name="capacidad" min=10 max=50 required>
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
