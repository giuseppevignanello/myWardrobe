@extends('layouts.app')

@section('content')
    {{-- backend error message --}}
    @if ($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- end backend error message --}}
    {{-- come back button --}}
    <div class="mt-4 ms-2">
        <a class="btn bg-light" href="{{ route('brand.index') }}" role="button"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    {{-- end come back button --}}

    <div class="container pt-3">
        <h3 class="mb-4 ms-5 display-4">Edit {{ $brand->name }}</h3>
        <form action="{{ route('brand.update', $brand) }}" method="post" enctype="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="d-md-flex justify-content-center gap-5 bg-white p-3 rounded-2 w-75 w_lg_50 m-auto">
                <div class="left 
                ">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Name</label>
                        <input type="text" class="form-control bg-light" name="name" id="name"
                            aria-describedby="helpId" placeholder="name"
                            @error('name')
                is-invalid
            @enderror value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label fw-bold">Logo</label>
                        <input type="file" class="form-control bg-light" name="logo" id="logo"
                            aria-describedby="helpId" placeholder="logo">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label fw-bold ">Country</label>
                        <select class="form-select form-select-lg bg-light " name="country" id="country">
                            @foreach ($countries as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="right">
                    <div class="form-group">
                        <p class="fw-bold">Select at least one category</p>
                        @foreach ($categories as $category)
                            <div class="form-check @error('categories') is-invalid @enderror">
                                <label class="form-check-label  ">
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                        class="form-check-input bg-light"
                                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                    {{ $category->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold ">Description</label>
                        <textarea class="form-control bg-light" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg_accent text-white">Add</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
    <script src="{{ asset('js/createEditBrandValidation.js') }}"></script>
@endsection
