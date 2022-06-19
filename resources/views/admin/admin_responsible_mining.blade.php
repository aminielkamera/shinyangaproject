@extends('layouts.admin-main')

@section('custom_css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
<link href="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
<link href="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Responsible Mining images upload and descriptions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Sustainability</a></li>
                                <li class="breadcrumb-item active">Responsible Mining Images Upload</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
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
            <!-- end page title -->
            <form method="POST" action="{{  url('admin/responsible/mining')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <div class="file-loading">
                                            <input id="file-1" type="file" name="image_Name" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" data-theme="fas">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <input class="form-control form-control-sm" type="text" placeholder="Title One" name="titles[]">
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control form-control-lg" type="text" placeholder="Descriptions One" name="descriptions[]"></textarea>
                                </div>
                                <div class="mb-4">
                                    <input class="form-control form-control-sm" type="text" placeholder="Title Two" name="titles[]">
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control form-control-lg" type="text" placeholder="Descriptions Two" name="descriptions[]"></textarea>
                                </div>
                                <div class="mb-4">
                                    <input class="form-control form-control-sm" type="text" placeholder="Title Three" name="titles[]">
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control form-control-lg" type="text" placeholder="Descriptions Three" name="descriptions[]"></textarea>
                                </div>
                                <div class="mb-4">
                                    <input class="form-control form-control-sm" type="text" placeholder="Title Four" name="titles[]">
                                </div>
                                <div>
                                    <textarea class="form-control form-control-lg" type="text" placeholder="Descriptions Four" name="descriptions[]"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1 mb-3">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Send Files</button>
                </div>
            </form>


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- END layout-wrapper -->
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/js/plugins/piexif.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/js/fileinput.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/js/locales/fr.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/js/locales/es.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/themes/gly/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/themes/fas/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/themes/explorer-fas/theme.js')}}" type="text/javascript"></script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
<script>
    $("#file-1").fileinput({
        theme: 'fas',
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions: ["jpg", "jpeg", "gif", "png", "pdf"],
        overwriteInitial: false,
        dropZoneEnabled: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
</script>
@endsection
