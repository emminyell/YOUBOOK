<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.scss') }}">

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

</head>
<body>
    <header class="header" data-header>
        <div class="container">

          <h1>
            <a href="{{route('home')}}" class="logo">YOUBOOK</a>
          </h1>

          <nav class="navbar" data-navbar>

            <div class="navbar-top">
              <a href="#" class="logo">YouBook</a>

              <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="navbar-list">

              <li class="navbar-item">
                <a href="{{route('home')}}" class="navbar-link" data-nav-toggler>Home</a>
              </li>

              <li class="navbar-item">
                <a href="{{route('afficher')}}" class="navbar-link" data-nav-toggler>library</a>
              </li>

              <li class="navbar-item">
                <a href="" class="navbar-link" data-nav-toggler>Blog</a>
              </li>

              <li class="navbar-item">
                <a href="#event" class="navbar-link" data-nav-toggler>Contact us</a>
              </li>
            </ul>

          </nav>

          <div class="header-actions">

            <button class="header-action-btn" aria-label="Open search" data-search-toggler>
              <ion-icon name="search-outline"></ion-icon>
            </button>
            @if(session()->has('user'))
            <li class="navbar-item">
                <a href="{{route('add')}}" class="navbar-link" data-nav-toggler>Add Book</a>
              </li>
              <li class="navbar-item">
                <a href="{{route('reservations')}}" class="navbar-link" data-nav-toggler>My reservation</a>
              </li>
            <a href="{{route('logout')}}" class="header-action-btn login-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="span">logout</span>
            </a>
            @else
            <a href="{{route('signup')}}" class="header-action-btn login-btn">
                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                <span class="span">Login / Register</span>
              </a>
              @endif
            <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
              <ion-icon name="menu-outline"></ion-icon>
            </button>

          </div>

          <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
      </header>





      <!--
        - #SEARCH BOX
      -->

      <div class="search-container" data-search-box>
        <div class="container">

          <button class="search-close-btn" aria-label="Close search" data-search-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <div class="search-wrapper">
            <input type="search" name="search" placeholder="Search Here..." aria-label="Search" class="search-field">

            <button class="search-submit" aria-label="Submit" data-search-toggler>
              <ion-icon name="search-outline"></ion-icon>
            </button>
          </div>

        </div>
      </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

<div class="container mt-4">
    @yield('content')
</div>






<footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">YOUBOOK</a>

          <p class="section-text">
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its
            layout. The point of using Lorem Ipsum.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Explore</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">About Us</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Upcoming Events</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Blog & News</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">FAQ Question</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Testimonial</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Privacy Policy</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Contact Us</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Pricing Plan</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Instructor Profile</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">FAQ</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Popular Courses</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Terms & Conditions</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Info</p>
          </li>

          <li class="footer-item">
            <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

            <address class="footer-link">
              275 Quadra Street Victoria Road, New York
            </address>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+13647657839" class="footer-link">+ 1 (364) 765-7839</a>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+13647657840" class="footer-link">+ 1 (364) 765-7840</a>
          </li>

          <li class="footer-item">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <a href="mailto:contact@eduhome.com" class="footer-link">contact@YOUBOOK.com</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          Copyright 2024 All Rights Reserved by
        </p>
      </div>

    </div>
  </footer>





  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="arrow-up"></ion-icon>
  </a>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
