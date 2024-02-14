@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.scss') }}">
@section('content')
<main class="main">
    <div class="container">
        <h1>Notifications</h1>

        @foreach ($reservations as $reservation)
        <h2>{{ $user->name }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Book</th>
                    <th>Return Date</th>
                    <th>Rest Days</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $reservation->book->title }}</td>
                    <td>{{ $reservation->end_date->format('Y-m-d') }}</td>
                    <td>{{ $reservation->remainingDays }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
</main>
