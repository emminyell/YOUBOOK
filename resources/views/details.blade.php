@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 24rem;">
        <img src="http://ecx.images-amazon.com/images/I/51oXKWrcYYL.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h3 class="card-title fw-bold">{{ $book->title }}</h3>
                <p class="card-text">{{ $book->description }}</p>
                <form action="{{ route('reserve.book', $book->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Reserve</button>
                    </form>
                <a href="/" class="btn btn-light">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection