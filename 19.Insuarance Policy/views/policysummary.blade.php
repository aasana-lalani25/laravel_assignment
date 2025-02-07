@extends('welcome')

@section('content')

<p>Policy Details</p>
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
            <th>Policy Type:</th>
            <td>{{$type}}</td>
        </tr>

        <tr>
            <th>Amount:</th>
            <td>{{$amount}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
