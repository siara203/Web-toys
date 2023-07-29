<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Toys Shop | @yield('title')</title>
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <!-- uniform -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/uniform/css/uniform.default.min.css') }}" />
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/wow/animate.css') }}" />
    <!-- gallery -->
    <link rel="stylesheet" href="{{ asset('assets/gallery/blueimp-gallery.min.css') }}" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('adm/images/favicon.ico') }}" type="image/x-icon">
   
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body id="home">
       <!-- loader Start -->
       <div id="loading">
        <div id="loading-center">
        </div>
  </div>
  <!-- loader END -->
<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('adm/images/favicon.ico') }}" alt="SDN Hotel">
          </a>
        </div>
        <div class="navbar-header" style="margin-top: 10px">
        <form class="navbar-form navbar-right" role="search" method="GET" action="{{ url('/search') }}">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter search"style="
              padding-right: 11px;width: 300px" name="keyword">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
        </div>
<!-- header -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">        
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/products') }}">Products</a></li>
      <li><a href="{{ url('/introduction') }}">Introduction</a></li>
      <li><a href="{{ url('/services') }}">Trademark</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>

        @if (Auth::check())
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->full_name }}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Account information</a></li>
                    <li><a href="{{asset('logout')}}">Logout</a></li>
                </ul>
            </li>
        @else
            <li><a href="{{asset('/user/login')}}" class="login-link">Login</a></li>
        @endif
    </ul>
</div><!-- Wnavbar-collapse -->

</nav>

@yield('content')

    <footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Toys Shop</h4>
                    <p>"Welcome to Toys Shop</p>
                </div>              
                 
                 <div class="col-sm-3">

                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Advisory</h4>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter email or phone here">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Get Notify</button>
                    </span>
                    </div>
                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>


<div class="text-center copyright">© <b><script>document.write(new Date().getFullYear())</script> ,</b> <a href="">SDN Hotel</a></div>
<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <!-- wow script -->
    <script src="{{ asset('assets/wow/wow.min.js') }}"></script>
    <!-- uniform -->
    <script src="{{ asset('assets/uniform/js/jquery.uniform.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>
    <!-- jquery mobile -->
    <script src="{{ asset('assets/mobile/touchSwipe.min.js') }}"></script>
    <!-- jquery mobile -->
    <script src="{{ asset('assets/respond/respond.js') }}"></script>
    <!-- gallery -->
    <script src="{{ asset('assets/gallery/jquery.blueimp-gallery.min.js') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('assets/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>
</body>
</html>