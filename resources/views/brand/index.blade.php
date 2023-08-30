@extends('layouts.app')

@section('content')
    <div class="p-3 mb-2 jumbotron d-flex align-items-end justify-content-end">
        <button class="btn btn-light" type="button"> <a class="text-decoration-none text-black"
                href="{{ route('brand.create') }}"> Add a new
                Brand</a>
        </button>
    </div>
    <div class="container">
        <a name="" id="" class="btn bg_secondary text-white" href="{{ route('dashboard') }}" role="button"><i
                class="fa-solid fa-arrow-left"></i></a>
        @foreach ($brands as $brand)
            <div class="mt-4">
                <div class=" my-2 d-flex gap-2 brand_card p-2">

                    <div class="logo d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/' . $brand->logo) }}" alt="image" height="100px" width="100px"
                            style="object-fit: contain">
                    </div>
                    <div>
                        <h6> {{ $brand->name }} </h6>
                        <span> {{ $brand->country }}</span>
                        <p> {{ $brand->description }}</p>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
@endsection
