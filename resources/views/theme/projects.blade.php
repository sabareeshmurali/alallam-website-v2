
<?php

use Symfony\Component\HttpFoundation\Session\Session; ?>
@extends('theme/template/default')
@section('content')


     <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url('{{ asset($images['bg']->img_path ?? '') }}');">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Latest Projects</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Project Area
    ============================================= -->
    <div class="project-area overflow-hidden default-padding">
        <div class="container">
            <div class="project-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-3">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="project-style-two">
                                <img src="{{ asset($images['pro1']->img_path ?? '') }}" alt="Thumb">
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
                                <img src="{{ asset($images['pro2']->img_path ?? '') }}" alt="Thumb">
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
                                <img src="{{ asset($images['pro3']->img_path ?? '') }}" alt="Thumb">
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
                                <img src="{{ asset($images['pro4']->img_path ?? '') }}" alt="Thumb">
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
                                <img src="{{ asset($images['pro5']->img_path ?? '') }}" alt="Thumb">
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
     @endsection