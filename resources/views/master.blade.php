<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Laravel Shopping Cart Example')</title>
    <meta name="description" content="Laravel Shopping Cart Example">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    @yield('extra-css')

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="/img/logo.ico">

    <style>
        body{
            /*background: -webkit-radial-gradient(center, ellipse cover, #0ecde9 0%, #025e83 100%);
            background: radial-gradient(#0ecde9, #025e83);*/
            color: #000;
        }

        .spacer {
            margin-bottom: 100px;            
        }

        .cart-image {
            height: 100px;
            width: 200px;
        }

        footer {
            background-color:#39983b !important;        
            padding: 20px 0;
        }

        .table>tbody>tr>td {
            vertical-align: middle;
        }

        .side-by-side {
            display: inline-block;
        }

        /*** effect - shadow 1 ***/


        .img-shadow-1
        {
        -webkit-box-shadow: 0 28px 16px -26px black;
        -moz-box-shadow: 0 28px 16px -26px black;
        box-shadow: 0 28px 16px -26px black;
        }
        
        .img-shadow-1:hover
        {
        transform:scale(1.1);
        -webkit-transform:scale(1.1);
        -moz-transform:scale(1.1);
        -ms-transform:scale(1.1);
        -o-transform:scale(1.1);
        
        -webkit-box-shadow: 0 58px 36px -56px black;
        -moz-box-shadow: 0 58px 36px -56px black;
        box-shadow: 0 58px 36px -56px black;
        }
        
        .img-shadow-1
        {
        transition:all .6s ease-in-out;
        -webkit-transition:all .6s ease-in-out;
        -moz-transition:all .6s ease-in-out;
        -ms-transition:all .6s ease-in-out;
        -o-transition:all .6s ease-in-out;
        }
        
        .img-shadow-1:hover
        {
        transition:all .6s ease-in-out;
        -webkit-transition:all .6s ease-in-out;
        -moz-transition:all .6s ease-in-out;
        -ms-transition:all .6s ease-in-out;
        -o-transition:all .6s ease-in-out;
        }

        .navdefault {
            background-color:#39983b !important;
        }

        .white{
            color: white !important;
        }

    </style>
</head>
<body>

    <header>

        <nav class="navbar navbar-default navbar-static-top navdefault">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand white" href="{{ url('/') }}" >LaraShop</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="{{ set_active('shop') }}"><a href="{{ url('/') }}" class="white">Home</a></li>
                <li class="{{ set_active('about') }}"><a href="about" class="white">About</a></li>
                <li class="{{ set_active('contact') }}"><a href="{{ url('/contact') }}" class="white">Contact</a></li>

              </ul>
              <ul class="nav navbar-nav navbar-right" >
                <li class="{{ set_active('wishlist') }}"><a href="{{ url('/wishlist') }}" class="white">Wishlist ({{ Cart::instance('wishlist')->count(false) }})</a></li>
                <li class="{{ set_active('cart') }}"><a href="{{ url('/cart') }}" class="white">Cart ({{ Cart::instance('default')->count(false) }})</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

    </header>

    @yield('content')

    <footer>
      <div class="container">
        <p class="text-muted white">Copyight 2018&copy; By OmniKode</p>
      </div>
    </footer>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@yield('extra-js')

</body>
</html>