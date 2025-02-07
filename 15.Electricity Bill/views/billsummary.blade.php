@extends('welcome')

@section('content')

<p>Electricity Bill Summary</p>
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
            <th>Bill No.:</th>
            <td>{{$billno}}</td>
        </tr>

        <tr>
            <th>Amount:</th>
            <td>{{$amount}}</td>
        </tr>


    </table>
</center>
<a href="{{url('/')}}">Go back to home</a>
@endsection
