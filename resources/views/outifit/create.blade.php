@extends('layouts.app')

@section('content')
    <div class="container position-relative">
        <ul class="outfit_create_container list-unstyled d-flex justify-content-center">
            @forelse ($dresses as $dress)
                <li class="outfit_dress d-none">
                    <div class="card outfit_create_card">
                        <img class="" src="{{ asset('storage/' . $dress->image) }}" alt={{ $dress->name }}>
                        <div class="card-body">
                            <h4 class="card-title">{{ $dress->name }}</h6>
                                <p class="card-text">{{ $dress->brand }}</p>
                        </div>
                    </div>
                </li>
            @empty
            @endforelse
        </ul>
        <div class="buttons position-absolute">
            <button id="prev" type="button" class="btn bg_secondary text-white"><i
                    class="fa-solid fa-arrow-left"></i></button>
            <button id="next" class="btn bg_secondary text-white"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>

    <script src="{{ asset('js/outfitCarousel.js') }}"></script>
@endsection
