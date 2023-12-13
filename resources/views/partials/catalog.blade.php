<div class="catalog d-none" id="catalogContainer">
    <div class="container mt-5">
        <div class="card p-3 w-75 m-auto">
            <div class="d-flex justify-content-end">
                <button id="closeCatalogButton" type="button" class="btn btn-danger">X</button>
            </div>
            <div class="overflow-y-scroll">
                <ul class="list-unstyled">
                    @forelse ($dresses as $dress)
                        <li class="d-flex align-items-center gap-2 my-1 justify-content-between">
                            <a class="text-decoration-none text-black my-2" href="dress/{{ $dress->id }}"
                                role="button">
                                <div class="dress d-flex align-items-center gap-3">
                                    <img class="rounded-circle ms-1" src="{{ asset('storage/' . $dress->image) }}"
                                        alt="image">
                                    <div class="fs-4"> {{ $dress->name }}</div>
                                </div>
                            </a>
                            <div class="d-flex gap-2 p-1">

                                <div>
                                    <button type="submit" class="btn btn-danger p-2" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal-{{ $dress->id }}">
                                        <i class="fa-solid fa-trash fa-xl"></i>
                                    </button>
                                </div>


                            </div>
                            <div class="modal fade" id="deleteModal-{{ $dress->id }}" tabindex="-1" role="dialog"
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
                        </li>

                    @empty
                    @endforelse
                </ul>
            </div>




        </div>
    </div>
</div>
