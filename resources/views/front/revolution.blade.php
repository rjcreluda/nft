<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>NFT Revolution</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!--<link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">-->
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <style>
        .white-popup {
          position: relative;
          background: #FFF;
          padding: 40px;
          width: auto;
          max-width: 200px;
          margin: 20px auto;
          text-align: center;
        }
        a.social__link {
            font-size: 25px;
        }
    </style>
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-xl">
              <a class="navbar-brand" href=""><img src="assets/images/logo.png" alt="logo"></a>
              <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler--icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <!--<a class="nav-link" aria-current="page" href="/">Home</a>
                      <a class="nav-link" href="#roadmap">Roadmap</a>
                      <a class="nav-link" href="#artist">Artist</a>
                      <a class="nav-link" href="#team">Team</a>
                      <a class="nav-link" href="#faq">Faq</a> -->
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
                      <div class="languages">
                        <label>Language</label>
                        <select onchange="changeLanguage(this.value)">
                          <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
                          <option {{session()->has('lang_code')?(session()->get('lang_code')=='fr'?'selected':''):''}} value="fr">French</option>
                        </select>
                      </div>
                  </div>

              </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner banner-video wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="w-container">
        <div class="row mb-5 pt-3">
            <div class="col-lg-12 text-center text-white">
              <h1>{{ __("revolution.header_title") }}</h1>
              <h3>{{ __("revolution.header_subtitle") }} <span class="text-warning">{{ __("revolution.header_subtitle_marks") }}</span> ...</h3>
            </div>
      </div>
      <div class="row">
        <div class="col-lg-8 align-self-start">
          <div class="embed-responsive">
              <video src="nft.mp4" width="530" height="355" controls class="video embed-responsive-item"></video>
        </div></div>
        <div class="col-lg-4">
          <div class="card register-card">
              <div class="card-header">
                  {{ __('revolution.form.title') }}
              </div>
              <div class="card-body">
                  <form>
                      <div class="form-group mb-4 mt-1">
                          <input class="form-control" name="first_name" placeholder="First Name" />
                      </div>
                      <div class="form-group mb-4">
                          <input class="form-control" name="last_name" placeholder="Last Name" />
                      </div>
                      <div class="form-group mb-4">
                          <input class="form-control" name="email" placeholder="Email Address" />
                      </div>
                      <div class="form-group mb-4">
                          <button type="submit" class="btn btn-lg btn-warning btn-block submit-register-button"> {{ __('revolution.form.submit_btn') }}</button>
                      </div>
                      <div class="form-group mb-4">
                          
                          <p><input type="checkbox" name="subscribe" /> {{ __('revolution.form.subscribe_text') }}</p>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="features" class="features section">
    <div style="background-color: #fff;">
        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-12">
              <div class="features-content">
                <div class="row pt-4 mb-5">
                  <div class="col-lg-3">
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="assets/images/bitgo.png" alt="sec-1" class="img-secure" />
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="assets/images/mcafee.png" alt="sec-1" class="img-secure" />
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="assets/images/norton.png" alt="sec-1" class="img-secure" />
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="assets/images/secure-trading.png" alt="sec-1" class="img-secure" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> 
  </div>

  <div id="about" class="about-us section join-us-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-start wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <!-- <h2>Top <em>marketing</em> agency &amp; consult your website <span>with us</span></h2> -->
            <h2 class="display-2">
              {{ __('revolution.join_section.title') }}
            </h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <!--<div class="main-green-button"><a href="#">Discover company</a></div>-->
        </div><!-- ./ col -->
        
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="assets/images/about-left-image.png" alt="">
          </div>
        </div>
        
      </div>
    </div>
  </div>

<!-- ==============================================
    FEATURE SECTION
==================================================-->
  <div id="services" class="our-services section" style="background-image: url(https://bestdigitalcashoffers.com/bitcoin-revolution/images/features-section-bg.jpg);">
    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Our Services</h6>
            <h2>Discover What We Do &amp; <span>Offer</span> To Our <em>Clients</em></h2>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="feature-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="card feature-card">
                <div class="card-body text-center">
                    <div class="text-center my-4">
                        <i class="fa fa-tachometer feature-icon"></i>
                    </div>
                    <h4>{{ __('revolution.feature_section.one.title') }}</h4>
                    <p>
                        {{ __('revolution.feature_section.one.content') }}
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="card feature-card">
                <div class="card-body text-center">
                    <div class="text-center my-4">
                        <i class="fa fa-cogs feature-icon" aria-hidden="true"></i>
                    </div>
                    <h4>{{ __('revolution.feature_section.two.title') }}</h4>
                    <p>
                        {{ __('revolution.feature_section.two.content') }}
                    </p>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="card feature-card">
                <div class="card-body text-center">
                    <div class="text-center my-4">
                        <i class="fa fa-trophy feature-icon" aria-hidden="true"></i>
                    </div>
                    <h4>{{ __('revolution.feature_section.three.title') }}</h4>
                    <p>
                        {{ __('revolution.feature_section.three.content') }}
                    </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ./feature-section -->

<!-- ==============================================
    PLAN SECTION
==================================================-->
<div id="plans" class="our-services section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2 style="text-align: center;"> {{ __('revolution.step_section.title') }}</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row plan-row">
        <div class="col-lg-4">
          <div class="plan-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="mt-3">STEP 1</h4>
                </div>
                <div class="card-body text-center">
                    <div class="my-4">
                        <i class="fa fa-pencil-square-o feature-icon"></i>
                    </div>
                    <h4>{{ __('revolution.step_section.one.title') }}</h4>
                    <p>
                        {{ __('revolution.step_section.one.content') }}
                    </p>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="plan-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="mt-3">STEP 2</h4>
                </div>
                <div class="card-body text-center">
                    <div class="text-center my-4">
                        <i class="fa fa-shopping-cart feature-icon" aria-hidden="true"></i>
                    </div>
                    <h4>{{ __('revolution.step_section.two.title') }}</h4>
                    <p>
                        {{ __('revolution.step_section.two.content') }}
                    </p>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="plan-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="mt-3">STEP 3</h4>
                </div>
                <div class="card-body text-center">
                    <div class="text-center my-4">
                        <i class="fa fa-check-circle feature-icon" aria-hidden="true"></i>
                    </div>
                    <h4>{{ __('revolution.step_section.three.title') }}</h4>
                    <p>
                        {{ __('revolution.step_section.three.content') }}
                    </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="plan-section-bottom d-flex justify-content-center align-items-end">
        <div style="position: relative; top: 30px; width: 25%;" class="text-center">
            <a href="#" class="btn btn-lg btn-warning btn-block px-5 py-3" id="btn-open-account"> {{ __('revolution.step_section.open_account_btn') }} </a>
        </div>
    </div>
  </div>
<!-- ./plan-section -->

<section class="py-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <strong>IMPORTANT:</strong><br />
                <p class="lead">
                    {{ __('revolution.note_section.text') }}
                </p>
            </div>
        </div>
    </div>
</section>

  <footer class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 NFT. {{ __('revolution.copyright') }}

          <br><!-- Web Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a> --></p>
        </div>
      </div>
    </div>
  </footer>
  

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
    function changeLanguage( lang ){
      window.location='{{ url("change-language")}}/'+lang;
    }
  </script>
  

</body>
</html>