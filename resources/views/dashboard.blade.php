@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mt-5 d-flex justify-content-around">
            <div>
                <a class="btn bg_table" href="{{ route('dress.index') }}" role="button">Your dresses</a>
            </div>
            <div>
                <a class="btn bg_table" href="#" role="button">Button</a>
            </div>
            <div>
                <a class="btn bg_table" href="#" role="button">Button</a>
            </div>
        </div>
    </div>
@endsection
