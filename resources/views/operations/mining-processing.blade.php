@extends('layouts.main')

@section('content')

<!-- What We Offer Start -->
<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
    <div class="container">
        <h1>Mining, Processing and Refining</h1>
        <div class="breadcrumbs-description">
            Iterative approaches to corporate strategy foster collaborative thinking to further the overall value
            proposition.
        </div>
    </div>
</div>
<!-- Page Breadcrumbs End -->
<section class="wide-tb-80 bg-light-gray">
    <div class="container pos-rel">
        <div class="row align-items-start">

            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <!-- Blog Items -->
                    <div class="col-md-12">
                        <div class="text-left">
                            <img src="assets/images/blog_single.jpg" alt="" class="rounded mb-4">
                            <h4 class="h4-md mb-3 fw-7 txt-blue">Mining, Processing and Refining
                            </h4>
                            <p>
                                The findings from exploration drilling are then used to develop what we
                                call a resource model. This provides the information we need to work
                                out where to mine. Tall, wide steps called benches are drilled to define
                                ore (rock which contains gold) and waste (rock which does not contain economic
                                quantities of gold), and then the area is blasted. This breaks up the rock and
                                makes it easier to transport. The ore and waste areas are marked out and a fleet
                                of excavators and dump trucks mine each area separately. Waste rock is transported
                                to a waste rock stack which is rehabilitated or used to stabilise and fill previously
                                mined areas. Gold bearing ore is transported to stockpiles ready for processing.
                            </p>

                        </div>
                    </div>
                    <!-- Blog Items -->


                </div>

            </div>
            <div class="col-md-12 col-lg-4">
                <!-- Add Some Left Space -->
                <aside class="sidebar-spacer row">

                    <!-- Sidebar Primary Start -->
                    <div class="sidebar-primary col-lg-12 col-md-6">

                        <!-- Sidebar Support Widget Start -->
                        <div class="widget-wrap bg-light-theme text-center rounded py-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn-theme"> <i class="icofont-file-pdf icofont-2x"></i> &nbsp; Company Profile.pdf</a>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Support Widget End -->
                    </div>
                    <!-- Sidebar Primary End -->

                    <!-- Sidebar Secondary Start -->
                    <div class="sidebar-secondary col-lg-12 col-md-6">
                        <!-- Recent Post Widget Start -->
                        <div class="widget-wrap">
                            <h3 class="h3-md fw-7 mb-4">Our Operations</h3>
                            <div class="blog-list-categories">
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('exploration') ? 'active' : '' }}"><a href="{{url('exploration')}}"> Exploration</a></li>
                                    <li class="{{ Request::is('mining_processing') ? 'active' : '' }}"><a href="{{url('mining_processing')}}">Mining, Processing and Refining</a></li>
                                    <li class="{{ Request::is('sale_product') ? 'active' : '' }}"><a href="{{url('sale_product')}}">Sale of Product</a></li>
                                    <li class="{{ Request::is('rehabilitation') ? 'active' : '' }}"><a href="{{url('rehabilitation')}}">Rehabilitation & Closure</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Recent Post Widget End -->
                    </div>
                    <!-- Sidebar Secondary Start -->

                </aside>
                <!-- Add Some Left Space -->
            </div>

        </div>

    </div>
</section>
<section class="skills">
    <div class="container">
        <div class="row">

            <!-- START SKILLS LEFT SIDE -->
            <div class="col-lg-6 mx-auto skills-left">
                <h4 class="h4-md mb-3 mt-3 fw-7 txt-blue">Underground Mining</h4>
                <p>
                    Before developing an underground mine, a series of exploration drilling
                    and detailed studies must occur to determine if it is economic.
                    The detailed studies include a scoping study (six months),
                    a prefeasibility study (12 months), and a feasibility study (12 months).
                </p>
                <p>
                    Once the mining area is completely defined, a portal entrance is cut and surface
                    infrastructure is established (up to six months). A long tunnel called a decline,
                    a return airway, and branching lateral access drives are then developed to reach
                    the ore (two months to several years). Normal lateral ore development and production
                    cycles commence after the main tunnel is established.
                </p>

                <h4 class="h4-md mb-3 mt-3 fw-7 txt-blue">Gold Precessing & Refining</h4>
                <p>
                    Gold at Magsam is known as ‘refractory ore’, which means it is ultra-fine and
                    resistant to the typical cyanide leach process, typical of most gold processing
                    plants. This refractory nature of the ore led to inefficiencies recovering the
                    gold from ore in the past. The ore now goes through a three-stage processing
                    cycle to ensure the gold is economically recovered from the ore.
                </p>
            </div>

            <!-- END SKILLS LEFT SIDE -->

            <!-- START SKILLS RIGHT SIDE -->
            <div class="col-lg-6 mx-auto skills-right">

            </div>
            <!-- END SKILLS RIGHT SIDE -->

        </div>
    </div>
</section>
<!-- What We Offer End -->
@endsection
