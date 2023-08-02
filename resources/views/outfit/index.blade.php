@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex mt-2 ms-2">
            <div>
                <a class="btn btn-sm bg-light" href="{{ route('dashboard') }}" role="button"><i
                        class="fa-solid fa-arrow-left"></i></a>
                <a class="btn btn-sm bg_secondary text-white" href="{{ route('outfit.create') }}"> Create a new outfit </a>
            </div>

        </div>
        <div class="container mt-2">
            <ul class="list-unstyled">
                @foreach ($outfits as $outfit)
                    <a class="text-decoration-none text-white" href="outfit/{{ $outfit->id }}">
                        <li>
                            <div
                                class="outfit_index_card row justify-content-between bg_secondary text-white align-items-center mb-2 rounded-1">
                                <div class="col-6 p-3">
                                    <h5 class="card-title">{{ $outfit->name }}</h5>
                                    <p class="card-text">{{ $outfit->occasion }} <br>
                                        {{ $outfit->season }}
                                    </p>
                                </div>
                                <div class="d-flex gap-2 col-5 justify-content-end">
                                    <img class="index_outfit_image" src="https://picsum.photos/100/100" alt="">
                                </div>
                            </div>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
