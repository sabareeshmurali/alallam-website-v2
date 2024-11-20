<?php

use Symfony\Component\HttpFoundation\Session\Session; ?>
@extends('theme/template/default')
@section('content')

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area bg-cover shadow theme-hard text-light text-multi-weight" style="background-image: url('{{ asset($images['2440']->img_path ?? '') }}');">
        
        <div class="banner-items">
            <div class="box-table">
                <div class="box-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                            {!! $contents['home1']->content_english ?? '' !!}
                            </div>
                            <div class="col-lg-5">
                                <div class="appinment-forms">
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
                <!-- Shape -->
				

                <div class="shape-bottom-center" style="background-image: url('{{ asset($images['32']->img_path ?? '') }}');"></div>
                <!-- Shape -->
            </div>
        </div>

            
    </div>
    <!-- End Banner -->

    <!-- Star Services
    ============================================= -->
    <div class="services-style-three-area relative text-center default-padding">
        <div class="container">
            <div class="row">
                <!-- Signle Item -->
                <div class="services-style-three col-lg-4 col-md-6">
                    <div class="style-three-item item">
                        <div class="shape" style="background-image: url('{{ asset($images['21']->img_path ?? '') }}');"></div>
                        <div class="thumb">
                            <img src=" {{ asset($images['house']->img_path ?? '') }} " alt="Icon">
                        </div>
                        <h4><a href="#">Residential Cleaning</a></h4>
                        <p>
                            Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection.
                        </p>
                    </div>
                </div>
                <!-- End Signle Item -->
                <!-- Signle Item -->
                <div class="services-style-three col-lg-4 col-md-6">
                    <div class="style-three-item item active">
                        <div class="shape" style="background-image: url('{{ asset($images['21']->img_path ?? '') }}');"></div>
                        <div class="thumb">
                            <img src=" {{ asset($images['cleaning']->img_path ?? '') }} " alt="Icon">
                        </div>
                        <h4><a href="#">Commercial Cleaning</a></h4>
                        <p>
                            Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection.
                        </p>
                    </div>
                </div>
                <!-- End Signle Item -->
                <!-- Signle Item -->
                <div class="services-style-three col-lg-4 col-md-6">
                    <div class="style-three-item item">
                        <div class="shape" style="background-image: url('{{ asset($images['21']->img_path ?? '') }}');"></div>
                        <div class="thumb">
                            <img src=" {{ asset($images['dayclean']->img_path ?? '') }} " alt="Icon">
                        </div>
                        <h4><a href="#">Laundry and Dry Cleaning</a></h4>
                        <p>
                            Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection.
                        </p>
                    </div>
                </div>
                <!-- End Signle Item -->
            </div>
        </div>
        <div class="shape-bottom" style="background-image: url('{{ asset($images['33']->img_path ?? '') }}');"></div>
    </div>
    <!-- End Services Area -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-two-area bg-gray default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 about-style-two">
                    <div class="thumb">
                        <img src=" {{ asset($images['img']->img_path ?? '') }} " alt="Thumb">
                        <img src=" {{ asset($images['800']->img_path ?? '') }} " alt="Thumb">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="50" data-speed="5000">50</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Team Member</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-style-three">
                {!! $contents['about']->content_english ?? '' !!}
                    <a class="btn btn-theme primary effect btn-md" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Team 
    ============================================= -->
    <div class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                {!! $contents['team']->content_english ?? '' !!}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-style-one-box">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 text-center team-style-one">
                        <div class="item">
                            <div class="thumb">
                                <img src=" {{ asset($images['thumb1']->img_path ?? '') }} " alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle" class="share-toggle" hidden>
                                    <label for="toggle" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-single.html">Anna Green</a></h4>
                                <p>
                                    Carpet Cleaner
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 text-center team-style-one">
                        <div class="item">
                            <div class="thumb">
                                <img src=" {{ asset($images['thumb2']->img_path ?? '') }} " alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle2" class="share-toggle" hidden>
                                    <label for="toggle2" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-single.html">Liana Rob</a></h4>
                                <p>
                                    Office Cleaner
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 text-center team-style-one">
                        <div class="item">
                            <div class="thumb">
                                <img src=" {{ asset($images['thumb3']->img_path ?? '') }} " alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle3" class="share-toggle" hidden>
                                    <label for="toggle3" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-single.html">Thomas Pual</a></h4>
                                <p>
                                    Cleaning Manager
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team-->

    <!-- Start Fa   
    ============================================= -->
    <div class="faq-area default-padding bg-cover" style="background-image: url('{{ asset($images['1578']->img_path ?? '') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-style-one">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How do I make a checklist for a cleaning service?
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <h5>Bedrooms, living areas and other rooms</h5>
                                            <ol>
                                                <li>Dust furniture tops, sides and fronts.</li>
                                                <li>Vacuum and/or mop floors.</li>
                                                <li>Clean glass surfaces and mirrors.</li>
                                                <li>Wipe window sills and blinds.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How do you clean efficiently?
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <h5>Fast House Cleaning Tips</h5>
                                            <ol>
                                                <li>Clean the whole house, not one room at time</li>
                                                <li>Gather all your cleaning tools in a caddy.</li>
                                                <li>Clear the clutter.</li>
                                                <li>Disinfect countertops and surface areas</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What are the benefits of cleaning?
                                      </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <h5>4 Surprising Health Benefits of a Clean Home</h5>
                                            <ol>
                                                <li>It Keeps You Mentally Healthy</li>
                                                <li>It Pests Keep Away.</li>
                                                <li>The Home is Inviting.</li>
                                                <li>Tips For Keeping Your Home Clean.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq -->


    <!-- Start Pricing Area 
    ============================================= -->
    <div class="pricing-area shadow default-padding-top bottom-less">
        <!-- Fixed Shape -->
        <div class="fixed-sahpe-bottom">
            <img src=" {{ asset($images['19']->img_path ?? '') }} " alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Cleaning Plans</h4>
                        <h2>Take a look of our Pricing and <br> select Your Choice</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing pricing-simple">
                <div class="row">
                    <div class="col-lg-6 col-md-6 pricing-style-two">
                        <div class="pricing-item">
                            <i class="flaticon-cleaning-6"></i>
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
                                <li><i class="fas fa-check-circle"></i> Profetional Cleaner</li>
                                <li><i class="fas fa-check-circle"></i> 2 Bedrroms Cleaning</li>
                                <li><i class="fas fa-check-circle"></i> Kitchen Cleaning</li>
                                <li><i class="fas fa-check-circle"></i> 2 Bathroom Cleaning</li>
                                <li><i class="fas fa-check-circle"></i> Roof Cleaning </li>
                                <li><i class="fas fa-check-circle"></i> Post construction </li>
                            </ul>
                            <div class="button">
                                <a class="btn btn-dark effect btn-sm" href="contact.html">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pricing-style-two">
                        <div class="pricing-item active">
                            <i class="flaticon-skyline"></i>
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
                                <li><i class="fas fa-check-circle"></i> Profetional Cleaner</li>
                                <li><i class="fas fa-check-circle"></i> Windows Cleaning </li>
                                <li><i class="fas fa-check-circle"></i> Kitchen Cleaning</li>
                                <li><i class="fas fa-check-circle"></i> 2 Bathroom Cleaning</i></li>
                                <li><i class="fas fa-check-circle"></i> Roof Cleaning </li>
                                <li><i class="fas fa-check-circle"></i> Government facilities</i></li>
                            </ul>
                            <div class="button">
                                <a class="btn btn-theme secondary effect btn-sm" href="contact.html">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Project Area
    ============================================= -->
    <div class="project-area overflow-hidden default-padding">
        <div class="container">
            <div class="heading-left">
            {!! $contents['project']->content_english ?? '' !!}
            </div>
        </div>
        <div class="container">
            <div class="project-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-3">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="project-style-two"> 
                                <img src=" {{ asset($images['clean1']->img_path ?? '') }} " alt="Thumb">
                                <div class="info">
                                    <span>House, Office</span>
                                    <h4><a href="#">Door Cleaning</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="project-style-two">
                                <img src=" {{ asset($images['clean2']->img_path ?? '') }} " alt="Thumb">
                                <div class="info">
                                    <span>Apartment</span>
                                    <h4><a href="#">Garden Cleaning</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="project-style-two">
                                <img src=" {{ asset($images['clean3']->img_path ?? '') }} " alt="Thumb">
                                <div class="info">
                                    <span>Residential, Office</span>
                                    <h4><a href="#">Bedroom Cleaning</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="project-style-two">
                                <img src=" {{ asset($images['clean4']->img_path ?? '') }} " alt="Thumb">
                                <div class="info">
                                    <span>Home, Apartment</span>
                                    <h4><a href="#">House Cleaning</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="project-style-two">
                                <img src=" {{ asset($images['clean5']->img_path ?? '') }} " alt="Thumb">
                                <div class="info">
                                    <span>Office, House</span>
                                    <h4><a href="#">Furniture Cleaning</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects Area -->

    <!-- Start Contact Area 
    ============================================= -->
    <div id="contact" class="contact-area bg-theme text-light default-padding">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-lg-4 info">
                        <div class="content text-light text-center">
                            <div class="thumb">
                                <img src=" {{ asset($images['4']->img_path ?? '') }} " alt="Thumb">
                            </div>
                            {!! $contents['address']->content_english ?? '' !!}
                        </div>
                    </div>
                    <div class="col-lg-8 contact-form-box">
                        <div class="form-box">
                        {!! $contents['talk']->content_english ?? '' !!}
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message <i class="fa fa-paper-plane"></i>
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
    </div>
    <!-- End Contact Area -->

    <!-- Start Blog 
    ============================================= -->
    <div class="blog-area grid-style default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>From the blog</h4>
                        <h2>Latest News & Articles</h2>
                        <div class="devider"></div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id tenetur temporibus, distinctio iste recusandae magni provident nam fuga perferendis molestiae et hic non expedita eos velit maxime libero quos? Et.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src=" {{ asset($images['blog1']->img_path ?? '') }} " alt="Thumb">
                                <div class="date">January 25, 2022</div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <span>By </span>
                                           <a href="#">John Baus</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Agency</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4><a href="blog-single-with-sidebar.html">Discovery incommode earnestly commanded mentions.</a></h4>
                                <p>
                                    Etensive repulsive belonging depending promotion be zealously as. Preference point inquietude ask now are dispatched.
                                </p>
                                <a href="blog-single-with-sidebar.html" class="btn-simple"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src=" {{ asset($images['blog2']->img_path ?? '') }} " alt="Thumb">
                                <div class="date">April 18, 2022</div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <span>By </span>
                                           <a href="#">Monus Botha</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Agency</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4><a href="blog-single-with-sidebar.html">Everything melancholy uncommonly but solicitude.</a></h4>
                                <p>
                                    Etensive repulsive belonging depending promotion be zealously as. Preference point inquietude ask now are dispatched.
                                </p>
                                <a href="blog-single-with-sidebar.html" class="btn-simple"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src=" {{ asset($images['blog3']->img_path ?? '') }} " alt="Thumb">
                                <div class="date">Auguest 14, 2022</div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <span>By </span>
                                           <a href="#">Mills Paul</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Agency</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4><a href="blog-single-with-sidebar.html">Providing top quality cleaning and related services charms.</a></h4>
                                <p>
                                    Etensive repulsive belonging depending promotion be zealously as. Preference point inquietude ask now are dispatched.
                                </p>
                                <a href="blog-single-with-sidebar.html" class="btn-simple"><i class="fas fa-plus"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area  -->
    @endsection


