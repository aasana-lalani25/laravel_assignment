@extends('welcome')

@section('content')
<h1> restaurent  Table Reservation</h1>
<p> Enter your Details:</p>
<form method="POST" action="/submitform">

    @csrf

    <label for="name">Customer Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>

    <label for="guest"> No. of guest :</label>
    <input type="text" id="guset" name="guest" required>
    <br>
    <br>

    <label for="date">Date:</label>
    <input type="text" id="date" name="date" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
