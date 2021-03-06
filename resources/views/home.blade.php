<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SUDIRMANSYAH.COM</title>

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

<body class="lozad" data-background-image="{!! URL::asset('assets/img/background.jpg'); !!}">

  

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



      <!-- <div class="video-container">

        <iframe  src="https://www.youtube.com/embed/LEK2R58xdsk?controls=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; modestbranding; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div> -->

      <video autoplay loop id="myVideo">

        <source src="{{ URL::asset('assets/video/background.mp4'); }}" type="video/mp4">

      </video>

      <div class="front"></div>
      <div class="container center-home">
        <div class="row">
          <div class="col-sm-4 col-md-6 col-lg-4">
            <div class="text">
            <center><img class="lozad itsme" data-src="{!! URL::asset('assets/img/sudirmansyah.jpg'); !!}" alt="Sudirmansyah"></center>
          </div>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-8">
            <div class="text">
              <h1 class="myName">SUDIRMANSYAH</h1>
              <div class="text-align">
                <h1>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "A PASSIONATE FRONTEND DEVELOPER AND BACKEND DEVELOPER FROM INDONESIA", "RECENT GRADUATE WITH A DEGREE IN INFORMATICS ENGINEERING", "I LOVE TO TECHNOLOGY." ]'>
                    <span class="wrap"></span>
                  </a>
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>


    <div class="socialmedia">

        <div class="socialmediamid">

            <a href="https://github.com/sudirmansyah1" target="_blank" class="icon"><i class="fab fa-github"></i></a>

            <a href="https://twitter.com/sudirmansyah__" target="_blank" class="icon"><i class="fab fa-twitter"></i></a>

            <a href="https://www.instagram.com/sudirmansyah_/" target="_blank" class="icon"><i class="fab fa-instagram"></i></a>

            <a href="https://wa.me/+6285712941083" target="_blank" class="icon"><i class="fab fa-whatsapp"></i></a>

            <a href="https://www.linkedin.com/in/sudirmansyah-5187271a3/" target="_blank" class="icon"><i class="fab fa-linkedin"></i></a>

        </div>

    </div>



    <section></section>

    

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

    <script>

        const AOSGallery = document.querySelectorAll('.gallery-img-home');

        AOSGallery.forEach((img, i) => {

            img.dataset.aos = 'fade-down';

            img.dataset.aosDelay = i * 100;

            img.dataset.aosDuration = 1000;

        })

        AOS.init();

    </script>

    <!-- Lazyload JavaScript -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script>
      const observer = lozad();
      observer.observe();

      // ... code to dynamically add elements
      observer.observe(); // observes newly added elements as well

    </script>

    <!-- Custom JavaScript -->

    <script src="{{ URL::asset('assets/js/custom.js'); }}"></script>

</body>

</html>