<h2> hotel details</h2>
<a href="{{ route('hotels.create') }}">Book hotel</a>

<table border="1" cellpadding="8">
    <thead>
            <th> Name:</th>
            <th> Check in date:</th>
            <th> check out date:</th>
            <th> room type:</th>
            <th> action:</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hotels as $hotel)
        <tr>
            <td>{{  $hotel->name }}</td>
            <td>{{  $hotel->checkindate}}</td>
            <td>{{ $hotel->checkoutsate}}</td>
            <td>{{ $hotel->roomtype}}</td>
            <td>
                <a href="{{route('hotels.show', $hotel->id)}}">view</a>
                <a href="{{route('hotels.edit', $hotel->id)}}">edit</a>

                <form action="{{ route('hotels.destroy',$hotel->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('delete booking?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>