@extends('welcome')

@section('content')

<h1> job application</h1>
<p>Enter the details here</p>

<form method="POST" action="/submitform">

    @csrf
    <label for="name"> Name:</label>
    <input type="text" id="name"  name="name" required>
    <br>

    <label for="email"> Email:</label>
    <input type="text" id="email"  name="email" required>
    <br>

    <label for="phone"> Phone no.:</label>
    <input type="text" id="phone"  name="phone" required>
    <br>

    <label for="position">Position:</label>
    <select id="position" name="position" required>
        <option value="">Position</option>
        <option value="dean">dean</option>
        <option value="hod">hod</option>
        <option value="faculty">faculty</option>
    </select>
    <br>

    <button type="submit"> Submit</button>
    </form>

@endsection
