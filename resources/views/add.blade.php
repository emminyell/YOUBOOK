@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.scss') }}">

@section('content')
<main class="main">
    <section class="add_book">
    <div class="book-list container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="book-title">Create a Book</h2>
            </div>
        </div>

        <form action="{{ route('store') }}" method="POST" class="row" style="max-width: 500px; margin: 0 auto;">
            @csrf
            <div class="col-md-12 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" style="border-radius: 10px;">
            </div>
            <div class="col-md-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" style="border-radius: 10px;"></textarea>
            </div>
            <div class="col-md-12" style="text-align: center;">
                <button type="submit" class="text-light btn btn" style="background-color:hsl(235, 70%, 60%);">Create Book</button>
            </div>
        </form>
    </div>
</section>
@endsection
</main>
