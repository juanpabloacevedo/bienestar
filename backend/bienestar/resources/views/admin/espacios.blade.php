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
            <h2>Espacios por sede</h2>
                <thead>
                    <tr>
                        <th>espacio</th>
                        <th>capacidad</th>
                        <th>disponible</th>
                        <th>sede</th>
                        
                    </tr>
                </thead>
                <tbody>                            
                    @if($espacios->count()==0)
                    no hay espacios registrados
                    @endif
                    @foreach($espacios as $espacio)
                    <tr>                    
                    <td>{{$espacio->nombre_espacio}}</td>
                    <td>{{$espacio->cantidad_usuarios}}</td>
                    <td>@if($espacio->espacio_disponible==true)si @else no @endif</td>
                    <td>{{$espacio->sede->name}}</td>
                      <td>
                            <a class="waves-effect waves-light btn"><i class="material-icons">edit</i></a>
                            <a class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registerespacio') }}"><i class="material-icons">add</i></a>
                    
        </ul>
    </div>
</div>
@endsection
