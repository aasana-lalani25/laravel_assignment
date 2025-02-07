@extends('welcome')

@section('content')
<p> Customer Summary</p>
<center>
    <table border="1", cellpadding="8">
        <tr>
            <th>Customer Name:</th>
            <td>{{$name}}</td>
        </tr>

        <tr>
            <th>Email:</th>
            <td>{{$email}}</td>
        </tr>

        <tr>
            <th>Rating:</th>
            <td>{{$rating}}</td>
        </tr>

        <tr>
            <th>Comments:</th>
            <td>{{$comment}}</td>
        </tr>
    </table>
</center>
<a href="{{url('/')}}">go back to home page</a>

@endsection
