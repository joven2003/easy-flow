<h1>EasyFlow</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('products.create') }}">Add Product</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <a href="{{ route('products.show', $product) }}">View</a>
                <a href="{{ route('products.edit', $product) }}">Edit</a>
                <form method="POST" action="{{ route('products.destroy', $product) }}" onsubmit="return confirm('Are you sure you want to delete this?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
