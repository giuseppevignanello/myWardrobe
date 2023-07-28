@extends('layouts.app')

@section('content')
    {{-- <div class="container">
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
                        <th>Buttons</th>
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
                            <td class="d-flex mt-3 gap-2">
                                <div>
                                    <a class="btn btn-primary" href="dress/{{ $dress->id }}/edit" role="button"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal-{{ $dress->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>

                              
                                <div class="modal fade" id="deleteModal-{{ $dress->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">Delete dress</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this dresss?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">No</button>
                                                <form action="{{ route('dress.destroy', $dress->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div> --}}
    <div class="container mt-4">
        <div class="d-flex align-items-center gap-2">
            <div class="mt-4">
                <a class="btn bg-light" href="{{ route('dashboard') }}" role="button"><i
                        class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mt-4">
                <a class="btn bg_secondary text-white" href="{{ route('dress.create') }}" role="button">Add New Clothes</a>
            </div>
        </div>

        <div class="wardrobe">
            <div class="front">
                <div class="door"></div>
                <div class="second-door"></div>
            </div>
            <ul class="list-unstyled">
                @forelse ($dresses as $dress)
                    <li>
                        <div class="dress d-flex align-items-center gap-2">
                            <img class="rounded-circle ms-1 mb-1" src="{{ asset('storage/' . $dress->image) }}"
                                alt="image">
                            <p class="text-white"> {{ $dress->name }}</p>
                        </div>
                    </li>
                @empty
                @endforelse

            </ul>
            <div class="shadow"></div>
        </div>
    </div>
@endsection
