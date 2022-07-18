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
            We are a responsible mining company that discovers and processes gold ore and sells gold.
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

                <p class="mr-3">Our journey began in 2020 in the Lake Region of Tanzania when
                    gold production first commenced at Magsam in Shinyanga.
                    In one year, our footprint has expanded to the Mwazimba mine
                    and Nyamakwenge mine in the Shinyanga region. Throughout our
                    history, we have proudly advanced the body of knowledge in our
                    field and delivered award-winning initiatives driven by a
                    commitment to social, economic, operational, and environmental
                    sustainability. <q style="font-weight: 500;">Magsam Resources Ltd</q> has two mines which
                    combine underground and open pit gold mining and are located
                    in the Shinyanga district, Region of Tanzania.
                    It is operated by <q>Magsam Resources Ltd</q>, which owns 100%
                    of the mine.</p>

                <p class="mr-3">Mining is another backbone of Shinganya region. Many of Shinyanga
                    families have been part of the local community for generations and
                    care deeply for the region. We are committed to doing this right.</p>
                <p class="mr-3">After an extensive environmental review and permitting process,
                    we have obtained permits (subject to ongoing litigation) to
                    construct and operate the mine, modernize and reactive processing
                    facilities on our site that were formerly used in gold ore
                    operations, and address legacy issues associated with gold
                    mining operations.</p>
                <p class="mr-3">
                    We will do this with a leadership and development team that has
                    decades of experience developing and operating mines safely and
                    responsibly.
                </p>
                <p class="mr-3">
                    We look forward to producing these essential metals, creating good
                    jobs, fulfilling our promises, and extending the rich mining heritage
                    of the Shinyanga region.
                </p>
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
                            <p>To be a recognized gold mining company focused on growing sustainable production, delivering on our commitments for excellence and valuing and developing our employees and communities surround our mines.</p>
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
                            <p>Create and grow sustainable value for our stakeholders through the application of best practices in mining and our commitment on protecting the health and wellbeing of our employees and the environment in the communities where we work.</p>
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
                            <p>Our five values guide all decisions made and actions taken in the conduct of our business. These values link our business activities to our environmental, social, employees and governance responsibilities.</p>
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
                        <span>Values</span>
                        Magsam
                    </h1>
                    <!-- Heading Main -->

                    <!-- Tracking Form -->
                    <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="font-weight: 500;"><i class="icofont-check"></i>Zero-Harm <br>
                            <small style="font-weight: normal;">Zero harm to our employees, the environment and communities is our goal</small>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="font-weight: 500;"><i class="icofont-check"></i>Dignity and Respect <br>
                            <small style="font-weight: normal;">Equal treatment and opportunity for all employees with transparent processes founded on dignity and respect and encouraging a sense of ownership</small>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="font-weight: 500;"><i class="icofont-check"></i>Sustainability <br>
                            <small style="font-weight: normal;">Sustainable growth supported by a safe, profitable and socially responsible business while developing long-term resources</small>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="font-weight: 500;"><i class="icofont-check"></i>Collaboration <br>
                            <small style="font-weight: normal;">Productive and ethical working relationships, transparent and responsive dialogue with surrounding communities and public agencies for the benefit of all stakeholders</small>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s" style="font-weight: 500;"><i class="icofont-check"></i>Excellence <br>
                            <small style="font-weight: normal;">A commitment to focus on a culture of best business practices</small>
                        </li>
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
                    We are a responsible mining company that discovers and processes gold ore and sells gold to the world market.
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
