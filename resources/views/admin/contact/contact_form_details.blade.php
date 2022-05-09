@extends('admin.master')
@section('page_title')
SBPGC CSE DEPT. Admin Panel contact
@endsection
@section('contact_form_menu_open')menu-is-opening menu-open @endsection
@section('contact_form_menu_active')active @endsection
@section('admin_panel_section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact Form Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contact Form Details</li>
                    </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        @if (\Session::has('Emessage'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{!! \Session::get('Emessage') !!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header d-flex justify-content-between">
                                <h3 class="card-title">Contact Form Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->                               
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="page_title">Name:</label> {{$contact_form_data[0]->name}}
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Email:</label> {{$contact_form_data[0]->email}}
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Phone:</label> {{$contact_form_data[0]->phone}}
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Message:</label> {{$contact_form_data[0]->message}}
                                    </div>                                    
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @endsection
    </body>
</html>