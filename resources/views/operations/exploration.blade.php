@extends('layouts.main')

@section('content')

<!-- What We Offer Start -->
<!-- Page Breadcrumbs Start -->
<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
    <div class="container">
        <h1>Exploration</h1>
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
                            <h4 class="h4-md mb-3 fw-7 txt-blue">Exploration
                            </h4>
                            <p> Mineral exploration begins with initial stage prospecting to
                                determine if a mineral resource exists, or if a known area of
                                mineral resource extends past its known bounds. Broad scale structural
                                mapping and geochemical sampling are used to identify areas of interest
                                containing anomalous gold or other metals of interest and helps
                                to defining the zone of potential mineral resource. Areas or zones of
                                interest are subjected to more in-depth investigation through detailed
                                structural mapping, targeted geochemical sampling (such as soil sampling)
                                and geophysics, to better define the specific target areas.</p>

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
                <h4 class="h4-md mb-3 mt-3 fw-7 txt-blue">Working<span> Management</span></h4>
                <p>If positive results are found, exploration activities move into an initial
                    phase of drilling. Drilling involves intercepting the potential ore body at
                    different points around the zone of interest. This provides samples of the rock
                    to help draw reasonable conclusions about the potential resource in the target area.
                    Drilling information is used to quantify the initial exploration findings and determine
                    the size and scale of a potential resource. If there is enough information, this may
                    be defined as an inferred resource, the first of three levels of confidence needed
                    to establish a completed mine plan.</p>
                <div class="content">
                    <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s"><i class="icofont-check"></i>Drilling is used to determine whether the resource is continuous.
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s"><i class="icofont-check"></i>Samples are sent to a laboratory.</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s"><i class="icofont-check"></i>These results are then used to create a mineral resource estimate.</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.3s"><i class="icofont-check"></i>A resource estimate will contain all levels of resource definition, inferred, indicated, and measured..</li>
                        <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s" style="padding-bottom: 0px;"><i class="icofont-check"></i>Exploration is ongoing throughout every aspect of the active mining cycle and is used when extending or returning to known resources.</li>
                    </ul>
                </div>
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
