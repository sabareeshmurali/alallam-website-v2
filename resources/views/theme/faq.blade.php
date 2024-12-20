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
                {!! $contents['QA']->content_english ?? '' !!}
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Fa   
    ============================================= -->
    <div class="faq-area default-padding bg-cover" style="background-image: url('{{ asset($images['bg1']->img_path ?? '') }}');">
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