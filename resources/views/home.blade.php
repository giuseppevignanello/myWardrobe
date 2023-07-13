@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary mt-5" href="{{ route('dresses.create') }}" role="button">Add New Dress</a>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 my-3 g-5">
            @forelse ($dresses as $dress)
                <div class="card border-0">
                    <img class="card-img-top card-img-fixed-height shadow" src="{{ $dress->image }}" alt="Title">
                    <div class="card-body shadow">
                        <h4 class="card-title">{{ $dress->name }}</h4>
                        <p class="card-text">{{ $dress->brand }}</p>
                        <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal-{{ $dress->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <a class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-eye"></i></a>
                    </div>
                    <div class="modal fade" id="deleteModal-{{ $dress->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Delete dress</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this dress?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <form action="{{ route('dresses.destroy', $dress->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <p> No dresses</p>
                </div>
            @endforelse
        </div>
    @endsection
