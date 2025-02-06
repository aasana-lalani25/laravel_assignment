@extends('welcome')

@section('content')
<p> Hotel Booking Details</p>
<center>
<table border="1" , cellpadding="8">
<tr>
    <th>Name:</th>
    <td>{{$name}}</td>
</tr>

<tr>
    <th>Email:</th>
    <td>{{$email}}</td>
</tr>

<tr>
    <th>Checkin Date:</th>
    <td>{{$cdate}}</td>
</tr>

<tr>
    <th>Checkout date:</th>
    <td>{{$idate}}</td>
</tr>

</table>
</center>
<a href="{{url("/")}}">Go back to home </a>
@endsection
