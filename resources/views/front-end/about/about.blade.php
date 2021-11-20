@extends('front-end.master')
@section('about_menu_active','active')
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
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            <h2 class="welcome-text">About Shaikh Burhanuddin CSE Department</h2>
                            <p>Computer Science & Engineering department established in 1996. Founder Principal of this department. was Kazi Faruk Ahmed (Treasurer, National University). Founder Chairman was Mr. Pran Krisno Das and Founder Co-Chairman was Md. Nazrul Islam. more than 2000 students (in 21 batches) completed Graduation Degree with good result from this Department. There are 06 (Six) number of permanent teacher in this CSE department. Other guest teachers come from BUET, University of Dhaka and Jahangir Nagar University. CSE department has its own library full of rich books for all students of CSE. Also have two modern Software lab and a Electronic & Digital Lab. CSE Department has a well-stocked Library & Learning Center with silent study space.</p>
                            <h4>Chairman</h4>
                            <ul>
                                <li>Mohammad. Selim</li>
                                <li>Chairman and Assistant Professor</li>
                                <li>Masters in CSE, B.Sc.(Hons) in CSE, SBPGC</li>
                                <li>Email: chairman.cse@sbpgc.edu.bd</li>
                            </ul>
                            <h4>Ex- Chairman</h4>
                            <ul>
                                <li>Mrs. Amita Chakrabarty, 2016-September, 2019.</li>
                                <li>Md. Nazrul Islam, 2014-2016</li>
                                <li>Mrs. Amita Chakrabarty, 2009-2014</li>
                                <li>Mrs. Biplabi Shikha, October, 2007 - July, 2009</li>
                                <li>Mr. Pran Krishna Das, 1996 - September, 2007</li>
                            </ul>
                            <h4>Guest Faculty Members</h4>
                            <ul>
                                <li>Dr. S.M. Mostafa Al Mamun, Professor, Dhaka University</li>
                                <li>Dr. Md. Habibur Rahman, Professor, Dhaka University</li>
                                <li>Dr. Pervez Sazzad, Professor, Dhaka University</li>
                                <li>Kajal Chandra Saha, Assistant Professor, Dhaka University</li>
                                <li>Haridas Kumar Das, Assistant Professor, Dhaka University</li>
                                <li>Md. Rayhanul Islam, Lecturer, Dhaka University</li>
                                <li>Tamal Adhikary, Lecturer, Dhaka University</li>
                                <li>Md. Mofijul Islam, Lecturer, Dhaka University</li>
                            </ul>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
            <!-- Here begin Sidebar -->
            <div class="col-md-4">
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
            </div>
        </div>
    </div>
@endsection