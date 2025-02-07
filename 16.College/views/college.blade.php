@extends('welcome')

@section('content')
<h1>College Registration System</h1>
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

    <label for="quali">Previous Qualification:</label>
    <input type="text" id="quali" name="quali" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
