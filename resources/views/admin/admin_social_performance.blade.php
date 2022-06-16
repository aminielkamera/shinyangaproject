@extends('layouts.admin-main')

@section('content')
<link href="{{asset('admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .upload-box {
        border: 1px dashed #b1becc;
        background: #F0F4F5;
        border-radius: 4px;
        padding: 50px 0 20px;
        text-align: center;
        text-wordwrap: true;
    }
    .dz-clickable {
	border: 1px dashed #b1becc;
	background: #F0F4F5;
	border-radius: 4px;
	padding: 50px 0 20px;
	text-align: center
}
.dz-sm {
	padding: 40px 0 20px
}
.dz-message {
	padding-bottom: 30px
}
.dz-message span {
	display: block;
	color: rgba(117, 134, 152, 0.6)
}
.dz-message-text {
	font-size: 13px
}
.dz-message-or {
	font-size: 16px;
	margin-bottom: 4px;
	text-transform: uppercase
}
.dz-sm .dz-message {
	padding-bottom: 20px
}
.dz-preview {
	margin-top: 20px;
	margin-left: 10px;
	margin-right: 10px;
	position: relative;
	width: 120px;
	display: inline-block
}
.dz-image img {
	border-radius: 4px;
	border: 1px solid #d3e0f3
}
.dz-filename {
	font-size: 13px
}
.dz-progress {
	opacity: 1;
	z-index: 1000;
	pointer-events: none;
	position: absolute;
	height: 10px;
	top: 55px;
	left: 50%;
	width: 80px;
	transform: translateX(-50%);
	background: rgba(255, 255, 255, 0.9);
	border-radius: 5px;
	overflow: hidden;
	transition: all .4s
}
.dz-complete .dz-progress {
	opacity: 0
}
.dz-upload {
	background: #333;
	position: absolute;
	top: 0;
	left: 0;
	width: 0;
	transition: all .3s ease-in-out
}
.dz-error-message, .dz-success-message {
	font-size: 13px
}
.dz-error-mark, .dz-success-mark {
	position: absolute;
	top: 40px;
	left: 50%;
	transform: translateX(-50%);
	display: none
}
.dz-error-mark svg, .dz-success-mark svg {
	height: 40px !important;
	width: 40px !important
}
.dz-error-mark svg g, .dz-success-mark svg g {
	stroke-opacity: .7;
	stroke-width: 2
}
.dz-error-message {
	color: #ff6868
}
.dz-error-mark g {
	stroke: rgba(255, 104, 104, 0.7) !important
}
.dz-error .dz-error-mark {
	display: block
}
.dz-success-message {
	color: #00d285
}
.dz-success-mark g {
	stroke: rgba(0, 210, 133, 0.7) !important
}
.dz-success .dz-success-mark {
	display: block
}
li{
    list-style: none;
    padding-top: 10px;
}
</style>
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
                        <h4 class="mb-0 font-size-18">Social Performance images upload and descriptions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Sustainability</a></li>
                                <li class="breadcrumb-item active">Social Performance Images Upload</li>
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
            <form method="POST" action="{{action('AdminController@submitSocialPerformance')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="mb-4">
                                        <div class="upload-box">
                                            <div class="document_one " id="proof-of-payment">
                                                <div class="dz-message text-wrap" data-dz-message="">
                                                    <span class="dz-message-text">Drag and drop file</span>
                                                    <span><small>Main Images here</small></span>
                                                    <span class="dz-message-or">or</span>
                                                    <!-- <input class="fileElem form-control form-control-lg" name="proof" style="display:none" accept="image/pdf*" id="formFileLg" type="file" /> -->
                                                    <input type="file" class="fileElem" id="fileElem" name="image_Name[]" accept="image/pdf*" style="display:none">

                                                    <a type="button" class="fileSelect white btn btn-primary" id="fileSelect">Select</a>

                                                    <div class="fileList center" id="fileList">

                                                    </div>
                                                </div>
                                            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
<script src="{{asset('admin/assets/libs/dropzone/min/dropzone.js')}}"></script>
<script src="{{asset('admin/assets/libs/dropzone/min/._dropzone.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/dropzone/min/dropzone-amd-module.js')}}"></script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
<script>
    const fileSelect = document.querySelector('.fileSelect'),
        fileElem = document.querySelector('.fileElem'),
        fileList = document.querySelector('.fileList');



    fileSelect.addEventListener("click", function(e) {
        if (fileElem) {
            fileElem.click();
        }
        e.preventDefault(); // prevent navigation to "#"
    }, false);

    fileElem.addEventListener("change", handleFiles, false);

    function handleFiles() {
        fileList.innerHTML = "";
        const list = document.createElement("ul");
        fileList.appendChild(list);
        for (let i = 0; i < this.files.length; i++) {
            const li = document.createElement("li");
            list.appendChild(li);

            const img = document.createElement("img");
            img.src = URL.createObjectURL(this.files[i]);
            img.height = 70;
            img.onload = function() {
                URL.revokeObjectURL(this.src);
            }
            this.files[i].size;
            var decimals = 2;
            if (this.files[i].size === 0) return '0 Bytes';

            const k = 1024;
            const dm = decimals < 0 ? 0 : decimals;
            const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

            const a = Math.floor(Math.log(this.files[i].size) / Math.log(k));

            this.filesizes = parseFloat((this.files[i].size / Math.pow(k, a)).toFixed(dm)) + ' ' + sizes[a];
            li.appendChild(img);
            const info = document.createElement("span");
            info.innerHTML = this.files[i].name + "  " + this.filesizes;
            li.appendChild(info);
        }
    }
</script>
<script>
    const fileSelect1 = document.querySelector('.fileSelect1'),
        fileElem1 = document.querySelector('.fileElem1'),
        fileList1 = document.querySelector('.fileList1');



    fileSelect1.addEventListener("click", function(e) {
        if (fileElem1) {
            fileElem1.click();
        }
        e.preventDefault(); // prevent navigation to "#"
    }, false);

    fileElem1.addEventListener("change", handleFiles, false);

    function handleFiles() {
        fileList1.innerHTML = "";
        const list = document.createElement("ul");
        fileList1.appendChild(list);
        for (let i = 0; i < this.files.length; i++) {
            const li = document.createElement("li");
            list.appendChild(li);

            const img = document.createElement("img");
            img.src = URL.createObjectURL(this.files[i]);
            img.height = 70;
            img.onload = function() {
                URL.revokeObjectURL(this.src);
            }
            this.files[i].size;
            var decimals = 2;
            if (this.files[i].size === 0) return '0 Bytes';

            const k = 1024;
            const dm = decimals < 0 ? 0 : decimals;
            const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

            const a = Math.floor(Math.log(this.files[i].size) / Math.log(k));

            this.filesizes = parseFloat((this.files[i].size / Math.pow(k, a)).toFixed(dm)) + ' ' + sizes[a];
            li.appendChild(img);
            const info = document.createElement("span");
            info.innerHTML = this.files[i].name + "  " + this.filesizes;
            li.appendChild(info);
        }
    }
</script>
@endsection
