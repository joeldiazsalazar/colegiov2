@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

    @if(session()->has('info'))

    <div class="alert alert-success">{{ session('info')}}</div>

    @else
            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>General Elements</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item"><a href="general-elements-bootstrap.html">General Elements</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Input Types</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
    
<form method="POST" action=" {{ route('users.store')}} ">

    {!! csrf_field() !!}

<div class="form-group">
    <label for="exampleInputEmail1" class="form-control-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="{{ old('name')}}">

    {!! $errors->first('name','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="form-control-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username" value="{{ old('username')}}">

    {!! $errors->first('username','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group">
    <label for="exampleInputPassword1" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  name="password" value="{{ old('password')}}">

        {!! $errors->first('password','<span class=error>:message</span>')!!}
</div>
 

 
<div class="form-group">
    <label for="exampleSelect1" class="form-control-label">Example select</label>
        <select class="form-control" id="exampleSelect1" name="role_id"">
           @foreach ($roles as $rol)
            <option  value="{{ $rol->id }}">  {{ $rol->display_name }} </option>
            @endforeach
        </select>

        {!! $errors->first('role_id','<span class=error>:message</span>')!!}
</div>


<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">

</form>
</div>
</div>
</div>
    </div>
    </div>
    </div>
{{-- <p><label for="name">
    Nombre

    <input class="form-control" type="text" name="name" value="{{ old('name')}}">

    {!! $errors->first('name','<span class=error>:message</span>')!!}
</label></p>

<p><label for="email">
    Email
    <input class="form-control" type="text" name="email" value="{{ old('email')}}">

    {!! $errors->first('email','<span class=error>:message</span>')!!}
</label></p>



<p><label for="password">
    password
    <input class="form-control" type="password" name="password" value="{{ old('password')}}">

    {!! $errors->first('password','<span class=error>:message</span>')!!}
</label></p>


<p><label for="role">
    role
    <input class="form-control" type="text" name="role_id" value="{{ old('role_id')}}">

    {!! $errors->first('role_id','<span class=error>:message</span>')!!}
</label></p> --}}


@endif

@stop