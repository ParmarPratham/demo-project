<x-admin>
@section('title','Products')

<a href="{{ route('admin.product.create') }}">Create</a>
<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>slug</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td><img height="80" src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->slug }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->name }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
</x-admin>
