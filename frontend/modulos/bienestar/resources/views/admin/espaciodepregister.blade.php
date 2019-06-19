@extends('admin.layouts.base_cms')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registerespdep') }}">
                        <!-- csrf token a nivel global-->
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>     
                        <div class="form-group">
                            <label for="id_user" class="col-md-4 control-label">Instructor</label>
                            <div class="col-md-6">                            
                            <select id="id_user"  name="id_user">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>  
                            @endforeach                          
                            </select>
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
