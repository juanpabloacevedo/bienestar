@extends('admin.layouts.base_cms')

@section('content')
<div class="row">
    <div class="col m12 s12">
        <div>Gimnasio Virtual</div>
        <h1>Espacios o clasCreados</h1>
        <div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            Actualmente estas logueado como: 
            {{Auth::user()->rol->name}}
            <div class="title m-b-md">
                <h2>{{Auth::user()->name}}</h2>
                <div>             
                @forelse($users as $user)
                    <li>{{ $user->name }}</li>
                @empty
                    <li>No hay usuarios registrados.</li>
                @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
