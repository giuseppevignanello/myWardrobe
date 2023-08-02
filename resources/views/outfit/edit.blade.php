@extends('layouts.app')

@section('content')
    <div class="container position-relative outfit_create_container">

        {{-- back button --}}
        <div class="mb-1">
            <a class="btn btn-sm bg-light" href="{{ route('outfit.index') }}" role="button"><i
                    class="fa-solid fa-arrow-left"></i></a>
        </div>


        <div class="wardrobe">
            <div class="front">
                <div class="door"></div>
                <div class="second-door"></div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center">
                @forelse ($dresses as $dress)
                    <li id={{ $dress->id }} class="outfit_dress d-none">
                        <div class="card outfit_create_card">
                            <img class="" src="{{ asset('storage/' . $dress->image) }}" alt={{ $dress->name }}>
                            <div class="card-body text-white">
                                <h6 class="card-title">{{ $dress->name }}</h6>
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="card-text">{{ $dress->brand }}</div>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                @endforelse
            </ul>
            <div class="shadow"></div>
            <div class="buttons position-absolute">
                <button id="prev" type="button" class="btn btn-sm bg_secondary text-white"><i
                        class="fa-solid fa-arrow-left"></i></button>
                <button id="next" class="btn btn-sm bg_secondary text-white"><i
                        class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

    </div>
    <div class="container">
        <ul id="outfit" class="d-flex list-unstyled mt-5 justify-content-center">

        </ul>
        {{-- form to send data --}}
        <form method="post" action="{{ route('outfit.updateP', $outfit) }}">
            @csrf
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
            <button type="submit" class="btn bg_secondary text-white">Save this outfit</button>
        </form>

        {{-- end form --}}
    </div>
    <script src="{{ asset('js/outfitCarousel.js') }}"></script>
@endsection
