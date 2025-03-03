@extends('welcome')

@section('content')
<h1> Apply Here </h1>
<p> enter your details here </p>
<form method="POST" action="/submitform">
    @csrf
    <label for="title">Job title: </label>
    <input type="text" id="title" name="title" required>
    <br>
    <br>

    <label for="category"> Category: </label>
    <select id="category" name="category" required>
        <option value="">Select Category</option>
        <option value="HR">HR</option>
        <option value="Software Designer">SOftaware Designer</option>
        <option value="UI/UX"> UI/UX</option>
    </select>
    <br>
    <br>

    <label for="des">Job Description: </label>
    <input type="text" id="des" name="des" required>
    <br>
    <br>

    <label for="salary"> Salary: </label>
    <input type="text" id="salary" name="salary" required>
    <br>
    <br>

    <button type="submit"> Apply </button>
    <br>
    <br>
@endsection