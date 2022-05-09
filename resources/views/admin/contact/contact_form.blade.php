@extends('admin.master')
@section('page_title')
SBPGC CSE DEPT. Admin Panel contact Form
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
                    <h1>Contact Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contact Form</li>
                    </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        @if (\Session::has('Smessage'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{!! \Session::get('Smessage') !!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
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
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach($contact_form_datas as $contact_form_data)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$contact_form_data->name}}</td>
                                            <td>{{$contact_form_data->email}}</td>
                                            <td>{{$contact_form_data->phone}}</td>
                                            {{-- <td>{{$contact_form_data->message}}</td> --}}
                                            <td>{{Str::limit($contact_form_data->message, 100, $end='.......')}}</td>
                                            <td><a href="{{ route('admin.contact_form_data_details', [ 'id'=> $contact_form_data->id ]) }}"><i class="fas fa-info"></i></a>|
                                                <a href="{{ route('admin.contact_form_data_delete', [ 'id'=> $contact_form_data->id ]) }}"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i += 1; ?>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
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
        <!-- DataTables  & Plugins -->
        <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <!-- Page specific script -->
        <script>
        $(function () {
        bsCustomFileInput.init();
        });
        $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
        });
        </script>
        @endsection
    </body>
</html>