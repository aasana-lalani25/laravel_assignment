<h2> product details</h2>
<form action="{{ route('products.store') }}" method="POST">

@csrf
<label for="pname"> Product Name:</label>
<input type="text" name="pname" id="pname" required>
<br>
<br>

<label for="des"> Product Description:</label>
<textarea name="des" id="des" required></textarea>
<br>
<br>

<label for="price"> Product price:</label>
<input type="text" name="price" id="price" required>
<br>
<br>

<label for="quantity"> Product quantity:</label>
<input type="text" name="quantity" id="quantity" required>
<br>
<br>

<label for="type">Product type:</label>
<select name="type" id="type" required>
    <option value="">select product </option>
    <option value="cosmetic ">cosmetic </option>
    <option value="home decor">home decor </option>
    <option value="home essential">home essential </option>
</select>
</label>
<br>
<br>

<button type="submit">Add product</button>
<br>
</form>
