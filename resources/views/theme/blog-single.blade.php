
<?php

use Symfony\Component\HttpFoundation\Session\Session; ?>
@extends('theme/template/default')
@section('content')

   <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: url('{{ asset($images['bg']->img_path ?? '') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Blog Single</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                
                                <div class="thumb">
                                    <a href="#"><img src=" {{ asset($images['1500x700']->img_path ?? '') }} " alt="Thumb"></a>
                                    <div class="date">January 25, 2022</div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                           <li>
                                               <img src=" {{ asset($images['100x100']->img_path ?? '') }} " alt="Author">
                                               <span>By </span>
                                               <a href="#">John Baus</a>
                                           </li>
                                           <li>
                                               <span>In </span>
                                               <a href="#">Agency</a>
                                           </li>
                                       </ul>
                                    </div>
                                    <h3>Partiality indulgence dispatched to of celebrated.</h3>
                                    <p>
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her. 
                                    </p>
                                    <p>
                                        New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                    </p>
                                    <blockquote>
                                        He share of first to worse. Weddings and any opinions suitable smallest nay. Houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness.
                                    </blockquote>
                                    <p>
                                        Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                    </p>
                                    <h3>Conduct replied off led whether?</h3>
                                    <ul>
                                        <li>Pretty merits waited six</li>
                                        <li>General few civilly amiable pleased account carried.</li>
                                        <li>Continue indulged speaking</li>
                                        <li>Narrow formal length my highly</li>
                                        <li>Occasional pianoforte alteration unaffected impossible</li>
                                    </ul>
                                    <p>
                                        Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Iure, laudantium, tempore. Autem dolore repellat, omnis quam? Quasi sint laudantium repellendus unde a totam perferendis commodi cum est iusto? Minima, laborum. 
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Start Post Pagination -->
                        <div class="post-pagi-area">
                            <a href="#">
                                <i class="fas fa-angle-double-left"></i> Previus Post
                                <h5>Hello World</h5>
                            </a>
                            <a href="#">
                                Next Post <i class="fas fa-angle-double-right"></i>
                                <h5>The earth brown</h5>
                            </a>
                        </div>
                        <!-- End Post Pagination -->

                        <!-- Start Post Tags-->
                        <div class="post-tags share">
                            <div class="tags">
                                <a href="#">Analysis</a>
                                <a href="#">Process</a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post Tags -->

                        <!-- Start Blog Comment -->
                        <div class="blog-comments">
                            <div class="comments-area">
                                <div class="comments-title">
                                    <h3>5 comments</h3>
                                    <div class="comments-list">
                                        <div class="commen-item">
                                            <div class="avatar">
                                                <img src=" {{ asset($images['800x800']->img_path ?? '') }} " alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>Bubhan Prova <span class="reply"><a href="#"><i class="fas fa-reply"></i> Reply</a></span></h5>
                                                    <span>28 Feb, 2022</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. sportsmen zealously arranging to the main pint. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="commen-item reply">
                                            <div class="avatar">
                                                <img src=" {{ asset($images['800']->img_path ?? '') }} " alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>Mickel Jones <span class="reply"><a href="#"><i class="fas fa-reply"></i> Reply</a></span></h5>
                                                    <span>15 Mar, 2022</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. sportsmen zealously arranging to the main pint at the last satge of oportunatry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-form">
                                    <div class="title">
                                        <h3>Leave a comments</h3>
                                    </div>
                                    <form action="#" class="contact-comments">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Name -->
                                                    <input name="name" class="form-control" placeholder="Name *" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Email -->
                                                    <input name="email" class="form-control" placeholder="Email *" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <!-- Comment -->
                                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                                </div>
                                                <div class="form-group full-width submit">
                                                    <button class="btn-animation dark border" type="submit">Post Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Comments Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
     @endsection