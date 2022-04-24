@extends('front-end.master')
@section('result_menu_active','active')
@section('extra_css')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css" rel="stylesheet" media="screen">
@endsection
@section('front_end_content')
<section class="student_results">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Students result</h1>
                <div class="result_table">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Reg.No</th>
                                <th>Session</th>
                                <th>Exam</th>
                                <th>Result (CGPA)</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=1; $i<20; $i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td>Md.Akhteruzzaman Moon</td>
                                <td>16502000801</td>
                                <td>2016/17</td>
                                <td>6th semester 2020</td>
                                <td>4.00</td>
                                <td>Passed</td>
                                <td>See details</td>
                            </tr>
                            @endfor
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Reg.No</th>
                                <th>Session</th>
                                <th>Exam</th>
                                <th>Result(CGPA)</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('extra_js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable( {
                // dom: 'Bfrtip',
                // buttons: [
                    // 'excel', 'pdf', 'print'
                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                // ],
                responsive: true
            } );
        });
    </script>
@endsection
