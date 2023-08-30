@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex mt-2 ms-2">
            <div>
                <a class="btn btn-sm bg-light" href="{{ route('dashboard') }}" role="button"><i
                        class="fa-solid fa-arrow-left"></i></a>
                <a class="btn btn-sm bg_secondary text-white" href="{{ route('outfit.create') }}"> Create a new outfit </a>
            </div>

        </div>
        <div class="container mt-2">
            <ul class="list-unstyled">
                @foreach ($outfits as $outfit)
                    <li>
                        <div
                            class="outfit_index_card row justify-content-between bg_secondary align-items-center mb-2 rounded-1">
                            <div class="col-6 p-3">
                                <h5 class="card-title">{{ $outfit->name }}</h5>
                                <div>
                                    <p class="card-text">{{ $outfit->occasion }} <br>
                                        {{ $outfit->season }}
                                    </p>
                                    <div class="d-flex gap-2 p-1">
                                        <div>
                                            <a class="btn btn-primary btn-sm" href="outfit/{{ $outfit->id }}/edit"
                                                role="button"><i class="fa-solid fa-eye"></i></a>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal-{{ $outfit->id }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>

                                        {{-- delate modal --}}
                                        <div class="modal fade" id="deleteModal-{{ $outfit->id }}" tabindex="-1"
                                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">Delete outfit</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this outfit?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">No</button>
                                                        <form action="{{ route('outfit.destroy', $outfit->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-2 col-5 justify-content-end">
                                <img class="index_outfit_image" src="https://picsum.photos/100/100" alt="">
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
