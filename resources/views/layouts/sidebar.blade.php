<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Abdelaziz fathy resume</title>
  <meta content="abdelaziz fathy portfolio" name="description">
  <meta content="abdelaziz fathy portfolio" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}

  {{-- start links as blade --}}
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- end links as blade --}}



    {{-- start links as blade --}}
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    {{-- end links as blade --}}

  <style>
    /* Hero */
#hero{
 background-image:url("https://images.unsplash.com/photo-1484417894907-623942c8ee29?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzNTc5fDB8MXxzZWFyY2h8Mjh8fHdlYiUyMHxlbnwwfHx8fDE3MDM4MzUwMDB8MA&ixlib=rb-4.0.3&q=80&w=2560");
}
/* Iframe */
#contact .info iframe{
 width:466px;
 height:313px;
}

@media (max-width:575px){

/* Iframe */
#contact .info iframe{
 width:389px;
}

}

/* Portfolio details slider */
#portfolio-details .portfolio-details-slider{
 height:588px;
}


  </style>

</head>

<body>


  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('storage/' .$me->avatar) }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ $me->name }}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{$me->twitter}}" class="twitter"target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="{{$me->facebook}}" class="facebook"target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="{{$me->linkedin}}" class="linkedin"target="_blank"><i class="bx bxl-linkedin"></i></a>
            <a href="{{$me->github}}" class="github"target="_blank"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="/#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="/#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="/#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="/#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="/#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="/#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          {{-- download cv --}}
            <li><a href="{{ asset('storage/' .$me->cv) }}" download="cv" class="nav-link scrollto"><i class="bx bx-download"></i> <span>Download CV</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
