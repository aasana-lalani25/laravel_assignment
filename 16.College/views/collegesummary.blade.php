@extends('welcome')

@section('content')

<p>Form Submitted</p>
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
            <th> Course:</th>
            <td>{{$course}}</td>
        </tr>

        <tr>
            <th>Qualification:</th>
            <td>{{$quali}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
