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

    <div class="container pt-3 ">
        <h3>Create new Brand</h3>
        <form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="d-md-flex justify-content-center gap-5 bg_secondary text-white p-3 rounded-2 w-75 w_lg_50 m-auto">
                <div class="left
                ">
                    <div class="mb-3">
                        <label for="name" class="form-label ">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="name" @error('name')
                is-invalid
            @enderror
                            value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label ">Logo</label>
                        <input type="file" class="form-control" name="logo" id="logo" aria-describedby="helpId"
                            placeholder="logo">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label  ">Country</label>
                        <select class="form-select form-select-lg" name="country" id="country">
                            @foreach ($countries as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="right">
                    <div class="form-group">
                        <p class="">Select at least one category</p>
                        @foreach ($categories as $category)
                            <div class="form-check @error('categories') is-invalid @enderror">
                                <label class="form-check-label ">
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                        class="form-check-input"
                                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                    {{ $category->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label ">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                </div>




            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
