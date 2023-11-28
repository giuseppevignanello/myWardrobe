@extends('layouts.app')

@section('content')
    <div class="container mt-4" id="app-container">
        <div class="d-flex align-items-center gap-2 ">

            {{-- buttons --}}
            {{-- come back button --}}
            <div class="mt-4">
                <a class="btn bg-light" href="{{ route('dashboard') }}" role="button"><i
                        class="fa-solid fa-arrow-left"></i></a>
            </div>
            {{-- add new dress button --}}
            <div class="mt-4">
                <a class="btn bg_secondary text-white" href="{{ route('dress.create') }}" role="button">Add New
                    Clothes</a>
            </div>
            {{-- end buttons --}}
        </div>

        <div class="wardrobe" id="zoomContainer">
            <div class="front">
                <div class="door"></div>
                <div class="second-door"></div>
            </div>

            <div class="shadow"></div>

        </div>
        @include('partials.catalog')

    </div>
    <script src="{{ asset('js/openWardrobe.js') }}"></script>
@endsection
