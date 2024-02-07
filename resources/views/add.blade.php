@extends('layouts.app')

@section('content')
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
                <button type="submit" class="btn btn-outline-primary" style="border-radius: 20px; padding: 10px 40px;">Create Book</button>
            </div>
        </form>
    </div>

    <style>
        body {
            font-family: system-ui;
            color: #014788;
            text-align: center;
            font-family:'Indie Flower', cursive;
        }
        .book-list .book-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .book-list .row {
            margin-bottom: 20px;
        }
        .book-list .col-md-12 {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #000;
        }
    </style>
@endsection
