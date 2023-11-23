@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="my-5">
            <h1 class=" display-3 fw-bold"> Hi, {{ $user->name }} </h1>
            <p class="col-md-8 fs-4 ">Discover your look</p>
        </div>
        <div class="mt-3 d-flex flex-column flex-lg-row justify-content-center align-items-center gap-4">
            <div class="d-flex flex-column gap-2">
                <img class="card-img-top" height="300px" width="300px" style="object-fit: contain"
                    src={{ asset('img/clothes.jpg') }} alt="dress">

                <a class="btn bg_secondary text-white btn-lg w-50" href="{{ route('dress.index') }}" role="button">Your
                    Dresses</a>

            </div>
            <div class="d-flex flex-column gap-2">
                <img class="card-img-top" height="300px" width="300px" style="object-fit: contain"
                    src={{ asset('img/fashion.jpg') }} alt="dress">

                <a class="btn bg_secondary text-white btn-lg w-50" href="{{ route('brand.index') }}" role="button">Your
                    Brands</a>

            </div>
            <div class="d-flex flex-column gap-2">
                <img class="card-img-top" height="300px" width="300px" style="object-fit: contain"
                    src={{ asset('img/outfit.webp') }} alt="dress">

                <a class="btn bg_secondary text-white btn-lg w-50" href="{{ route('outfit.index') }}" role="button">Your
                    Outfits</a>
            </div>
        </div>
    </div>
    </div>
@endsection
