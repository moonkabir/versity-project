@extends('admin.master')
@section('page_title')
SBPGC CSE DEPT. Admin Panel Academic syllabus
@endsection
@section('academic_menu_open')menu-is-opening menu-open @endsection
@section('academic_menu_active')active @endsection
@section('manage_syllabus_menu_active')active @endsection
@section('admin_panel_section')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Syllabus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Syllabus</li>
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
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Course Credit</th>
                    <th>Semester</th>
                    <th>Degree</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($check_datas as $check_data)
                    <tr>
                      <td>{{$check_data->course_code}}</td>
                      <td>{{$check_data->course_title}}</td>
                      <td>{{$check_data->course_credit}}</td>
                      <td>{{$check_data->semester}} Semester</td>
                      <td>{{$check_data->degree}}</td>
                      <td>{{$check_data->status}} Syllabus</td>
                      <td>
                        <a href="{{ route('edit_syllabus', [ 'id'=> $check_data->id ]) }}"><i class="fas fa-edit"></i></a>  | 
                        <a href="{{ route('syllabus_delete', [ 'id'=> $check_data->id ]) }}"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Course Credit</th>
                    <th>Semester</th>
                    <th>Degree</th>
                    <th>Status</th>
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
