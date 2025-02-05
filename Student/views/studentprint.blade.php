@extends('welcome')

@section('content')
<h1> Student Details </h1>
<center>
<table border="1", cellpadding="8">
    <tr>
        <th> Name: </th>
        <td>{{$name}}</td>
    </tr>

    <tr>
        <th> Email: </th>
        <td>{{$email}}</td>
    </tr>

    <tr>
        <th> Phone no.: </th>
        <td>{{$phone}}</td>
    </tr>

    <tr>
        <th> Name: </th>
        <td>{{$courses}}</td>
    </tr>
</table>
</center>
<br>

<a href="{{url('/')}}"> Go back to form</a>

@endsection
