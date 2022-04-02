<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from skdevbd.com/codexexpert/TF-ITEM/roktim/RoktimHtml/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Dec 2021 11:25:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dear EX</title>

    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->

    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/bsnav.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/responsive.css')}}">
</head>

<body>

    <!-- ===========================
    =====>> Top Preloader <<===== -->
    <div id="preloader">
        <div class="lds-css">
            <div class="preloader-3">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- =====>> End Top Preloader <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Header Top <<===== -->
    <header class="header-top header-top-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="header-content">
                        <div class="contact-top-item ">
                            <i class="fa fa-phone-alt"></i>
                            <span>+880 1637464779</span>
                        </div>
                        <div class="contact-top-item ">
                            <i class="fa fa-envelope-open"></i>
                            <span>dear.0ex@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <a href="{{ route('admin.login') }}" class="btn-s3 header-top-right-btn">Login</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Top Menu -->
    <nav class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide top-menu menu-four">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.png" alt="" style="max-width: 120px;" >
            </a>
            <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-md-end">
                <ul class="navbar-nav navbar-mobile mr-0">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('home.page') }}">Home</a></li>
                     <li class="nav-item active"><a class="nav-link" href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                      <li class="nav-item active"><a class="nav-link" href="{{ route('term_condition') }}">Term Condition</a></li>
                    
                </ul>
            </div>
            <div class="search-dropdown">
                <button type="button" class="icon-btn icon-btn2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search"></i>
                    </button>
                <form class="dropdown-menu dropdown-menu-right">
                    <input class="search-input " name="search" placeholder="Search " aria-label="Search ">
                    <button class="search-btn " type="submit"><i class="fas fa-search "></i> </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="bsnav-mobile">
        <div class="bsnav-mobile-overlay"></div>
        <div class="navbar"></div>
    </div>
    <!-- =====>> End Header Top <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Hero <<===== -->
    <section id="hero-top" class="hero-four">
        <div class="hero-four-absolute-img">
            <img class="waves1" src="{{asset('assets/frontend/assets/img/home-4/waves.png')}}" alt="">
            <img class="waves2" src="{{asset('assets/frontend/assets/img/home-4/waves2.png')}}" alt="">
            <img class="cr-tr1" src="{{asset('assets/frontend/assets/img/home-4/circle-triangle.png')}}" alt="">
            <img class="cr-tr2" src="{{asset('assets/frontend/assets/img/home-4/circle-triangle.png')}}" alt="">
            <img class="plus-b1" src="{{asset('assets/frontend/assets/img/home-4/plus-big.png')}}" alt="">
            <img class="plus-b2" src="{{asset('assets/frontend/assets/img/home-4/plus-big.png')}}" alt="">
            <img class="plus-s1" src="{{asset('assets/frontend/assets/img/home-4/plus-small.png')}}" alt="">
            <img class="plus-s2" src="{{asset('assets/frontend/assets/img/home-4/plus-small.png')}}" alt="">
            <img class="plus-s3" src="{{asset('assets/frontend/assets/img/home-4/plus-small.png')}}" alt="">
            <img class="circle-b" src="{{asset('assets/frontend/assets/img/home-4/circle-big.png')}}" alt="">
            <img class="shape-cr" src="{{asset('assets/frontend/assets/img/home-4/shape-circle.png')}}" alt="">
            <img class="shape-tall" src="{{asset('assets/frontend/assets/img/home-4/shape-tall.png')}}" alt="">
            <img class="dots" src="{{asset('assets/frontend/assets/img/home-4/dots-colour.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 hero-1-col">
                    <div class="hero-left-content">
                        <h1 class="hero-title">An award winning digital marketing
                            <span>agency</span></h1>
                        <p>Rapidiously conceptualize sustainable process improvements without superior Quickly parallel task 24/365 catalysts for change.</p>
                        <a href="#" class="btn-m6">Discover More</a>
                        <a href="#" class="btn-m7">About Us</a>
                    </div>
                </div>
                <div class="col-lg-5 hero-1-col">
                    <div class="hero-images">
                        <img src="{{asset('assets/frontend/assets/img/home-4/hero-4.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Hero <<===== 
    =========================== -->

    <!-- =====>> Hero bottom <<===== 
    =========================== -->

 
    <!-- =====>> End About <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Digital Marketing <<===== -->
 
    <!-- =====>> End Digital Marketing <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Services <<===== -->
    <section id="services-area" class="services-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-content text-center">
                        <h3>Terms And Condition</h3>
                       
                        
                    </div>
                </div>
            </div>
          
            </div>
        </div>
    </section>


<footer class="footer-area">
        <div class="footer-content background-footer-one pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-col">
                        <div class="footer-content-item">
                            <a href="#"><img src="{{asset('assets/frontend/assets/img/logo.png')}}" alt=""></a>
                            <p>Holisticly empower premium arch itectures wit hout value-addeid a ideas. Seamlessly evolve cross-pl atform experiences and open-so meta-services.
                            </p>
                            <ul>
                                <li><a href="#"> Privacy policy </a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-col">
                        <div class="footer-content-item">
                            <a class="footer-widget-title">Useful Links</a>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Client</a></li>
                                <li><a href="#">Conditions</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">History</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-col">
                        <div class="footer-content-item">
                            <a class="footer-widget-title">Company</a>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Press & Blog</a></li>
                                <li><a href="#">Content Management</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-col">
                        <div class="footer-content-item">
                            <a class="footer-widget-title">Main Office</a>
                            <p>4012 North 9th Avenue,Pensacola, FL 32503, New York</p>
                            <div class="footer-contact">
                                Call: +1 965 047 658 23
                                <br>Email: niketons@gmail.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy-right-text">
                            <p>Copyrights © 2020. All rights reserved by Pointtheme</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-social text-right">
                            <div class="footer-social-title">Follow us: </div>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =====>> End Footer <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Scroll Top <<===== -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!-- =====>> End Scroll Top <<===== 
    =========================== -->



    <!-- ===========================
    =====>> Jquery <<===== -->

    <script src="{{asset('assets/frontend/assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/plugin.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/carousel.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe2q1gFSd75jKUnTDPq0nZWaMlEu6vL30"></script>
    <script src="{{asset('assets/frontend/assets/js/bsnav.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/js/roktim.js')}}"></script>

    <!-- =====>> End Jquery <<===== 
    =========================== -->

</body>


<!-- Mirrored from skdevbd.com/codexexpert/TF-ITEM/roktim/RoktimHtml/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Dec 2021 11:25:42 GMT -->
</html>