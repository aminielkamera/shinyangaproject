@extends('layouts.main')

@section('content')

<!-- What We Offer Start -->
<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
    <div class="bg-overlay-bread blue opacity-70"></div>
    <div class="container">
        <h1>Rehabilitaion & Closure</h1>
        <div class="breadcrumbs-description">
            We are a responsible mining company that discovers and processes gold ore and sells gold.
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
                            <img src="assets/images/blog_single_30.jpg" alt="" class="rounded mb-4">
                            <h4 class="h4-md mb-3 fw-7 txt-blue">Rehabilitaion & Closure
                            </h4>
                            <p>
                                Mine rehabilitation and closure complete the mining cycle.
                                Understanding that mining is only a temporary land use and that our community
                                (i.e., the local farming community) has expectations about how the mine will be
                                closed and the land handed over for future land use is a key driver for mine closure
                                and rehabilitation decision making. As such, closure and rehabilitation are integral
                                aspects of the mine design process at the Magsam Operation. Significant environmental
                                impacts can be avoided by including aspects for closure and rehabilitation early in the
                                mine design process, such as backfilling mined open pits instead of creating new waste
                                rock stacks, thereby limiting the mine's environmental footprint.
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
                                    <a href="{{url('storage/Companyprofile_attachments/'.$data['attachmentData'])}}" target="_blank" class="btn-theme"> <i class="icofont-file-pdf icofont-2x"></i> &nbsp; {{$data['title']}}.pdf</a>
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
            <div class="col-lg-6 mx-auto skills-left py-3">
                <p>
                    Rehabilitation is not only the practice of generating a final land use after
                    closure, but it also assists in minimising other impacts from the mining
                    development. These include impacts from erosion and sediment loss where
                    vegetation and soil are disturbed, and effects on the land on a broader landscape.
                    Where possible, rehabilitation is done progressively (i.e., as the mining operation
                    is developed, to limit the extent and duration of those impacts).
                </p>
            </div>

            <!-- END SKILLS LEFT SIDE -->

            <!-- START SKILLS RIGHT SIDE -->
            <div class="col-lg-6 mx-auto skills-right-4">

            </div>
            <!-- END SKILLS RIGHT SIDE -->

        </div>
    </div>
</section>
<!-- What We Offer End -->
@endsection
