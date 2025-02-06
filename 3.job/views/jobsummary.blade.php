@extends('welcome')

@section('content')
<h1> Job apppicant details</h1>
<center>
<table border="1", cellpadding:"8">
<tr>
    <th> Name:</th>
    <td>{{$name}}</td>
</tr>
<tr>
    <th>Email::</th>
    <td>{{$email}}</td>
</tr>

<tr>
    <th>Phone:</th>
    <td>{{$phone}}</td>
</tr>

<tr>
    <th>Position:</th>
    <td>{{$position}}</td>
</tr>

</table>
</center>
<a href="{{('/')}}">Go back to home</a>

@endsection
