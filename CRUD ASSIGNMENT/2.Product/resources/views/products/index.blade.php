<h2> product details</h2>
<a href="{{ route('products.create') }}">add products</a>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th> Product Name:</th>
            <th> Prcoduct Description:</th>
            <th> Product Price:</th>
            <th>Product Quantity:</th>
            <th> Product type:</th>
            <th> Action:</th>

        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)

        <tr>
            <td>{{ $product->pname }}</td>
            <td>{{ $product->des }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->type }}</td>
            <td>
                <a href="{{ route('products.edit',$product->id) }}">Edit</a>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confrim('delete product?')">delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
