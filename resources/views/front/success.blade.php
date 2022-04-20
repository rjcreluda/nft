<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My-NFT</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="assets/css/cover.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <style>
        .cover-container .cover{
            height: 100vh;
            display: flex;
            align-items: center;
        }
    </style>
  </head>

  <body class="text-center">
    <header class="header">
      <div class="container">
          <nav class="navbar navbar-expand-xl">
              <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
              <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler--icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-link" aria-current="page" href="#home">Home</a>
                      <a class="nav-link" href="#roadmap">Roadmap</a>
                      <a class="nav-link" href="#artist">Artist</a>
                      <a class="nav-link" href="#team">Team</a>
                      <a class="nav-link" href="#faq">Faq</a>
                  </div>
                  <div class="social-btns">
                      <ul class="social">
                        <li class="social__item">
                          <a href="#" class="social__link">
                            <i class="mdi mdi-facebook"></i>
                          </a>
                        </li>
                        <li class="social__item">
                          <a href="#" class="social__link">
                            <i class="mdi mdi-twitter"></i>
                          </a>
                        </li>
                          <li class="social__item">
                              <a href="#" class="social__link">
                                <i class="mdi mdi-instagram"></i>
                              </a>
                          </li>
                      </ul>
                  </div>

              </div>
          </nav>
      </div>

  </header>
    <section class="cover-container d-flex mx-auto flex-column">
      <section role="main" class="inner cover banner">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="cover-heading display-3 mb-3">Registration Success!</h1>
              <p class="lead mb-5">Congratulations <strong>{{ $first_name }}</strong>! You are registered on our site.</p>
              @if( $subscribed )
                <p class="lead mb-5">You will receive our daily new by email</p>
              @endif
              {{-- <div>
                <img src="https://www.codexcoder.com/demos/templatemonster/anftyland-demo/robotar/assets/images/banner/01.png" alt="" width="312" height="312">
              </div> --}}
            </div>
          </div>
        </div>
      </section>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>
        window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script> -->
    <!-- <script src="../../../../assets/js/vendor/popper.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
