@extends('layouts.app')

@section('title', 'Add new item')

@section('content')


    {{-- Error message --}}
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
        {{-- come back button --}}
        <a class="btn bg_secondary text-white" href="{{ route('dress.index') }}" role="button"><i
                class="fa-solid fa-arrow-left"></i></a>
        {{-- end come back button --}}

        <h1 class="display-5">Edit {{ $dress->name }}</h1>

        <form action="{{ route('dress.update', $dress) }}" method="put" enctype="multipart/form-data" id="dressForm">
            @csrf
            @method('PUT')
            <div class="d-md-flex justify-content-center gap-5 bg-white p-3 rounded-2 w-75 w_lg_50 m-auto">
                {{-- left section --}}
                <div class="left">
                    {{-- name --}}
                    <div class="mb-3">

                        <label for="name" class="form-label fw-bold ">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control bg-light @error('name')
                        is-invalid
                    @enderror"
                            value="{{ old('name') }}">
                        {{-- name error --}}
                        <div id="nameError" class="badge bg-danger d-none">Name must contains between 3 and 256 characters
                        </div>

                        {{-- end name error --}}
                    </div>
                    {{-- type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label fw-bold">Type</label>
                        <select
                            class="form-select form-select-lg bg-light @error('type')
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
                        {{-- type error --}}
                        <div id="typeError" class="badge bg-danger d-none">Type field is required</div>

                        {{-- end type error --}}
                    </div>
                    {{-- brand --}}
                    <div class="mb-3">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <label for="brand" class="form-label fw-bold ">Brand</label>
                            <a class="btn bg_secondary text-white" href="{{ route('brand.create') }}" role="button">Add new
                                Brand</a>
                        </div>
                        <select name="brand" id="brand" value="{{ old('brand') }}"
                            class="form-select form-select-lg bg-light @error('brand') is-invalid @enderror">
                            <option selected></option>
                            @forelse ($brands as $brand)
                                <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                            @empty
                            @endforelse
                        </select>
                        {{-- brand error --}}
                        <div id="brandError" class="badge bg-danger d-none">Brand field is required</div>

                        {{-- end brand error --}}
                    </div>
                    {{-- size --}}
                    <div class="mb-3">
                        <label for="size" class="form-label fw-bold">Size</label>
                        <select
                            class="form-select form-select-lg bg-light @error('size')
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
                        {{-- error size --}}
                        <div id="sizeError" class="badge bg-danger d-none">Size field is required</div>

                        {{-- end error size --}}
                    </div>
                    {{-- color --}}
                    <div class="mb-3">
                        <label for="color" class="form-label fw-bold">Color</label>
                        <input type="text" name="color" id="color"
                            class="form-control bg-light @error('color')
                        is-invalid
                    @enderror"
                            value="{{ old('color') }}">

                        {{-- error color --}}
                        <div id="colorError" class="badge bg-danger d-none">Color must contains between 3 and 256 characters
                        </div>

                        {{-- end error color --}}

                    </div>
                </div>
                {{-- end left --}}
                {{-- right --}}
                <div class="right">
                    {{-- price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label fw-bold">Price</label>
                        <input type="number" step="0.01" name="price" id="price" class="form-control bg-light"
                            value="{{ old('price') }}">
                    </div>
                    {{-- error price --}}
                    <div id="priceError" class="badge bg-danger d-none">Please insert a positive number</div>

                    {{-- end error price --}}
                    {{-- date --}}
                    <div class="mb-3">
                        <label for="purchase_date fw-bold" class="form-label fw-bold">Purchase Date</label>
                        <input type="date" step="0.01" name="purchase_date" id="purchase_date"
                            class="form-control bg-light" value="{{ old('purchase_date') }}">
                        <small class="text-muted"></small>
                    </div>
                    {{-- error date --}}
                    <div id="purchase_date_error" class="badge bg-danger d-none">Date must be in the past</div>

                    {{-- end error date --}}
                    {{-- season --}}
                    <div class="mb-3">
                        <label for="season" class="form-label fw-bold">Season</label>
                        <select class="form-select form-select-lg bg-light" name="season" id="season"
                            value="{{ old('season') }}">
                            <option selected></option>
                            <option value="Autumn">Autumn</option>
                            <option value="Winter">Winter</option>
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                        </select>
                        {{-- error season --}}
                        <div id="seasonError" class="badge bg-danger d-none">Season field is required</div>

                        {{-- end error season --}}
                    </div>
                    {{-- image --}}
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Image</label>
                        <input type="file" name="image" id="image" class="form-control bg-light"
                            value="{{ old('image') }}">
                        <small class="text-muted"></small>
                    </div>
                    {{-- description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <textarea class="form-control bg-light" name="description" id="description" rows="3"
                            value="{{ old('description') }}"></textarea>
                    </div>
                    {{-- error description --}}
                    <div id="descriptionError" class="badge bg-danger d-none">Description field must include less than 256
                        characters</div>

                    {{-- end error description --}}
                    {{-- end right --}}
                    <button type="submit" class="btn bg_accent text-white">Add</button>
                </div>

            </div>


        </form>


    </div>
    <script src="{{ asset('js/createEditDressValidation.js') }}"></script>


@endsection
