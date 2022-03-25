@extends('front-end.master')
@section('gallery_menu_active','active')
@section('image_gallery_menu_active','active')
@section('front_end_content')
<style>
    .starter-template li.nav-item{
        font-size: 16px;
        color: #006804;
        font-weight: 600;
        border: 2px solid #006804;
        /* padding: 5px 15px; */
        border-radius: 5px;
        margin: 10px 10px 10px 0px;
    }
    .starter-template li.nav-item.active{
        background: #006804;
        color: #fff;
    }

</style>

    <div class="container image-gallery">
        <div class="row">
            <div class="col-sm-12">
                <main role="main" class="container">
                    <div class="row">
                        <div class="col-md">
                            <div class="starter-template">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane masonry-container fade active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <img class="card-img-top w-100" src="https://images.unsplash.com/photo-1490261739438-981517eafb2e?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ%3D%3D&s=ab1a1d09d3cdcd618d51691e27adc66e" alt="Card image cap">
                                        <img class="card-img-top w-100" src="https://images.unsplash.com/photo-1490261739438-981517eafb2e?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ%3D%3D&s=ab1a1d09d3cdcd618d51691e27adc66e" alt="Card image cap">
                                    </div>
                                    <div class="tab-pane fade masonry-container" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <img class="card-img-top w-100" src="https://images.unsplash.com/photo-1501743029101-21a00d6a3fb9?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ%3D%3D&s=04fc74cb01d267c20b706d27c2c493e5" alt="Card image cap">
                                    </div>
                                    <div class="tab-pane fade masonry-container" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <img class="card-img-top w-100" src="https://images.unsplash.com/photo-1433162653888-a571db5ccccf?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ%3D%3D&s=459d195af49a3331fd7815ce743fd4c8" alt="Card image cap">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

@endsection