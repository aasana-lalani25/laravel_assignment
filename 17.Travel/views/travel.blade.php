@extends('welcome')

@section('content')
<h1> Travel Booking</h1>
<p> Enter your Details:</p>
<form method="POST" action="/submitform">

    @csrf

    <label for="name">Traveler Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>

    <label for="desination"> Destination:</label>
    <input type="text" id="destination" name="destination" required>
    <br>
    <br>

    <label for="date">Rental Duration:</label>
    <input type="text" id="date" name="date" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
