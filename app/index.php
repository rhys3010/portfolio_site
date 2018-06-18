<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio Website Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Rhys Evans">

    <title>John Doe</title>

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'/>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/portfolio-site.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  </head>

  <body>
    <!-- Header + Nav -->
    <header class="bg-dark">
      <h1 class="site-heading text-center d-none d-lg-block">
        <span class="site-heading-upper text-white my-3">John Doe</span>
        <hr class="bg-light" />
        <span class="site-heading-lower text-white my-3">Multimedia Specialist</span>
      </h1>
      <div class="nav-wrapper">
        <nav class="navbar navbar-expand-lg" id="mainNav">
          <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none text-white" href="#">John Doe</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="about.html">About Me</a>
                </li>
                <li class="nav-item dropdown px-lg-4">
                  <a class="nav-link text-uppercase text-expanded dropdown-toggle" href="#" role="button" data-toggle="dropdown">Projects</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Videography</a>
                    <a class="dropdown-item" href="#">Photography</a>
                    <a class="dropdown-item" href="#">Audio Engineering</a>
                  </div>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Intro -->
    <section class="page-section clearfix" id="intro">
      <div class="container intro-wrapper">
        <div class="intro text-white">
          <div id="introCarousel" class="intro-img img-fluid mb-3 mb-lg-0 rounded carousel slide" data-ride"carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#introCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#introCarousel" data-slide-to="1"></li>
              <li data-target="#introCarousel" data-slide-to="2"></li>
            </ul>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/portrait1.jpg" alt="" width="100%">
              </div>
              <div class="carousel-item">
                <img src="img/portrait2.jpg" alt="" width="100%">
              </div>
              <div class="carousel-item">
                <img src="img/portrait3.jpg" alt="" width="100%">
              </div>
            </div>
          </div>
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Introduction</span>
              <span class="section-heading-lower">Welcome</span>
            </h2>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-lg" href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p class="copyright" id="copyright">&copy; Copyright <span id="date"></span> John Doe</p>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="">
                  <i class="fa fa-youtube"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="" >
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                Design by <a href="http://rhysevans.xyz">Rhys Evans</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Javascript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="js/portfolio-site.min.js"></script>
  </body>
</html>
