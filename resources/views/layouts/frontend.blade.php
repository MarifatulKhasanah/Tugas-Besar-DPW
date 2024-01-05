<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rent a Car - Drivvy</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo.png" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-2 px-lg-0">
        <a class="navbar-brand" href="#"><img src="{{asset('frontend/assets/logo.png')}}" width="160px" height="35px" alt=""></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <!-- <header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Drivvy</h1>
          <p class="fw-normal">
            “Rent, Ride, Relax”
          </p>
        </div>
      </div>
    </header> -->
    @yield('content')
        <!-- Footer-->
    <div class="footer-basic">
      <footer>
          <div class="social">
            <a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i>
            </a><a href="https://www.facebook.com/?locale=id_ID"><i class="icon ion-social-twitter"></i></a>
            <a href="https://twitter.com/?lang=id"><i class="icon ion-social-facebook"></i></a></div>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="index.html">Home</a></li>
              <li class="list-inline-item"><a href="aboutus.html">About</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
          </ul>
          <p class="copyright">Drivvy © 2023</p>
      </footer>
  </div>
  <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
  </body>
</html>
