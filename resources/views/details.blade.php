@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.scss') }}">
@section('content')
<main class="main">
    <section class="hero" id="home" aria-label="hero">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="book-detail">
            <div class="cover">
                <div class="img-wrapper">
                    <img src="http://ecx.images-amazon.com/images/I/51oXKWrcYYL.jpg">
                </div>
            </div>
            <div class="content">
                <h2 class="title">{{ $book->title }}</h2>
                <p>{{ $book->description }}</p>
                <button type="button" class="btn btn" style="background-color:hsl(235, 70%, 60%);" data-toggle="modal" data-target="#reservationModal">Reserve</button>
                <a href="/" class="btn btn-light">Back</a>
            </div>
        </div>
    </section>
</main>

<!-- Reservation Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservationModalLabel">Select Start and End Dates of Reservation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('reserve.book', $book->id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Reserve</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

