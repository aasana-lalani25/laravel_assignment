@extends('welcome')

@section('content')
<h1> Medical Appointment</h1>
<p> Enter your Details:</p>
<form method="POST" action="/submitform">

    @csrf

    <label for="name">Paitent Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>

    <label for="dname"> Doctor Name:</label>
    <input type="text" id="dname" name="dname" required>
    <br>
    <br>

    <label for="date">Appointment Date:</label>
    <input type="text" id="date" name="date" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
