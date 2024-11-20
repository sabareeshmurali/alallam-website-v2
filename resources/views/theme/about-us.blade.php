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
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-two-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 about-style-two">
                    <div class="thumb">
                        <img src=" {{ asset($images['thumb1']->img_path ?? '') }} " alt="Thumb">
                        <img src=" {{ asset($images['thumb2']->img_path ?? '') }} " alt="Thumb">
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

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area bg-theme text-light">

        <div class="container">
            <div class="fun-fact-items text-center default-padding">
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
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url('{{ asset($images['bgabout']->img_path ?? '') }}');"></div>
        <!-- Fixed BG -->
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Process Area
    ============================================= -->
    <div class="work-process-area shadow-less text-center default-padding">
        <!-- Shape -->
        <div class="shape">
            <img src=" {{ asset($images['13']->img_path ?? '') }} " alt="Shape">
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
                                <img src=" {{ asset($images['thumb3']->img_path ?? '') }} " alt="Thumb">
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
                                <img src=" {{ asset($images['thumb4']->img_path ?? '') }} " alt="Thumb">
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
                                <img src=" {{ asset($images['thumb5']->img_path ?? '') }} " alt="Thumb">
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

    <!-- Start Team 
    ============================================= -->
    <div class="team-area bg-gray default-padding bottom-less">
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
                                <img src=" {{ asset($images['team1']->img_path ?? '') }} " alt="Thumb">
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
                                <img src=" {{ asset($images['team2']->img_path ?? '') }} " alt="Thumb">
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
                                <img src=" {{ asset($images['team3']->img_path ?? '') }} " alt="Thumb">
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
@endsection