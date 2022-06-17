@extends('layouts.layout')
@section('content')

    <!--============= breadcrumb start here ===============-->
    <div class="breadcrumb-area research-area-breadcrumb">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title">Products</h2>
                        <ul class="page-list">
                            <li><a href="{{route('root')}}">Home</a></li>
                            <li class="current">Products</li>
                        </ul><!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= breadcrumb end here ===============-->


    <!--============= research  area end here ===============-->
    <section class="research-area padding-top-115 md-pd-top-75 padding-bottom-60 md-pd-bottom-20 ">
        <div class="nav-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title margin-bottom-50 md-mr-bottom-45">
                        <h2 class="title text-dark">Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="research-item">
                        <div class="img-wrap">
                            <img class="border-right-top-35" src="assets/img/products/Dosimetry.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <!--                            <p><strong>Published :</strong> 20 September 2019</p>-->
                            <h3 class="title">Dosimetry Independence & Integration
                            </h3>
                            <p>We believe independence and integration are equally critical to Quality Management for today's hospitals, cancer centers and healthcare networks...</p>
                            <div class="btn-wrapper">
                                <a href="{{route('Radiotherapy_Accessories')}}"  class="boxed-btn" type="button">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="research-item">
                        <div class="img-wrap">
                            <img class="border-right-top-35" src="assets/img/products/Nuclear Medicine2.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <!--                            <p><strong>Published :</strong> 20 September 2019</p>-->
                            <h3 class="title">Nuclear Medicine</h3>
                            <p><br> The  PC-based dose calibrators such as ISOMED 2010 are used for fast and precise activity or volume activity determination of all radiopharmaceuticals used in nuclear medicine...</p>
                            <a  href="{{route('Nuclear_Medicine')}}" class="btn-wrapper">
                                <button class="boxed-btn" type="button">Read More</button>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="research-item">
                        <div class="img-wrap">
                            <img class="border-right-top-35" src="assets/img/products/Radiology.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <!--                            <p><strong>Published :</strong> 20 September 2019</p>-->
                            <h3 class="title">Radiology</h3>
                            <p>We provides the hospital industry with technologically advanced radiation protection by offering products that set the standard for lightweight material and safety. Developed with DuPont technology, the products carry a longstanding reputation of radiation protection innovation. As the world’s first lightweight, multi-element, composite x-ray protection material to replace lead-vinyl, we have remained committed to developing high-quality protective products that lead the market in quality standards and compliance....</p>
                            <a href="{{route('Personal-Dosimetry')}}" class="btn-wrapper">
                                <button class="boxed-btn" type="button">Read More</button>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="research-item">
                        <div class="img-wrap">
                            <img class="border-right-top-35" src="assets/img/products/Personal%20Dosimetry.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <!--                            <p><strong>Published :</strong> 20 September 2019</p>-->
                            <h3 class="title">Personal Dosimetry</h3>
                            <p>
                                <br>
                                We offers various products related to TLD like TLD Reader, TLD Dosimeter, TLD material in different shapes,...




                                ...
                                <br>
                            </p>
                            <a href="{{route('Personal-Dosimetry')}}" class="btn-wrapper">
                                <button class="boxed-btn" type="button">Read More</button>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="research-item">
                        <div class="img-wrap">
                            <img class="border-right-top-35" src="assets/img/products/Breast%20Diagnostic%20Treatment%20.jpg" alt="">
                        </div>
                        <div class="content-part">
                            <!--                            <p><strong>Published :</strong> 20 September 2019</p>-->
                            <h3 class="title">Breast Diagnostic Treatment
                            </h3>
                            <p>SENNEX® ECT is a quick procedure which can be done under local or general anesthesia. It usually takes about 20 to 30 minutes. When done under local anesthesia, the patient can be sent home after an observation period of a few hours. Patients may experience minor pain after the procedure. This pain can usually be managed with routine painkillers. Antibiotics are usually not required, but can be recommended for some patients...</p>
                            <a href="{{route('Breast-Imaging')}}" class="btn-wrapper">
                                <button class="boxed-btn" type="button">Read More</button>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="research-item">
                        <div class="img-wrap">
                            <img class="border-right-top-35" src="assets/img/products/SMLumaGEM45angle-1.png" alt="">
                        </div>
                        <div class="content-part">
                            <!--                            <p><strong>Published :</strong> 20 September 2019</p>-->
                            <h3 class="title">Breast PET Imaging</h3>
                            <p>The Breast PET scanner (also called positron emission mammography or PEM) produces high-resolution images, with far more detail than conventional breast imaging. By producing tomographic images of lesions with resolution down to 1.6 mm (approximately the size of a grain of rice), this technology provides valuable clinical data on invasive and non-invasive disease across the continuum of care. From initial staging to ongoing post-surgical disease management, CMR Molecular Imaging’s high-resolution Breast PET Scanner provides a metabolic perspective allowing physicians to provide optimal patient outcomes....</p>
                            <a href="{{route('Breast-Imaging')}}" class="btn-wrapper">
                                <button class="boxed-btn" type="button">Read More</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= research  area end here ===============-->

@endsection
