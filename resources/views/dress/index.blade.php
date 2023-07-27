@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive mt-5">
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
                            <td>{{ $dress->image }}</td>
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
