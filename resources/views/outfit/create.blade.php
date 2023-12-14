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
        {{-- form to send data --}}
        <form method="post" action="{{ route('outfit.store') }}">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div id="outfitData">

            </div>
            <div class="mb-1 mt-5">
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="Add outfit name" value="{{ old('name') }}">
            </div>
            <div class="mb-1">
                <input type="text" class="form-control" name="occasion" id="occasion" aria-describedby="helpId"
                    placeholder="Add outfit occasion" value="{{ old('input') }}">
            </div>
            <div class="mb-1">
                <small class="text-white">Select Season</small>
                <select class="form-select" name="season" id="season" value="{{ old('season') }}">
                    <option selected></option>
                    <option value="autumn">Autumn</option>
                    <option value="winter">Winter</option>
                    <option value="spring">Spring</option>
                    <option value="summer">Summer</option>
                </select>
            </div>
            <button type="submit" class="btn bg_secondary text-white">Save this outfit</button>
        </form>
        {{-- end form --}}
    </div>
    <script src="{{ asset('js/openWardrobe.js') }}"></script>
    <script src="{{ asset('js/outfitCarousel.js') }}"></script>
@endsection
