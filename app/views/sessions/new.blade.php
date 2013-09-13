@extends('layout.master')

@section('content')
    <h1>Login</h1>

    {{-- maybe add some error checking in there to dshow some messages --}}


    {{ Form::open(array(
        'url' => 'login',
        'method' => 'POST'
    )) }}
        <p>
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email') }}
        <p>
        <p>
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        <p>
        <p class="actions">
            {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
        </p>
    {{ Form::close() }}

@stop