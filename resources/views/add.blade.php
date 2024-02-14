@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.scss') }}">

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<main class="main">
<div class="controller-grid">

    <nav class="controller-grid__item controller-grid__nav nav-grid">
      <i class="fas fa-pencil-alt"></i>
      <i class="fa fa-book" aria-hidden="true"></i>
    </nav>

    <h3 class="controller-grid__item controller-grid__header animated fadeIn">
      Add a Book
    </h3>

    <form  action="{{ route('store') }}" method="POST"  style="max-width: 500px;" class="controller-grid__item controller-grid__form form-grid animated fadeIn">
        @csrf
      <label class="form-grid__item form-grid__title-label" for="title">Book Title</label>
      <input class="form-grid__item form-grid__title-input" type="text" id="title" placeholder="Enter a Book Title" name="title">

      <label class="form-grid__item form-grid__year-label" for="year">Description</label>
      <input class="form-grid__item form-grid__year-input" type="text" id="year" placeholder="Enter a Book Description" name="description">

      <button type="submit" class="form-grid__item form-grid__submit" id="submit" type="submit">Add New Book</button>

    </form>
</main>
@endsection
