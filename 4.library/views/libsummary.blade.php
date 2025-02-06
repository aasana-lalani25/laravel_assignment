@extends('welcome')

@section('content')

<h1>Book Details</h1>
<center>
<table border="1" cellpadding="8">
<tr>
    <th> Book Name:</th>
    <td>{{$name}}</td>
</tr>

<tr>
    <th> Author Name:</th>
    <td>{{$aname}}</td>
</tr>
<tr>
    <th> ISBN:</th>
    <td>{{$isbn}}</td>
</tr>

<tr>
    <th>Publish Year:</th>
    <td>{{$year}}</td>
</tr>

</table>
</center>
<a href="{{url('/')}}"> go back to home page</a>

@endsection
