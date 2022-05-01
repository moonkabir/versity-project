@extends('admin.master')
@section('page_title')
    SBPGC CSE DEPT. Admin Panel Faculty Chairman
@endsection
@section('faculty_menu_open')menu-is-opening menu-open @endsection
@section('faculty_menu_active')active @endsection
@section('add_faculty_chairman_menu_active')active @endsection
@section('admin_panel_section')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Faculty Chairman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Faculty Chairman</li>
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
                                <h3 class="card-title">Faculty Chairman</h3>
                            </div>
                            <form id="add_faculty_member_form" method="post" action="{{route('admin.add_faculty_chairman_post')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="member_id">Select Chairman</label>                    
                                        <select name="member_id" id="status" class="form-control" required>                                            
                                            <option>Select Member</option>
                                            @foreach($member_data as $member)
                                                <option value="{{$member->id}}">{{$member->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>                   
                                    <div class="form-group">
                                        <label for="status">Status</label>                    
                                        <select name="status" class="form-control" required>                                            
                                            <option>Select Status</option>
                                            <option value="Current-Chairman">Current Chairman</option>
                                            <option value="Ex-Chairman">Ex-Chairman</option>
                                        </select>
                                    </div>                                  
                                    <div class="form-group">
                                        <label for="chairman_speech">Chairman Speech</label>
                                        <textarea class="form-control ckeditor" name="chairman_speech" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <div class="input-group date" id="start_date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#start_date" name="start_date"/>
                                            <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>                               
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>                                        
                                        <div class="input-group date" id="end_date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#end_date" name="end_date"/>
                                            <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
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