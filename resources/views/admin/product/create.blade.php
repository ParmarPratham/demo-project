<x-admin>
    @section('title','Create New Product')
    <div class="card">
        <div class="card-body mt-5">
            <form action="{{ route('admin.product.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="price">price</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="category">category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="Image">Image</label>
                    <input type="file" name="image" id="Image" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-admin>
