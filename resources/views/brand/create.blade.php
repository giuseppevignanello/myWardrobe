@extends('layouts.app')

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
        <h3>Create new Brand</h3>
        <form action="{{ route('brand.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="name" @error('name')
                is-invalid
            @enderror
                    value="{{ old('name') }}">
            </div>

            {{-- Change: add storage --}}
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="text" class="form-control" name="logo" id="logo" aria-describedby="helpId"
                    placeholder="logo">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select form-select-lg" name="country" id="country">
                    @foreach ($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
