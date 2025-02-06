@extends('welcome')

@section('content')

<p> Participant Details:</p>
<center>
<table border="1" , cellpdding="8">
    <tr>
        <th>Participant Name:</th>
        <td>{{$name}}</td>
    </tr>

    <tr>
        <th>Email:</th>
        <td>{{$email}}</td>
    </tr>

    <tr>
        <th>Evet Type:</th>
        <td>{{$type}}</td>
    </tr>

    <tr>
        <th>Attendents:</th>
        <td>{{$attendent}}</td>
    </tr>

</table>
</center>
<a href="{{url('/')}}">Go back to home</a>

@endsection
