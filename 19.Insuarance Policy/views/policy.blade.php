@extends('welcome')

@section('content')
<h1> Insuarance Policy System</h1>
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

    <label for="type"> Policy type:</label>
    <input type="text" id="type" name="type" required>
    <br>
    <br>

    <label for="amount">Premium amount:</label>
    <input type="text" id="amount" name="amount" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
