<!doctype html>
<html lang="en">
<head>
    <title>Sistem Safety Induction</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Knewave:normal,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="cssnew/bootstrap.css">
    <link rel="stylesheet" href="cssnew/animate.css">
    <link rel="stylesheet" href="cssnew/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="cssnew/style.css">

    <style>
    .links > a {
        color: #ffffff;
        padding: 0 25px;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>

</head>
<body>
    
    <header role="banner">
       
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand absolute">Petrokimia</a>
        </div>
</nav>
</header>
<!-- END header -->

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(img/bgpos.png);">
  <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
      <div class="col-md-8 text-center">

        <div class="mb-5 element-animate">
          <p><img src="img/logo2.png" width="175" height="75" style="margin-right: 30px; margin-bottom: 0px">
          <img src="img/lk3.png" width="75" height="75" style="margin-bottom: 0px"></p>
          <p class="lead" style="font-size: 50px; margin-top: 0px;">Sistem Pengajuan</p>
          <h1 style="font-family:'Knewave', sans-serif; font-size: 80px;">Safety Induction</h1>
          @if (Route::has('login'))
          <div class="links">
                    @auth
                        <a href="{{ url('/fp') }}">Formulir Personal</a>
                    @else
                        <a href="{{ route('login') }}">Login Perusahaan</a>
                         <!-- <a href="{{ route('register') }}">Register</a> -->
                    @endauth
              </div>
              @endif
              <br>
      </div>
  </div>
</div>
</div>
</section>

<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>


<script src="js/main.js"></script>
</body>
</html>