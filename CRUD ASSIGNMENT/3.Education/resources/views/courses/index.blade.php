<h2> courses</h2>
<a href="{{ route('courses.create') }}">add courses</a>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th> Title:</th>
            <th> Description:</th>
            <th> Instructor:</th>
            <th> Duration:</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{ $course->title }}</td>
            <td>{{ $course->des }}</td>
            <td>{{ $course->inst }}</td>
            <td>{{ $course->duration }}</td>
            <td>
                <a href="{{ route('courses.edit',$course->id) }}">edit</a>

                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Delete course?')">Delete</button>
</form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
