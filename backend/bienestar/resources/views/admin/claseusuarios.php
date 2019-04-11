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
        <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('claseactual') }}">
                        <!-- csrf token a nivel global-->
                        {{ csrf_field() }}
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
           </form>           
        </div>              
        </div>  
    </div>
</div>
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
                <title>inscritos a la clase {{$clase->name}}</title>
                <thead>
                <tr>
                    <th>id</th>
                    <th>clase</th>
                    <th>periodo</th>
                     <th>espacio deportivo</th>
                    <th>cupos</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>                            
                    @if($clases->count()==0)
                    vacío 
                    @endif
                    @foreach($clases as $clase)
                        <tr>
                            <td>{{$clase->id}}</td>
                            <td>{{$clase->name}}</td>
                            <!--verficar segundo nivel para saltar a tercer nivel-->
                            <td>@if(isset($clase->periodo)) {{$clase->periodo->name}} @endif</td>
                            <td>@if(isset($clase->espaciodeportivo)) {{$clase->espaciodeportivo->name}} @endif</td>
                            <td>{{$clase->cupos}}</td>
                            <td><button id="borrar"><i class="small material-icons">delete</i></button></td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                <a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registerclase') }}"><i class="material-icons">add</i></a>
                </ul>                   
                </div>
            </div>
    </div>
</div>
@endsection
