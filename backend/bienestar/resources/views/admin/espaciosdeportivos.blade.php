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
            <title>Lista y estado de usuarios</title>
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
        </ul>
    </div>
</div>
@endsection
