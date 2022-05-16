@extends('layouts.main')

@section('content')

      <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>

            <h1>About Us</h1>
            <div class="breadcrumbs-description">
                Meet the amazing team behind this project and find out more about how we work.
            </div>
        </div>
    </div>
    <!-- Page Breadcrumbs End -->
        <!-- What Makes Us Special Start -->
        <section class="wide-tb-80">
            <div class="container pos-rel">
                <div class="row align-items-center">

                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                        <h2 class="mb-4 fw-7 txt-blue">
                            About <span class="fw-6 txt-orange">LogZee</span>
                        </h2>

                        <p>Energistically utilize team driven niche markets rather than leveraged platforms.
                            Monotonectally restore tactical "outside the box" thinking and technically sound
                            deliverables. </p>

                        <p>Compellingly develop fully researched process improvements through innovative opportunities.
                            Credibly productize highly efficient potentialities for vertical core competencies. Quickly
                            maintain pandemic experiences rather than low-risk high-yield processes.</p>
                    </div>


                    <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                        <img src="{{ asset('assets/images/map-bg-orange.jpg')}}" alt="">
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
                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                        <div class="icon-box-2">
                            <div class="media">
                                <div class="service-icon">
                                    <i class="icofont-id"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Trusted Franchise</h4>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.
                                        Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box -->

                    <!-- Icon Box 2 -->
                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="icon-box-2">
                            <div class="media">
                                <div class="service-icon">
                                    <i class="icofont-live-support"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Customer Support</h4>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.
                                        Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box -->

                    <!-- Icon Box 2 -->
                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                        <div class="icon-box-2">
                            <div class="media">
                                <div class="service-icon">
                                    <i class="icofont-history"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Reliability & Punctuality</h4>
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
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 wow pulse animated" data-wow-duration="0"
                        data-wow-delay="0.7s">
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

        <!-- Counter Start -->
        <section class="wide-tb-100 mb-spacer-md">
            <div class="container wide-tb-100 pb-0">
                <div class="row d-flex align-items-center">
                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0s">
                        <div class="counter-style-1 light-bg">
                            <p class="mb-1"><i class="icofont-google-map"></i></p>
                            <span class="counter">15</span>
                            <div>
                                Our Locations
                            </div>
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
                        <div class="counter-style-1 light-bg">
                            <p class="mb-1"><i class="icofont-globe"></i></p>
                            <span class="counter">110</span>
                            <span>+</span>
                            <div>
                                Clients Worldwide
                            </div>
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-30"></div>
                    <!-- Spacer For Medium -->

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.6s">
                        <div class="counter-style-1 light-bg">
                            <p class="mb-1"><i class="icofont-vehicle-delivery-van"></i></p>
                            <span class="counter">240</span>
                            <span>+</span>
                            <div>
                                Owned Vehicles
                            </div>
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.9s">
                        <div class="counter-style-1 light-bg">
                            <p class="mb-1"><i class="icofont-umbrella-alt"></i></p>
                            <span class="counter">2340</span>
                            <div>
                                Tonnes Transported
                            </div>
                        </div>
                    </div>
                    <!-- Counter Col End -->
                </div>
            </div>
        </section>
        <!-- Counter End -->

        <!-- Tracking Your Freight Start -->
        <section class="pos-rel bg-light-theme">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 p-0">
                        <img src="{{ asset('assets/images/why-choose-us.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-6 col-12">

                        <div class="p-5 about-whoose">
                            <!-- Heading Main -->
                            <h1 class="heading-main text-start mb-4">
                                <span>Why Choose</span>
                                LogZee
                            </h1>
                            <!-- Heading Main -->

                            <!-- Tracking Form -->
                            <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s"><i
                                        class="icofont-check"></i>Deliver Environmentally Responsible Client Services
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s"><i
                                        class="icofont-check"></i>Be an Active Community Partner</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s"><i
                                        class="icofont-check"></i>Drive Continuous Improvement</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.3s"><i
                                        class="icofont-check"></i>Clearance and compliance service</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"><i
                                        class="icofont-check"></i>Clearance and compliance service</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.5s"><i
                                        class="icofont-check"></i>Maintain High Ethical Standards</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s"><i
                                        class="icofont-check"></i>Air & Ocean Cargo Insurance</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s"><i
                                        class="icofont-check"></i>We ensure complete security</li>
                            </ul>
                            <!-- Tracking Form -->
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Tracking Your Freight End -->

        <!-- Our Team Start -->
        <section class="wide-tb-100 pb-0 team-section-bottom pos-rel">
            <div class="container">
                <!-- Heading Main -->
                <div class="col-sm-12">
                    <h1 class="heading-main">
                        <span>Face Behind Logzee</span>
                        Our Team
                    </h1>
                </div>
                <!-- Heading Main -->

                <div class="row pb-4">
                    <!-- Team Column One -->
                    <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                        <div class="team-section-two">
                            <img src="{{ asset('assets/images/team/team-1.jpg')}}" alt="" class="rounded">
                            <h4 class="h4-md txt-orange">John Morise</h4>
                            <h5 class="h5-md txt-ligt-gray">Founder</h5>
                        </div>
                    </div>
                    <!-- Team Column One -->

                    <!-- Team Column One -->
                    <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                        <div class="team-section-two">
                            <img src="{{ asset('assets/images/team/team-2.jpg')}}" alt="" class="rounded">
                            <h4 class="h4-md txt-orange">Kevin Mash</h4>
                            <h5 class="h5-md txt-ligt-gray">Head Operational</h5>
                        </div>
                    </div>
                    <!-- Team Column One -->

                    <!-- Team Column One -->
                    <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="team-section-two">
                            <img src="{{ asset('assets/images/team/team-3.jpg')}}" alt="" class="rounded">
                            <h4 class="h4-md txt-orange">Mike Douglos</h4>
                            <h5 class="h5-md txt-ligt-gray">Team Lead Support</h5>
                        </div>
                    </div>
                    <!-- Team Column One -->
                </div>
            </div>
        </section>
        <!-- Our Team End -->

        <!-- Free Quote Start -->
        <section class="bg-white wide-tb-100 mb-spacer-md">
            <div class="container">
                <!-- Heading Main -->
                <div class="col-sm-12">
                    <h1 class="heading-main">
                        <span>Request a </span>
                        Free Quote
                    </h1>
                </div>
                <!-- Heading Main -->

                <div class="row">
                    <!-- Right Text Start -->
                    <div class="col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="align-self-stretch h-100 align-items-center d-flex bg-with-text">
                            Whether you require distribution or fulfillment, defined freight forwarding, or a complete
                            supply chain solution, we are here for you.
                        </div>
                    </div>
                    <!-- Right Text Start -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-30"></div>
                    <!-- Spacer For Medium -->

                    <div class="col-lg-8 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">
                        <!-- Free Quote From -->
                        <form action="#" method="post" novalidate="novalidate" class="rounded-field gray-field">
                            <div class="row g-4 mb-4">
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col">
                                    <select title="Please choose a package" required="" name="package"
                                        class="form-control wide" aria-required="true" aria-invalid="false">
                                        <option value="">Transport Type</option>
                                        <option value="Type 1">Type 1</option>
                                        <option value="Type 2">Type 2</option>
                                        <option value="Type 3">Type 3</option>
                                        <option value="Type 4">Type 4</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select title="Please choose a package" required="" name="package"
                                        class="form-control wide" aria-required="true" aria-invalid="false">
                                        <option value="">Type of freight</option>
                                        <option value="Type 1">Type 1</option>
                                        <option value="Type 2">Type 2</option>
                                        <option value="Type 3">Type 3</option>
                                        <option value="Type 4">Type 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col">
                                    <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <button type="submit" class="form-btn mx-auto btn-theme bg-orange">Request Quote <i
                                        class="icofont-rounded-right"></i></button>
                            </div>
                        </form>
                        <!-- Free Quote From -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Free Quote End -->

        <!-- Clients Start -->
        <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
            <div class="bg-overlay blue opacity-80"></div>
            <div class="container">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <h1 class="heading-main">
                            <span>SOME OF OUR</span>
                            Clients
                        </h1>
                    </div>
                    <!-- Heading Main -->

                    <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="owl-carousel owl-theme" id="home-clients">

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ asset('assets/images/clients/client1.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ asset('assets/images/clients/client2.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ asset('assets/images/clients/client3.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ asset('assets/images/clients/client4.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ asset('assets/images/clients/client5.png" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{ asset('assets/images/clients/client6.png" alt="">
                            </div>
                            <!-- Client Logo -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients End -->

        <!-- Frequently Asked Questions Start -->
        <section class="wide-tb-100 faqs">
            <div class="container">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12">
                        <h1 class="heading-main">
                            <span>Frequently Asked</span>
                            Questions
                        </h1>
                    </div>
                    <!-- Heading Main -->

                    <!-- Questions -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                        <h4 class="h4-md mb-3">Lobortis sit magna ornare magna egestas?</h4>
                        <p>Etiam sit amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis
                            blandit ultrice ligula egestas magna suscipit lectus magna suscipit luctus undo blandit
                            vitae purus laoreet</p>
                    </div>
                    <!-- Questions -->

                    <!-- Questions -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <h4 class="h4-md mb-3">Aliquam dapibus pretium ornare?</h4>
                        <p>Feugiat eros ligula massa lipsum primis in orci luctus et ultrices posuere cubilia curae
                            congue lorem. ante ipsum primis in faucibus bibendum sit amet in odio</p>
                    </div>
                    <!-- Questions -->

                    <!-- Questions -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                        <h4 class="h4-md mb-3">Placeat axime facere omnis volute?</h4>
                        <p>Etiam sit amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis
                            blandit ultrice ligula egestas magna suscipit lectus magna suscipit luctus undo blandit
                            vitae purus laoreet</p>
                    </div>
                    <!-- Questions -->

                    <!-- Questions -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s">
                        <h4 class="h4-md mb-3">Dapibus lobortis pretium ornare?</h4>
                        <p>Feugiat eros ligula massa lipsum primis in orci luctus et ultrices posuere cubilia curae
                            congue lorem. ante ipsum primis in faucibus bibendum sit amet in odio</p>
                    </div>
                    <!-- Questions -->

                    <!-- Questions -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.8s">
                        <h4 class="h4-md mb-3">An interdum lobortis pretium ornare?</h4>
                        <p>Etiam sit amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis
                            blandit ultrice ligula egestas magna suscipit lectus magna suscipit luctus undo blandit
                            vitae purus laoreet</p>
                    </div>
                    <!-- Questions -->

                    <!-- Questions -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.9s">
                        <h4 class="h4-md mb-3">Interdum lobortis pretium ornare?</h4>
                        <p>Feugiat eros ligula massa lipsum primis in orci luctus et ultrices posuere cubilia curae
                            congue lorem. ante ipsum primis in faucibus bibendum sit amet in odio</p>
                    </div>
                    <!-- Questions -->
                </div>
            </div>
        </section>
        <!-- Frequently Asked Questions End -->

        <!-- Callout Start -->
        <section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1">
            <div class="bg-overlay blue opacity-60"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 mb-0 wow slideInUp" data-wow-duration="0" data-wow-delay="0.1s">
                        <h4 class="h4-xl">Interested in working with Logzee?</h4>
                    </div>
                    <div class="col wow slideInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="center-text">
                            We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized
                            approach
                        </div>
                    </div>
                    <div class="col-sm-auto wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
                        <a href="#" class="btn btn-theme bg-white bordered">Get In Touch <i
                                class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout End -->

    <!-- Email Subscribe Start -->
    <section class="wide-tb-50 pb-0 bg-light-theme footer-subscribe">
        <div class="container wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <div class="row">
                <div class="col-sm-12 d-flex col-md-12 col-lg-6 offset-lg-3">
                    <div class="d- align-items-center d-sm-inline-flex  w-100">
                        <div class="head">
                            <span class="d-block">SUBSCRIBE For</span> NEWSLETTER
                        </div>
                        <form class="flex-nowrap col ms-3">
                            <input type="text" class="form-control" placeholder="Enter order number">
                            <button type="submit" class="btn btn-theme bg-navy-blue">Check Now <i
                                    class="icofont-envelope"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Email Subscribe End -->

    @endsection