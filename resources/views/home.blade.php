@extends('layouts.app')

@section('content')
    <div class="container">
        <a name="" id="" class="btn btn-primary mt-5" href="#" role="button">Add New Dress</a>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 my-3 g-5">
            @forelse ($dresses as $dress)
                <div class="card border-0">
                    <img class="card-img-top card-img-fixed-height shadow" src="{{ $dress->image }}" alt="Title">
                    <div class="card-body shadow">
                        <h4 class="card-title">{{ $dress->name }}</h4>
                        <p class="card-text">{{ $dress->brand }}</p>
                    </div>
                </div>
            @empty
                <div>
                    <p> No dresses</p>
                </div>
            @endforelse
        </div>
    @endsection
