@extends('layouts.app')

@section('content')
    <div class="p-3 mb-2 jumbotron d-flex align-items-end justify-content-end">
        <button class="btn btn-light" type="button"> <a class="text-decoration-none text-black"
                href="{{ route('brand.create') }}"> Add a new
                Brand</a>
        </button>
    </div>
    <div class="container w-50 m-auto">
        <a name="" id="" class="btn bg_secondary text-white" href="{{ route('dashboard') }}" role="button"><i
                class="fa-solid fa-arrow-left"></i></a>
        @foreach ($brands as $brand)
            <div class="mt-4">
                <div class=" my-2 p-2 brand_card ">
                    <div class="d-flex gap-2 ">
                        <div class="logo d-flex align-items-center justify-content-center">
                            <img src="{{ asset('storage/' . $brand->logo) }}" alt="image" height="100px" width="100px"
                                style="object-fit: contain">
                        </div>
                        <div>
                            <h6> {{ $brand->name }} </h6>
                            <span> {{ $brand->country }}</span>
                            <p> {{ $brand->description }}</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 p-1 justify-content-end">
                        <div>
                            <a class="btn btn-primary btn-sm" href="brand/{{ $brand->id }}/edit" role="button"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteModal-{{ $brand->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>


                    </div>
                </div>

            </div>

            {{-- delete modal --}}
            <div class="modal fade" id="deleteModal-{{ $brand->id }}" tabindex="-1" data-bs-backdrop="static"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Delete brand</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this brands?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <form action="{{ route('brand.destroy', $brand->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
