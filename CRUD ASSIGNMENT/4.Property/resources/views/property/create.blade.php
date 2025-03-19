<h2>Enter Property Details</h2>
<form action="{{ route('property.store') }}" method="POST">
    @csrf

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" required>
    <br>
    <br>

    <label for="type">Type:</label>
    <select name="type" id="type" required>
        <option value="">Select type:</option>
        <option value="House">House</option>
        <option value="Apartment">Apartment</option>
    </select>
    <br>
    <br>

    <label for="price">Prrice:</label>
    <input type="text" name="price" id="price" required>
    <br>
    <br>

    <label for="des">Address:</label>
    <input type="text" name="des" id="des" required>
    <br>
    <br>

    <button type="submit">Book property</button>

</form>
