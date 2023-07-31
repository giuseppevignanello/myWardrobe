@extends('layouts.app')

@section('content')
    <div class="d-flex mt-2 ms-2">
        <div>
            <a class="btn btn-sm bg-light" href="{{ route('dashboard') }}" role="button"><i
                    class="fa-solid fa-arrow-left"></i></a>
            <a class="btn btn-sm bg_secondary text-white" href="{{ route('outfit.create') }}"> Create a new outfit </a>
        </div>
        <div>

        </div>
    </div>
    <h1>Outfit</h1>
@endsection
