@extends('admin.master')
@section('page_title')
SBPGC CSE DEPT. Admin Panel Faculty Chairman
@endsection
@section('faculty_menu_open')menu-is-opening menu-open @endsection
@section('faculty_menu_active')active @endsection
@section('manage_faculty_chairman_menu_active')active @endsection
@section('admin_panel_section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Faculty Chairman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Faculty Chairman</li>
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
                                <h3 class="card-title">Edit Faculty Chairman</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="edit_faculty_member_form" method="post" action="{{route('admin.edit_faculty_chairman_post')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="course_code">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required value="{{$member_data->name}}">
                                        <input type="hidden" id="id" name="id" value="{{$edit_data->id}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="status">Permanent Status</label>
                                        <select name="status" class="form-control" required>                                            
                                            <option value="Current-Chairman" <?php if($edit_data->status == "Chairman")echo "selected"; ?>>Current Chairman</option>
                                            <option value="Ex-Chairman" <?php if($edit_data->status == "Chairman")echo "selected"; ?>>Ex-Chairman</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="chairman_speech">Chairman Speech</label>
                                        <textarea class="form-control ckeditor" name="chairman_speech" cols="30" rows="10" value="{{$edit_data->chairman_speech}}">{{$edit_data->chairman_speech}}</textarea>
                                    </div>                              
                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <div class="input-group date" id="start_date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#start_date" name="start_date" value="{{$edit_data->start_date}}"/>
                                            <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>                               
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>                                        
                                        <div class="input-group date" id="end_date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#end_date" name="end_date" value="{{$edit_data->end_date}}"/>
                                            <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
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
        $(function () {
            $('#end_date').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
            $('#start_date').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
        });
        </script>
        @endsection
    </body>
</html>