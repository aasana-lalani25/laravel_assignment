@extends('layout')

@section('content')
    <h1>Contact Us</h1>
    <form method="POST" action="/send-message">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Send</button>

    </form>  
@endsection