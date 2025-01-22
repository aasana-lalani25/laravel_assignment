@extends('layout')

@section('content')
    <h1> thank you for submiting form</h1>
    <p> name:{{ $name}}  </p>
    <p> message:{{ $message}}  </p>
    
    <a href="{{url('/')}}">go back to the form </a>

@endsection