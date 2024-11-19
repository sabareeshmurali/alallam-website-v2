<?php

use Symfony\Component\HttpFoundation\Session\Session;

$session = new Session();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cleanu - Cleaning Services Template">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
 
    <!-- ========== Page Title ========== -->
    <title>Cleanu - Cleaning Services Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('public/assets/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
  
	<link href="{{ asset('public/assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/themify-icons.css')}}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/elegant-icons.css')}}" rel="stylesheet">

	<link href="{{ asset('public/assets/css/flaticon-set.css')}}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

	<link href="{{ asset('public/assets/css/animate.css')}}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/bootsnav.css')}}" rel="stylesheet">
    <link href="{{ asset('public/style.css')}}" rel="stylesheet">
	<link href="{{ asset('public/style-rtl.css')}}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/responsive.css')}}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-pad bg-dark text-light">
        <div class="container-fill">
            <div class="row align-center">
            {!! $contents['time']->content_english ?? '' !!}
                <div class="col-lg-4 text-right item-flex">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav dir="rtl" class="navbar navbar-default navbar-sticky nav-full-width dark bootsnav">

            <div class="container-fill">

                <div class="row align-center">
                    

                    <!-- Start Header Navigation -->
                    <div class="col-lg-3 brand-item">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <img src=" {{ asset($images['logo']->img_path ?? '') }} " class="logo" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="col-lg-6">
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav" data-in="#" data-out="#">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home Version One</a></li>
                                        <li><a href="index-2.html">Home Version Two</a></li>
                                        <li><a href="index-3.html">Home Version Three</a></li>
                                        <li><a href="index-4.html">Home Version Four</a></li>
                                        <li><a href="index-op.html">Home Onepage</a></li>
                                        <li><a href="index-op-2.html">Home Onepage Two</a></li>
                                        <li><a href="index-op-3.html">Home Onepage Three</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >About Us</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-us.html">About Style One</a></li>
                                                <li><a href="about-2.html">About Style Two</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Team</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="team.html">Team Members</a></li>
                                                <li><a href="team-single.html">Team Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pricing</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="pricing.html">Pricing Style One</a></li>
                                                <li><a href="pricing-2.html">Pricing Style Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="404.html">Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Projects</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="projects.html">Projects</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services.html">Services Version One</a></li>
                                        <li><a href="services-2.html">Services Version Two</a></li>
                                        <li><a href="services-details.html">Services Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                        <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                        <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->

                    <!-- Start Atribute Navigation -->
                    <div class="col-lg-3">
                        <div class="attr-nav">
                            <div class="call">
                                <div class="icon">
                                    <img src=" {{ asset($images['phcall']->img_path ?? '') }} " alt="Phone">
                                </div>
                                <div class="info">
                                    <span>Have any question?</span>
                                    <h5>(012) 66795453</h5>
                                </div>
                            </div>
                        </div> 
                    </div>       
                    <!-- End Atribute Navigation -->

                </div>

            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->


@yield('content')


    <!-- Start Footer 
    ============================================= -->
    <footer  class="bg-theme text-light">
        <!-- illustration -->
        <div class="animate-illustration">
            <img src=" {{ asset($images['2']->img_path ?? '') }} " alt="illustration">
        </div>
        <!-- End illustration -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src=" {{ asset($images['logo-light']->img_path ?? '') }} " alt="Logo">
                            {!! $contents['content']->content_english ?? '' !!}
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>  
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="index.html"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="blog-standard.html"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Services</h4>
                            <ul>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> House Cleaning</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Carpet</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Garden</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Bedroom</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Residential</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Maid Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                    {!! $contents['contact']->content_english ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>&copy; Copyright 2022. All Rights Reserved by <a href="#">validthemes</a></p>
                        </div>
                        <div class="col-lg-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
        <!-- Fixed Shape -->
        <div class="fixed-shape-left">
            <img src=" {{ asset($images['shape5']->img_path ?? '') }} " alt="Shape">
        </div>
        <!-- End Fixed Shape -->
    </footer>
    <!-- End Footer -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery-3.6.0.min.js')}}"></script>
  <script  type="text/javascript" src="{{ asset('public/assets/js/popper.min.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.appear.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.easing.min.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script  type="text/javascript" src="{{ asset('public/assets/js/modernizr.custom.13711.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/wow.min.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/progress-bar.min.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/isotope.pkgd.min.js')}}"></script>
  <script  type="text/javascript" src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/count-to.js')}}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.nice-select.min.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/YTPlayer.min.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/jquery.event.move.js')}}"></script>
  <script  type="text/javascript" src="{{ asset('public/assets/js/jquery.twentytwenty.js')}}" ></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/bootsnav.js')}}"></script>
  <script type="text/javascript" src="{{ asset('public/assets/js/main.js')}}" ></script>
  <script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>

</body>
</html>