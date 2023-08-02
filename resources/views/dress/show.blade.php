@extends('layouts.app')

@section('content')
    <div class="d-flex mt-2 ms-2">
        <div>
            <a class="btn btn-sm bg-light" href="{{ route('dress.index') }}" role="button"><i
                    class="fa-solid fa-arrow-left"></i></a>
            <a class="btn btn-sm bg_secondary text-white" href="{{ $dress->id }}/edit"> <i
                    class="fa-solid fa-pen-to-square"></i> </a>
        </div>
    </div>
    <div class="show_card card bg_opacity text-white">
        <img class="card-img-top show_img" src="{{ asset('storage/' . $dress->image) }}" alt="Title">
        <div class="card-body">
            <h4 class="card-title">{{ $dress->name }}</h4>
            <p class="card-text">{{ $dress->brand }} <br>
                {{ $dress->size }} - {{ $dress->color }} - €{{ $dress->price }} - {{ $dress->season }} <br>
                {{ $dress->description }}
            </p>
        </div>
    </div>
@endsection
