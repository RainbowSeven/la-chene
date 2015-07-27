@extends('admin.master')

@section('content')
    <h3>Login to your account</h3>
    {{Form::open(['method'=>'POST','url'=>'admin/login'])}}
    <div class="col s6">
        <div class="input-field">
            {{Form::label('email', 'Username: ')}}
            {{Form::input('text', 'email')}} 
        </div>
        <div class="input-field">
            {{Form::label('password', 'Password: ')}}
            {{Form::password('password')}}
        </div>
        {{Form::checkbox('remember','true','',['id'=>'remember'])}}
        {{Form::label('remember', 'Remember me!')}}
        {{Form::button('Login',['type'=>'submit','class'=>'waves-effect waves-light btn'])}}

        {{Form::close()}}

        <br/>
        <a href="{{ url('admin/reminder') }}">Forgot your password?</a>
    </div>
@stop