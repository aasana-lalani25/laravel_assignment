<h2> product details</h2>
<form action="{{ route('products.update' ,$product->id )}}" method="POST">

@csrf
@method('PUT')

<label for="pname"> Product Name:</label>
<input type="text" name="pname" id="pname" required value="{{ $product->pname }}">
<br>
<br>

<label for="des"> Product Description:</label>
<textarea name="des" id="des" required> {{ $product->des }}</textarea>
<br>
<br>

<label for="price"> Product price:</label>
<input type="text" name="price" id="price" required  value="{{ $product->price }}">
<br>
<br>

<label for="quantity"> Product quantity:</label>
<input type="text" name="quantity" id="quantity" required  value="{{ $product->quantity }}">
<br>
<br>

<label for="type">Product type:</label>
<select name="type" id="type" required  value="{{ $product->type }}">
    <option value="">select product </option>
    <option value="cosmetic ">cosmetic </option>
    <option value="home decor">home decor </option>
    <option value="home essential">home essential </option>
</select>
</label>
<br>
<br>

<button type="submit">edit product</button>
<br>
</form>
