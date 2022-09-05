<x-guest-layout>
    <h1>Product Details</h1>

    <dl class="grid grid-cols-2">
        <dt>Name</dt>
        <dd>{{ $product->name }}</dd>
        <dt>Description</dt>
        <dd>{{ $product->description }}</dd>
        <dt>Price</dt>
        <dd>{{ $product->price }}</dd>
    </dl>
    <p>
        <a href="{{ route('products.index') }}"
            class="rounded bg-stone-800 text-white px-2 py-1 mr-2">
            Products
        </a>
    </p>

</x-guest-layout>
