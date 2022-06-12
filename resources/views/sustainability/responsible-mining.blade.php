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

    .w-80 {
        position: relative;
        top: -6em;
    }
</style>
<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
<div class="bg-overlay-bread blue opacity-70"></div>
    <div class="container">
        <h1>Responsible Mining</h1>
        <div class="breadcrumbs-description">
            Meet the amazing team behind this project and find out more about how we work.
        </div>
    </div>
</div>
<!-- Page Breadcrumbs End -->
<!-- What Makes Us Special Start -->
<section class="wide-tb-120 bg-light-theme bg-fixed clients-bg-sustaina pos-rel  pos-rel">
    <div class='circle'></div>
    <div class="container h-100 pos-rel">
        <div class="row align-items-start">
            <div class="col-12 col-lg-8 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                <div class="icon-box-2">
                    <div class="media">
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md mb-3 fw-7 txt-blue">Responsible Mining</h4>
                            <p>
                                As a Magsam Resources Ltd we base on responsible mining,
                                our sustainable performance shapes our purpose, vision and mission,
                                and guides our individual and collective actions every day.
                                Our purpose is mining gold for a better future.
                                The gold we produce help:-
                            </p>
                            <div class="content">
                                <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                                    <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s"><i class="icofont-check"></i>Power the community economy and national economy.
                                    </li>
                                    <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s"><i class="icofont-check"></i>Transport sectors.</li>
                                    <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s"><i class="icofont-check"></i>Life-saving through medical devices around Kahama societies.</li>
                                    <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.3s"><i class="icofont-check"></i>Technology growth</li>
                                </ul>
                            </div>
                            <p>
                                The Magsam Way of doing business reflects our culture and commitment
                                to responsible mining, managing our impacts and, more broadly,
                                contributing to Shinyanga communities in which we work and live.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Items -->
</section>
<section class="bg-light-gray">
    <div class="container-fluid">
        <div class="row align-items-center no-gutters">
            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center clients-bg pos-rel txt-white">
                <div class="bg-overlay black opacity-60"></div>
                <div class="px-5 wide-tb-50" style="position: relative; z-index: 999;">
                    <h4 class="h4-xl">Interested in working with Magsam?</h4>
                    <div class="col-sm-auto wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
                        <a href="{{url('contact-us')}}" class="btn btn-theme bg-white bordered">Get In Touch <i class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Icon Boxes -->
            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center">
                <div class="px-5 wide-tb-50">
                    <a href="#" class="btn-theme"> <i class="icofont-file-pdf icofont-2x"></i> &nbsp; Company Profile.pdf</a>
                </div>
            </div>
            <!-- Icon Boxes -->

            <!-- Icon Boxes -->
            <div class="col-lg-4 text-left">
                <div class="px-5 wide-tb-50">
                    <h3 class="h3-md fw-7">Sustainability</h3>
                    <div class="blog-list-categories">
                        <ul class="list-unstyled">
                            <li class="{{ Request::is('responsible_mining') ? 'active' : '' }}"><a href="{{url('responsible_mining')}}"> Responsible Mining</a></li>
                            <li class="{{ Request::is('health_safety') ? 'active' : '' }}"><a href="{{url('health_safety')}}">Health & Safety</a></li>
                            <li class="{{ Request::is('environmental_management') ? 'active' : '' }}"><a href="{{url('environmental_management')}}">Environmental Management</a></li>
                            <li class="{{ Request::is('social_performance') ? 'active' : '' }}"><a href="{{url('social_performance')}}">Social Performance</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Icon Boxes -->
    </div>
</section>
<!-- Callout End -->
@endsection
