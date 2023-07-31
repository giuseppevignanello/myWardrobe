@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex align-items-center gap-2 ">
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
            <div class="h-100 overflow-y-scroll">
                <ul class="list-unstyled">
                    @forelse ($dresses as $dress)
                        <li class="d-flex align-items-center gap-2 my-1 justify-content-between">
                            <div class="dress d-flex align-items-center gap-2">
                                <img class="rounded-circle ms-1 mb-1" src="{{ asset('storage/' . $dress->image) }}"
                                    alt="image">
                                <p class="text-white"> {{ $dress->name }}</p>
                            </div>
                            <div class="d-flex gap-2 p-1">
                                <div>
                                    <a class="btn btn-primary btn-sm" href="dress/{{ $dress->id }}" role="button"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal-{{ $dress->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>


                            </div>
                        </li>
                    @empty
                    @endforelse

                </ul>
            </div>
            <div class="shadow"></div>
        </div>

        <div class="modal fade" id="deleteModal-{{ $dress->id }}" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Delete dress</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this dresss?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <form action="{{ route('dress.destroy', $dress->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
