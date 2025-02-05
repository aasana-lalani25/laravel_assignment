@extends('welcome')

@section('content')

<h1> registration </h1>
<p> Enter Details Infomation </p>
<form method="POST" action="/submitform">
    @csrf
    <label for="name"> Full Name:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="email"> Email:</label>
    <input type="text" id="email" name="email" required>
    <br>

    <label for="phone"> Phone No.:</label>
    <input type="text" id="phone" name="phone" required>
    <br>

    <label for="courses"> Course: </label>
    <select id="courses" name="courses" required>
        <option value=""> select course </option>
        <option value="MCA"> MCA</option>
        <option value="MSC IT"> MSC IT </option>
        <option value="MBA"> MBA </option>
        <option value="MCOM"> MCOM </option>
    </select>
    <br>

    <button type="submit"> Submit </button>

</form>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
