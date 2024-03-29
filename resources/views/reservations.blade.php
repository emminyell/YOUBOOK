@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.scss') }}">
@section('content')
<main class="main">
    <div class="container mt-5 mb-5">
        <div class="text-center">
            <h1 class="display-4 fw-bold text-dark">My Reservations</h1>
            <p class="lead">You can return or see the books you reserved here.</p>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            @foreach ($reservedBooks as $book)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card" style="width: fit-content;">
                        <img src="http://ecx.images-amazon.com/images/I/51oXKWrcYYL.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">{{ $book->title }}</h2>
                            <p class="card-text">{{ $book->description }}</p>
                            @if ($book->reservation)
                                <p>Start Date: {{ $book->reservation->start_date }}</p>
                                <p>End Date: {{ $book->reservation->end_date }}</p>
                            @endif
                            <form action="{{ route('unreserve.book', $book->id) }}" method="post">
                                @csrf
                                <button type="submit" class="text-light btn btn" style="background-color:hsl(235, 70%, 60%);">UnReserve</button>
                            </form>
                            <a href="{{ route('book.details', ['id' => $book->id]) }}" class="btn btn-light">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
</main>
