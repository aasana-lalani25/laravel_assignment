@extends('welcome')

@section('content')
<p> Movie booking system</p>
<form method="POST" action="/submitform">
    @csrf
    <label for="name">customer Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <br>

    <label for="email">customer Email:</label>
    <input type="text" id="email" name="email" required>
    <br>
    <br>

    <label for="mname">Movie Name:</label>
    <input type="text" id="mname" name="mname" required>
    <br>
    <br>

    <label for="ticket">No. of tickets:</label>
    <select id="ticket" name="ticket" required>
        <option value="">Select option</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>
    <br>

    <button for="submit">Submit</button>

</form>
@endsection
