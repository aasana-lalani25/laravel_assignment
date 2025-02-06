@extends('welcome')

@section('content')

<h1> Event Registration system</h1>
<p> Enter your details</p>
<form method="POST" action="/submitform">
    @csrf
    <label for="name">Participant Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>

    <label for="type">Event Type:</label>
    <select id="type" name="type" required>
        <option value="">Select Event</option>
        <option value="Dance">Dance</option>
        <option value="Skit">Skit</option>
        <option value="Fashion Show">Fashion Show</option>
    </select>

    <br>
    <br>
    <label for="attendent">No. of attendents:</label>
    <input type="text" id="attendent" name="attendent" required>
    <br>
    <br>

    <button for="submit" >Submit</button>
</form>
@endsection
