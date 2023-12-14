@extends('layouts.app')

@section('content')
    <div class="container position-relative outfit_create_container">

        {{-- back button --}}
        <div class="mb-1">
            <a class="btn btn-sm bg-light" href="{{ route('outfit.index') }}" role="button"><i
                    class="fa-solid fa-arrow-left"></i></a>
        </div>

    </div>
    <div class="container">
        <ul id="outfit" class="d-flex list-unstyled mt-5 justify-content-center">

        </ul>
        {{-- form to send data --}}
        <form method="post" action="{{ route('outfit.update', $outfit) }}">
            @csrf

            @method('PUT')

            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="outfit_id" value="{{ $outfit->id }}">
            <div id="outfitData">

            </div>
            <div class="mb-1 mt-5">
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="Add outfit name" value="{{ old('name', $outfit->name) }}">
            </div>
            <div class="mb-1">
                <input type="text" class="form-control" name="occasion" id="occasion" aria-describedby="helpId"
                    placeholder="Add outfit occasion" value="{{ old('occasion', $outfit->occasion) }}">
            </div>
            <div class="mb-1">
                <small class="text-white">Select Season</small>
                <select class="form-select" name="season" id="season" value="{{ old('season', $outfit->season) }}">
                    <option selected></option>
                    <option value="autumn">Autumn</option>
                    <option value="winter">Winter</option>
                    <option value="spring">Spring</option>
                    <option value="summer">Summer</option>
                </select>
            </div>
            @error('season')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn bg_secondary text-white">Save this outfit</button>
        </form>

        {{-- end form --}}
    </div>
    <script src="{{ asset('js/outfitCarousel.js') }}"></script>
@endsection
