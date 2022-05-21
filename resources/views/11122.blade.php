@extends('layouts.layout')
@section('content')

@endsection
    <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zwin.io/html/jozicular/scientific-platform.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 09:48:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Standard Technology (USA-PAk)</title>
    <!-- favicon -->
    <link rel=icon href="favicon.png" sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- iconmoon -->
    <link rel="stylesheet" href="assets/css/font.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">



</head>

<body>

<!--============= preloader area start here ===============-->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!--============= preloader area end here ===============-->

<!--============= Nav Area start here ===============-->
<div class="total-content">
    <div class="header-section">
        <!-- search Popup -->
        <div class="body-overlay" id="body-overlay"></div>
        <div class="search-popup" id="search-popup">
            <form action="http://zwin.io/html/jozicular/index.html" class="search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search.....">
                </div>
                <button class="submit-btn border-none"><i class=" flaticon-search"></i></button>
            </form>
        </div>
        <!-- navbar -->
        <nav class="navbar navbar-area navbar-expand-lg nav-style-01 nav-absolute  " style="background-color: white ;">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper d-none d-lg-block">
                        <a href="index-2.html" class="logo">
                            <img src="assets/img/logo/logo.png" style="width:326px ;height : 60px" alt="logo">
                        </a>
                    </div>
                    <div class="logo-wrapper d-block d-lg-none">
                        <a href="index-2.html" class="logo">
                            <img src="assets/img/logo/logo2.png" alt="logo">
                        </a>
                    </div>


                    <div class="mobile-toggler">
                        <a data-toggle="modal" data-target="#login-modal" href="#"><i
                                class="flaticon-user-1"></i></a>
                    </div>
                    <button class="navbar-toggler cross-menu" type="button" data-toggle="collapse"
                            data-target="#lifeomic_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="cross-menu-wrapper">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="lifeomic_main_menu">
                    <ul class="navbar-nav">

                        <li><a href="index.html">Home</a></li>
                        <!--                        <li><a href="about-us.html">About us</a></li>-->
                        <li><a href="gallery.html">Gallery</a></li>

                        <li class="menu-item-has-children"><a href="#">Products</a>
                            <ul class="sub-menu">
                                <li><a href="research-development.html">Products List</a></li>
                                <li><a href="Radiotherapy%20Accessories.html">Radiotherapy Accessories</a></li>
                            </ul>
                        </li>


                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>

            </div>
        </nav>

    </div>
    <!--SingUp Modal -->
    <div class="login-modal modal fade" id="singup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-custom" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="flaticon-close"></i>
                    </button>
                    <div class="login-form-section">
                        <div class="container padding-0">
                            <div class="row padding-0">
                                <div class="col-md-6 padding-0">
                                    <div class="login-section grd-bg">
                                        <div class="login-back">
                                            <div class="login-content">
                                                <h2 class="title">Welcome back </h2>
                                                <p>To keep connected with us please login with your personal info
                                                </p>
                                            </div>
                                            <div class="btn-wrapper">
                                                <button class="boxed-btn" type="submit"><span>Sign
                                                            In</span> </button>
                                            </div>
                                            <div class="img-wrap padding-top-50">
                                                <img src="assets/img/signup-login/dfoctor.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="reg-section">
                                        <form class="login-form" action="http://zwin.io/html/jozicular/index.html">
                                            <h2 class="title padding-bottom-30">Create account</h2>

                                            <div class="form-group">
                                                <label for="name-form">Username or Email</label>
                                                <input id="name-form" type="text" class="form-control"
                                                       placeholder="Username or Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="email-four">Email</label>
                                                <input id="email-four" type="text" class="form-control"
                                                       placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-four">Password</label>
                                                <input id="password-four" type="password" class="form-control"
                                                       placeholder="Password">
                                            </div>
                                            <div class="btn-wrapper">
                                                <button class="boxed-btn" type="submit">Sign Up</button>
                                            </div>
                                            <br>
                                            <p>Or</p>
                                            <div class="social-icon ">
                                                <ul class="social-share">
                                                    <li class="fb"><a href="#"><i class="flaticon-facebook"></i>
                                                            Sign in with facebook</a></li>
                                                    <li class="ggl"><a href="#">
                                                            <img src="assets/img/icon-img/2.png" alt=""> Sign in
                                                            with google
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Login Modal -->
    <div class="login-modal modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-custom" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close style-2" data-dismiss="modal" aria-label="Close">
                        <i class="flaticon-close"></i>
                    </button>
                    <div class="login-form-section">
                        <div class="container padding-0">
                            <div class="row padding-0">
                                <div class="col-lg-6 padding-0">
                                    <div class="login-section bg-grey">
                                        <form class="login-form" action="http://zwin.io/html/jozicular/index.html">
                                            <h2 class="title margin-bottom-35">Log In</h2>

                                            <div class="form-group">
                                                <label for="email-three">Username or Email</label>
                                                <input id="email-three" type="text" class="form-control"
                                                       placeholder="Username or Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-three">Password</label>
                                                <input id="password-three" type="password" class="form-control"
                                                       placeholder="Password">
                                            </div>
                                            <a href="#" class="forget-btn">Forget password ? </a>
                                            <div class="btn-wrapper">
                                                <button class="boxed-btn" type="submit"><span>LOG
                                                            IN</span> </button>
                                            </div>
                                        </form>

                                        <div class="social-icon light-bg">
                                            <ul class="social-share ">
                                                <li class="fb"><a href="#"><i class="flaticon-facebook"></i> Sign in
                                                        with facebook</a></li>
                                                <li class="ggl"><a href="#">
                                                        <img src="assets/img/icon-img/2.png" alt=""> Sign in with
                                                        google
                                                    </a></li>
                                            </ul>
                                            <div class="new-user padding-top-30">
                                                <h6>New User ?</h6>
                                                <a href="#">Create a new account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block padding-0">
                                    <div class="reg-section bg-grey">
                                        <div class="login-back">
                                            <div class="img-wrap padding-bottom-50">
                                                <img src="assets/img/signup-login/sign-in.png" alt="">
                                            </div>
                                            <div class="login-content">
                                                <h4 class="title">Hi Dear ? Sign up to join us</h4>
                                            </div>
                                            <div class="btn-wrapper ">
                                                <button class="boxed-btn" type="submit"><span>SIGN
                                                            UP</span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============= Nav Area End here ===============-->

<!--============= breadcrumb start here ===============-->
<div class="breadcrumb-area">
    <div class="nav-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">Gallery</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Gallery</li>
                    </ul><!-- .breadcrumbs -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--============= breadcrumb end here ===============-->

<!--============= Technologies area start here ===============-->
<section class="Technologies-area style-2 padding-top-125 md-pd-top-70 padding-bottom-125 md-pd-bottom-80">
    <div class="nav-container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="content-wrapper">
                    <div class="text-wrapper">
                        <div class="section-title text-left margin-bottom-35 md-mr-bottom-30">
                            <h2 class="title">Technologies</h2>
                        </div>
                        <h5 class="sub-title">We are Developing Life-Changing Therapies Through the Use of Our
                            Proprietary Technologies.</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                        </p>
                        <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 md-pd-top-50">
                <div class="img-wrap">
                    <img src="assets/img/gallary/aa.jpg" alt="">
                </div>

            </div>

        </div>
    </div>
</section>
<!--============= Technologies area end here ===============-->

<!--============= Focus area start here ===============-->
<div class="focus-area">
    <div class="nav-container">
        <div class="row align-items-center" >
            <div class="col-lg-6">
                <div class="img-wrap">
                    <img src="assets/img/gallary/bb.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 md-pd-top-45">
                <div class="content-wrapper">
                    <div class="text-wrapper">
                        <div class="section-title text-left padding-bottom-15">
                            <h2 class="title">Focus</h2>
                        </div>
                        <p>loram
                        </p>
                        <p>These antigens, called tumor-specific neoantigens, offer attractive therapeutic targets
                            because they are non-self and tumor-specific, and are key targets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============= Focus area end here ===============-->


<!--============= Gallery area start here ===============-->
<section class="gallery-team-area padding-top-75 md-pd-top-35">
    <div class="nav-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title margin-bottom-60 md-mr-bottom-55">
                    <h2 class="title">Our Gallary</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c1.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c1.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c2.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c2.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c3.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c3.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c4.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c4.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c5.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c5.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c6.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c6.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c10.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c10.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c8.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c8.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/c9.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/c9.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/a1.jpg" alt="" class="border-left-top-35">
                        <div class="overlay border-left-top-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/a1.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/a2.jpg" alt="" class="border-left-bottom-35">
                        <div class="overlay border-left-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/a2.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/a3.jpg" alt="" class="border-right-top-35">
                        <div class="overlay border-right-top-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/a3.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/a4.jpg" alt="" class="border-left-bottom-35">
                        <div class="overlay border-left-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/a4.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/a5.jpg" alt="" class="border-right-top-35">
                        <div class="overlay border-right-top-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/a5.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/a6.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/a6.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/b4.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/b4.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/b2.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/b2.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <div class="img-warpper ">
                        <img src="assets/img/gallary/b3.jpg" alt="" class="border-right-bottom-35">
                        <div class="overlay border-right-bottom-35">
                            <div class="icon-wrap">
                                <a href="assets/img/gallary/b3.jpg" class="image-popup"><i
                                        class="flaticon-search"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>







        </div>
    </div>

</section>
<!--============= Gallery area end here ===============-->

<!--============= Footer Section  start here ===============-->
<footer class="footer-area">
    <div class="footer-top style-2 padding-top-120 md-pd-top-80  padding-bottom-20">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget">
                        <div class="about_us_widget">
                            <a href="index-2.html" class="footer-logo"> <img src="assets/img/logo/logo.png"
                                                                             alt="footer logo"></a>

                            <p>Our mission is, provide the better technology and better service. This is the reason that our clients are satisfied from our service and technology.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h5 class="widget-title">Ouick links</h5>
                        <div class="two-part">
                            <div class="left-part">
                                <ul>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>

                            </div>
                            <div class="right-part">
                                <ul>
                                    <li><a href="#">Pipeline</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Therapy</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h5 class="widget-title">Contact Us</h5>
                        <ul class="contact_info_list">
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="details">
                                    444 - Wilson Ave. Richmond, CA 94805   USA.
                                </div>
                            </li>


                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-envelope"></i>
                                </div>
                                <div class="details">
                                    standardtechnologypk@gmail.com
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="flaticon-telephone-handle-silhouette"></i>
                                </div>
                                <div class="details">
                                    +92 42 3749 9011
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget ">
                        <h5 class="widget-title">Social Media</h5>
                        <div class="footer-icon margin-top-25">
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
    </div>
    <div class="copyright-area">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                        <div class="qry-copy">
                            © standardtechnologyusa.com <span class="current-year"></span> All right reserved.
                            Powered with
                            <i class="flaticon-like
                                        "></i>
                            by <a href="https://www.linkedin.com/in/asim-rafiq/" target="_blank">Asim Rafiq</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============= footer area end here ===============-->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="flaticon-chevron"></i></span>
</div>
<!-- back to top area end -->

<!-- jquery -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<!-- popper -->
<script src="assets/js/popper.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!-- isotope -->
<script src="assets/js/isotope.min.js"></script>
<!-- wow -->
<script src="assets/js/wow.min.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- waypoint -->
<script src="assets/js/waypoints.min.js"></script>
<!-- Slick Slider -->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slick-animation.js"></script>
<!-- Nice scroll -->
<script src="assets/js/jquery.nicescroll.js"></script>
<!-- counterup -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- imageloaded -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- img hotspot -->
<script src="assets/js/jquery.hotspot.js"></script>

<!-- main js -->
<script src="assets/js/slider.js"></script>
<script src="assets/js/main.js"></script>



</body>


<!-- Mirrored from zwin.io/html/jozicular/scientific-platform.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 09:49:00 GMT -->
</html>
