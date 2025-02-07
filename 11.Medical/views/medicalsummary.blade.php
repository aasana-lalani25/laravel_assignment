@extends('welcome')

@section('content')

<p>Medical Appointment Details</p>
<center>
    <table border="1", cellpadding="8">
        <tr>
            <th>Name:</th>
            <td>{{$name}}</td>
        </tr>

        <tr>
            <th>Email:</th>
            <td>{{$email}}</td>
        </tr>

        <tr>
            <th>Doctor Name:</th>
            <td>{{$dname}}</td>
        </tr>

        <tr>
            <th>Appointment Date:</th>
            <td>{{$date}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
