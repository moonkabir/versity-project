@extends('admin.master')
@section('page_title')
SBPGC CSE DEPT. Admin Panel About
@endsection
@section('about_menu_open')menu-is-opening menu-open @endsection
@section('about_menu_active')active @endsection
@section('admin_panel_section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
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
                                <h3 class="card-title">About</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="about_form" method="post" action="{{route('admin.about_post')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="page_title">About Page Title</label>
                                        <input type="text" class="form-control" name="page_title" value="{{$data[0]->page_title}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">About Page Description</label>
                                        <textarea class="form-control ckeditor" name="description" cols="30" rows="10">{{$data[0]->description}}</textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">                                    
                                    <input type="hidden" name="id" value="{{$data[0]->id}}">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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