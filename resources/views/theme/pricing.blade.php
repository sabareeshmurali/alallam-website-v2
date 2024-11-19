<?php

use Symfony\Component\HttpFoundation\Session\Session; ?>
@extends('theme/template/default')
@section('content')
     <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url('{{ asset($images['pri']->img_path ?? '') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our Pricing</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Pricing Area 
    ============================================= -->
    <div class="pricing-area shadow default-padding bottom-less">
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

    <!-- Start Fa   
    ============================================= -->
    <div class="faq-area default-padding bg-cover" style="background-image: url('{{ asset($images['pri1']->img_path ?? '') }}');">
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
     @endsection