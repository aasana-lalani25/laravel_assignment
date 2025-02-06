@extends('welcome')

@section('content')
<h1> Employee Regitration System</h1>
<p> Enter your Details:</p>
<form method="POST" action="/submitform">

    @csrf

    <label for="name">Employee Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>

    <label for="phone">Phone No.:</label>
    <input type="text" id="Phone" name="phone" required>
    <br>
    <br>

    <label for="department">Department:</label>
    <input type="text" id="department" name="department" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
