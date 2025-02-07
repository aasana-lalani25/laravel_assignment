@extends('welcome')

@section('content')
<h1> Online Regitration System</h1>
<p> Enter your Details:</p>
<form method="POST" action="/submitform">

    @csrf

    <label for="name">Student Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>

    <label for="course"> Course Name:</label>
    <input type="text" id="course" name="course" required>
    <br>
    <br>

    <label for="duration">Duration:</label>
    <input type="text" id="duration" name="duration" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
