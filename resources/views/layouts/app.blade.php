<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');

        .navbar-custom {
            background-color: #014788; 
            font-family: 'Indie Flower', cursive; 
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #fff; /* Dark text color */
            font-size: 20px; /* Font size */
            text-transform: uppercase; /* Uppercase */
        }

        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #000; /* Dark color on hover */
        }

        .navbar-custom .navbar-toggler-icon {
            background-color: #343a40; /* Dark color for toggler icon */
        }

        .navbar-custom .navbar-toggler {
            border-color: #343a40; /* Border color for toggler icon */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">YouBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add')}}">Add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('afficher')}}">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('library')}}">Library</a>
                </li>
            </ul>
            <div class="d-flex justify-content-end-flex"> 
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('signin')}}">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('signup')}}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</body>
</html>



<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
