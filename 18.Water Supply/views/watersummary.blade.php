@extends('welcome')

@section('content')

<p>Water Supply summary</p>
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
            <th>Address:</th>
            <td>{{$address}}</td>
        </tr>

        <tr>
            <th>Premium Type:</th>
            <td>{{$type}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
