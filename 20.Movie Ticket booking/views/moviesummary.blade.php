@extends('welcome')

@section('content')
<p> ticket boking summary</p>
<center>
<table border="1" cellpadding="8">
    <tr>
        <th> Customer name:</th>
        <td>{{$name}}</td>
     </tr>

    <tr>
        <th> Customer email:</th>
        <td>{{$email}}</td>
    </tr>

    <tr>
        <th> Movie name:</th>
        <td>{{$mname}}</td>
    </tr>

    <tr>
        <th> No. of  Ticket:</th>
        <td>{{$ticket}}</td>
    </tr>
</table>
</center>
<a href="{{url('/')}}">Go back to home page</a>

@endsection
