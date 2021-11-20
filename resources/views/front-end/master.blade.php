<!DOCTYPE html>
<head>
    <title>Welcome to CSE Department</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Shaikh Burhanuddin Post Graduate College CSE Department">
    <meta name="author" content="Md.Akhteruzzaman Moon,Majharul Islam Papon,Md.Akib Rahman">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
    <!-- CSS Bootstrap & Custom -->
    <link href="{{asset('front-end/bootstrap/css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('front-end/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('front-end/css/animate.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('front-end/css/tiny-slider.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('front-end/css/style.css') }}" rel="stylesheet" media="screen">
    <!-- Favicons -->
    <link href="{{asset('front-end/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <!-- JavaScripts -->
    <script src="{{asset('front-end/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{asset('front-end/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{asset('front-end/js/modernizr.js') }}"></script>
</head>
<body>
    @include('front-end.includes.header')

    @yield('front_end_content')

    @include('front-end.includes.footer')

    <script src="{{asset('front-end/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('front-end/js/plugins.js') }}"></script>
    <script src="{{asset('front-end/js/tiny-slider.js') }}"></script>
    <script src="{{asset('front-end/js/custom.js') }}"></script>
</body>
</html>