@extends('welcome')

@section('content')
<p> Employee Details</p>
<center>
<table border="1",cellpadding="8">
    <tr>
        <th>Employee Name:</th>
        <td>{{$name}}</td>
    </tr>

    <tr>
        <th>Email:</th>
        <td>{{$email}}</td>
    </tr>

    <tr>
        <th>Phone No.:</th>
        <td>{{$phone}}</td>
    </tr>

    <tr>
        <th>Department:</th>
        <td>{{$department}}</td>
    </tr>
</table>
</center>
<a href="{{url('/')}}">go back to home page</a>

@endsection
