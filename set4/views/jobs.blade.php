@extends('welcome')

@section('content')
<h1> this is jobs page <h1>
    <img src="{{asset('images/img.png')}}" alt="job1">
    <p>job 1 </p>
    <p>salary :100000 </p>
    
    <img src="{{asset('images/img.png')}}" alt="job2">
    <p>job 2 </p>
    <p>salary :100000 </p>

    <img src="{{asset('images/img.png')}}" alt="job3">
    <p>job 3 </p>
    <p>salary :10000 </p>
    
    <center>
    <table border="1" cellpadding="8">
        <tr> 
            <th>Job Title:</th>
            <td>{{$title}}</td>
        </tr>

        <tr> 
            <th>Job Category:</th>
            <td>{{$category}}</td>
        </tr>

        <tr> 
            <th>Job Description:</th>
            <td>{{$des}}</td>
        </tr>

        <tr> 
            <th>Salary:</th>
            <td>{{$salary}}</td>
        </tr>
    </table>
    <a href="{{url('/')}}">Go back to home page </a>
    </center>
    
@endsection