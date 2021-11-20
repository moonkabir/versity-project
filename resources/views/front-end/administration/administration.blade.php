@extends('front-end.master')
@section('administration_menu_active','active')
@section('front_end_content')
    <div class="container administration">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-12 col-md-4">
                <div class="widget-item"> 
                    <div>
                        <h2 class="welcome-text">Honorable Chairman</h2>
                        <img class="administration-image" src="{{asset('front-end/images/administration/chairman.jpg')}}" alt="Honorable Chairman">
                        <ul>
                            <li><strong>Dr. Md. Sajahan Miah</strong></li>
                            <li>Professor, Department of Philosophy</li>
                            <li>University of Dhaka</li>
                            <li>Email: </li>
                        </ul>
                    </div> 
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-12 -->
            <div class="col-12 col-md-4">
                <div class="widget-item"> 
                    <div>
                        <h2 class="welcome-text">Honorable Principal</h2>
                        <img class="administration-image" src="{{asset('front-end/images/administration/principal.jpg')}}" alt="Honorable Principal">
                        <ul>
                            <li><strong>Professor Md. Abdur Rahman</strong></li>
                            <li>Principal  (2015 – till now)</li>
                            <li>Department of Marketing</li>
                            <li>Email: principal@sbpgc.edu.bd</li>
                        </ul>
                    </div> 
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-12 -->
            <div class="col-12 col-md-4">
                <div class="widget-item"> 
                    <div>
                        <h2 class="welcome-text">Exam Controller</h2>
                        <img class="administration-image" src="{{asset('front-end/images/administration/Exam-controller.jpg')}}" alt="Exam Controller">
                        <ul>
                            <li><strong>Jonab Biplobi Shikha</strong></li>
                            <li>Associate Professor, Department of Math.</li>
                            <li>B.Sc (Hons.), M.Sc in Mathematics</li>
                            <li>Email: exam_controller@sbpgc.edu.bd</li>
                        </ul>
                    </div> 
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-12 -->
            <div class="col-12 col-md-6">
                <div class="widget-item"> 
                    <div>
                        <h2 class="welcome-text">CSE Department Administrative Officer</h2>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Amita Chakraborty</td>
                                    <td>01798598862, 01798598862</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mohammad. Selim</td>
                                    <td>01716502577</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ripon Fakir</td>
                                    <td>01756951332</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Zannat Afroz Prokriti</td>
                                    <td>01882069549</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Shamima Nasrin Daisy</td>
                                    <td>01882069533, 01718299456</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-12 -->
            <div class="col-12 col-md-6">
                <div class="widget-item"> 
                    <div>
                        <h2 class="welcome-text">Other Administrative Officer</h2>
                        <ul>
                            <li>Md. Saiful Islam, Office Asst., SBPGC</li>
                            <li>A.T.M Sayedullah, Computer Operator, SBPGC</li>
                            <li>Mr. Tapan Jati Kar, Office Asst., College Office</li>
                            <li>Md. Firoz Elahi, Office Asst., College Office</li>
                            <li>Mr. Shamim Hossain,  Office Asst., College Office</li>
                            <li>Mr. Md. Nagir Uddin Ahmed, Asst. A/C, College Office</li>
                            <li>Md. Farhad Alam Mamun, Office Asst. & Computer Operator, A/C Office</li>
                            <li>Md. Siddikur Rahman Miah, Office Asst., Principal Office</li>
                            <li>Md. Fazlur Rahman, Head Asst., SBPGC</li>
                            <li>Md. Fazlur Rahman, Head Asst., SBPGC</li>
                        </ul>
                    </div> 
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-12 -->
        </div>
    </div>
@endsection