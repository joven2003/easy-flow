<h1>EasyFlow</h1>

<h2>Product Details</h2>

<p>ID: {{ $product->id }}</p>
<p>Product Name: {{ $product->product_name }}</p>
<p>Category: {{ $product->category }}</p>
<p>Price: {{ $product->price }}</p>
<p>Quantity: {{ $product->quantity }}</p>

<a href="{{ route('products.edit', $product) }}">Edit</a>
<a href="{{ route('products.index') }}">Back to Products</a>
