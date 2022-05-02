@extends('admin.master')
@section('page_title')
    SBPGC CSE DEPT. Admin Panel Admission
@endsection
@section('admission_menu_open')menu-is-opening menu-open @endsection
@section('admission_menu_active')active @endsection
@section('add_admission_menu_active')active @endsection
@section('admin_panel_section')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admission</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admission</li>
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
                                <h3 class="card-title">Admission</h3>
                            </div>
                            <form id="add_faculty_member_form" method="post" action="{{route('admin.add_admission_post')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Section Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Section Title" required>
                                    </div>
                                    <div class="form-group" id="description">
                                        <label for="description">Description</label>
                                        <textarea class="form-control ckeditor" name="description"></textarea>
                                        {{-- <textarea class="ckeditor form-control" name="wysiwyg"></textarea> --}}
                                    </div>                
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Admission</button>
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
    </script>
@endsection