
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Home Page | Space - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/font-awesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/custombox/dist/custombox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/dzsparallaxer/dzsparallaxer.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/cubeportfolio/css/cubeportfolio.min.css') }}">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="{{ asset('frontend/css/theme.css') }}">

  {{-- @include('partials.css') --}}

</head>

<body>
  <!-- Skippy -->
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    @yield('content')
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container space-2">
      <div class="row justify-content-md-between">
        <div class="col-6 col-md-3 col-lg-2 order-lg-3 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">About</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../pages/about-agency.html">About Agency</a>
            <a class="list-group-item list-group-item-action" href="../pages/about-start-up.html">About Start-Up</a>
            <a class="list-group-item list-group-item-action" href="../pages/services-agency.html">Services Agency</a>
            <a class="list-group-item list-group-item-action" href="../pages/services-start-up.html">Services Start-Up</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-4 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Company</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../pages/contacts-agency.html">Contact Us</a>
            <a class="list-group-item list-group-item-action" href="../pages/help.html">Help</a>
            <a class="list-group-item list-group-item-action" href="../pages/careers.html">Careers</a>
            <a class="list-group-item list-group-item-action" href="../pages/terms.html">Terms &amp; Conditions</a>
            <a class="list-group-item list-group-item-action" href="../pages/privacy.html">Privacy &amp; Policy</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-5 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Shop</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../shop/classic.html">Classic</a>
            <a class="list-group-item list-group-item-action" href="../shop/single-product.html">Single Product</a>
            <a class="list-group-item list-group-item-action" href="../shop/checkout.html">Checkout</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-6 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Social</h3>

          <!-- List -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-facebook-f min-width-3 text-center mr-2"></span>
              Facebook
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-twitter min-width-3 text-center mr-2"></span>
              Twitter
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-dribbble min-width-3 text-center mr-2"></span>
              Dribbble
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-github min-width-3 text-center mr-2"></span>
              GitHub
            </a>
          </div>
          <!-- End List -->
        </div>

        <div class="col-lg-4 order-lg-1 d-flex align-items-start flex-column">
          <!-- Logo -->
          <a class="d-inline-block mb-5" href="index.html" aria-label="Space">
            <img src="{{ asset('frontend/svg/logos/logo-short-white.svg')}}" alt="Logo" style="width: 40px; max-width: 100%;">
          </a>
          <!-- End Logo -->

          <!-- Language -->
          <div class="btn-group d-block position-relative mb-4 mb-lg-auto">
            <a id="footerLanguageInvoker" class="btn-text-secondary d-flex align-items-center u-unfold--language-btn rounded py-2 px-3" href="javascript:;" role="button"
               aria-controls="footerLanguage"
               aria-haspopup="true"
               aria-expanded="false"
               data-unfold-event="click"
               data-unfold-target="#footerLanguage"
               data-unfold-type="css-animation"
               data-unfold-duration="300"
               data-unfold-delay="300"
               data-unfold-hide-on-scroll="false"
               data-unfold-animation-in="slideInUp"
               data-unfold-animation-out="fadeOut">
              <span class="font-size-14">English</span>
              <span class="fa fa-angle-down u-unfold__icon-pointer u-unfold--language-icon-pointer ml-4"></span>
            </a>

            <!-- Content -->
            <div id="footerLanguage" class="u-unfold u-unfold--language bottom-0 left-0" aria-labelledby="footerLanguageInvoker">
              <div class="py-6 px-5">
                <h4 class="h6 mb-4">Select your language</h4>

                <div class="row">
                  <div class="col-6">
                    <!-- List of Languages -->
                    <div class="list-group list-group-borderless list-group-flush">
                      <a class="active d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="{{ asset('frontend/vendor/flag-icon-css/flags/4x3/us.svg')}}" alt="United States Flag">
                        English
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="{{ asset('frontend/vendor/flag-icon-css/flags/4x3/fr.svg')}}" alt="France Flag">
                        Français
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="{{ asset('frontend/vendor/flag-icon-css/flags/4x3/de.svg')}}" alt="Germany Flag">
                        Deutsch
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="{{ asset('frontend/vendor/flag-icon-css/flags/4x3/pt.svg')}}" alt="Portugal Flag">
                        Português
                      </a>
                    </div>
                    <!-- End List of Languages -->
                  </div>

                  <div class="col-6">
                    <!-- List of Languages -->
                    <div class="list-group list-group-borderless list-group-flush">
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="{{ asset('frontend/vendor/flag-icon-css/flags/4x3/es.svg')}}" alt="Spain Flag">
                        Español
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="{{ asset('frontend/vendor/flag-icon-css/flags/4x3/it.svg')}}" alt="Italy Flag">
                        Italiano
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="{{ asset('frontend/vendor/flag-icon-css/flags/4x3/ru.svg')}}" alt="Russian Flag">
                        Русский
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="{{ asset('frontend/vendor/flag-icon-css/flags/4x3/tr.svg')}}" alt="Turkey Flag">
                        Türkçe
                      </a>
                    </div>
                    <!-- End List of Languages -->
                  </div>
                </div>
              </div>

              <!-- Signup -->
              <a class="u-unfold--language__link p-5" href="../pages/signup-simple.html">
                <small class="d-block text-muted mb-1">More languages coming soon.</small>
                <small class="d-block">Signup to get notified <span class="fa fa-arrow-right u-unfold__icon-pointer"></span></small>
              </a>
              <!-- End Signup -->
            </div>
            <!-- End Content -->
          </div>
          <!-- End Language -->

          <p class="small text-muted">All rights reserved. &copy; Space. 2019 Htmlstream.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->


  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="javascript:;"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset('frontend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/bootstrap.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('frontend/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
  <script src="{{ asset('frontend/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/custombox/dist/custombox.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/custombox/dist/custombox.legacy.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/slick-carousel/slick/slick.js')}}"></script>
  <script src="{{ asset('frontend/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
  <script src="{{ asset('frontend/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/player.js/dist/player.min.js')}}"></script>

  <!-- JS Space -->
  <script src="{{ asset('frontend/js/hs.core.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.header.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.unfold.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.validation.js')}}"></script>
  <script src="{{ asset('frontend/js/helpers/hs.focus-state.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.malihu-scrollbar.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.modal-window.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.show-animation.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.slick-carousel.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.cubeportfolio.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.video-player.js')}}"></script>
  <script src="{{ asset('frontend/js/components/hs.go-to.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of video player
      $.HSCore.components.HSVideoPlayer.init('.js-inline-video-player');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
  
  @include('partials.js')
</body>
</html>