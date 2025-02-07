@extends('welcome')

@section('content')

<p>Bus Ticket details</p>
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
            <th>Destination:</th>
            <td>{{$destination}}</td>
        </tr>

        <tr>
            <th>date:</th>
            <td>{{$date}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
