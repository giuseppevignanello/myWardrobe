@extends('layouts.app')

@section('content')
    <div class="p-3 mb-2 jumbotron">


    </div>
    <div class="container">
        @foreach ($brands as $brand)
            <div class="mt-4 ">
                <div class=" my-2 d-flex gap-4 brand_card">

                    <div class="logo">
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
