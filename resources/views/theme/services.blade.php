
<?php

use Symfony\Component\HttpFoundation\Session\Session; ?>
@extends('theme/template/default')
@section('content')


     <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url('{{ asset($images['bg']->img_path ?? '') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-style-two-area default-padding">
        <div class="container-full">
            <div class="services-tyle-two-box text-center">
                <div class="services-4-col-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="thumb" style="background-image: url('{{ asset($images['thumb1']->img_path ?? '') }}');"></div>
                        <h4><a href="#">House Cleaning</a></h4>
                        <i class="flaticon-house"></i>
                        <p>
                            Buscipit tincidunt duis antino gravidia nam tellusy nascetur neque vulpuits is scelerisque ultrces muscle mass and matter order commounication pointing.
                        </p>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="thumb" style="background-image: url('{{ asset($images['thumb2']->img_path ?? '') }}');"></div>
                        <h4><a href="#">Kitchen Cleaning</a></h4>
                        <i class="flaticon-clean-dishes-2"></i>
                        <p>
                            Buscipit tincidunt duis antino gravidia nam tellusy nascetur neque vulpuits is scelerisque ultrces muscle mass and matter order commounication pointing.
                        </p>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="thumb" style="background-image: url('{{ asset($images['thumb3']->img_path ?? '') }}');"></div>
                        <h4><a href="#">Window Cleaning</a></h4>
                        <i class="flaticon-window"></i>
                        <p>
                            Buscipit tincidunt duis antino gravidia nam tellusy nascetur neque vulpuits is scelerisque ultrces muscle mass and matter order commounication pointing.
                        </p>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="thumb" style="background-image: url('{{ asset($images['thumb4']->img_path ?? '') }}');"></div>
                        <h4><a href="#">Office Cleaning</a></h4>
                        <i class="flaticon-cleaning-service"></i>
                        <p>
                            Buscipit tincidunt duis antino gravidia nam tellusy nascetur neque vulpuits is scelerisque ultrces muscle mass and matter order commounication pointing.
                        </p>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="thumb" style="background-image: url('{{ asset($images['thumb5']->img_path ?? '') }}');"></div>
                        <h4><a href="#">Carpet Cleaning</a></h4>
                        <i class="flaticon-carpet"></i>
                        <p>
                            Buscipit tincidunt duis antino gravidia nam tellusy nascetur neque vulpuits is scelerisque ultrces muscle mass and matter order commounication pointing.
                        </p>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="thumb" style="background-image: url('{{ asset($images['thumb6']->img_path ?? '') }}');"></div>
                        <h4><a href="#">Toilet  Cleaning</a></h4>
                        <i class="flaticon-toilet-4"></i>
                        <p>
                            Buscipit tincidunt duis antino gravidia nam tellusy nascetur neque vulpuits is scelerisque ultrces muscle mass and matter order commounication pointing.
                        </p>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services-->


    <!-- Start Process Area
    ============================================= -->
    <div class="work-process-area text-center default-padding-bottom">
        <!-- Shape -->
        <div class="shape">
            <img src="{{ asset($images['shape1']->img_path ?? '') }} " alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Work Process</h4>
                        <h2>How it Works</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="process-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset($images['thumb7']->img_path ?? '') }} " alt="Thumb">
                                <span>01</span>
                            </div>
                            <h5>Book Online Form</h5>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset($images['thumb8']->img_path ?? '') }} " alt="Thumb">
                                <span>02</span>
                            </div>
                            <h5>Get expert cleaner</h5>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset($images['thumb9']->img_path ?? '') }} " alt="Thumb">
                                <span>03</span>
                            </div>
                            <h5>Relax & enjoy cleanin</h5>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Process Area -->

    <!-- Start Appoinment Area
    ============================================= -->
    <div class="appoinment-area bg-dark">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="thumb">
                        <img src="{{ asset($images['illu6']->img_path ?? '') }} " alt="illustration">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 form-content">
                    <div class="form-items">
                        <h2>Free Estimate</h2>
                        <p>
                            Get a quick response within 24 hours
                        </p>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Chose Subject</option>
                                            <option value="2">Computer Engineering</option>
                                            <option value="4">Accounting Technologies</option>
                                            <option value="5">Web Development</option>
                                            <option value="6">Machine Language</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn-animation dark border" type="submit" name="submit" id="submit">
                                        <span>Get Estimate <i class="fas fa-angle-right"></i></span>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appoinment Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area">
        
        <div class="container">
            <div class="fun-fact-items text-center default-padding">
                <!-- Fixed BG -->
                <div class="fixed-bg" style="background-image: url('{{ asset($images['map']->img_path ?? '') }}');"></div>
                <!-- Fixed BG -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="1267" data-speed="5000">1267</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Orders</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="846" data-speed="5000">846</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Trusted Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="36" data-speed="5000">36</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Years Of Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Pricing Area 
    ============================================= -->
    <div class="pricing-area default-padding-bottom bottom-less">
        <!-- Fixed Shape -->
        <div class="fixed-sahpe-bottom">
            <img src="{{ asset($images['shape']->img_path ?? '') }}" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Cleaning Plans</h4>
                        <h2>Quality leader among cleaning <br> Companies in the industry!</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing pricing-simple">
                <div class="row">
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Residential</h4>
                            </div>
                            <div class="price">
                                <h2><sup>$</sup>20</h2>
                                <p>
                                    For Homes
                                </p>
                            </div>
                            <ul>
                                <li>Profetional Cleaner <i class="fas fa-check-circle"></i></li>
                                <li>2 Bedrroms Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Kitchen Cleaning <i class="fas fa-times-circle"></i></li>
                                <li>2 Bathroom Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Roof Cleaning   <i class="fas fa-check-circle"></i></li>
                            </ul>
                            <a class="btn btn-dark effect btn-sm" href="#">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item active">
                            <div class="pricing-header">
                                <h4>Commercial</h4>
                            </div>
                            <div class="price">
                                <h2><sup>$</sup>36</h2>
                                <p>
                                    For Business
                                </p>
                            </div>
                            <ul>
                                <li>Profetional Cleaner <i class="fas fa-check-circle"></i></li>
                                <li>Windows Cleaning  <i class="fas fa-check-circle"></i></li>
                                <li>Kitchen Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>2 Bathroom Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Roof Cleaning   <i class="fas fa-times-circle"></i></li>
                            </ul>
                            <a class="btn btn-theme secondary effect btn-sm" href="#">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Ressort</h4>
                            </div>
                            <div class="price">
                                <h2><sup>$</sup>49</h2>
                                <p>
                                    For Strata
                                </p>
                            </div>
                            <ul>
                                <li>Profetional Cleaner <i class="fas fa-check-circle"></i></li>
                                <li>2 Livingroom Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Kitchen Cleaning <i class="fas fa-times-circle"></i></li>
                                <li>2 Bathroom Cleaning <i class="fas fa-check-circle"></i></li>
                                <li>Roof Cleaning   <i class="fas fa-check-circle"></i></li>
                            </ul>
                            <a class="btn btn-dark effect btn-sm" href="#">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->
@endsection