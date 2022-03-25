@extends('front-end.master')
@section('contact_menu_active','active')
@section('front_end_content')
<style>
.contact .phone, 
.contact .email, 
.contact .address {
    display: flex;
    padding: 10px 0;
}
/* .contact .phone {
    margin-top: 20px;
} */
.contact h3{
    margin-top: 0;
}
.contact h3 i {
    color: #006804;
    border: 1px solid;
    padding: 10px;
    border-radius: 23px;
    width: 44px;
    height: 45px;
    text-align: center;
    margin-right: 20px;
}
.contact li {
    line-height: 30px;
    font-size: 16px;
    color: #000;
}
.contact ul li:first-child {
    color: #006804;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 18px;
}
.contact .contact-us-heading{
    font-size: 50px;
    font-weight: 700;
    border-bottom: 2px dashed #000;
    width: fit-content;
    margin: auto;
    padding-bottom: 11px;
    color: #006804;
    margin-top: 30px;
    margin-bottom: 55px;
}
.contact .contact-us-button{
    margin-bottom: 25px;
}
.contact #contact-form label{
    margin-bottom: 0px;
}
.contact #contact-form .md-form{
    margin-bottom: 10px;
}
.contact #contact-form .contact-us-button{
    margin-top: 20px;
}
.contact #contact-form .contact-us-button a{
    background: #006804;
    border: 0;
}  
</style>
    <div class="container contact">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="phone" style="margin-top: 20px;">
                    <h3 class="text-uppercase"><i class="fa fa-phone"></i></h3>
                    <ul>
                        <li>phone</li>
                        <li>+88 01819023177</li>
                        <li>+88 01771242644</li>
                    </ul>
                </div>
                <div class="phone">
                    <h3 class="text-uppercase"><i class="fa fa-phone"></i></h3>
                    <ul>
                        <li>Telephone</li>
                        <li>+88 02-57300525</li>
                        <li>57300204</li>
                    </ul>
                </div>
                <div class="email">
                    <h3 class="text-uppercase"><i class="fa fa-envelope"></i></h3>
                    <ul>
                        <li>Email</li>
                        <li>info@sbpgc.edu.bd</li>
                    </ul>
                </div>
                <div class="address">
                    <h3 class="text-uppercase"><i class="fa fa-map-marker"></i></h3>
                    <ul>
                        <li>Address</li>
                        <li>62, Nazimuddin Road, Dhaka-1100</li>
                    </ul>
                </div>
            </div> <!-- /.col-12 -->
            <div class="col-12 col-md-7">
                <div class="widget-item"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.95601432978407!2d90.39998673480021!3d23.72244966892593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e468252ba5%3A0x9733a402a1f4d1b8!2sShaikh%20Burhanuddin%20Post%20Graduate%20College!5e0!3m2!1sen!2sbd!4v1637868560341!5m2!1sen!2sbd" height="350" style="border:0;width: -webkit-fill-available;" allowfullscreen="" loading="lazy"></iframe>
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-12 -->
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="contact-us-heading">Drop Us A Line</h2>
            </div>
            <div class="col-md-6 col-12">
                <img src="{{asset("/front-end/images/contact-us-image.jpg")}}" alt="contact-us-image" class="img-responsive">
            </div>
            <div class="col-md-6 col-12">
                <form id="contact-form">
                        <div class="md-form">
                            <label for="name" >Your name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="md-form">
                            <label for="email" >Your email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email Address" required>
                        </div>
                        <div class="md-form">
                            <label for="subject" >Your Phone Number</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter your phone number">
                        </div>
                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea"></textarea>
                        </div>
                    <div class="contact-us-button">
                        <a class="btn btn-primary">Send your Request</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection