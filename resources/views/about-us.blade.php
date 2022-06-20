@extends('layouts.main')

@section('content')
<style>
    .cut {
        height: 320px;
        margin-bottom: 1em;
    }

    .cut-left {
        float: left;
        clip-path: circle(70% at 10%);
        shape-outside: circle(70% at 15%);
        margin-left: 0.5em;
    }

    .cut-right {
        float: right;
        clip-path: circle(70% at 90%);
        shape-outside: circle(70% at 85%);
        margin-right: 0.5em;
    }

    .notice {
        font-family: sans-serif;
        background: hsl(50 100% 75%);
        padding: 1em;
        margin: 1em 0.5em;
        font-weight: bold;
        clear: both;
        text-align: center;
    }

    .pull-right {
        float: right;
    }

    .notice img {
        vertical-align: top;
        margin: 1em 0;
    }

    .notice.danger {
        background: hsl(0 100% 75%);
    }

    .table {
        width: 100%;
    }

    .table td {
        padding: 0.5em;
        border: 1px solid #999;
    }

    .card {
        margin: 0.5em;
        padding: 0.5em;
        background: hsl(0 0 90%);
        break-inside: avoid;
        page-break-inside: avoid;
    }

    .card img {
        display: block;
        aspect-ratio: 3/4;
        max-width: calc(246px - 3em);
        margin: 0 auto;
    }

    p {
        padding: 0.5em;
        padding-top: 0;
        font-family: var(--font2);
        line-height: 1.2em;
        letter-spacing: 0.05em;
    }

    p:not(p:last-child) {
        margin-bottom: 1em;
    }

    .bg-dark {
        color: #eee;
        background: #333;
    }

    .w-80.bg-white {
        width: 85vw;
        position: relative;
        top: -6em;
        clip-path: polygon(00 0, 100% 0, 90% 100%, 0% 100%);
        shape-outside: polygon(0 0, 100% 0, 90% 100%, 0% 100%);
        shape-margin: 10px;
        border-top-right-radius: 100px 70px;
        padding: 18px 42px 70px 6px;
        border-bottom: 5px solid transparent;
        border-image: -webkit-linear-gradient(left, #8f6B29, #FDE08D, #DF9F28);
        border-image-slice: 1;
    }
</style>
<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page-2">
    <div class="container">
        <h1>About Us</h1>
        <div class="breadcrumbs-description">
            Meet the amazing team behind this project and find out more about how we work.
        </div>
    </div>
</div>
<!-- Page Breadcrumbs End -->
<!-- What Makes Us Special Start -->
<section class="wide-tb-80 bg-fixed clients-bg-about pos-rel">
    <div class="w-80 bg-white">
        <div class="align-items-center">

            <div class="col-md-8 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                <h2 class="mb-4 fw-7 txt-blue">
                    About <span class="fw-6 txt-gold">Magsam</span>
                </h2>

                <p class="mr-3">Energistically utilize team driven niche markets rather than leveraged platforms.
                    Monotonectally restore tactical "outside the box" thinking and technically sound
                    deliverables. </p>

                <p class="mr-3">Compellingly develop fully researched process improvements through innovative opportunities.
                    Credibly productize highly efficient potentialities for vertical core competencies. Quickly
                    maintain pandemic experiences rather than low-risk high-yield processes.</p>
                <p class="mr-3">Compellingly develop fully researched process improvements through innovative opportunities.
                    Credibly productize highly efficient potentialities for vertical core competencies. Quickly
                    maintain pandemic experiences rather than low-risk high-yield processes.</p>
            </div>


            <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                <!-- <img src="{{ asset('assets/images/map-bg-orange.jpg')}}" alt=""> -->
            </div>

        </div>

    </div>
</section>
<!-- What Makes Us Special End -->

<!-- What Makes Us Special Start -->
<section class="bg-light-gray wide-tb-100 pb-5 why-choose">
    <div class="container pos-rel">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <span>Our Goodness</span>
                    What Makes Us Special
                </h1>
            </div>
            <!-- Heading Main -->

            <!-- Icon Box 2 -->
            <div class="col-12 col-lg-4 wow fadeInUp mb-5" data-wow-duration="0" data-wow-delay="0s">
                <div class="icon-box-2">
                    <div class="media">
                        <div class="service-icon">
                            <i class="icofont-bullseye"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Our Vision</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.
                                Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->

            <!-- Icon Box 2 -->
            <div class="col-12 col-lg-4 wow fadeInUp mb-5" data-wow-duration="0" data-wow-delay="0.2s">
                <div class="icon-box-2">
                    <div class="media">
                        <div class="service-icon">
                            <i class="icofont-rocket"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Our Mission</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.
                                Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->

            <!-- Icon Box 2 -->
            <div class="col-12 col-lg-4 wow fadeInUp mb-5" data-wow-duration="0" data-wow-delay="0.4s">
                <div class="icon-box-2">
                    <div class="media">
                        <div class="service-icon">
                            <i class="icofont-history"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Our value</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.
                                Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->
        </div>

    </div>
</section>
<!-- What Makes Us Special End -->

<!-- Client Testimonials Start -->
<section class="wide-tb-60 p-0 bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 wow pulse animated" data-wow-duration="0" data-wow-delay="0.7s">
                <div class="bg-fixed pos-rel video-popup">
                    <div class="bg-overlay black opacity-50"></div>
                    <div class="zindex-fixed pos-rel">
                        <a href="#" class="play-video"><i class="icofont-play icofont-4x"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Client Testimonials End -->

<!-- Tracking Your Freight Start -->
<section class="pos-rel bg-light-theme">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12 p-0">
                <img src="{{ asset('assets/images/why-choose-us_1.jpg')}}" class="w-100" alt="">
            </div>
            <div class="col-lg-6 col-12">

                <div class="p-5 about-whoose">
                    <!-- Heading Main -->
                    <h1 class="heading-main text-start mb-4">
                        <span>Why</span>
                        Magsam
                    </h1>
                    <!-- Heading Main -->

                    <!-- Tracking Form -->
                    <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s"><i class="icofont-check"></i>Deliver Environmentally Responsible Client Services
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s"><i class="icofont-check"></i>Be an Active Community Partner</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s"><i class="icofont-check"></i>Drive Continuous Improvement</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.3s"><i class="icofont-check"></i>Clearance and compliance service</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"><i class="icofont-check"></i>Clearance and compliance service</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.5s"><i class="icofont-check"></i>Maintain High Ethical Standards</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s"><i class="icofont-check"></i>Air & Ocean Cargo Insurance</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s"><i class="icofont-check"></i>We ensure complete security</li>
                    </ul>
                    <!-- Tracking Form -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Tracking Your Freight End -->

<!-- Callout Start -->
<section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1">
    <div class="bg-overlay blue opacity-60"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 mb-0 wow slideInUp" data-wow-duration="0" data-wow-delay="0.1s">
                <h4 class="h4-xl">Interested in working with Magsam?</h4>
            </div>
            <div class="col wow slideInUp" data-wow-duration="0" data-wow-delay="0.2s">
                <div class="center-text">
                    We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized
                    approach
                </div>
            </div>
            <div class="col-sm-auto wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
                <a href="{{url('contact-us')}}" class="btn btn-theme bg-white bordered">Get In Touch <i class="icofont-rounded-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Callout End -->
@endsection
<!-- Theme Custom FIle -->
@section('script')
<script src="{{ asset('assets/js/site-custom.js')}}"></script>
@endsection
