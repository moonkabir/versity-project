@extends('front-end.master')
@section('index_menu_active','active')
@section('front_end_content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <marquee behavior="scroll" direction="left" scrollamount="5">
                    <a target="_blank" href="#">
                        <img src="{{asset('front-end/images/new-news.gif') }}">
                        NID না থাকা শিক্ষার্থীদের জন্মনিবন্ধন সনদের মাধ্যমে ভ্যাক্সিন গ্রহণের নির্দেশ জাতীয় বিশ্ববিদ্যালয়ের। লিংক- https://univac.ugc.gov.bd
                        <img src="{{asset('front-end/images/new-news.gif') }}" alt="new-news">
                    </a>  &nbsp; &nbsp; &nbsp; &nbsp; 					 		 
                    <a target="_blank" href="#">
                        <img src="{{asset('front-end/images/new-news.gif') }}">
                        NID না থাকা শিক্ষার্থীদের লিংক- https://univac.ugc.gov.bd
                        <img src="{{asset('front-end/images/new-news.gif') }}" alt="new-news">
                    </a>  &nbsp; &nbsp; &nbsp; &nbsp; 					 		 
                    <a target="_blank" href="#">
                        <img src="{{asset('front-end/images/new-news.gif') }}">
                        ভ্যাক্সিন গ্রহণের নির্দেশ জাতীয় বিশ্ববিদ্যালয়ের। লিংক- https://univac.ugc.gov.bd
                        <img src="{{asset('front-end/images/new-news.gif') }}" alt="new-news">
                    </a>  &nbsp; &nbsp; &nbsp; &nbsp; 					 		 
                </marquee>
            </div>
        </div>
    </div>
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
                            <h2 class="welcome-text">Welcome to Shaikh Burhanuddin CSE Department</h2>
                            <p><img class="univercity-image w-100" src="{{asset('front-end/images/cse_department.jpg') }}" alt="cse_department">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, adipisci, quibusdam, ad ab quisquam esse aspernatur exercitationem aliquam at fugit omnis vitae recusandae eveniet.Inventore, aliquam sequi nisi velit magnam accusamus reprehenderit nemo necessitatibus doloribus molestiae fugit repellat repudiandae dolor. Incidunt, nulla quidem illo suscipit nihil!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dolorem, fugiat, commodi totam accusantium illo incidunt quis eius eum iure et fugit voluptas atque ratione nobis sed omnis quod ipsa.Vivamus mattis nibh vitae dui egestas posuere. Maecenas a est at enim blandit interdum. Cras eget ipsum ac nunc tristique tincidunt sit amet nec quam. Vivamus sed suscipit enim, et dignissim tellus.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <!-- Show Latest Blog News -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Latest News</h4>
                                <h4 class="widget-title"><a href="#">All News</a></h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner latest_news">
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="blog-single.html"><img src="{{asset('front-end/images/blog/blog-small-thumb1.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="blog-single.html">Graduate Open Day at the Ruskin</a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                    </div>
                                </div> <!-- /.blog-list-post -->
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="blog-single.html"><img src="{{asset('front-end/images/blog/blog-small-thumb2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="blog-single.html">Visiting Artists: Giles Bailey</a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                    </div>
                                </div> <!-- /.blog-list-post -->
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="blog-single.html"><img src="{{asset('front-end/images/blog/blog-small-thumb3.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="blog-single.html">Workshop: Theories of the Image</a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                    </div>
                                </div> <!-- /.blog-list-post -->
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /col-md-6 -->
                    
                    <!-- Show Latest Events List -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Events</h4>
                                <h4 class="widget-title"><a href="#">All Events</a></h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner events">
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
                                        <h5 class="event-small-title"><a href="event-single.html">Filming Objects And Sculpture</a></h5>
                                        <p class="event-small-meta small-text">A70 Cyert Hall 12:00 PM to 1:00 PM</p>
                                    </div>
                                </div>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-6 -->
                    
                </div> <!-- /.row -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Chairman Sir Speech</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="our-campus clearfix">
                                    <p>
                                        <img src="{{asset('front-end/images/prof/prof3.jpg') }}" alt="chairman sir" class="chairman_speech">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil at quis praesentium impedit nisi magni, laudantium laborum quibusdam, quod unde, sunt ea cum non reprehenderit? Quam ducimus, pariatur dolorem consequatur porro inventore deserunt voluptates at nulla neque cumque, fuga magni delectus! Cupiditate, facilis tempora? Illo possimus fugit expedita magnam aperiam nisi ipsum maiores dolorum numquam, architecto officia facilis, vel nihil totam voluptates odio saepe quia eveniet dolore molestias accusantium? Magni minus voluptates doloribus dolorem cum quo mollitia ab molestiae, veniam reprehenderit soluta explicabo eos dignissimos blanditiis vitae non, labore quas similique numquam inventore nesciunt? Soluta eligendi maxime, laboriosam animi placeat sed. Ab mollitia obcaecati consectetur ut, at cumque vel eos earum tempora praesentium aliquid harum perferendis pariatur necessitatibus autem eligendi qui voluptate. Aperiam non saepe iste atque. Aperiam dolorem aliquid nam culpa, voluptate aut accusantium voluptas odio. Voluptate labore tempore deleniti sunt ab. Nostrum numquam amet, obcaecati ipsum sed labore vitae placeat at deleniti eum blanditiis, magni, inventore optio deserunt temporibus similique nisi impedit corporis! Dolorum, quae impedit neque, ex reprehenderit fugiat dignissimos alias enim accusamus eos molestias omnis commodi.
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->
            
            <!-- Here begin Sidebar -->
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
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Testimonial</h4>
                    </div>
                    <div class="widget-inner">
                        <div id="slider-testimonials">
                            <ul>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                            </ul>
                            <a class="prev fa fa-angle-left" href="#"></a>
                            <a class="next fa fa-angle-right" href="#"></a>
                        </div>
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
            </div>
        </div>
    </div>
@endsection