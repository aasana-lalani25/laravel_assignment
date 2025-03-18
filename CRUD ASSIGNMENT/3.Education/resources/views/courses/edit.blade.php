<h2>Edit Courses</h2>

<h2> Enter course Details</h2>
<<form action="{{ route('courses.update', $course->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required value="{{ $course->title }}">
    <br>
    <br>

    <label for="des">Description:</label>
    <input type="text" name="des" id="des" required value="{{ $course->des }}">
    <br>
    <br>

    <label for="inst">Instructor:</label>
    <input type="text" name="inst" id="inst" required value="{{ $course->inst }}">
    <br>
    <br>

    <label for="duration">Duration:</label>
    <input type="text" name="duration" id="duration" required value="{{ $course->duration }}">
    <br>
    <br>

    <button type="submit">edit course</button>
</form>

