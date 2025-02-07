@extends('welcome')

@section('content')
<h1> Bus Ticket Booking System</h1>
<p> Enter your Details:</p>
<form method="POST" action="/submitform">

    @csrf

    <label for="name">Passenger Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>

    <label for="destination"> Destination:</label>
    <input type="text" id="destination" name="destination" required>
    <br>
    <br>

    <label for="date">Travel Date:</label>
    <input type="text" id="date" name="date" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
