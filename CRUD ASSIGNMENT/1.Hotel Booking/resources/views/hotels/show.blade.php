
<h2> {{$hotel->name}} </h2>
<p> <strong> checkindate:</strong> {{$hotel->checkindate}}</p>
<p> <strong> checkoutDate:</strong> {{$hotel->checkoutsate}}</p>
<p> <strong> roomtype: </strong> {{$hotel->roomtype}} </p>

<a href="{{route('hotels.index')}}">Back</a>
