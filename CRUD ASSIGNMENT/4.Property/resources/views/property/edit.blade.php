<h2>Edit Details</h2>
<h2>Enter Property Details</h2>

<form action="{{ route('property.update', $property->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" required value="{{ $property->address }}">
    <br><br>

    <label for="type">Type:</label>
    <select name="type" id="type" required>
        <option value="">Select type:</option>
        <option value="House" {{ $property->type == 'House' ? 'selected' : '' }}>House</option>
        <option value="Apartment" {{ $property->type == 'Apartment' ? 'selected' : '' }}>Apartment</option>
    </select>
    <br><br>

    <label for="price">Price:</label>
    <input type="text" name="price" id="price" required value="{{ $property->price }}">
    <br><br>

    <label for="des">Description:</label>
    <input type="text" name="des" id="des" required value="{{ $property->des }}">
    <br><br>

    <button type="submit">Update Property</button>
</form>
