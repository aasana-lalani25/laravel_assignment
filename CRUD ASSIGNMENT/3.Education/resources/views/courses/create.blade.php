<h2> Enter course Details</h2>
<form action="{{ route('courses.store') }}" method="POST">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <br>

    <label for="des">Description:</label>
    <input type="text" name="des" id="des" required>
    <br>
    <br>

    <label for="inst">Instructor:</label>
    <input type="text" name="inst" id="inst" required>
    <br>
    <br>

    <label for="duration">Duration:</label>
    <input type="text" name="duration" id="duration" required>
    <br>
    <br>

    <button type="submit">Add course</button>
</form>
