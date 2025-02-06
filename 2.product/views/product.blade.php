@extends('welcome')

@section('content')
<p> enter product details here </p>
<form method="POST" action="/submitform">

    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name" required>
    <br>

    <label for="Category">Category:</label>
    <input type="text" name="cname" id="cname" required>
    <br>

    <label for="price">Price:</label>
    <input type="text" name="price" id="price" required>
    <br>

    <label for="quantity">Quantity:</label>
    <select id="quantity" name="quantity" required>
        <option value="">Select Option</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>

    <button type="submit">Submit</button>

    </form>
@endsection
