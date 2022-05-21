@extends('layouts.layout')

@section('content')
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="flaticon-close"></i>
                        </button>
                        <div class="login-form-section">
                            <div class="container padding-0">
                                <div class="row padding-0">
                                    <div class="col-md-6 padding-0">
                                        <div class="login-section bg-grey">
                                            <form class="login-form" action="http://zwin.io/html/jozicular/index.html">
                                                <h2 class="title padding-bottom-30">Log In</h2>

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
                                    <div class="col-md-6 padding-0">
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
    <div class="breadcrumb-area pipeline-area-breadcrumb">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="breadcrumb-inner dark-blue">
                        <h3 class="page-title white-effect">Radiotherapy Accessories</h3>
                        <ul class="page-list white-effect">
                            <li><a href="index.html">Home</a></li>
                            <li class="current">Radiotherapy Accessories</li>
                        </ul><!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= breadcrumb end here ===============-->

    <!--============= building pipeline area start here ===============-->
    <section class="building-pipeline-area padding-top-125 md-pd-top-70 padding-bottom-110">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-part">
                        <div class="section-title text-left padding-bottom-30">
                            <h2 class="title" style="color: black">Dosimetry (3D SCANNER™)</h2>
                        </div>
                       <h2 style="color: black"> Efficient, Accurate, & Reproducible
                           Water Tank Scanning</h2>


                        <p>3D SCANNER’s AutoSetup automatically sets the detector position at the water surface and levels and aligns the tank in less than 20 minutes. This feature not only saves time, but also ensures tank measurements are reproducible regardless of user.
                        Tank shifts take time and compromise the stability of the original scanning setup. Because of its cylindrical shape, 3D SCANNER enables a 65 cm scan range -- allowing full 40 x 40 cm field scans, even at 100 cm SSD and 30 cm depth. Its shape and size remove the need for tank shifts.

                        </p>

                        <p class="highlight">

                            <img src="assets/img/products/Radiology1.jpg" alt="">

                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45">
                    <div class="img-part">
                        <img src="assets/img/products/SMLumaGEM45angle-1.png.jpg" alt="">
                        <div class="circle">
                            <div class="circle-1">
                                <div class="circle-2">
                                    <div class="circle-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--============= building pipeline area end here ===============-->
    <!--============= building pipeline area start here ===============-->
    <section class="building-pipeline-area padding-top-125 md-pd-top-70 padding-bottom-110">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-part">
                        <div class="section-title text-left padding-bottom-30">
                            <h2 class="title" style="color: black">ArcCHECK®</h2>
                        </div>
                       <h2 style="color: black"> The Benchmark for 3D Pre-Treatment QA</h2>


                       <strong>Powerful Patient-Specific QA</strong><br>
                        <p>ArcCHECK is recommended by AAPM Task Group 218 for 3D measurement requirements. It measures and correlates gantry angle, leaf-end position, absolute dose and time to identify any potential source of error throughout the patient volume.
                            <br> <strong> Clinically Relevant Dose & DVH QA</strong><br>


                            Identify TPS and beam delivery errors. With a single click, compare measured dose points to planned dose points. Review individual control points and user-defined full or sub-arc sections for an in-depth overview of pass, low, and high dose results.
                            <br> <strong> MLC Pattern Machine QA</strong><br>


                            Further leverage your ArcCHECK for Machine QA tests by evaluating discrepancies between the planned and delivered MLC pattern and identifying leaves that may require service.



                        </p>

                        <p class="highlight">

<!--                            <img src="assets/img/products/portable%20new.png" alt="">-->

                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45">
                    <div class="img-part">
                        <img src="assets/img/products/portable%20new.png" alt="">
<!--                        <div class="circle">-->
<!--                            <div class="circle-1">-->
<!--                                <div class="circle-2">-->
<!--                                    <div class="circle-3">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--============= building pipeline area end here ===============-->

    <!--============= building pipeline area start here ===============-->
    <section class="building-pipeline-area padding-top-125 md-pd-top-70 padding-bottom-110">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-part">
                        <div class="section-title text-left padding-bottom-30">
                            <h2 class="title" style="color: black">Daily QA™ 3</h2>
                        </div>
                       <h2 style="color: black"> Daily Beam Quality Analysis
                           in One Measurement
                       </h2>


                       <strong>An Easy Handoff from Physicist to Therapist</strong><br>
                        <p>Physicists are able to set up daily test templates for their modalities and machines which can then be used by a Therapist to easily conduct daily tests and automatically run pre-set templates.
                            <br> <strong> Eliminate Back-and-Forth</strong><br>
                            Simply enter the linac vault, position the device, turn the beam on and start the pre-set tests in the software – no warm-up or pre-irradiation required, and no additional trips to the vault needed.
                            <br> <strong>Easy Setup</strong><br>

                            Power Data Interface (PDI) is managed through Sun Nuclear's single-cable architecture.



                        </p>

                        <p class="highlight">

                            <img src="assets/img/products/inter2.jpg" alt="">

                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45">
                    <div class="img-part">
                        <img src="assets/img/products/interchange.jpg" alt="">
<!--                        <div class="circle">-->
<!--                            <div class="circle-1">-->
<!--                                <div class="circle-2">-->
<!--                                    <div class="circle-3">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--============= building pipeline area end here ===============-->

   <!--============= building pipeline area start here ===============-->
    <section class="building-pipeline-area padding-top-125 md-pd-top-70 padding-bottom-110">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-part">
                        <div class="section-title text-left padding-bottom-30">
                            <h2 class="title" style="color: black">PC Electrometer™</h2>
                        </div>
                       <h2 style="color: black"> Portable, Reference-Class Electrometer
                       </h2>

                        <strong>Simple & Portable</strong>
                        <p>Small and lightweight for easy transport, the PC Electrometer offers simple setup with a single USB cable connection for operation, and less than 1-minute warm-up time.</p>

                        <br> <strong>Intuitive Software</strong><br>
                        <p>SNC Dosimetry™ complements PC Electrometer with powerful analysis and smart features for enhanced efficiency.</p><br>
                        •	<strong>Queues and projects</strong><br> for organizing and executing groups of scans, and tracking annual QA and commissioning
                        <br> •	<strong>Multi-scan comparison tool </strong><br> for 1-click quantitative analysis across data sets
                        <br>•	<strong>Searchable database </strong> <br>for easy access to data with the ability to share data among users
                        <br>•	<strong>Processing layers </strong><br> for insights into each function along the scanning process, and ability to revert to earlier unprocessed data



                        <p class="highlight">

<!--                            <img src="assets/img/products/inter2.jpg" alt="">-->

                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45">
                    <div class="img-part">
                        <img src="assets/img/products/graphics.png" alt="">
<!--                        <div class="circle">-->
<!--                            <div class="circle-1">-->
<!--                                <div class="circle-2">-->
<!--                                    <div class="circle-3">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--============= building pipeline area end here ===============-->
    <!--============= building pipeline area start here ===============-->
    <section class="building-pipeline-area padding-top-125 md-pd-top-70 padding-bottom-110">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-part">
                        <div class="section-title text-left padding-bottom-30">
                            <h2 class="title" style="color: black">1D SCANNER™</h2>
                        </div>
                       <h2 style="color: black"> Accurate Point Dose &
                           PDD Dosimetry Water Tank
                       </h2>






                       <br> <strong>Simple, Efficient Water Scanning</strong>
                        <p> 1D SCANNER enables dosimetry measurements in water, including output factors, dose calibrations, annual, and routine QA. Collect PDD curves with optional SNC Dosimetry™ software and <strong><a href="https://www.sunnuclear.com/products/pc-electrometer">PC Electrometer™</a></strong> .</p>

                        <br> <strong> Easy, Reproducible Setup</strong><br>
                        <p> Setup is simple with a single power and data cable connection. Plus, a water surface detection feature automatically sets the dosimetry detector at the water surface, removing subjectivity. Control the tank in-room using the pendant or outside of the room using software.</p><br>


                        <p class="highlight">

<!--                            <img src="assets/img/products/inter2.jpg" alt="">-->

                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45">
                    <div class="img-part">
                        <img src="assets/img/products/prob3.png" alt="">
<!--                        <div class="circle">-->
<!--                            <div class="circle-1">-->
<!--                                <div class="circle-2">-->
<!--                                    <div class="circle-3">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--============= building pipeline area end here ===============-->
    <!--============= building pipeline area start here ===============-->
    <section class="building-pipeline-area padding-top-125 md-pd-top-70 padding-bottom-110">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-part">
                        <div class="section-title text-left padding-bottom-30">
                            <h2 class="title" style="color: black">SNC125c™ SNC350p™ SNC600c™</h2>
                        </div>
                       <h3 style="color: black"> Proven Reference Ion Chambers
                       </h3>






                       <br> <strong>Meet Requirements</strong>
                        <p> Properly QA your linac, in accordance with the reference class and dosimetry protocols of IEC 60731, AAPM TG-51, and IAEA TRS-398.</p>

                        <br> <strong>Reliable & Accurate</strong><br>
                        <p> Reference-class ion chambers are vented, waterproof and fully guarded. A white chamber body makes visualization easy during setup and relative to cross hairs and lasers.</p><br>


                        <p class="highlight">

<!--                            <img src="assets/img/products/inter2.jpg" alt="">-->

                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45">
                    <div class="img-part">
                        <img src="assets/img/products/prot5.png" alt="">
<!--                        <div class="circle">-->
<!--                            <div class="circle-1">-->
<!--                                <div class="circle-2">-->
<!--                                    <div class="circle-3">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--============= building pipeline area end here ===============-->
<!--============= building pipeline area start here ===============-->
    <section class="building-pipeline-area padding-top-125 md-pd-top-70 padding-bottom-110">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-part">
                        <div class="section-title text-left padding-bottom-30">
                            <h2 class="title" style="color: black">Solid Water® HE</h2>
                        </div>
                       <h3 style="color: black"> Reliable, Durable Water Equivalent Phantoms
                       </h3>

                       <br>
                       <br>
                        <strong>Depth Ionization Relative-to-Water</strong>

                        <div class="WordSection1">

                            <p class="MsoNormal">&nbsp;</p>



                            <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="805" style="width:603.75pt;background:white;border-collapse:collapse">
                                <tbody><tr>
                                    <td colspan="2" style="padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#111111">Depth Ionization Relative-to-Water</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border:none;border-top:solid #D8D8D8 1.0pt;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">Photons</span></p>
                                    </td>
                                    <td valign="top" style="border:none;border-top:solid #D8D8D8 1.0pt;padding:
  0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">1.000 +/- 0.005</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border-top:solid #D8D8D8 1.0pt;
  border-left:none;border-bottom:solid #D8D8D8 1.0pt;border-right:none;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">Electrons</span></p>
                                    </td>
                                    <td valign="top" style="border-top:solid #D8D8D8 1.0pt;border-left:none;
  border-bottom:solid #D8D8D8 1.0pt;border-right:none;padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">1.000 +/- 0.005</span></p>
                                    </td>
                                </tr>
                                </tbody></table>

                            <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;
display:none">&nbsp;</span></p>

                            <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="805" style="width:603.75pt;background:white;border-collapse:collapse">
                                <tbody><tr>
                                    <td colspan="2" style="padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#111111">Density</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border:none;border-top:solid #D8D8D8 1.0pt;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">Mass Density (g/cm</span><sup><span style="font-size:5.5pt;
  font-family:&quot;Helvetica&quot;,sans-serif;color:#707070">3</span></sup><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;color:#707070">)</span></p>
                                    </td>
                                    <td valign="top" style="border:none;border-top:solid #D8D8D8 1.0pt;padding:
  0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">1.032 +/- 0.005</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border:none;border-top:solid #D8D8D8 1.0pt;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">Electron Density (e-/cm</span><sup><span style="font-size:
  5.5pt;font-family:&quot;Helvetica&quot;,sans-serif;color:#707070">3</span></sup><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;color:#707070">NA)</span></p>
                                    </td>
                                    <td valign="top" style="border:none;border-top:solid #D8D8D8 1.0pt;padding:
  0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">0.557 +/- 0.001</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border-top:solid #D8D8D8 1.0pt;
  border-left:none;border-bottom:solid #D8D8D8 1.0pt;border-right:none;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">Solid Water HE / Water Electron Density Ratio</span></p>
                                    </td>
                                    <td valign="top" style="border-top:solid #D8D8D8 1.0pt;border-left:none;
  border-bottom:solid #D8D8D8 1.0pt;border-right:none;padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">1.000 +/- 0.005</span></p>
                                    </td>
                                </tr>
                                </tbody></table>

                            <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;
display:none">&nbsp;</span></p>

                            <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="805" style="width:603.75pt;background:white;border-collapse:collapse">
                                <tbody><tr>
                                    <td colspan="2" style="padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#111111">Standard Sizes Available</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border:none;border-top:solid #D8D8D8 1.0pt;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">30 cm x 30 cm</span></p>
                                    </td>
                                    <td valign="top" style="border:none;border-top:solid #D8D8D8 1.0pt;padding:
  0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">0.1 cm, 0.2 cm, 0.3 cm, 0.5 cm, 1.0 cm, 2.0 cm, 3.0 cm, 4.0
  cm, 5.0 cm, 6.0 cm</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border:none;border-top:solid #D8D8D8 1.0pt;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">40 cm x 40 cm</span></p>
                                    </td>
                                    <td valign="top" style="border:none;border-top:solid #D8D8D8 1.0pt;padding:
  0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">0.2 cm, 0.3 cm, 0.5 cm, 1.0 cm, 2.0 cm, 3.0 cm, 4.0 cm, 5.0 cm</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border:none;border-top:solid #D8D8D8 1.0pt;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">30 cm x 35.2 cm*</span></p>
                                    </td>
                                    <td valign="top" style="border:none;border-top:solid #D8D8D8 1.0pt;padding:
  0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">0.5 cm, 1.0 cm, 2.0 cm</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="268" valign="top" style="width:201.25pt;border:none;border-top:solid #D8D8D8 1.0pt;
  padding:0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">35.3 cm x 36.7 cm**</span></p>
                                    </td>
                                    <td valign="top" style="border:none;border-top:solid #D8D8D8 1.0pt;padding:
  0in 0in 0in 0in">
                                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal"><span style="font-size:10.5pt;font-family:&quot;Helvetica&quot;,sans-serif;
  color:#707070">0.2 cm, 0.3 cm, 0.5 cm, 1.0 cm, 2.0 cm, 3.0 cm, 4.0 cm, 5.0 cm</span></p>
                                    </td>
                                </tr>
                                </tbody></table>

                        </div>


                        <p class="highlight">

<!--                            <img src="assets/img/products/inter2.jpg" alt="">-->

                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45">
                    <div class="img-part">
                        <img src="assets/img/products/water.png" alt="">
<!--                        <div class="circle">-->
<!--                            <div class="circle-1">-->
<!--                                <div class="circle-2">-->
<!--                                    <div class="circle-3">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="building-pipeline-area padding-top-125 md-pd-top-70 padding-bottom-110">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-part">
                        <div class="section-title text-left padding-bottom-30">
                            <h2 class="title" style="color: black">SunCHECK™ Patient</h2>
                        </div>
                       <h3 style="color: black">Independent Patient QA in a Single Workflow
                       </h3>






                       <br> <strong>Purposefully Automated</strong>

                        <p> SunCHECK Patient streamlines data transfer and time-consuming tasks, enabling greater focus on improved treatment quality.</p>

                        <br> <strong>Common Analysis Tools & Centralized Storage of Results</strong><br>
                        <p> In support of standardization, SunCHECK Patient provides common analyses across each Patient QA phase -- and stores all results for easy retrieval and review.</p><br>
<br> <strong>Custom-Fit for Your Clinic</strong><br>
                        <p>We optimize SunCHECK Patient for the planning and delivery technologies you use -- and provide flexible, automated analysis options for every step. As updates occur and your needs evolve, SunCHECK Patient adapts.</p><br>


                        <p class="highlight">

<!--                            <img src="assets/img/products/inter2.jpg" alt="">-->

                    </div>
                </div>
                <div class="col-lg-6 md-pd-top-45">
                    <div class="img-part">
                        <img src="assets/img/products/SunCHECK.png" alt="">
<!--                        <div class="circle">-->
<!--                            <div class="circle-1">-->
<!--                                <div class="circle-2">-->
<!--                                    <div class="circle-3">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--============= building pipeline area end here ===============-->
@endsection
