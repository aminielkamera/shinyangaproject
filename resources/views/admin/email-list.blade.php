@extends('layouts.admin-main')
@section('custom_css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
<link href="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
<link href="{{asset('admin/assets/libs/kartik-v-bootstrap-fileinput/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css" />

<!-- DataTables -->
<link href="{{ asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css')}}" />
<link href="{{ asset('admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css')}}" />

<!-- Responsive datatable examples -->
<link href="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css')}}" />
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Email List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                <li class="breadcrumb-item active">Contact Us Email List</li>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>


                                <tbody>
                                @php $x=1;@endphp
                                @foreach($emailData as $email)
                                <tr>
                                    <td>{{$x}}</td>
                                    <td>{{$email->name}}</td>
                                    <td>{{$email->email}}</td>
                                    <td >{{$email->subject}}</td>
                                    <td>{{$email->message}}</td>
                                    <td>{{date_format($email->created_at,'Y-m-d')}}</td>
                                </tr>
                                @php $x++; @endphp
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
</div>
@endsection
