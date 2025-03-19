<h2> property details </h2>
<a href="{{ route('property.create') }}">Add property</a>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th> Address:</th>
            <th>type:</th>
            <th>Price:</th>
            <th>Description:</th>
            <th>Action:</th>
        </tr>
    </thead>
    <tbody>
        @foreach($property   as $property)
        <tr>
            <td>{{ $property->address }}</td>
            <td>{{ $property->type }}</td>
            <td>{{ $property->price }}</td>
            <td>{{ $property->des }}</td>
            <td>
            <a href="{{ route('property.edit', $property->id) }}">Edit</a>

                <form action="{{ route('property.destroy' ,$property->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" onclick="return confirm('Delete booked property?')">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
