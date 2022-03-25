@extends('admin.master')
@section('page_title')
SBPGC CSE DEPT. Admin Panel Academic syllabus
@endsection
@section('academic_menu_open')menu-is-opening menu-open @endsection
@section('academic_menu_active')active @endsection
@section('add_syllabus_menu_active')active @endsection
@section('admin_panel_section')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Syllabus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Syllabus</li>
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
                <h3 class="card-title">Add Syllabus</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="add_syllabus_form" method="post" action="{{route('add_syllabus_post')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="course_code">Course Code</label>
                    <input type="text" class="form-control" id="course_code" name="course_code" placeholder="Course code" required>
                  </div>
                  <div class="form-group">
                    <label for="course_title">Course Title</label>
                    <input type="text" class="form-control" id="course_title" name="course_title" placeholder="Course title" required>
                  </div>
                  <div class="form-group">
                    <label for="course_credit">Course Credit</label>
                    <input type="text" class="form-control" id="course_credit" name="course_credit" placeholder="Course credit" required onkeypress="return validateNumber(event)">
                  </div>
                  <div class="form-group">
                    <label for="semester">Course Semester</label>                    
                    <select name="semester" id="semester" class="form-control" required>
                      <option>Select Course Semester</option>
                      <option value="1st">1st Semester</option>
                      <option value="2nd">2nd Semester</option>
                      <option value="3rd">3rd Semester</option>
                      <option value="4th">4th Semester</option>
                      <option value="5th">5th Semester</option>
                      <option value="6th">6th Semester</option>
                      <option value="7th">7th Semester</option>
                      <option value="8th">8th Semester</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="degree">Course Degree</label>                    
                    <select name="degree" id="degree" class="form-control" required>
                      <option>Select Course Degree</option>
                      <option value="Hon's">Hon's</option>
                      <option value="Masters">Masters</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="status">Course Status</label>                    
                    <select name="status" id="status" class="form-control" required>
                      <option>Select Course Status</option>
                      <option value="old">Old</option>
                      <option value="new">New</option>
                    </select>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
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

@section('self_javascript')
<!-- Page specific script -->
<script>
// $(function () {
//   bsCustomFileInput.init();
// });
function validateNumber(e) {
    const pattern = /^[0-9]$/;
    return pattern.test(e.key )
}
</script>
@endsection
</body>
</html>
