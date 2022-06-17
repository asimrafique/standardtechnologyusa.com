@extends('layouts.layout')
@section('content')
    <!--============= breadcrumb start here ===============-->
    <div class="breadcrumb-area contact-area-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner dark-blue">
                        <h2 class="page-title white-effect">Contact Us</h2>
                        <ul class="page-list white-effect">
                            <li><a href="{{route('root')}}">Home</a></li>
                            <li class="current">Contact Us</li>
                        </ul><!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= breadcrumb end here ===============-->
<style>
    .heading{
        color: black;
    }
</style>
    <!--============= contact-info area start here ===============-->
    <section class="contact-info-area padding-top-120 md-pd-top-70 margin-bottom-125 md-mr-bottom-80">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-left margin-bottom-40 md-mr-bottom-20">
                                <h2 class="title heading">Get in Touch</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 ">
                            <div class="contact-info-box">
                                <h5 class="title">California</h5>
                                <p>444 - Wilson Ave. Richmond, CA 94805 USA</p>
                                <p><strong>Email: </strong>standardtechnologypk@gmail.com</p>
                                <p><strong>Phone: </strong>+1 510 332 4160</p>
                                <p><strong>WEBSITE: </strong>www.standardtechnologyusa.com</p>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 mt-3 mt-xl-0">
                            <div class="contact-info-box">
                                <h5 class="title">PAKISTAN</h5>
                                <p>H 77, ST 02, Kamboh Colony Multan Road, Chung Lahore-53800 Pakistan</p>
                                <p><strong>Email: </strong>standardtechnologypk@gmail.com</p>
                                <p><strong>Phone: </strong>+92 (42) 3749 9011</p>
                                <p><strong>Fax: </strong>+92 (42) 3540 4817</p>
                            </div>
                        </div>

                    </div>
                    <div class="row padding-top-45">
                        <div class="col-lg-4 col-sm-4">
                            <div class="img-wrap text-center text-sm-left">
                                <img src="assets/img/contact/bf.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 mt-5 mt-sm-0">
                            <div class="footer-widget align-items-center">
                                <h5 class="widget-title">Follow Us</h5>
                                <div class="footer-icon">
                                    <a href="https://www.facebook.com/standardtechnologypk" target="_blank"><i
                                            class="flaticon-facebook-logo"></i></a>
                                    <a href="#" target="_blank"><i
                                            class="flaticon-twitter"></i></a>
                                    <a href="https://www.linkedin.com/company/standard-technology-usa/" target="_blank"><i
                                            class="flaticon-linked-in-logo-of-two-letters"></i></a>
                                    <a href="#" target="_blank"><i
                                            class="flaticon-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 border-left pt-5 pt-lg-0">
                    <div class="section-title text-left margin-bottom-60 md-mr-bottom-35">
                        <h2 class="title heading">Send your Message</h2>
                    </div>
                    <form class="contact-from style-2" id="contact-form" action="{{route('contact.email')}}" method="post">
                       @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="4" placeholder="Comment"></textarea>
                        </div>
                        <div class="btn-wrapper">
                            <button type="submit" class="submit-btn boxed-btn"><span>Send Message</span></button>
                        </div>
                        <p class="form-messege mb-0"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--============= contact-info area end here ===============-->

    <!--============= map area start here ===============-->
    <div class="map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.821085918828!2d-122.32757728467784!3d37.93460997973071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085783884715555%3A0x53f168bbb597cfe!2sStandard%20Technology%20USA!5e0!3m2!1sen!2s!4v1623848403534!5m2!1sen!2s"
            width="1920" height="400" style="border:0;" allowfullscreen=""></iframe>

    </div>
    <!--============= map area end here ===============-->

@endsection
