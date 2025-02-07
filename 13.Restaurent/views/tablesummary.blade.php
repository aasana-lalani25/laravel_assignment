@extends('welcome')

@section('content')

<p>Restaurent tabel booking </p>
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
            <th>No. of guest:</th>
            <td>{{$guest}}</td>
        </tr>

        <tr>
            <th>Date:</th>
            <td>{{$date}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
