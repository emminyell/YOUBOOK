@extends('layouts.app')

@section('content')
<main class="main">
    <div class="container mt-5 mb-5">
    <div class="text-center">
        <h1 class="display-4 fw-bold text-dark">My Library</h1>
        <p class="lead"></p>
    </div>
</div>
<div>
    <h2>Disponible Books</h2>
    @foreach ($disponibleBooks as $book)
        <p>{{ $book->title }}</p>
    @endforeach
</div>

<div>
    <h2>Reserved Books</h2>
    @foreach ($reservedBooks as $reservation)
        @php
            $endDate = \Carbon\Carbon::parse($reservation->end_date);
        @endphp
        <p>Book: {{ $reservation->book->title }} - End Date: {{ $endDate->format('Y-m-d') }} - Reserved by: {{ $reservation->user->name }}</p>
    @endforeach
</div>



@endsection
</main>
