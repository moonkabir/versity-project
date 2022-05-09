@extends('admin.master')
@section('page_title')
SBPGC CSE DEPT. Admin Panel contact
@endsection
@section('contact_menu_open')menu-is-opening menu-open @endsection
@section('contact_menu_active')active @endsection
@section('admin_panel_section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>contact</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">contact</li>
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
                                <h3 class="card-title">contact</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="about_form" method="post" action="{{route('admin.contact_post')}}">
                                @csrf
                                
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="page_title">Phone 1</label>
                                        <input type="tel" class="form-control" name="PHONE1" value="{{$data[0]->PHONE1}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Phone 2</label>
                                        <input type="tel" class="form-control" name="PHONE2" value="{{$data[0]->PHONE2}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Telephone 1</label>
                                        <input type="tel" class="form-control" name="TELEPHONE1" value="{{$data[0]->TELEPHONE1}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Telephone 2</label>
                                        <input type="tel" class="form-control" name="TELEPHONE2" value="{{$data[0]->TELEPHONE2}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Email</label>
                                        <input type="email" class="form-control" name="EMAIL" value="{{$data[0]->EMAIL}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Address</label>
                                        <input type="text" class="form-control" name="ADDRESS" value="{{$data[0]->ADDRESS}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" value="{{$data[0]->facebook}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" value="{{$data[0]->twitter}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">YouTube</label>
                                        <input type="text" class="form-control" name="youtube" value="{{$data[0]->youtube}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="page_title">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" value="{{$data[0]->instagram}}" >
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