<h1>EasyFlow</h1>

<h2>Edit Product</h2>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form method="POST" action="{{ route('products.update', $product) }}">
    @csrf
    @method('PUT')
    <label for="product_name">Product Name</label>
    <input type="text" id="product_name" name="product_name" value="{{ old('product_name', $product->product_name) }}">

    <label for="category">Category</label>
    <input type="text" id="category" name="category" value="{{ old('category', $product->category) }}">

    <label for="price">Price</label>
    <input type="text" id="price" name="price" value="{{ old('price', $product->price) }}">

    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}">

    <button type="submit">Update</button>
</form>

<a href="{{ route('products.index') }}">Back to Products</a>
