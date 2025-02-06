@extends('welcome')

@section('content')
<h1> Product Summary</h1>
<center>
<table border="1", cellpadding:"8">
<tr>
    <th> Product Name:</th>
    <td>{{$name}}</td>
</tr>
<tr>
    <th>Category Name:</th>
    <td>{{$cname}}</td>
</tr>

<tr>
    <th>Price:</th>
    <td>{{$price}}</td>
</tr>

<tr>
    <th>Quantity:</th>
    <td>{{$quantity}}</td>
</tr>

</table>
</center>
<a href="{{('/')}}">Go back to home</a>

@endsection
