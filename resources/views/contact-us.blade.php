@extends('layouts.main')

@section('content')
<!-- Page Breadcrumbs Start -->

<div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page-1">
    <div class="bg-overlay-bread blue opacity-70"></div>
    <div class="container">
        <h1>Contact Us</h1>
        <div class="breadcrumbs-description">
            Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.
        </div>
    </div>
</div>
<!-- Page Breadcrumbs End -->
<!-- Contact Details Start -->
<section class="wide-tb-50 pos-rel">
    <div class="container">
        <div class="contact-map-bg option">
            <img src="assets/images/map-bg.png" alt="">
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="h2-md mb-4 fw-7 txt-blue">Our Address</h2>
                <!-- Contact Detail Left -->
                <div class="contact-detail-shadow no-shadow mb-5 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                    <h4>Tanzania</h4>
                    <div class="d-flex align-items-start items">
                        <i class="icofont-google-map"></i> <span>Kahama, Shinyanga, Tanzania</span>
                    </div>
                    <div class="d-flex align-items-start items">
                        <i class="icofont-phone"></i> <span>+255-755-907-381</span>
                    </div>
                    <div class="text-nowrap d-flex align-items-start items">
                        <i class="icofont-email"></i> <a href="#">info@magsamresources.com</a>
                    </div>
                </div>
                <!-- Contact Detail Left -->

            </div>


            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">
                        @if(session()->has('danger'))
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                            <strong>Danger! </strong>{{ session()->get('danger') }}
                        </div>
                        @endif
                        @if(session()->has('success'))
                        <div class="alert alert-success rounded-pill white">
                            <a href="#" class="close ml-2" data-dismiss="alert" aria-label="close"></a>
                            <strong>Success! </strong>{{ session()->get('success') }}
                        </div>
                        @endif
                        @if(session()->has('warning'))
                        <div class="alert alert-warning rounded-pill white">
                            <a href="#" class="close ml-2" data-dismiss="alert" aria-label="close"></a>
                            <strong>Warning! </strong>{{ session()->get('warning') }}
                        </div>
                        @endif
                        @if(session()->has('info'))
                        <div class="alert alert-info rounded-pill white">
                            <a href="#" class="close ml-2" data-dismiss="alert" aria-label="close"></a>
                            <strong>Info! </strong>{{ session()->get('info') }}
                        </div>
                        @endif
                    </div>
                </div>
                <h2 class="h2-md mb-4 fw-7 txt-blue">Contact Magsam! Its Free</h2>
                <div class="free-quote-form contact-page-option wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <form action="{{url('client/contact-Us')}}" method="POST" id="contactoption" novalidate="novalidate" class="rounded-field">
                        @csrf
                        <div class="g-4 row mb-4">
                            <div class="col-md mb-0">
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md mb-0">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md mb-0">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="g-4 row mb-4">
                            <div class="col-md mb-0">
                                <textarea name="message" rows="7" placeholder="Message" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row text-end">

                            <button name="contactoption" id="contactoption" type="submit" class="form-btn mx-auto btn-theme bg-orange">Send Now <i class="icofont-rounded-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Google Map Start -->
<section class="map-bg">
    <div id="map-holder" class="pos-rel">
        <div id="map_extended">
            <p>This will be replaced with the Google Map.</p>
        </div>
    </div>
</section>
<!-- Google Map Start -->
<!-- Contact Details End -->
@endsection
@section('script')
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
@endsection
