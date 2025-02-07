@extends('welcome')

@section('content')
<h1> Car Rental System</h1>
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

    <label for="model"> Car Model:</label>
    <input type="text" id="model" name="model" required>
    <br>
    <br>

    <label for="days">Rental Duration:</label>
    <input type="text" id="days" name="days" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
