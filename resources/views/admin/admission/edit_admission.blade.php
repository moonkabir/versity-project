@extends('admin.master')
@section('page_title')
    SBPGC CSE DEPT. Admin Panel Admission
@endsection
@section('admission_menu_open')menu-is-opening menu-open @endsection
@section('admission_menu_active')active @endsection
@section('manage_admission_menu_active')active @endsection
@section('admin_panel_section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Admission</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Admission</li>
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
                                <h3 class="card-title">Edit Admission</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{route('admin.edit_admission_post')}}"  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Section Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required value="{{$edit_data->title}}">
                                        <input type="hidden" id="id" name="id" value="{{$edit_data->id}}">
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control ckeditor" name="description" id="description" cols="30" rows="10" value="{{$edit_data->description}}">{{$edit_data->description}}</textarea>
                                    </div>                                    
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
        @section('self_javascript')
        <!-- Page specific script -->
        <script>
        $('.addfiles').on('click', function() {
        $('#fileupload').click();
        return false;
        });
        function getFiles(event) {
        console.log(event.target.files);
        console.log(event.target.files[0].name);
        $("#showUrl").val(event.target.files[0].name);
        }
        function validateNumber(e) {
        const pattern = /^[0-9]$/;
        return pattern.test(e.key )
        }
        </script>
        @endsection
    </body>
</html>