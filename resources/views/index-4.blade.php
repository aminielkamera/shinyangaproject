@extends('layouts.main')

@section('content')
@include('shared.main-slider')

<style>
    .content {
        height: 100%;
        padding: 20px 20px 10px;
        box-shadow: 0 5px 15px rgb(0 0 0 / 70%);
        border: 1px solid #CCA177;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .shaped {
        float: left;
        height: 45vh;
        width: 30vw;
        float: right;
        background: black url('assets/images/bg_color_3.jpg');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    .shaped {
        /*...*/
        shape-outside: polygon(0 0, 100% 0, 100% 100%, 30% 100%);
        shape-margin: 10px;
    }

    .shaped {
        /*...*/
        clip-path: polygon(0 0, 100% 0, 100% 100%, 30% 100%);
    }

    .bg-navy-blue-btn {
        background: linear-gradient(to right, #AE8625, #F7EF8A, #D2AC47, #EDC967);
    }

    .arrow>a {
        color: #AE8625;
    }

    .arrow::after {
        display: inline-block;
        padding-left: 8px;
        content: "\2192";
        transition: transform 0.3s ease-out;
    }

    .arrow:hover::after {
        transform: translateX(6px);
    }

    .pageOption {
        overflow: hidden;
        position: relative;
        width: 300px;
        height: 300px;
        position: absolute;
    }

    .option,
    .option img {
        width: 100%;
        height: 100%;
    }

    .option {
        overflow: hidden;
        position: absolute;
        transform: skewX(-55.98deg);
    }

    .option:first-child {
        left: -.25em;
        transform-origin: 100% 0;
    }

    .option:last-child {
        right: -.25em;
        transform-origin: 0 100%;
    }

    .option img {
        transform: skewX(55.98deg);
        transform-origin: inherit;
    }

    .card1 {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 290px;
        border-radius: 5px;
        background-color: #ffffff;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
        overflow: hidden;
        border-bottom: 5px solid transparent;
        border-image: -webkit-linear-gradient(left, #8f6B29, #FDE08D, #DF9F28);
        border-image-slice: 1;
    }

    h2 {
        position: absolute;
        left: 0;
        top: 0;
        margin: 46px 0px 0px 20px;
        font-size: 17px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 15px;
        color: #fff;
        mix-blend-mode: difference;
    }

    #p {
        position: absolute;
        left: 0;
        bottom: 0;
        margin: 10px 20px 60px 20px;
        font-size: 1.03rem;
        color: rgba(3, 12, 32, 0.9);
        line-height:1.7;
    }

    #circle {
        height: 100%;
        width: 100%;
        border-radius: 50%;
        background: linear-gradient(70deg, rgba(39, 30, 15, 255) 40%, rgba(108, 84, 40, 255) 70%);
        margin-top: -330px;
        margin-left: 200px;
    }

    #triangle {
        height: 100%;
        width: 100%;
        background: linear-gradient(70deg, rgba(39, 30, 15, 255) 60%, rgba(108, 84, 40, 255) 80%);
        border-radius: 20px;
        transform: rotate(70deg);
        margin-top: -430px;
        margin-left: 200px;
        margin-bottom: 10px;
    }

    .content1 a {
        position: absolute;
        right: 0;
        bottom: 0;
        margin: 20px;
        cursor: pointer;
        color: #545454;
        font-size: 14px;
        padding: 6px 15px;
        box-shadow: 10px 0 50px rgba(0, 0, 0, 0.2);
    }
    .content1 a:hover {
        color: rgba(108, 84, 40, 255);
        font-size: 15px;
        box-shadow: 10px 0 50px rgba(0, 0, 0, 0.09);
    }
</style>
<!-- Welcome To Cargo Start -->
<div class='pageOption'>
    <a href='#' class='option' data-inf='photo'>
        <img src="{{ asset('assets/images/bg_14.jpg')}}">
    </a>
    <a href='#' class='option' data-inf='photo'>
    </a>
</div>
<section class="wide-tb-110 pb-5 bg-light-theme home-welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card1">
                    <div id="circle"></div>
                    <h2>Exploration</h2>
                    <p id="p">Magsam conducting mineral exploration as the initial stage to determine if a mineral resource...</p>
                    <div class="content1">
                        <a href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card1">
                    <div id="overlay"></div>
                    <div id="triangle"></div>
                    <h2>Gold Mining</h2>
                    <p id="p">The findings from exploration drilling are then used to develop what we call a resource model...</p>
                    <div class="content1">
                        <a href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card1">
                    <div id="triangle"></div>
                    <h2>Processing</h2>
                    <p id="p">Gold at Magsam is known as 'Quality Ore', which means now our ore goes through a three-stage...</p>
                    <div class="content1">
                        <a href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="wide-tb-110 p-0 bg-light-theme home-welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="service-details.html">
                    <div class="icon-box-with-img bg-liner-gradient">
                        <img src="{{ asset('assets/images/icon-box-img-1.jpg')}}" alt="">
                        <div class="text">
                            Exploration
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="service-details.html">
                    <div class="icon-box-with-img bg-liner-gradient">
                        <img src="{{ asset('assets/images/icon-box-img-2.jpg')}}" alt="">
                        <div class="text">
                            Gold Mining
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="service-details.html">
                    <div class="icon-box-with-img bg-liner-gradient">
                        <img src="{{ asset('assets/images/icon-box-img-3.jpg')}}" alt="">
                        <div class="text">
                            Processing
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section> -->
<!-- Welcome To Cargo End -->

<!-- About Us Start -->
<section class="bg-white wide-tb-110 mb-spacer-md">
    <div class="container">
        <!-- Heading Main -->
        <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <h1 class="heading-main text-left" style="text-align: left;">
                <!-- <span>Who we are</span> -->
                About Us
            </h1>
        </div>
        <!-- Heading Main -->
        <div class="">
            <div class="shaped">
            </div>
            <div class="service-inner-content media-body text-left">
                <h4 class="h4-md">Magsam Resources</h4>
                <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
            </div>
            <div class="content">
                <p class="text-left">Our journey began in 2020 in the Lake Region of Tanzania when gold production first commenced at Magsam in Shinyanga. One year, our footprint has expanded to the Mwazimba mine and Nyamakwenge mine of Shinyanga region. Throughout our history, we have proudly advanced the body of knowledge in our field and delivered award-winning initiatives driven by a commitment to social, economic, operational, and environmental sustainability."Magsam Resources Ltd" we have two mines which combining underground and open pit gold mine located in Shinyanga district, Region of Tanzania. It is operated by Magsam Resources Ltd, who owned 100% of the mine.
                    <br><br>
                    You will receive exceptional customer service through the entire project with clear and open communication. We encourage client participation guaranteeing you of effective outcomes. You can relax knowing that your project is being managed by a knowledgeable, experienced team. We offer skilled, expert advice on both the structure and style of your home.
                </p>
                <div class="row">
                    <div class="spacer-10"></div>
                    <div class="col-md-12 mb-2">
                        <a href="{{url('about-us')}}" class="btn-theme bg-navy-blue-btn">Read More <i class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us End -->

<!-- What Makes Us Special Start -->
<section class="bg-light-theme wide-tb-110">
    <div class="container pos-rel">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <span>Our Sustainability</span>
                    Mining Gold For a Better Future
                </h1>
            </div>
            <!-- Heading Main -->
            <div class="col-lg-6 ms-auto">
                <div class="row">
                    <!-- Icon Box 2 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                        <div class="icon-box-3 mb-5 bg-light-theme">
                            <div class="media">
                                <div class="service-icon mr-5">
                                    <i class="icofont-mining"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Responsible Mining</h4>
                                    <p>The Magsam Way of doing business reflects our culture and commitment to responsible mining, managing our impacts and, more broadly, contributing to the communities in which we work and live...
                                    </p>
                                    <div class="see-project arrow"><a href="">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box -->

                    <!-- Icon Box 2 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="icon-box-3 mb-5 bg-light-theme">
                            <div class="media">
                                <div class="service-icon mr-5">
                                    <i class="icofont-shield"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Safety & Health</h4>
                                    <p>Our safety performance and culture is aligned to our core values to achieve workforce health, safety, hygiene and wellbeing. Every person is essential in supporting...
                                    </p>
                                    <div class="see-project arrow"><a href="">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box -->

                    <!-- Icon Box 2 -->
                    <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                        <div class="icon-box-3 bg-light-theme">
                            <div class="media">
                                <div class="service-icon mr-5">
                                    <i class="icofont-tree-alt"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Environment Management</h4>
                                    <p>Magsam Gold mines is committed to responsible environmental management across all our business activities...
                                    </p>
                                    <div class="see-project arrow"><a href="">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box -->
                </div>
                <div class="row text-center">
                    <div class="spacer-30"></div>
                    <div class="col-md-12">
                        <a href="{{url('about-us')}}" class="btn-theme bg-navy-blue-btn">View All <i class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="img-business-man">
                <img src="{{ asset('assets/images/bg_color_18.png')}}" alt="">
            </div>
        </div>

    </div>
</section>
<!-- What Makes Us Special End -->

<!-- Counter Start -->
<section class="wide-tb-110 bg-scroll counter-bg pos-rel">
    <div class="bg-overlay blue opacity-50"></div>
    <div class="container">
        <div class="row">
            <!-- Counter Col Start -->
            <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                <p><i class="icofont-google-map"></i></p>
                <span class="counter">15</span>
                <div>
                    Our Locations
                </div>
            </div>
            <!-- Counter Col End -->

            <!-- Counter Col Start -->
            <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                <p><i class="icofont-globe"></i></p>
                <span class="counter">110</span>
                <span>+</span>
                <div>
                    Clients Worldwide
                </div>
            </div>
            <!-- Counter Col End -->

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-30"></div>
            <!-- Spacer For Medium -->

            <!-- Counter Col Start -->
            <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0">
                <p><i class="icofont-vehicle-delivery-van"></i></p>
                <span class="counter">240</span>
                <span>+</span>
                <div>
                    Owned Vehicles
                </div>
            </div>
            <!-- Counter Col End -->

            <!-- Counter Col Start -->
            <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                <p><i class="icofont-umbrella-alt"></i></p>
                <span class="counter">2340</span>
                <div>
                    Tonnes Transported
                </div>
            </div>
            <!-- Counter Col End -->
        </div>
    </div>
</section>
<!-- Counter End -->

<!-- Tracking Your Freight Start -->
<!-- <section class="wide-tb-110 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ms-lg-auto pos-rel col-md-12">
                <h1 class="heading-main text-start">
                    <span>get updates</span>
                    Tracking Your Freight
                </h1>
                <form class="form-inline tracking">
                    <input type="text" class="form-control mb-2 mr-sm-2 col" placeholder="Enter order number">
                    <button type="submit" class="btn btn-theme bg-navy-blue mb-2 ml-3">Check Now <i class="icofont-rounded-right"></i></button>
                </form>
                <div class="forklift-image wow slideInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <img src="{{ asset('assets/images/forklift_Image.png')}}" alt="">
                </div>

            </div>
        </div>
    </div>
</section> -->
<!-- Tracking Your Freight End -->

<!-- Our Team Start -->
<section class="bg-white wide-tb-110 mb-spacer-md">
    <div class="container">
        <!-- Heading Main -->
        <div class="col-sm-12">
            <h1 class="heading-main">
                <span>Face Behind Magsam</span>
                Our Team
            </h1>
        </div>
        <!-- Heading Main -->

        <div class="row pb-5">
            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                <div class="team-section-one">
                    <img src="{{ asset('assets/images/team/team-1.jpg')}}" alt="" class="rounded-circle">
                    <h4 class="h4-md txt-blue">John Morise</h4>
                    <h5 class="h5-md txt-ligt-gray">Founder</h5>
                </div>
            </div>
            <!-- Team Column One -->

            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                <div class="team-section-one">
                    <img src="{{ asset('assets/images/team/team-2.jpg')}}" alt="" class="rounded-circle">
                    <h4 class="h4-md txt-blue">Kevin Mash</h4>
                    <h5 class="h5-md txt-ligt-gray">Head Operational</h5>
                </div>
            </div>
            <!-- Team Column One -->

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-30"></div>
            <!-- Spacer For Medium -->

            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                <div class="team-section-one">
                    <img src="{{ asset('assets/images/team/team-3.jpg')}}" alt="" class="rounded-circle">
                    <h4 class="h4-md txt-blue">Mike Douglos</h4>
                    <h5 class="h5-md txt-ligt-gray">Team Lead Support</h5>
                </div>
            </div>
            <!-- Team Column One -->

            <!-- Team Column One -->
            <div class="col-12 col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.3s">
                <div class="team-section-one">
                    <img src="{{ asset('assets/images/team/team-4.jpg')}}" alt="" class="rounded-circle">
                    <h4 class="h4-md txt-blue">Jeff Fashkin</h4>
                    <h5 class="h5-md txt-ligt-gray">Head Operational</h5>
                </div>
            </div>
            <!-- Team Column One -->
        </div>
    </div>
</section>
<!-- Our Team End -->

<!-- Free Quote Start -->
<section class="wide-tb-110 bg-fixed free-quote free-quote-alt pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-7">
                <div class="free-quote-form">
                    <!-- Heading Main -->
                    <h1 class="heading-main mb-4">
                        <span>Request a </span>
                        Contact Us
                    </h1>
                    <!-- Heading Main -->

                    <!-- Free Quote From -->
                    <form action="#" method="post" novalidate="novalidate" class="col rounded-field">
                        <div class="form-row mb-4">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-row mb-4">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-row mb-4">
                            <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                        </div>
                        <div class="form-row text-center">
                            <button type="submit" class="form-btn mx-auto btn-theme bg-orange">Submit Now <i class="icofont-rounded-right"></i></button>
                        </div>
                    </form>
                    <!-- Free Quote From -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Free Quote End -->

<!-- Client Testimonials Start -->
<section class="wide-tb-110">
    <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <span>What Our</span>
                    Customers Saying
                </h1>
            </div>
            <!-- Heading Main -->
            <div class="col-sm-12">
                <div class="owl-carousel owl-theme" id="home-client-testimonials">

                    <!-- Client Testimonials Slider Item -->
                    <div class="item">
                        <div class="client-testimonial bg-wave">
                            <div class="media">
                                <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                    <img src="{{ asset('assets/images/team_1.jpg')}}" alt="">
                                </div>
                                <div class="client-inner-content media-body">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Aliquam gravida, urna quis
                                        ornare imperdiet, </p>
                                    <footer class="blockquote-footer"><cite title="Source Title">John Gerry
                                            Design Hunt</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Client Testimonials Slider Item -->

                    <!-- Client Testimonials Slider Item -->
                    <div class="item">
                        <div class="client-testimonial bg-wave">
                            <div class="media">
                                <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                    <img src="{{ asset('assets/images/team_2.jpg')}}" alt="">
                                </div>
                                <div class="client-inner-content media-body">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Aliquam gravida, urna quis
                                        ornare imperdiet, </p>
                                    <footer class="blockquote-footer"><cite title="Source Title">John Gerry
                                            Design Hunt</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Client Testimonials Slider Item -->

                    <!-- Client Testimonials Slider Item -->
                    <div class="item">
                        <div class="client-testimonial bg-wave">
                            <div class="media">
                                <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                    <img src="{{ asset('assets/images/team_3.jpg')}}" alt="">
                                </div>
                                <div class="client-inner-content media-body">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Aliquam gravida, urna quis
                                        ornare imperdiet, </p>
                                    <footer class="blockquote-footer"><cite title="Source Title">John Gerry
                                            Design Hunt</cite></footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Client Testimonials Slider Item -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Testimonials End -->

<!-- Callout Start -->
<section class="wide-tb-80 bg-navy-blue callout-style-1 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 mb-0">
                <h4 class="h4-xl">Interested in working with Logzee?</h4>
            </div>
            <div class="col">
                <div class="center-text">
                    We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized
                    approach
                </div>
            </div>
            <div class="col-sm-auto">
                <a href="#" class="btn-theme bg-white light">Get In Touch <i class="icofont-rounded-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Callout End -->

<!-- Company News Start -->
<section class="wide-tb-110">
    <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <span>COMPANY'S NEWS</span>
                    Recent Posts
                </h1>
            </div>
            <!-- Heading Main -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                <div class="blog-warp">
                    <img src="{{ asset('assets/images/blog_img_1.jpg')}}" alt="" class="rounded">
                    <div class="meta-box"><a href="#">Business</a> <span>/</span> September 28, 2018</div>
                    <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                <div class="blog-warp">
                    <img src="{{ asset('assets/images/blog_img_2.jpg')}}" alt="" class="rounded">
                    <div class="meta-box"><a href="#">Business</a> <span>/</span> September 28, 2018</div>
                    <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.1s">
                <div class="blog-warp">
                    <img src="{{ asset('assets/images/blog_img_3.jpg')}}" alt="" class="rounded">
                    <div class="meta-box"><a href="#">Business</a> <span>/</span> September 28, 2018</div>
                    <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->


        </div>
    </div>
</section>
<!-- Company News End -->

<!-- Clients Start -->
<section class="wide-tb-110 bg-fixed clients-bg pos-rel">
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
                        <img src="{{ asset('assets/images/clients/client1.png')}}" alt="">
                    </div>
                    <!-- Client Logo -->

                    <!-- Client Logo -->
                    <div class="item">
                        <img src="{{ asset('assets/images/clients/client2.png')}}" alt="">
                    </div>
                    <!-- Client Logo -->

                    <!-- Client Logo -->
                    <div class="item">
                        <img src="{{ asset('assets/images/clients/client3.png')}}" alt="">
                    </div>
                    <!-- Client Logo -->

                    <!-- Client Logo -->
                    <div class="item">
                        <img src="{{ asset('assets/images/clients/client4.png')}}" alt="">
                    </div>
                    <!-- Client Logo -->

                    <!-- Client Logo -->
                    <div class="item">
                        <img src="{{ asset('assets/images/clients/client5.png')}}" alt="">
                    </div>
                    <!-- Client Logo -->

                    <!-- Client Logo -->
                    <div class="item">
                        <img src="{{ asset('assets/images/clients/client6.png')}}" alt="">
                    </div>
                    <!-- Client Logo -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients End -->

<!-- Google Map Start -->
<section class="map-bg">
    <div class="contact-details row d-flex">
        <div class="col">
            <h4>Germany</h4>
            <p><i class="icofont-phone"></i> +1 (408) 786 - 5117</p>
            <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">germany@logzee.com</a></div>
        </div>
        <div class="col">
            <h4>Spain</h4>
            <p><i class="icofont-phone"></i> +1 (408) 786 - 5117</p>
            <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">spain@logzee.com</a></div>
        </div>
    </div>
    <div id="map-holder" class="pos-rel">
        <div id="map_extended">
            <p>This will be replaced with the Google Map.</p>
        </div>
    </div>
    <!-- Google Map Start -->
</section>
@endsection