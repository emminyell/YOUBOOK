@extends('layouts.app')
<style>
body,h1{
  padding:0px;
  margin:0px;
}

/*header-section*/
.header-section .tag-section span{
  color: #014788;
}
.header-section{
  display:grid;
  grid-template-columns:auto auto auto;
  padding:2.5vw 7vw
}
.header-section .tag-section h1{
  font-size:2.5vw;
  font-family: 'Lato', sans-serif;
  font-family: 'Noto Serif', serif;
}
.header-section .menu-section button{
  display:none;
}
.header-section .menu-section ul{
  display:flex;
  margin:0px;
  padding: 1.2vw 0;
  justify-content:space-between;
}
.header-section .menu-section ul li{
  list-style:none;
}
.header-section .menu-section ul li a{
  display:inline-block;
  text-decoration:none;
  font-family:sans-serif;
  color:black;
  font-size:1.2vw;
  font-weight:700;
}
.header-section .search-section-parent{
  display:flex;
  justify-content:right;
}
.header-section .search-section{
  background-color:#ededed;
  border-radius:2vw;
  display:flex;
  padding: .6vw 1vw;
  color: #d1d1d1;
  width:fit-content;
  position:relative;
  height:fit-content;
  position:relative;
  top:.6vw;
}
.header-section .search-icon i{
  font-size:1vw;
  margin:0px;
  padding:0px;
}
.header-section .search-section input{
  border:0px;
  background-color:#ededed;
  width:9vw;
  padding: 0vw .8vw;
  font-size:1.2vw;
  color:#d1d1d1;
}
.header-section .search-section input:focus{
  outline:none;
}
.header-section .search-section-parent button{
  display:none;
}
@media screen and (max-width:1240px){
  .header-section{
    padding-top:30px;
    padding-bottom:30px;
  }
  .header-section .tag-section h1{
  font-size:30px;
  }
  .header-section .menu-section ul{
    padding:14px 0;
  }
  .header-section .menu-section ul li a{
    font-size:14px;
  }
  .header-section .search-section{
    border-radius:25px;
    padding: 5px 12px;
    top:8px;
  }
  .header-section .search-icon i{
    font-size:12px;
  }
  .header-section .search-section input{
    padding: 0vw 10px;
    font-size:12px;
    width:80px
  }
}
@media screen and (max-width:991px){
  .header-section{
    padding:30px 20px;
  }
  .header-section .menu-section button{
    display:block;
    border:0px;
    background-color:white;
    font-size:25px;
    position:relative;
    top:2px;
  }
  .header-section .tag-section h1{
  font-size:25px;
  }
  .header-section .menu-section button:focus{
    outline:none;
  }
  .header-section .menu-section ul{
    display:block;
    position:absolute;
  }
  .header-section .menu-section .show{
    display:none;
  }
  .header-section .menu-section li{
    margin-top:1vw;
  }
  .header-section .menu-section{
    grid-area:1/1/2/2;
  }
  .header-section .tag-section{
    text-align:center;
  }
  .header-section .search-show{
    display:none;
  }
  .header-section .search-section-parent button{
  background-color:white;
  border:0px;
  display:block;
  font-size:20px;
  position:relative;
  top:5px;
  }
  .header-section .search-section-parent button:focus{
    outline:none;   
  }
}

/*home-book-podcasts-section*/
.home-book-podcast-section .book-podcast{
  text-align:center;
  font-size:2vw;
  padding:1.2vw 0;
  padding-bottom:7vw;
}
.home-book-podcast-section .book-podcast h1{
  font-family: 'Lato', sans-serif;
  font-family: 'Noto Serif', serif;
  margin:0px;
}
.home-book-podcast-section .book-podcast span{
  color:#004687;
  font-size:3vw;
}
.home-book-podcast-section .book-podcast p{
  font-size:1.2vw;
  font-family:sans-serif;
  margin:1vw 0;
  margin-bottom:2vw;
  color: #c3c3c3;
}
.home-book-podcast-section .book-podcast a{
  text-decoration :none;
  font-size:1.2vw;
  font-family:sans-serif;
  background-color:#004687;
  color:white;
  padding:.9vw 2.1vw;
  border-radius:.5vw;
}
@media screen and (max-width:1240px){
  .home-book-podcast-section .book-podcast{
    padding:14px 0;
    font-size:25px;
    padding-bottom: 85px;
  }
  .home-book-podcast-section .book-podcast span{
    font-size:32px;
  }
  .home-book-podcast-section .book-podcast p{
  font-size:14px;
  margin-top:12px;
  margin-bottom:24px;
  }
  .home-book-podcast-section .book-podcast a{
    font-size:14px;
    padding:10px 25px;
    border-radius:6px;
  }
    
}
@media screen and (max-width:991px){
  .home-book-podcast-section .book-podcast h1{
    font-size:30px;
  }
  .home-book-podcast-section .book-podcast h1 span{
    font-size:24px;
  }
}
@media screen and (max-width:610px){
  .home-book-podcast-section .book-podcast h1 br{
    display:none;
  }
}

/*image-lorem-ipsum-section*/
.image-lorem-ipsum-section{
  display:flex;
  justify-content:center;
  padding:0 7vw;
  padding-bottom:6vw;
}
.image-lorem-ipsum-section .image-section{
  width:120%;
  height:32vw;
  border-radius:2vw;
}
 
.image-lorem-ipsum-section .image-section img{
 width:100%;
  height:100%;
  border-radius:2vw;
}
.image-lorem-ipsum-section .lorem-ipsum-section{
  background-color:white;
  margin-left:-5vw;
  position:relative;
  z-index:9999;
  height:fit-content;
  border-radius:2vw;
  box-shadow:0 0 1vw #e8e8e8;
  padding:3vw 4vw;
  margin-top:3.5vw;
}
.image-lorem-ipsum-section .lorem-ipsum-section .lorem{
  color:#084c8b;
  font-size:1.2vw;
  margin:0px;
  font-family: 'Lato', sans-serif;
}
.image-lorem-ipsum-section .lorem-ipsum-section h1{
  font-family: 'Noto Serif', serif;
  font-size:2.2vw;
  margin:1vw 0;
}
.image-lorem-ipsum-section .lorem-ipsum-section .statement{
  color: #c3c3c3;
  font-family:sans-serif;
  margin:0px;
  font-size:1.2vw;
}
.image-lorem-ipsum-section .icons-section ul{
  margin:0px;
  padding:0px;
  display:flex;
  justify-content:center;
  padding-top:2vw;
}
.image-lorem-ipsum-section .icons-section ul li{
  list-style:none;
  margin:0 1vw;
}
.image-lorem-ipsum-section .icons-section ul li a{
  text-decoration:none;
  font-family:sans-serif;
  color: #c3c3c3;
}
.featured-section .head-section{
  text-align : center;
}
@media screen and (max-width:1240px){
    .image-lorem-ipsum-section .image-section{
    height:380px;
    border-radius:25px;
  }
  .image-lorem-ipsum-section .image-section img{
  border-radius:25px;
  }
  .image-lorem-ipsum-section .lorem-ipsum-section{
    margin-left:-60px;
    border-radius:25px;
    box-shadow:0 0 12px #e8e8e8;
    padding:36px 48px;
    margin-top:42px;
  }
    .image-lorem-ipsum-section .lorem-ipsum-section .lorem{
    font-size:16px;
  }
  .image-lorem-ipsum-section .lorem-ipsum-section h1{
    font-size:25px;
    margin:12px 0;
  }
  .image-lorem-ipsum-section .lorem-ipsum-section .statement{
    font-size:15px;
  }
    .image-lorem-ipsum-section .icons-section ul{
    padding-top:25px;
  }
  image-lorem-ipsum-section .icons-section ul li{
    margin:0 12px;
  }
  .image-lorem-ipsum-section .icons-section ul li a i{
    font-size:16px
  }
}
@media screen and (max-width:991px){
  .image-lorem-ipsum-section{
    flex-direction:column;
  }
  .image-lorem-ipsum-section .image-section{
    width:500px;
    height:300px;
    margin:auto;
  }
  .image-lorem-ipsum-section .image-section img{
    margin:auto;
  }
  .image-lorem-ipsum-section .lorem-ipsum-section{
    margin:auto;
    width:370px;
    margin-top:-70px;
  }
}
@media screen and (max-width:608px){
  .image-lorem-ipsum-section .image-section{
    width:100%;
    height:230px;
  }
  .image-lorem-ipsum-section .lorem-ipsum-section{
    margin:auto;
    width: 67%;
    margin-top:-70px;
    padding:25px;
  }
      .image-lorem-ipsum-section .lorem-ipsum-section .lorem{
    font-size:14px;
  }
  .image-lorem-ipsum-section .lorem-ipsum-section h1{
    font-size:23px;
    margin:12px 0;
  }
  .image-lorem-ipsum-section .lorem-ipsum-section .statement{
    font-size:13px;
  }
}


/*featured-section-parent*/
.featured-section-parent{
  padding:0 7vw;
    padding-bottom:9vw;
}
.featured-section{
  background-color:#004687;
  border-radius: 2vw;
  padding: 4vw 4vw;
  color:white
}
.featured-section .head-section h1{
  font-size:2.2vw;
  font-family: 'Lato', sans-serif;
  font-family: 'Noto Serif', serif;
  margin:0px;
}
.featured-section .writers-section .image-section{
  width:5vw;
  height:5vw;
  margin:auto;
}
.featured-section .writers-section ul{
  padding:0px;
  margin:0px;
  display:flex;
  justify-content:space-between;
  flex-flow:wrap;
}
.featured-section .writers-section ul li{
  list-style:none;
  text-align:center;
  width:18vw;
  padding-top:4vw
}
.featured-section .writers-section .image-section img{
  width: 100%;
  height: 100%;
  border-radius:100%;
}
.featured-section .writers-section p{
  margin:0px;
  font-size:1.4vw;
  font-family:sans-serif;
  margin-top:1vw;
}
$color-bg: #fde3a7;
$book-color-bg: lighten($color-bg, 20%);
$book-color-border: lighten(#000, 85%);
$book-border: 1px solid $book-color-border;

%book-rounded-corners {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

// LOL CSS
body,
html {
  width: 100%;
  height: 100%;
  display: table;
  text-align: center;
}

body {
  background: #fde3a7;
}

ul {
  display: table-cell;
  vertical-align: middle;
}

.list-inline {
  padding-left: 0;
  list-style: none;

  > li {
    display: inline-block;
    margin-left: 2em;
  }

  > li:first-child {
    margin-left: 0;
  }
}

.book {
  @extend %book-rounded-corners;

  cursor: pointer;
  display: block;
  width: 150px;
  height: 220px;
  position: relative;
  background: $book-color-bg; 
  z-index: 1;
  box-shadow: 0 2px 4px 0 rgba(#000, .1), 0 9px 20px 0 rgba(#000, .25);
  overflow: hidden;
  transition: box-shadow .3s linear;
}

.book img {
  @extend %book-rounded-corners;

  width: inherit;
  height: inherit;
  transform-origin: 0 50%;
  transform: rotateY(0);
  transition: all .45s ease;
}

.book:hover {
  box-shadow: 0 2px 4px 0 rgba(#000, .25), 0 9px 20px 0 rgba(#000, .45);

  img {
    transform: rotateY(-25deg);
    box-shadow: 1px 1px 5px 5px rgba(#000, .2);
  }
}

.book::after,
.book::before {
  @extend %book-rounded-corners;

  content: '';
  display: block;
  width: inherit;
  height: inherit;
  position: absolute;
  z-index: -1;
  top: 0;
  background: $book-color-bg;
  border: $book-border;
}

.book::before { left: -3px; }
.book::after { left: -6px; }

@media screen and (max-width:1240px){
  .featured-section .writers-section .image-section{
  width:60px;
  height:60px;
  }
  .featured-section .head-section h1{
    font-size:22px;
  }
  .featured-section .writers-section p{
    font-size:14px;
    margin-top:12px;
  }
  .featured-section .writers-section ul li{
    
  padding-top:48px;
  width:220px;
}
}
@media screen and (max-width:608px){
  .featured-section .writers-section ul li{
    width:120px;
  }
}
@import url('https://fonts.googleapis.com/css?family=Ubuntu:500,700');
.price-table{
    text-align: center;
    overflow: hidden;
    margin: 20px;
   margin-top:100px;
    background: #fff;
    box-sizing: border-box;
    box-shadow: inset 0 0 40px rgba(0,0,0,.2), 0 20px 50px rgba(0,0,0,.5);
    border-radius: 20px;
}
.col-sm-4:nth-child(2) .price-table{
    transform: scale(1.1);
}
.price-table .price-head{
    padding: 50px;
    background: linear-gradient(45deg,#014788,#014788);
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
}
.price-table .price-head h4{
    text-transform: uppercase;
    margin: 0;
    padding: 0;
    color: #fff;
    font-weight: 700;
}
.price-table .price-head h2{
    margin: 0;
    padding: 20px 0 0;
    font-size: 36px;
    color: #fff;
}
.price-content{
    position: relative;
}
.price-content ul{
    position: relative;
    margin: 0;
    padding: 20px 0;
}
.price-content ul li {
    list-style: none;
    font-size: 16px;
    text-transform: uppercase;
    padding: 10px 0;
    color: #777;
    cursor: pointer;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    transition: .5s;

}
.price-content ul li:hover{
    border-left: 15px solid #00dff2;
    border-right: 15px solid #00dff2;
}
.price-button{
    padding: 0 0 30px;
}
.price-button a{
    padding: 10px 40px;
    background:linear-gradient(45deg,#014788,#014788);
    color: #fff;
    border-radius: 25px;
    font-size: 18px;
    text-transform: uppercase;
    text-decoration: none;
}
.background{
    position: absolute;
    top: 0;
    left: 0;
    background-image: linear-gradient(45deg,#4ffbdf,#5121f3);

}
    </style>

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Coustard:wght@900&family=Lato:wght@900&family=Noto+Serif:wght@700&family=Source+Serif+Pro:wght@600&family=Titillium+Web:wght@900&family=Ultra&display=swap" rel="stylesheet">

</head>

 <!--body-->
<body>
  <!--header-->
  <div class="header-section">
    <div class="tag-section">
      <h1>YouBook<span>.</span></h1>
    </div>
  </div>

  <!--book-podcasts-->
  <div class="home-book-podcast-section">
    <div class="book-podcast">
      <h1>Home of <span>100,000+ </span><br>books and podcasts
      </h1>
      <p>
        Get the latest books and listen to the<br>latest podcats all in one place.
      </p>
      <button href="#" title="" class="text-light btn btn" style="background-color:#014788;" >Get Started</button>
    </div>
  </div>
  <ul class='list-inline'>
  <li class='book'>
    <img src='https://d.gr-assets.com/books/1348927776l/8032112.jpg' />
  </li>

  <li class='book'>
    <img src='http://ecx.images-amazon.com/images/I/51oXKWrcYYL.jpg' />
  </li>

  <li class='book'>
    <img src='https://d.gr-assets.com/books/1348927776l/8032112.jpg' />
  </li>

  <li class='book'>
    <img src='http://ecx.images-amazon.com/images/I/51oXKWrcYYL.jpg' />
  </li>
  <li class='book'>
    <img src='https://d.gr-assets.com/books/1348927776l/8032112.jpg' />
  </li>

  <li class='book'>
    <img src='http://ecx.images-amazon.com/images/I/51oXKWrcYYL.jpg' />
  </li>
  <li class='book'>
    <img src='https://d.gr-assets.com/books/1348927776l/8032112.jpg' />
  </li>
</ul>

<i class="background"></i>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="price-table">
                            <div class="price-head">
                                <h4>Basic</h4>
                                <h2>$9.99<span>/month</span></h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>2 Books</li>
                                    <li>read</li>
                                    <li>Email Accounts</li>
                                    <li>Limited Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-table">
                            <div class="price-head">
                                <h4>Pro</h4>
                                <h2>$34.99<span>/month</span></h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>4 Books</li>
                                    <li>read and emprunt</li>
                                    <li>3 Email Accounts</li>
                                    <li>One Year Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-table">
                            <div class="price-head">
                                <h4>Ultimate</h4>
                                <h2>$69.99<span>/month</span></h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>16 Books</li>
                                    <li>3read emprunet buy</li>
                                    <li>Unlimited Email Accounts</li>
                                    <li>Lifetime Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>YOUBOOK
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">contacts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">gmail</a>
          </p>
          <p>
            <a href="#!" class="text-reset">facebook</a>
          </p>
          <p>
            <a href="#!" class="text-reset">instgram</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">youbook.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection


