@extends('welcome')

@section('content')

<p> Hotel Booking Detials</p>
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

    <label for="cdate">Checkin date:</label>
    <input type="text" id="cdate" name="cdate" required>
    <br>
    <br>

    <label for="idate">Checkout date:</label>
    <input type="text" id="idate" name="idate" required>
    <br>
    <br>

    <button for="submit">Submit</button>


</form>

@endsection
