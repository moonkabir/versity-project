@extends('front-end.master')
@section('faculty_menu_active','active')
@section('front_end_content')
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="widget-item">
                            <h2 class="welcome-text">HEAD OF CSE DEPARTMENT</h2>
                            <img class="w-30 mb-2" src="{{asset('front-end/images/prof/prof3.jpg') }}" alt="Profesor Name">
                            <p class="admission-page-content">
                                Mohammad. Selim <br>
                                Chairman and Assistant Professor<br>
                                Masters in CSE, B.Sc.(Hons) in CSE, SBPGC<br>
                                Email: chairman.cse@sbpgc.edu.bd
                            </p>
                        </div> 
                        <div class="widget-item">
                            <h2 class="welcome-text">FACULTY MEMBERS OF CSE DEPARTMENT</h2>
                            <table class="table table-hover faculty-table">		
                                <tbody>
                                    <tr> 
                                        <td>Name & Designation</td> 
                                        <td>Email</td> 
                                        <td>Image</td>
                                        <td>Profile Page</td> 
                                    </tr>      
                                    <tr> 
                                        <td>
                                            <b class="name">Shamima Nasrin Daisy</b><br>
                                            <span>
                                                Assistant Professor<br>
                                                Masters in CSE, <br>
                                                B.Sc.(Hons) in CSE, JU
                                            </span>
                                        </td> 
                                        <td>daisy.sbpgc@gmail.com</td> 
                                        <td><img class="w-100" src="{{asset('front-end/images/prof/prof1.jpg') }}" alt="Profesor Name"></td>
                                        <td><a href="#">View Profile</a> </td> 
                                    </tr>
                                    <tr> 
                                        <td>
                                            <b class="name">Amita Chakraborty</b><br>
                                            <span>
                                                Assistant Professor<br>
                                                PHD Researcher,<br>
                                                Masters in CSE and B.Sc.(Hons) in CSE, JU
                                            </span>
                                        </td> 
                                        <td>daisy.sbpgc@gmail.com</td> 
                                        <td>
                                            <img class="w-100" src="{{asset('front-end/images/prof/prof1.jpg') }}" alt="Profesor Name"></td>
                                        <td><a href="#">View Profile</a> </td> 
                                    </tr>
                                    <tr> 
                                    <tr> 
                                        <td>
                                            <b class="name">Zannat Afroz Prokriti</b><br>
                                            <span>
                                                Assistant Professor<br>
                                                Masters in CSE, <br>
                                                B.Sc.(Hons) in CSE, SBPGC
                                            </span>
                                        </td> 
                                        <td>daisy.sbpgc@gmail.com</td> 
                                        <td>
                                            <img class="w-100" src="{{asset('front-end/images/prof/prof1.jpg') }}" alt="Profesor Name"></td>
                                        <td><a href="#">View Profile</a> </td> 
                                    </tr>
                                    <tr> 
                                        <td>
                                            <b class="name">Ripon Fakir</b><br>
                                            <span>
                                                Assistant Professor<br>
                                                Masters in CSE, <br>
                                                B.Sc.(Hons) in CSE, SBPGC
                                            </span>
                                        </td> 
                                        <td>daisy.sbpgc@gmail.com</td> 
                                        <td>
                                            <img class="w-100" src="{{asset('front-end/images/prof/prof3.jpg') }}" alt="Profesor Name"></td>
                                        <td><a href="#">View Profile</a> </td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="widget-item">
                            <h2 class="welcome-text">GUEST FACULTY MEMBERS OF CSE DEPARTMENT</h2>
                            <table class="table table-hover faculty-table">		
                                <tbody>
                                    <tr> 
                                        <td>Name</td> 
                                        <td>Designation</td> 
                                        <td>Institution</td>
                                    </tr>      
                                    <tr> 
                                        <td><b class="name">Dr. S.M. Mostafa Al Mamun</b></td> 
                                        <td>Professor</td> 
                                        <td>Dhaka University</td> 
                                    </tr>
                                    <tr> 
                                        <td><b class="name">Dr. Md. Habibur Rahman</b></td> 
                                        <td>Professor</td> 
                                        <td>Dhaka University</td> 
                                    </tr>
                                    <tr> 
                                        <td><b class="name">Dr. Pervez Sazzad</b></td> 
                                        <td>Professor</td> 
                                        <td>Dhaka University</td> 
                                    </tr>
                                    <tr> 
                                        <td><b class="name">Kajal Chandra Saha</b></td> 
                                        <td>Assistant Professor</td> 
                                        <td>Dhaka University</td> 
                                    </tr>
                                    <tr> 
                                        <td><b class="name">Haridas Kumar Das</b></td> 
                                        <td>Assistant Professor</td> 
                                        <td>Dhaka University</td> 
                                    </tr>
                                    <tr> 
                                        <td><b class="name">Md. Rayhanul Islam</b></td> 
                                        <td>Lecturer</td> 
                                        <td>Dhaka University</td> 
                                    </tr>
                                    <tr> 
                                        <td><b class="name">Tamal Adhikary</b></td> 
                                        <td>Lecturer</td> 
                                        <td>Dhaka University</td> 
                                    </tr>
                                    <tr> 
                                        <td><b class="name">Md. Mofijul Islam</b></td> 
                                        <td>Lecturer</td> 
                                        <td>Dhaka University</td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->             
            <div class="col-md-4">
                <div class="widget-item">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Latest Notice</h4>
                        <h4 class="widget-title"><a href="#">All Notice</a></h4>
                    </div> <!-- /.widget-main-title -->
                    <div class="widget-inner notice">
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html">Nelson Mandela Memorial Tribute</a></h5>
                                <p class="event-small-meta small-text">Cramton Auditorium 9:00 AM to 1:00 PM</p>
                            </div>
                        </div>
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html">OVADA Oxford Open</a></h5>
                                <p class="event-small-meta small-text">Posner Center 4:30 PM to 6:00 PM</p>
                            </div>
                        </div>
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html">OVADA Oxford Open</a></h5>
                                <p class="event-small-meta small-text">Posner Center 4:30 PM to 6:00 PM</p>
                            </div>
                        </div>
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html">OVADA Oxford Open</a></h5>
                                <p class="event-small-meta small-text">Posner Center 4:30 PM to 6:00 PM</p>
                            </div>
                        </div>
                        <div class="event-small-list clearfix">
                            <div class="calendar-small">
                                <span class="s-month">Jan</span>
                                <span class="s-date">24</span>
                            </div>
                            <div class="event-small-details">
                                <h5 class="event-small-title"><a href="event-single.html">Filming Objects And Sculpture</a></h5>
                                <p class="event-small-meta small-text">A70 Cyert Hall 12:00 PM to 1:00 PM</p>
                            </div>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-item -->
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
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery1.jpg" title="Gallery Tittle One">
                                    <img src="{{asset('front-end/images/gallery/gallery-small-thumb1.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery2.jpg" title="Gallery Tittle One">
                                    <img src="{{asset('front-end/images/gallery/gallery-small-thumb2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery3.jpg" title="Gallery Tittle One">
                                    <img src="{{asset('front-end/images/gallery/gallery-small-thumb3.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery4.jpg" title="Gallery Tittle One">
                                    <img src="{{asset('front-end/images/gallery/gallery-small-thumb4.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery5.jpg" title="Gallery Tittle One">
                                    <img src="{{asset('front-end/images/gallery/gallery-small-thumb5.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery6.jpg" title="Gallery Tittle One">
                                    <img src="{{asset('front-end/images/gallery/gallery-small-thumb6.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery7.jpg" title="Gallery Tittle One">
                                    <img src="{{asset('front-end/images/gallery/gallery-small-thumb7.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="images/gallery/gallery8.jpg" title="Gallery Tittle One">
                                    <img src="{{asset('front-end/images/gallery/gallery-small-thumb8.jpg') }}" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">One Minute Tour</h4>
                    </div>
                    <div class="widget-inner">                        
                        <div class="our-campus clearfix">
                            <video  width="100%" height="180" loop="true" autoplay="autoplay" controls muted>
                                <source src="{{asset('front-end/video/Query Builder Aggregates.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->
            </div> <!-- /.col-md-4 -->
        </div>
    </div>
@endsection