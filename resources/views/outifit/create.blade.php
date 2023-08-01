@extends('layouts.app')

@section('content')
    <div class="container position-relative outfit_create_container">
        <div class="mt-2 ms-2">
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
                    <li class="outfit_dress d-none">
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
    <ul id="outfit" class="d-flex list-unstyled">

    </ul>
    <script src="{{ asset('js/outfitCarousel.js') }}"></script>
@endsection
