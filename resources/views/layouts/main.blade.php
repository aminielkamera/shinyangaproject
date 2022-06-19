<!doctype html>
<html lang="en">

<head>
    <!-- xxx Basics xxx -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- xxx Change With Your Information xxx -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>Magsam Resources Co. Ltd</title>
    <meta name="author" content="Mannat Studio">
    <meta name="description" content="Logzee is a Responsive HTML5 Template for Logistic and Cargo related services.">
    <meta name="keywords" content="Logzee, responsive, html5, business, cargo, chain supply, company, corporate, expedition, freight, logistics, packaging, services, shipping, transport, transportation, trucking, warehousing">

    <!-- xxx Favicon xxx -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">

    <!-- xxx Favicon xxx -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">

    <!-- xxx Favicon xxx -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">

    <!-- Main Style CSSS -->
    <link href="{{ asset('assets/css/theme-plugins.min.css')}}" rel="stylesheet">
    <!-- Main Theme CSS -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Responsive Theme CSS -->
    <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    @include('shared.pageloader')
    @include('shared.header')
    <!-- Main Body Content Start -->
    <main id="body-content" style="overflow: initial;">
        @yield('content')
    </main>
    @include('shared.footer')
    <!-- Main Body Content Start -->
    <!-- Request Modal -->
    <div class="video-box">
        <!-- close-video -->
        <div class="close-video">
            <i class="icofont-close-line"></i>
        </div><!-- /close-video -->
    </div><!-- /video-box -->
    <!-- Back To Top Start -->
    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
    <!-- Back To Top End -->

    <!-- xxx Style Switcher xxx -->

    <!-- xxx End xxx -->

    <!-- Jquery Library JS -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme-plugins.min.js')}}"></script>
    <script src="{{ asset('assets/twitter/jquery.tweet.js')}}"></script>

    <!-- JQuery Map Plugin -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.gmap.min.js')}}"></script>
    <!-- Theme Custom FIle -->
    <script src="{{ asset('assets/js/site-custom.js')}}"></script>


    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

    <script type="text/javascript">
        var tpj = jQuery;

        var revapi1078;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1078_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1078_1");
            } else {
                revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            //tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            style: 'hades',
                            tmp: '<span class="tp-bullet-image"></span>',
                            enable: false,
                            hide_onmobile: true,
                            hide_under: 600,
                            //style:"metis",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [1000, 700, 600, 500],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                    },
                    shadow: 0,
                    spinner: 'spinner2',
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    @yield('script')
</body>

</html>
