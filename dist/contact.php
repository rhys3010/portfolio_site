<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio Website Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Rhys Evans">

    <title>John Doe | Contact</title>

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
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="index.php">Home</a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="about.html">About Me</a>
                </li>
                <li class="nav-item dropdown px-lg-4">
                  <a class="nav-link text-uppercase text-expanded dropdown-toggle" href="" role="button" data-toggle="dropdown">Projects</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="projects.html#Videography">Videography</a>
                    <a class="dropdown-item" href="projects.html#Photography">Photography</a>
                    <a class="dropdown-item" href="projects.html#Audio_Engineering">Audio Engineering</a>
                  </div>
                </li>
                <li class="nav-item active px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="#">Contact
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Contact -->
    <section class="my-4 p-2 mx-auto" id="contact">
      <div class="container p-3">
        <h3 class="section-heading thin mb-4 text-center">Contact Me</h3>
        <hr class="bg-primary"/>
        <div class="row">
          <div class="col-lg-6">
            <?php
              //init variables
              $cf = array();
              $sr = false;

              if(isset($_SESSION['cf_returndata'])){
                  $cf = $_SESSION['cf_returndata'];
                  $sr = true;
              }

            ?>
            <form id="contactForm" name="sentMessage" method="post" action="php/mail.php">
              <div class="row">
                <div class="form-group col-lg-6">
                  <input class="form-control <?php echo ($sr && !$cf['form_ok'] && !$cf['posted_form_data']['name']['valid']) ? 'text-danger' : '' ?>" id="name" type="text" placeholder="Your Name *" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name']['content'] : ''  ?>" required>
                  <p class="help-block text-danger"><?php echo ($sr && !$cf['form_ok'] && !$cf['posted_form_data']['name']['valid']) ? 'Please Enter a Valid Name' : '' ?></p>
                </div>
                <div class="form-group col-lg-6">
                  <input class="form-control <?php echo ($sr && !$cf['form_ok'] && !$cf['posted_form_data']['email']['valid']) ? 'text-danger' : '' ?>" id="email" type="email" placeholder="Your Email *" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email']['content'] : '' ?>" required>
                  <p class="help-block text-danger"><?php echo ($sr && !$cf['form_ok'] && !$cf['posted_form_data']['email']['valid']) ? 'Please Enter a Valid Email Address' : '' ?></p>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control <?php echo ($sr && !$cf['form_ok'] && !$cf['posted_form_data']['message']['valid']) ? 'text-danger' : '' ?>" id="message" rows='5' placeholder="Your Message *" name="message" required><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message']['content'] : '' ?></textarea>
                <p class="help-block text-danger"><?php echo ($sr && !$cf['form_ok'] && !$cf['posted_form_data']['message']['valid']) ? 'Your Message must be at least 20 characters' : '' ?></p>
              </div>
              <div class="form-group">
                <p class="help-block text-success"><?php echo ($sr && $cf['form_ok']) ? 'Thank you for your message! I will get in touch shortly.' : ''; ?></p>
                <button id="sendMessageButton" class="btn btn-primary" type="submit">Submit</button>
              </div>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
          </div>
          <div class="col-lg-6">
            <div class="container">
              <span class="text-uppercase text-primary text-justify">Email</span>
              <br/>
              john@doe.com
            </div>
            <div class="container my-4">
              <span class="text-uppercase text-primary text-justify">Phone</span>
              <br/>
              +44 7951431677
            </div>
            <div class="container my-4">
              <span class="text-uppercase text-primary text-justify">Social Media</span>
              <br/>
              <ul class="list-inline my-2">
                <li class="list-inline-item">
                  <a href="" class="text-dark">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="text-dark">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="text-dark">
                    <i class="fa fa-youtube"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="text-dark">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="text-dark">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="container my-4">
              <button class="btn btn-primary" href="#"><i class="fa fa-download mr-3"></i>Download CV</button>
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
