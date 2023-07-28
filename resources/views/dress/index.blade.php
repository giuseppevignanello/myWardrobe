@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center gap-2">
            <div class="mt-4">
                <a class="btn bg_table" href="{{ route('dashboard') }}" role="button"><i
                        class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mt-4">
                <a class="btn bg_blue" href="{{ route('dress.create') }}" role="button">Add New Clothes</a>
            </div>
        </div>
        <div class="table-responsive mt-3">
            <table
                class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Season</th>
                        <th>Size</th>
                        <th>Purchase Date</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($dresses as $dress)
                        <tr class="table-primary">
                            <td>{{ $dress->name }}</td>
                            <td> <img src="{{ asset('storage/' . $dress->image) }}" alt="image" height="80px"></td>
                            <td> {{ $dress->brand }}</td>
                            <td> {{ $dress->type }}</td>
                            <td> {{ $dress->season }}</td>
                            <td> {{ $dress->size }}</td>
                            <td> {{ $dress->purchase_date }}</td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
@endsection
