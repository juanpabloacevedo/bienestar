@extends('admin.layouts.base_cms')
@section('content')
<div class="row m12 s12">
    <div class="col m12 s12">
        <div><h2>Sistema de gestión de contenidos CMS"Content Management System"</h2></div>
        <div>
            @if (session('status'))<div class="alert alert-success">{{ session('status') }}
            </div>
            @endif
            Actualmente estas logueado como: 
            {{Auth::user()->rol->name}}
            <div class="title m-b-md">
                <h2>{{Auth::user()->name}}</h2>
                Gimnasio USTA Version 0.0000000099
                <section>
                    <div></div>
                </section>
                <a href="http://www.ustatunja.edu.co/">
                    <img src="{{asset('img/cedecentro.jpg')}}" style="width:100%">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
