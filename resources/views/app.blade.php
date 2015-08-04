<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="row">
        <div class="col-md-5">
          <a href="#">
            <img src="http://placehold.it/100x70" class="logo" />
            <span class="site-name">HTO, LLC</span>
          </a>
        </div>
        <div class="col-md-7">

          <ul class="nav navbar-nav pull-right main-nav">
            <li class="main-menu"><a href="/about">About Us</a></li>
            <li class="main-menu"><a href="/how-it-works">How It Works</a></li>
            <li class="main-menu"><a href="/articles">Latest Articles</a></li>
            <li class="main-menu"><a href="/log-in">Log In</a></li>
          </ul>
        </div>

      </div>
      <!--end header-->
    </div>
  </div>
    @include("flash::message")

    @yield('content')

  <div class="container">

  </div>

  <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/js/bootstrap.js"></script>
</body>
</html>
