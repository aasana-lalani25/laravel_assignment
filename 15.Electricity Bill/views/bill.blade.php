@extends('welcome')

@section('content')
<h1> Electricity Bill</h1>
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

    <label for="billno">Bill No.:</label>
    <input type="text" id="billno" name="billno" required>
    <br>
    <br>

    <label for="amount">Amount:</label>
    <input type="text" id="amount" name="amount" required>
    <br>
    <br>

    <button type="submit">Submit</button>

</form>
@endsection
