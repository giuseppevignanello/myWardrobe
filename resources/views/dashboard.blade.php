@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="my-3">
            <h1 class="text-white display-5 fw-bold"> Hi, {{ $user->name }} </h1>
            <p class="col-md-8 fs-4 text-white">Discover your look</p>
        </div>
        <div class="mt-3 d-flex flex-column flex-lg-row justify-content-center align-items-center gap-4">
            <div class="card">
                <img class="card-img-top" height="250px" width="250px" style="object-fit: contain"
                    src={{ asset('img/clothes.jpg') }} alt="dress">
                <div class="card-body">
                    <a class="btn bg_secondary text-white btn-lg" href="{{ route('dress.index') }}" role="button">Your
                        Dresses</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" height="250px" width="250px" style="object-fit: contain"
                    src={{ asset('img/fashion.jpg') }} alt="dress">
                <div class="card-body">
                    <a class="btn bg_secondary text-white btn-lg" href="{{ route('brand.index') }}" role="button">Your
                        Brands</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" height="250px" width="250px" style="object-fit: contain"
                    src={{ asset('img/outfit.webp') }} alt="dress">
                <div class="card-body">
                    <a class="btn bg_secondary text-white btn-lg" href="{{ route('outfit.index') }}" role="button">Your
                        Outfits</a>
                </div>
            </div>
        </div>
    </div>
@endsection
