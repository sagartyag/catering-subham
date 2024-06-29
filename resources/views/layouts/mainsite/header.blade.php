<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{siteName()}} - Home </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}main/img/favicon.ico">

    <!-- CSS
 ============================================ -->
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Orbitron:400,500,600,700,800,900%7CRoboto:300,300i,400,400i,500,500i,700,900&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('')}}main/css/vendor/bootstrap.min.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{asset('')}}main/css/vendor/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="{{asset('')}}main/css/plugins/slick.min.css">
    <!-- Odometer css -->
    <link rel="stylesheet" href="{{asset('')}}main/css/plugins/odometer.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('')}}main/css/plugins/animate.css">
    <!-- main style css -->
    <link rel="stylesheet" href="{{asset('')}}main/css/style.css">

</head>

<body>
    <!-- Start Header Area -->
    <header class="header-area header-transparent">
        <div class="main-header d-none d-lg-block">
            <!-- main menu start -->
            <div class="main-menu-wrapper sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <!-- logo area start -->
                            <div class="brand-logo">
                                <a href="{{asset('')}}">
                                    <img src="{{asset('')}}main/img/logo.png" alt="brand logo">
                                </a>
                            </div>
                            <!-- logo area end -->
                        </div>
                        <div class="col-lg-9">
                            <div class="main-menu-inner main-menu__style-2">
                                <!-- main menu navbar start -->
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="{{asset('')}}">Home</a>
                                          
                                        </li>
                                        <li>
                                            <a href="{{route('about-us')}}">About us</a>
                                        </li>
                                        <li><a href="#"> More </a>
                                            <ul class="dropdown">
                                                <li><a href="{{route('team')}}">Team</a></li>
                                                <li><a href="{{route('faq')}}">Faq</a></li>
                                            </ul>
                                        </li>
                                       
                                        <li>
                                            <a href="{{route('support')}}">Contact</a>
                                        </li>
                                        <li>
                                            <a href="{{route('login')}}">Sign In</a>
                                        </li>
										<li>
                                            <a href="{{route('register')}}">Sign Up</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu end -->

            <!-- header bottom start -->
            <div class="header-bottom-wrapper header-bottom-wrapper__style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="header-social-link">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Google+</a></li>
                                <li><a href="#">Pinterest</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="caller-area text-end">
                                <li class="mail">
                                    <a href="mailto:diginserv@gmail.com">
                                        <i class="fa fa-envelope-o"></i>
                                        info@morsapprofitzone.com
                                    </a>
                                </li>
                                <li class="call">
                                    <a href="tel:+0123456789">
                                        <i class="fa fa-phone"></i>
                                        +0123456789
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom end -->
        </div>

        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo" style="width: 143px;">
                                <a href="{{asset('')}}">
                                    <img src="{{asset('')}}main/img/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <button class="mobile-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
        <!-- mobile header end -->

        <!-- offcanvas mobile menu start -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-close"></i>
                </div>

                <div class="off-canvas-inner">
                    <!-- search box start -->
                    
                    <!-- search box end -->

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children">
									<a href="{{asset('')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('about-us')}}">about us</a>
                                </li>
                                <li class="menu-item-has-children"><a href="#">More</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('team')}}">Team</a></li>
                                        <li><a href="{{route('faq')}}">Faq</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="{{route('support')}}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{route('login')}}">Sign In</a>
                                </li>
								<li>
                                    <a href="{{route('register')}}">Sign Up</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->

                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <ul>
                                <li><i class="fa fa-mobile"></i>
                                    <a href="#">0123456789</a>
                                </li>
                                <li><i class="fa fa-envelope-o"></i>
                                    <a href="#">info@morsapprofitzone.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="off-canvas-social-widget">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- offcanvas mobile menu end -->

    </header>
    <!-- end Header Area -->
