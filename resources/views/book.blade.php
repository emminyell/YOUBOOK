@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="font-family: 'Indie Flower', cursive;">All Books</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse ($books as $book)
                <div class="col">
                    <div class="card h-100 border border-2 border-primary rounded-3 shadow">
                        <img src='http://ecx.images-amazon.com/images/I/51oXKWrcYYL.jpg' class="card-img-top" alt="Book Image">
                        <div class="card-body">
                            <h5 class="card-title" >{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->description }}</p>
                            <p>Status: {{ $book->status }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center">
                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateModal{{ $book->id }}">Edit</button>
                            
                            <!-- <form action="{{ route('status', $book->id) }}" method="post">
                            @method('GET')
                            @csrf
                            @if ($book->status == 1)
                                <button type="submit" class="btn btn-outline-warning">Avaibale</button>
                            @else
                                <button type="submit" class="btn btn-outline-warning">Reserved</button>
                            @endif
                        </form> -->
                        <a href="{{ route('book.details', ['id' => $book->id]) }}" class="btn btn-light">Details</a>

                            <form action="{{ route('delete', $book->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Update Modal -->
                <div class="modal fade" id="updateModal{{ $book->id }}" tabindex="-1" aria-labelledby="updateModalLabel{{ $book->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel{{ $book->id }}">Update Book</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('update', $book->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="update-title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="update-title" name="title" value="{{ $book->title }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="update-description" class="form-label">Description</label>
                                        <textarea class="form-control" id="update-description" name="description" rows="4">{{ $book->description }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Book</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-warning" role="alert">
                        No books found!
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection


