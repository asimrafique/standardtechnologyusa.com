@extends('layouts.layout')
@section('content')
    <!--============= breadcrumb start here ===============-->
    <div class="breadcrumb-area contact-area-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner dark-blue">
                        <h2 class="page-title white-effect">About Us</h2>
                        <ul class="page-list white-effect">
                            <li><a href="{{route('root')}}">Home</a></li>
                            <li class="current">About Us</li>
                        </ul><!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= breadcrumb end here ===============-->
    <!--============= About Us start here ===============-->
    <div class="about-us-area style-3 padding-top-110  md-pd-top-80">
        <div class="nav-container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <div class="img-wrap">
                        <img src="assets/img/about/shape.png" alt="">
                        <div class="video-part">
                            <div class="pulse-icon">
                                <a href="https://www.youtube.com/watch?v=D8BN2YSyYkg" class="video-popup mfp-iframe"
                                   tabindex="0">
                                    <i class="flaticon-play-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45 text-center text-lg-left mb-5">
                    <div class="content-wrapper">
                        <div class="text-wrapper">
                            <div class="section-title text-center text-lg-left margin-bottom-55 md-mr-bottom-30">
                                <h2 class="title">Our Story</h2>
                            </div>
                            <p>STANDARD TECHNOLOGY is founded by our Great Owner in 1998, and they work in the different fields with different manufacturers and exhibitions. We are the registered suppliers, distributor and traders in Pakistan. We are providing the state of the art Medical Technology & Industrial Technology in all over Pakistan since 2010. We are based at Lahore and other branches are in Karachi & Islamabad. Our target market is Govt. Hospitals, Private Hospitals & Cancer Centers. We are providing the better technology with better service to our clients..

                                Our mission is, provide the better technology and better service. This is the reason that our clients are satisfied from our service and technology.
                            </p>
                            <p>We are in the field of Nuclear Medicine, Radiation Oncology, Radiation Protection, General Hospital Equipment, Health Imaging, Neurosurgery and Laboratory products, Industrial (Cutting Tools, Drills, Bits, Machines, Cutters etc) & Information Technology (PCs, Printers, Scanners, Switches and others).</p>
                        </div>
{{--                        <div class="btn-wrapper">--}}
{{--                            <a href="#" class="boxed-btn">Read More</a>--}}
{{--                        </div>--}}
                    </div >
                </div>
            </div>
        </div>
    </div>
    <!--============= About Us end here ===============-->

@endsection
