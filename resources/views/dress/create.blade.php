@extends('layouts.app')

@section('title', 'Add new item')

@section('content')

    @if ($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container pt-3">
        <form action="{{ route('dress.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-white">Name</label>
                <input type="text" name="name" id="name"
                    class="form-control @error('name')
                is-invalid
            @enderror"
                    value="{{ old('name') }}">
                <small class="text-white">Min 3, max 256 characters</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label text-white">Type</label>
                <select class="form-select form-select-lg @error('type')
                is-invalid
            @enderror"
                    name="type" id="type" value="{{ old('type') }}">
                    <option selected></option>
                    <option value="Jacket">Jacket</option>
                    <option value="Dress">Dress</option>
                    <option value="T-shirt">T-shirt</option>
                    <option value="Top">Top</option>
                    <option value="Pants">Pants</option>
                    <option value="Hoodie">Hoodie</option>
                    <option value="Sportwear">Sportwear</option>
                    <option value="Shirt">Shirt</option>
                    <option value="Jeans">Jeans</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Hat">Hat</option>
                    <option value="Skirt">Skirt</option>
                    <option value="Underwear">Underwear</option>
                    <option value="Shoes">Shoes</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <label for="brand" class="form-label text-white">Brand</label>
                    <a class="btn bg_secondary text-white" href="{{ route('brand.create') }}" role="button">Add new
                        Brand</a>
                </div>
                <select name="brand" id="brand" value="{{ old('brand') }}"
                    class="form-select form-select-lg @error('brand') is-invalid @enderror">
                    <option selected></option>
                    @forelse ($brands as $brand)
                        <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="mb-3">
                <label for="size" class="form-label text-white">Size</label>
                <select class="form-select form-select-lg @error('size')
                is-invalid
            @enderror"
                    name="size" id="size" value="{{ old('size') }}">
                    <option selected></option>
                    <option value="XXS">XXS</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label text-white">Color</label>
                <input type="text" name="color" id="color"
                    class="form-control @error('color')
                is-invalid
            @enderror"
                    value="{{ old('color') }}">
                <small class="text-white">Min 3, max 256 characters</small>
            </div>
            {{-- Change in a select  --}}
            <div class="mb-3">
                <label for="price" class="form-label text-white">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control"
                    value="{{ old('price') }}">
                <small class="text-white"></small>
            </div>
            <div class="mb-3">
                <label for="purchase_date" class="form-label text-white">Purchase Date</label>
                <input type="date" step="0.01" name="purchase_date" id="purchase_date" class="form-control"
                    value="{{ old('purchase_date') }}">
                <small class="text-white"></small>
            </div>
            <div class="mb-3">
                <label for="season" class="form-label text-white">Season</label>
                <select class="form-select form-select-lg" name="season" id="season" value="{{ old('season') }}">
                    <option selected></option>
                    <option value="Autumn">Autumn</option>
                    <option value="Winter">Winter</option>
                    <option value="Spring">Spring</option>
                    <option value="Summer">Summer</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label text-white">Image</label>
                <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
                <small class="text-white"></small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-white">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"
                    value="{{ old('description') }}"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
    </div>
    </form>
@endsection
