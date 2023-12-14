@extends('layouts.app')

@section('content')
    <button class="btn btn-light" type="button"> <a class="text-decoration-none text-black" href="{{ route('brand.create') }}">
            Add a new
            Brand</a>
    </button>

    <div class="container w-50 m-auto">
        <a name="" id="" class="btn bg_secondary text-white" href="{{ route('dashboard') }}" role="button"><i
                class="fa-solid fa-arrow-left"></i></a>
        <table class="brand_table">
            <thead>
                <tr>
                    <th>
                        Logo
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Country
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>


                @foreach ($brands as $brand)
                    <tr>
                        <td>
                            <div>
                                <img src="{{ asset('storage/' . $brand->logo) }}" alt="image" height="50px"
                                    width="50px" style="object-fit: contain">
                            </div>
                        </td>
                        <td>
                            <span> {{ $brand->name }} </span>
                        </td>
                        <td>
                            <span> {{ $brand->country }} </span>
                        </td>
                        <td>
                            <span> {{ $brand->description }} </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2 p-1 justify-content-end">
                                <div>
                                    <a class="btn btn-primary btn-sm" href="brand/{{ $brand->id }}/edit"
                                        role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal-{{ $brand->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>


                            </div>
                        </td>
                    </tr>
            </tbody>

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
        </table>

    </div>
@endsection
