@extends('admin.master')
@section('page_title')
SBPGC CSE DEPT. Admin Panel Faculty Member
@endsection
@section('faculty_menu_open')menu-is-opening menu-open @endsection
@section('faculty_menu_active')active @endsection
@section('manage_faculty_member_menu_active')active @endsection
@section('admin_panel_section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Faculty Member</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Faculty Member</li>
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
                                <h3 class="card-title">Edit Faculty Member</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="edit_faculty_member_form" method="post" action="{{route('admin.edit_faculty_member_post')}}"  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="course_code">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required value="{{$edit_data[0]->name}}">
                                        <input type="hidden" id="id" name="id" value="{{$edit_data[0]->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_number">Phone Number</label>
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Phone Number" required value="{{$edit_data[0]->contact_number}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Member Designation" required value="{{$edit_data[0]->designation}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Member Email" required value="{{$edit_data[0]->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="permanent_status">Permanent Status</label>
                                        <select name="permanent_status" id="status" class="form-control" required>
                                            <option>Select Status</option>
                                            <option value="Member" <?php if($edit_data[0]->permanent_status == "Member")echo "selected"; ?> >Member</option>
                                            <option value="Guest" <?php if($edit_data[0]->permanent_status == "Guest")echo "selected"; ?> >Guest</option>
                                            <option value="Staff" <?php if($edit_data[0]->permanent_status == "Staff")echo "selected"; ?> >Staff</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control ckeditor" name="description" id="description" cols="30" rows="10" value="{{$edit_data[0]->description}}">{{$edit_data[0]->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="image" id="fileupload" onchange="getFiles(event)" style="display: none;">
                                        <div class="d-flex" style="border: 1px solid;">
                                            <button class="addfiles form-control" style="border: 0; width: 10%">Choose File:</button>
                                            <input type="text" value="{{$edit_data[0]->image}}" class="form-control addfiles" id="showUrl" style="border: 0; cursor: pointer;">
                                        </div>
                                        <img src="/{{$edit_data[0]->image}}" width="80" style="margin-top: 10px;">
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