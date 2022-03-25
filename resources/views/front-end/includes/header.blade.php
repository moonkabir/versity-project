<div class="responsive-navigation visible-sm visible-xs">
    <a href="#" class="menu-toggle-btn">
        <i class="fa fa-bars"></i>
    </a>
    <div class="responsive_menu">
        <ul class="main_menu">
            <li class="@yield('index_menu_active')"><a href="/">Home</a></li>
            <li class="@yield('about_menu_active')"><a href="/about">About</a></li>
            <li class="@yield('administration_menu_active')"><a href="/administration">Administration</a></li>
            <li class="@yield('academic_menu_active')"><a href="/academic">Academic</a></li>
            <li class="@yield('admission_menu_active')"><a href="/admission">Admission</a></li>
            <li class="@yield('faculty_menu_active')"><a href="/faculty">Faculty</a></li>
            <li class="@yield('result_menu_active')"><a href="/result">Results</a></li>
            <li class="@yield('activities_menu_active')"><a href="/activities">Activities</a></li>
            <li class="@yield('gallery_menu_active')"><a>Gallery</a>
                <ul class="sub-menu">
                    <li class="@yield('video_gallery_menu_active')"><a href="/video-gallery">Video Gallery</a></li>
                    <li class="@yield('image_gallery_menu_active')"><a href="/image-gallery">Image Gallery</a></li>
                </ul>
            </li>
            <li><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="archives.html">Archives</a></li>
                </ul>
            </li>
            <li class="@yield('contact_menu_active')"><a href="/contact">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->
</div> <!-- /responsive_navigation -->
<header class="site-header">
    <div class="container top-bar">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('front-end/images/University_logo.png') }}" alt="University_logo" class="w-100">
            </div> <!-- /.header-left -->
            <div class="col-md-6 top-bar-right">
                <ul class="small-links">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="#" class="apply_cse blink">Apply For CSE Department</a></li>
                </ul>
                <div class="search-form">
                    <form name="search_form" method="get" action="#" class="search_form">
                        <input type="text" name="s" placeholder="Search the site..." title="Search the site..." class="field_search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div> <!-- /.header-right -->
        </div>
    </div> <!-- /.container -->
    <div class="nav-bar-main" role="navigation">
        <div class="container">
            <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                <ul class="main-menu sf-menu">
                    <li class="@yield('index_menu_active')"><a href="/">Home</a></li>
                    <li class="@yield('about_menu_active')"><a href="/about">About</a></li>
                    <li class="@yield('administration_menu_active')"><a href="/administration">Administration</a></li>
                    <li class="@yield('academic_menu_active')"><a href="/academic">Academic</a></li>
                    <li class="@yield('admission_menu_active')"><a href="/admission">Admission</a></li>
                    <li class="@yield('faculty_menu_active')"><a href="/faculty">Faculty</a></li>
                    {{-- <li class="@yield('result_menu_active')"><a href="/result">Results</a></li> --}}
                    {{-- <li class="@yield('activities_menu_active')"><a href="/activities">Activities</a></li> --}}
                    <li class="@yield('gallery_menu_active')"><a>Gallery</a>
                        <ul class="sub-menu">
                            <li class="@yield('video_gallery_menu_active')"><a href="/video-gallery">Video Gallery</a></li>
                            <li class="@yield('image_gallery_menu_active')"><a href="/image-gallery">Image Gallery</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="archives.html">Archives</a></li>
                        </ul>
                    </li> --}}
                    <li class="@yield('contact_menu_active')"><a href="/contact">Contact</a></li>
                </ul> <!-- /.main-menu -->
            </nav> <!-- /.main-navigation -->
        </div> <!-- /.container -->
    </div> <!-- /.nav-bar-main -->
</header> <!-- /.site-header -->