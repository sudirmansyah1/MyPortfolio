<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUDIRMANSYAH.COM :: @yield('page_title')</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap-grid.min.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap-utilities.min.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap-reboot.min.css'); }}">
    <!-- Animated -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/animation/animate.min.css'); }}"/>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/18e0f5ffe7.js" crossorigin="anonymous"></script>
    <!-- Slict CSS -->
    <link rel='stylesheet' href="{{ URL::asset('assets/vendor/slick/slick-theme.css'); }}">
    <link rel='stylesheet' href="{{ URL::asset('assets/vendor/slick/slick.css'); }}">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/aos/aos.css'); }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css'); }}">
    <!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
</head>
<body class="lazy" data-bg="{!! URL::asset('assets/img/background.jpg'); !!}">
  
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand" href="/">SUDIRMANSYAH.COM</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link nav-link-ltr" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-ltr" href="/resume">Resume</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-ltr" href="/blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-ltr" href="/portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-ltr" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="hero">
            <h1>@yield('hero_title')</h1>
           <center><hr></center>
           <div class="socialmedia-hero">
            <div class="socialmediamid">
                <a href="https://github.com/sudirmansyah1" target="_blank" class="icon"><i class="fab fa-github"></i></a><br>
                <a href="https://twitter.com/sudirmansyah__" target="_blank" class="icon"><i class="fab fa-twitter"></i></a><br>
                <a href="https://www.instagram.com/sudirmansyah_/" target="_blank" class="icon"><i class="fab fa-instagram"></i></a><br>
                <a href="https://wa.me/+6285712941083" target="_blank" class="icon"><i class="fab fa-whatsapp"></i></a><br>
                <a href="https://www.linkedin.com/in/sudirmansyah-5187271a3/" target="_blank" class="icon"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </section>
    @yield('master_content')

    <!-- jQuery JavaScript -->
    <script src="{{ URL::asset('assets/vendor/jquery/jquery-3.6.0.min.js'); }}"></script>
    <!-- Popper JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript -->
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js'); }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ URL::asset('assets/vendor/slick/slick.min.js'); }}"></script>
    <!-- AOS JavaScript -->
    <script src="{{ URL::asset('assets/vendor/aos/aos.js'); }}"></script>
    <!-- <script>
        const AOSGallery = document.querySelectorAll('.gallery-img-home');
        AOSGallery.forEach((img, i) => {
            img.dataset.aos = 'fade-down';
            img.dataset.aosDelay = i * 100;
            img.dataset.aosDuration = 1000;
        })
        AOS.init();
    </script> -->
    <!-- Custom JavaScript -->
    <script src="{{ URL::asset('assets/js/custom.js'); }}"></script>
</body>
</html>