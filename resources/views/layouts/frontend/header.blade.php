
<!DOCTYPE html>
<html lang="en">
  <!-- Begin Head -->
  <head>
    <!--=== Required meta tags ===-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/ico" href="main/images/favicon.ico" />
    <!--=== custom css ===-->
    <link rel="stylesheet" href="main/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main/css/swiper-bundle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.21/css/lightgallery.min.css" />
    <link rel="stylesheet" href="main/css/style.css" />
    <link rel="stylesheet" href="main/css/responsive.css" />
    <!--=== custom css ===-->
    <title>Restaurant and Catering HTML Template</title>
  </head>
  <body>
    <div class="rac_main_wrapper">
      <!-- Loader Start -->
      <div class="loader">
        <div class="spinner">
          <img src="main/images/loader.gif" alt="loader" class="img-fluid">
        </div>
      </div>
      <!-- Loader End -->
      <!-- Bottom To Top Start -->
      <div class="rac_top_icon">
        <a id="button">
          <img src="main/images/gototop.svg" class="img-fluid">
        </a>
      </div>
      <!-- Bottom To Top End -->
      <!-- Header Section Start -->
      <div class="rac_header_wrapper">
        <div class="rac_container container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="rac_navbar">
                <div class="rac_logo">
                  <a href="{{ route('Index') }}">
                    <img src="main/images/logo.png" class="img-fluid1">
                  </a>
                </div>
                <div class="rac_nav_item">
                  <ul>
                    <div class="rac_res_logo">
                      <a href="{{ route('Index') }}">
                        <img src="main/images/logo.png" class="img-fluid1">
                      </a>
                    </div>
                    <li>
                      <a class="active" href="{{ route('Index') }}">Home</a>
                    </li>
                    <li>
                      <a class="" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li>
                      <a class="" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li>
                      <a class="" href="{{ route('event') }}">Events</a>
                    </li>
                    <li>
                      <a class="" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                  </ul>
                  <div class="rac_nav_btn">
                    <ul>
                      <li>
                        <a href="javascript:void(0);">
                          <img src="main/images/cart.svg">
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="rac_btn">Sign Up</a>
                      </li>
                    </ul>
                    <a href="javascript:void(0);" class="rac_toggle_btn">
                      <svg class="ham ham7" viewBox="0 0 100 100">
                        <path class="line top" d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272">
                        </path>
                        <path class="line middle" d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272">
                        </path>
                        <path class="line bottom" d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272">
                        </path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header Section End -->