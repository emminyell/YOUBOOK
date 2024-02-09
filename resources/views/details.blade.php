@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.scss') }}">
@section('content')
    <section class="hero" id="home" aria-label="hero">
        <div class="book_des">
    <div class="book-detail">
        <div class="cover">
          <div class="img-wrapper">
            <img src="http://ecx.images-amazon.com/images/I/51oXKWrcYYL.jpg">
          </div>
          <div class="author-wrapper">
            <span>Oscar Wilde</span>
          </div>
        </div>
        <div class="content">
          <h2 class="title">{{ $book->title }}</h2>
          <p>
            {{ $book->description }}
        </p>
        <form action="{{ route('reserve.book', $book->id) }}" method="post">
            @csrf
            <button type="submit" class="btn btn" style="background-color:hsl(235, 70%, 60%);">Reserve</button>
        </form>
    <a href="/" class="btn btn-light">Back</a>
        </div>
      </div>
    </div>
    </section>
 @endsection
