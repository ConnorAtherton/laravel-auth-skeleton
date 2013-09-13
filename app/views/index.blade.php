@extends('layout.master')

@section('content')
    <h1>Home page</h1>
    <p>Current time: {{ date('F j, Y, g:i A') }}  </p>
@stop