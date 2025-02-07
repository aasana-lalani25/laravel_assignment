@extends('welcome')

@section('content')
<p>Customer Registraion System</p>
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

    <label for="rating">Rating:</label>
    <select id="rating" name="rating" required>
        <option value="">Select Rating:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>
    <br>

    <label for="comment">Comments:</label>
    <input type="text" id="comment" name="comment" required>
    <br>
    <br>

    <button for="submit">Submit</button>
</form>
@endsection
