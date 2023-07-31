@extends('layouts.app')

@section('content')
    <ul>
        @forelse ($dresses as $dress)
            <li>{{ $dress->name }}</li>
        @empty
        @endforelse
    </ul>
@endsection
