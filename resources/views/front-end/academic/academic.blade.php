@extends('front-end.master')
@section('academic_menu_active','active')
@section('front_end_content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-slideshow">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{asset('front-end/images/slide1.jpg') }}" />
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">When a Doctor’s Visit Is a Guilt Trip</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('front-end/images/slide2.jpg') }}" />
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">Unlocking the scrolls of Herculaneum</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('front-end/images/slide3.jpg') }}" />
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">Corin Sworn wins Max Mara Art Prize</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </li>
                        </ul> <!-- /.slides -->
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 -->
            
            <div class="col-md-4">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Professors</h4>
                    </div>
                    <div class="widget-inner Professors">
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="{{asset('front-end/images/prof/prof1.jpg') }}" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Betty Hunt</h5>
                                <p class="small-text">Sed ut lectus ac lacus molestie posuere non tincidunt arcu.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="{{asset('front-end/images/prof/prof2.jpg') }}" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Victor Johns</h5>
                                <p class="small-text">Nullam sollicitudin libero ut ullamcorper pretium.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="{{asset('front-end/images/prof/prof3.jpg') }}" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Charles Conway</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="{{asset('front-end/images/prof/prof3.jpg') }}" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Charles Conway</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="{{asset('front-end/images/prof/prof3.jpg') }}" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Charles Conway</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="{{asset('front-end/images/prof/prof3.jpg') }}" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Charles Conway</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->
            </div> <!-- /.col-md-4 -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            <h2 class="welcome-text">Bachelor Degree in Computer Science and Engineering</h2>
                            <p>The objective of the 4 years Hons. degree in Computer Science and Engineering is to enable the students to be competent computer hardware and software professionals as well as to perform further studies. National University pursues a policy of continuous updating and improving the new four-year course curricula having 8(eight) semester carrying total credits 145 for Bachelor Degree in Computer Science and Engineering (B.Sc.Engg).</p>
                            <h2 class="welcome-text">New Syllabus</h2>
                            {{-- <ul id="tabs2" class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#Semester1" data-toggle="tab">Semester1</a></li>
                                <li><a href="#Semester2" data-toggle="tab">Semester2</a></li>
                                <li><a href="#Semester3" data-toggle="tab">Semester3</a></li>
                                <li><a href="#Semester4" data-toggle="tab">Semester4</a></li>
                                <li><a href="#Semester5" data-toggle="tab">Semester5</a></li>
                                <li><a href="#Semester6" data-toggle="tab">Semester6</a></li>
                                <li><a href="#Semester7" data-toggle="tab">Semester7</a></li>
                                <li><a href="#Semester8" data-toggle="tab">Semester8</a></li>
                            </ul>
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane fade in active" id="Semester1">
                                    <p>Semester1</p>
                                </div>
                                <div class="tab-pane fade" id="Semester2">
                                    <p>Semester2</p>
                                </div>
                                <div class="tab-pane fade" id="Semester3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester5">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                            </div> --}}
                            <h2 class="welcome-text">Old Syllabus</h2>
                            <ul id="tabs2" class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#Semester1" data-toggle="tab">Semester1</a></li>
                                <li><a href="#Semester2" data-toggle="tab">Semester2</a></li>
                                <li><a href="#Semester3" data-toggle="tab">Semester3</a></li>
                                <li><a href="#Semester4" data-toggle="tab">Semester4</a></li>
                                <li><a href="#Semester5" data-toggle="tab">Semester5</a></li>
                                <li><a href="#Semester6" data-toggle="tab">Semester6</a></li>
                                <li><a href="#Semester7" data-toggle="tab">Semester7</a></li>
                                <li><a href="#Semester8" data-toggle="tab">Semester8</a></li>
                            </ul>
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane fade in active" id="Semester1">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Course Code</th>
                                                <th scope="col">Course Title</th>
                                                <th scope="col">Per Credit Fee</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>CSE-111</td>
                                                <td>Introduction to Computer System</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>CSE-112</td>
                                                <td>Programming Language</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>CSE-113</td>
                                                <td>Programming Language Practical</td>
                                                <td>1.5</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>CSE-114</td>
                                                <td>Physics (Electricity and Magnetism)</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>CSE-115</td>
                                                <td>Differential Calculus Ordinate Geometry</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>CSE-116</td>
                                                <td>English</td>
                                                <td>3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="Semester2">
                                    <p>Semester2</p>
                                </div>
                                <div class="tab-pane fade" id="Semester3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester5">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                                <div class="tab-pane fade" id="Semester8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, dolore, quae, sint aut fuga impedit enim itaque accusantium voluptas neque esse ad voluptatibus quidem maxime quos vero illo officiis deleniti.</p>
                                </div>
                            </div>
                            <h2 class="welcome-text">Master in Computer Science & Engineering (MCS)</h2>
                            <p>The objective of the one year M.Sc in Computers Science & Engineering, is to expert the students to be competent computer hardware and software professionals as well as to perform further studies.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-12 -->
        </div>
    </div>
@endsection