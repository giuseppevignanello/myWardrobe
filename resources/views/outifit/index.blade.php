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
                    <li>
                        <div class="row justify-content-between bg-white">
                            <div class="col-5">
                                <h4 class="card-title">{{ $outfit->name }}</h4>
                                <p class="card-text">{{ $outfit->occasion }} <br>
                                    {{ $outfit->season }}
                                </p>
                            </div>
                            <div class="d-flex gap-2 col-4">
                                @foreach ($outfit->dresses as $dress)
                                    <img style="height: 100px; width:100px" src={{ asset('storage/' . $dress->image) }}
                                        alt="">
                                @endforeach
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
