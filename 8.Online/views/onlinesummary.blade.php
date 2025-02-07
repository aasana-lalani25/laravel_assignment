@extends('welcome')

@section('content')

<p>Online registration details</p>
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
            <th>Course:</th>
            <td>{{$course}}</td>
        </tr>

        <tr>
            <th>duration:</th>
            <td>{{$duration}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
