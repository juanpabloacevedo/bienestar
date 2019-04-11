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
            <h2>Sedes</h2>>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Sede</th>
                        <th>Ciudad</th>
                        <th>Direccion</th>
                        <th></th>                      
                    </tr>
                </thead>
                <tbody>                            
                    @if($sedes->count()==0)
                    no hay sedes registradas.
                    @endif
                    @foreach($sedes as $sede)
                    <tr>
                    <td>{{$sede->id}}</td>                    
                    <td>{{$sede->name}}</td>
                    <td>{{$sede->city}}</td>
                    <td>{{$sede->address}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registersede') }}"><i class="material-icons">add</i></a>
                    
        </ul>
    </div>
</div>
@endsection
