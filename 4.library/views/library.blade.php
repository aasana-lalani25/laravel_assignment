@extends('welcome')

@section('content')

<p>Library Management</p>
<form method="POST" action="/submitform">
    @csrf
    <label for="name">Book Name:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="aname">Author:</label>
    <input type="text" id="aname" name="aname" required>
    <br>

    <label for="isbn">ISBN:</label>
    <input type="text" id="isbn" name="isbn" required>
    <br>

    <label for="year">Publish Year:</label>
    <select id="year" name="year" required>
        <option value="">Select year</option>
        <option value="1990-2000">1990-2000</option>
        <option value="2000-2010">2000-2010</option>
        <option value="2010-2020">2010-2020</option>
        <option value="2020-2025">2020-2025</option>
    </select>
    <br>

    <button type="submit">Submit</button>

</form>

@endsection
