<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Magsam Resources Co.Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('admin/assets/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assets/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon-16x16.png')}}">
    <!-- Bootstrap Css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('custom_css')

</head>
@include('shared.admin-top-menu')


<body data-sidebar="dark">
    @include('shared.admin-side-menu')
    <!--End pagewrapper-->
    @yield('content')
    @include('shared.admin-footer')

    @yield('script')
    <!-- JAVASCRIPT -->
    <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('admin/assets/js/pages/datatables.init.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
</body>

</html>
