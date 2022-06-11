


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Standard Technology (USA-PAk)</title>
    <!-- favicon -->
    <link rel=icon href="assets/img/logo/favicon.png" sizes="20x20" type="image/png">
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
        <!-- Mobile Search -->
        <div class="click-mobile-search">
            <form action="http://zwin.io/html/jozicular/index.html" class="search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Type something to search">
                </div>
            </form>
        </div>
        <!-- Sing iN Popup -->

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
        <!-- Popup Section -->

        <!--info-popup start-->
        <div class="info-popup"></div>
        <div class="info-popup-wrapper">
            <div class="info-popup-content">
                <button type="button" class="info-popup-content_close"><i class="flaticon-close"></i></button>
                <div class="row no-gutters">
                    <div class="col-lg-7">
                        <div class="info-popup-content__img info-popup-content__img--one">
                            <img src="assets/img/popup/2.png" alt="">

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="info-popup-content__text">
                            <div class="info-popup-content__img">
                                <img src="assets/img/popup/3.png" alt="">
                            </div>
                            <div class="info-popup-content__text-header">
                                <h5 class="info-popup-content__title">Opening Hours</h5>
                            </div>
                            <div class="info-popup-content__text-body">
                                <p class="info-popup-content__text-is">Monday - Saturday</p>
                                <p class="info-popup-content__text-is">8.30 am - 6.00 pm</p>
                            </div>
                            <div class="info-popup-content__text-footer">
                                <p class="info-popup-content__text-is">+92 42 3749 9011</p>
                                <p class="info-popup-content__text-is">standardtechnologypk@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--location-popup start-->
        <div class="location-popup"></div>
        <div class="location-popup-wrapper">
            <div class="location-popup-content">
                <button type="button" class="location-popup-content_close"><i class="flaticon-close"></i></button>
                <div class="row no-gutters">
                    <div class="col-lg-7">
                        <div id="map-two">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.821085918828!2d-122.32757728467784!3d37.93460997973071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085783884715555%3A0x53f168bbb597cfe!2sStandard%20Technology%20USA!5e0!3m2!1sen!2s!4v1623847841440!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-popup-content__text">
                            <div class="location-popup-content__img">
                                <img src="assets/img/logo/logo.png"  style="max-width: 80%" alt="">
                            </div>
                            <div class="location-popup-content__text-header">
                                <h5 class="location-popup-content__title">Address USA:</h5>
                            </div>
                            <div class="location-popup-content__text-body">
                                    <span class="location-popup-content__text-is">
                                        444 - Wilson Ave. Richmond, CA 94805 <br>  USA.
                                    </span>
                            </div>
                            <div class="location-popup-content__text-header">
                                <h5 class="location-popup-content__title">Address Pakistan: </h5>
                            </div>
                            <div class="location-popup-content__text-body">
                                    <span class="location-popup-content__text-is">
                                       H 77, ST 02, Kamboh Colony Multan Road, <br> Chung Lahore-53800
Pakistan.
                                    </span>
                            </div>
                            <div class="btn-wrapper">
                                <button class="boxed-btn" type="button">Open
                                    Map
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--message-popup start-->
        <div class="message-popup"></div>
        <div class="message-popup-wrapper">
            <div class="message-popup-content">
                <button type="button" class="message-popup-content_close"><i class="flaticon-close"></i></button>
                <div class="row no-gutters">
                    <div class="col-lg-7">
                        <div class="message-popup-content__img message-popup-content__img--one">
                            <img src="assets/img/popup/4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="message-popup-content__text">
                            <div class="info-popup-content__img">
                                <img src="assets/img/popup/5.png" alt="">
                            </div>
                            <div class="message-popup-content__text-header">
                                <h5 class="message-popup-content__title mb-3">
                                    You have a question for us?
                                </h5>
                            </div>
                            <div class="message-popup-content__text-body">
                                <form class="popup-form" action="http://zwin.io/html/jozicular/index.html">
                                    <div class="form-group">
                                        <input id="email-two-popup" type="text" class="form-control"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                            <textarea class="form-control" rows="1"
                                                      placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="btn-wrapper padding-top-20">
                                        <button class="boxed-btn" type="button">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- navbar -->
        <nav class="navbar navbar-area navbar-expand-lg nav-style-01 nav-absolute  " style="background-color: white ;">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper d-none d-lg-block">
                        <a href="{{route('root')}}" class="logo">
                            <img src="assets/img/logo/logo.png" style="width:326px ;height : 60px" alt="logo">
                        </a>
                    </div>
                    <div class="logo-wrapper d-block d-lg-none">
                        <a href="{{route('root')}}" class="logo">
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

                        <li><a href="{{route('root')}}">Home</a></li>
                        <!--                        <li><a href="about-us.html">About us</a></li>-->
                        <li><a href="{{route('gallery')}}">Gallery</a></li>

                        <li class="menu-item-has-children"><a href="#">Products</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('research-development')}}">Products List</a></li>

                                <li class="menu-item-has-children current-menu-item "><a>Radiotherapy Accessories</a>
                                    <ul class="sub-menu">
                                        <li class=""><a href="{{route('Radiotherapy_Accessories')}}">Dosimetry</a>
                                        <li class=""><a href="{{route('immobolization')}}">Immobolization Devices</a>

                                        </li>

                                    </ul>
                                </li>
                                <li><a href="{{route('Nuclear_Medicine')}}">Nuclear Medicine</a></li>
                                <li><a href="Radiotherapy%20Accessories.html">Radiology</a></li>
                                <li><a href="Radiotherapy%20Accessories.html">Personal Dosimetry</a></li>
                                <li><a href="Radiotherapy%20Accessories.html">Breast Imaging</a></li>
                            </ul>
                        </li>


                        <li><a href="{{route('contact')}}">Contact Us</a></li>
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
                                                            In</span></button>
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
                                                            IN</span></button>
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
                                                            UP</span></button>
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

@yield('content')
<!--============= Footer Section  start here ===============-->
<footer class="footer-area">
    <div class="footer-top style-3  padding-top-80 padding-bottom-80">
        <div class="nav-container">
            <div class="footer-widget-content-wrapper">
                <div class="footer-widget-content">
                    <div class="footer-widget widget">
                        <div class="about_us_widget padding-bottom-10">
                            <a href="{{route('root')}}" class="footer-logo"> <img src="assets/img/logo/logo.png"
                                                                             alt="footer logo"></a>
                        </div>
                        <div class="footer-widget widget widget_nav_menu ">
                            <ul class="footer-link">
                                <li><a href="#">About</a></li>
                                <li><a href="{{route('research-development')}}">Research</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="copyright-area-inner">
                            <div class="qry-copy">
                                © standardtechnologyusa.com <span class="current-year"></span> All right reserved.
                                Powered with
                                <i class="flaticon-like
                                        "></i>
                                by <a href="https://www.linkedin.com/in/asim-rafiq/" target="_blank">Asim Rafiq</a>
                            </div>
                        </div>
                        <div class="footer-widget widget white-effect">
                            <div class="footer-icon margin-top-25">
                                <a href="https://www.facebook.com/standardtechnologypk" target="_blank"><i
                                        class="flaticon-facebook-logo"></i></a>
                                <a href="#" target="_blank"><i
                                        class="flaticon-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/12665971" target="_blank"><i
                                        class="flaticon-linked-in-logo-of-two-letters"></i></a>
                                <a href="#" target="_blank"><i
                                        class="flaticon-instagram"></i></a>
                            </div>
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


</html>
