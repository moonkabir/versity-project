@extends('admin.master')
@section('page_title')
    SBPGC CSE DEPT. Admin Panel Faculty Member
@endsection
@section('faculty_menu_open')menu-is-opening menu-open @endsection
@section('faculty_menu_active')active @endsection
@section('add_faculty_member_menu_active')active @endsection
@section('admin_panel_section')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Faculty Member</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Faculty Member</li>
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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header d-flex justify-content-between">
                                <h3 class="card-title">Faculty Member</h3>
                            </div>
                            <form id="add_faculty_member_form" method="post" action="{{route('admin.add_faculty_member_post')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Member Name" required>
                                    </div>                  
                                    <div class="form-group" id="contact_number">
                                        <label for="contact_number">Phone Number</label>
                                        <input type="text" class="form-control" name="contact_number" placeholder="Phone Number">
                                    </div>                  
                                    <div class="form-group" id="designation">
                                        <label for="designation">Designation</label>
                                        <input type="text" class="form-control" name="designation" placeholder="Member Designation">
                                    </div>                  
                                    <div class="form-group" id="email">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Member Email">
                                    </div> 
                                    <div class="form-group" id="description">
                                        <label for="description">Description</label>
                                        <textarea class="form-control ckeditor" name="description" cols="30" rows="10"></textarea>
                                    </div>                  
                                    <div class="form-group">
                                        <label for="permanent_status">Permanent Status</label>                    
                                        <select name="permanent_status" id="status" class="form-control" required>
                                            <option value="Member">Member</option>
                                            <option value="Guest">Guest</option>
                                            <option value="Staff">Staff</option>
                                        </select>
                                    </div>                 
                                    <div class="form-group d-none" id="institution">
                                        <label for="institution">Institution</label>
                                        <input type="text" class="form-control" name="institution" placeholder="institution">
                                    </div>
                                    <div class="form-group"  id="image_file">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" size="40" class="form-control" id="image">
                                    </div> 
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Member</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('self_javascript')
    <script>
        function validateNumber(e) {
            const pattern = /^[0-9]$/;
            return pattern.test(e.key);
        }
        $("#status").change(function(){
            var status = $("#status").val();
            if(status == "Guest"){
                $("#image_file").addClass("d-none");
                $("#institution").removeClass("d-none");
            }else if(status == "Staff"){
                $("#image_file").addClass("d-none");
            }else{
                $("#image_file").removeClass("d-none");
            }
        });
    </script>
@endsection