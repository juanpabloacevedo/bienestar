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
            <h3>Deportes y actividades</h3>
                <thead>
                    <tr>
                        <th>Instructor</th>
                        <th>Actividad o curso</th>
                        
                    </tr>
                </thead>
                <tbody>                            
                    @if($espaciosdep->count()==0)
                    no hay clases o actividades regsitradas
                    @endif
                    @foreach($espaciosdep as $esp)
                    <tr>                    
                    <td>{{$esp->user->name}}</td>
                    <td>{{$esp->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registerespdep') }}"><i class="material-icons">add</i></a>
                    
        </ul>
    </div>
</div>
@endsection
