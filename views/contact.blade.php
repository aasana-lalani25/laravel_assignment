@extends('layout')

@section('content')
    <h1>Contact Us</h1>
    @if(session('success'))
        <p style="color: green;">{{session('success')}}</p>
    @endif
    <form method="POST" action="/submitForm">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="name">Your Message:</label>
        <textarea  id="message" type="text" id="message" name="message" required></textarea>
        <br>
        <button type="submit">Send</button>

    </form>  
@endsection