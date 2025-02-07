@extends('welcome')

@section('content')

<p>gym Summary</p>
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
            <th>Membership type:</th>
            <td>{{$membership}}</td>
        </tr>

        <tr>
            <th> Duration:</th>
            <td>{{$days}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
