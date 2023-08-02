@extends('layouts.app')

@section('content')
    <div class="d-flex mt-2 ms-2">
        <div>
            <a class="btn btn-sm bg-light" href="{{ route('outfit.index') }}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <a class="btn btn-sm bg_secondary text-white" href="{{ $outfit->id }}/edit"> <i
                    class="fa-solid fa-pen-to-square"></i> </a>
        </div>
    </div>
    <div class="container">
        <div class="bg_secondary text-white mt-2 rounded-1 py-4">
            {{-- add outfit img --}}
            <div class="card-body text-center">
                <h4 class="card-title">{{ $outfit->name }}</h4>
                <p class="card-text"> {{ $outfit->occasion }} <br>
                    {{ $outfit->season }}
                </p>
            </div>
            <div class="d-flex gap-2 justify-content-center mt-2">
                @foreach ($outfit->dresses as $dress)
                    <img style="height: 100px; width:100px" src="{{ asset('storage/' . $dress->image) }}" alt="">
                @endforeach
            </div>

        </div>
    </div>
@endsection
