@extends('layout.master')

@section('content')
  <h2>Welcome to the protected page {{ Auth::user()->email }}!</h2>
  <p>Your user ID is: {{ Auth::user()->id }}</p>
@stop