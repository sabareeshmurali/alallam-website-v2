
<?php

use Symfony\Component\HttpFoundation\Session\Session; ?>
@extends('themertl/template/defaultrtl')
@section('content')


     <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url('{{ asset($images['bg']->img_path ?? '') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Project Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Project</a></li>
                        <li class="active">Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Project Details Area
    ============================================= -->
    <div class="project-details-area default-padding">
        <div class="container">
            <div class="project-details-items">
                <div class="thumb">
                    <img src="{{ asset($images['thumb1']->img_path ?? '') }}" alt="Thumb">
                </div>
                <div class="top-info">
                    <div class="row">
                        <div class="col-lg-7 left-info">
                            <h2>Business Planing & Solution</h2>
                            <p>
                                New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating.
                            </p>
                            <p>
                                Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget urna potenti cum vestibulum cras. Tempor nonummy metus lobortis. Sociis velit etiam, dapibus. Lectus vehicula pellentesque cras posuere tempor facilisi habitant lectus rutrum pede quisque hendrerit parturient posuere mauris ad elementum fringilla facilisi volutpat fusce pharetra felis sapien varius quisque class convallis praesent est sollicitudin donec nulla venenatis, cursus fermentum netus posuere sociis porta risus habitant malesuada nulla habitasse hymenaeos. Viverra curabitur nisi vel sollicitudin dictum natoqu.
                            </p>
                        </div>
                        <div class="col-lg-5 right-info">
                            <div class="project-info">
                                <h3>Project Info</h3>
                                <ul>
                                    <li>
                                        Client <span>Solion</span>
                                    </li>
                                    <li>
                                        Date <span>25 Aug, 2022</span>
                                    </li>
                                    <li>
                                        Category <span>Technology</span>
                                    </li>
                                    <li>
                                        Address <span>California, TX 70240</span>
                                    </li>
                                </ul>
                                <a class="btn btn-dark effect btn-sm" href="#">Book a Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-content">
                    
                    <p>
                        Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.  Facilisis inceptos nec, potenti nostra aenean lacinia varius semper ant nullam nulla primis placerat facilisis. Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget urna potenti cum vestibulum cras. Tempor nonummy metus lobortis. Sociis velit etiam, dapibus. Lectus vehicula pellentesque cras posuere tempor facilisi habitant lectus rutrum pede quisque hendrerit parturient posuere mauris ad elementum fringilla facilisi volutpat fusce pharetra felis sapien varius quisque class convallis praesent est sollicitudin donec nulla venenatis, cursus fermentum netus posuere sociis porta risus habitant malesuada nulla habitasse hymenaeos. Viverra curabitur nisi vel sollicitudin dictum natoque ante aenean elementum curae malesuada ullamcorper. vivamus nonummy nisl posuere rutrum
                    </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset($images['thumb2']->img_path ?? '') }}" alt="Thumb">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset($images['thumb3']->img_path ?? '') }}" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project Details Area -->

@endsection