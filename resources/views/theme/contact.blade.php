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
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area 
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-lg-4 info">
                        <div class="content text-center text-light">
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

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="container">
            <div class="google-maps">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->


    @endsection