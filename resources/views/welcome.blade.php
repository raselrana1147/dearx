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

    <section class="hero-bottom-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="services-item">
                        <img src="{{asset('assets/frontend/assets/img/website-icon.png')}}" alt="">
                        <h3>Popular Story</h3>
                        <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item">
                        <img src="{{asset('assets/frontend/assets/img/seo-icon.png')}}" alt="">
                        <h3>Sad Story</h3>
                        <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item">
                        <img src="{{asset('assets/frontend/assets/img/market-icon.png')}}" alt="">
                        <h3>Heart touching story</h3>
                        <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item">
                        <img src="{{asset('assets/frontend/assets/img/app-icon.png')}}" alt="">
                        <h3>Love Story</h3>
                        <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====>> End Hero bottom <<===== 
    =========================== -->

    <!-- ===========================
    =====>> About <<===== -->
    <section id="about-us" class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row text-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-30 about-four-col">
                            <div class="about-four-single">
                                <div class="about-image-four">
                                    <img src="{{asset('assets/frontend/assets/img/scul-icon.png')}}" alt="">
                                </div>
                                <div class="about-four-inner">
                                    <h2>Making Plan</h2>
                                    <p>Naff at public school blog bobby Elizabeth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-30 about-four-col">
                            <div class="about-four-single">
                                <div class="about-four-inner">
                                    <h2><span>20</span> years of Experiences</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-30 about-four-col">
                            <div class="about-four-single">
                                <div class="about-image-four">
                                    <img src="{{asset('assets/frontend/assets/img/setting-icon.png')}}" alt="">
                                </div>
                                <div class="about-four-inner">
                                    <h2>Working Plan</h2>
                                    <p>Naff at public school blog bobby Elizabeth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-30 about-four-col">
                            <div class="about-four-single">
                                <div class="about-image-four">
                                    <img src="{{asset('assets/frontend/assets/img/rocket2-icon.png')}}" alt="">
                                </div>
                                <div class="about-four-inner">
                                    <h2>Launch Project</h2>
                                    <p>Naff at public school blog bobby Elizabeth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 about-four-col">

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-30 about-four-col">
                            <div class="about-four-single">
                                <div class="about-four-inner">
                                    <h2>We are pinnacle of success</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-30">
                    <div class="about-content">
                        <div class="section-content">
                            <h3>About Us</h3>
                            <h2 class="section-title">We try to serve best service Business & Agency Compnay</h2>
                            <div class="section-border"><span></span></div>
                        </div>
                        <div class="about-text">
                            <p>Cheeky bugger chip shop David super chinwag buggered tickety boo do one asii chimney pot, blow off well pardon me old lurgy absolutely bladdered bodge ours faff about argy-bargy, the wireless vagabod bite your arm off in my
                                flat I don't want no agro twit pear shaped.
                                <br><br> Morish grub David are you taking the piss mufty eaton I the little rotter bevv ours tickety boo only well pardon me old lurgy absolutely bladdered bodge abevv faff about argy-bargy, the wireless.!
                            </p>
                            <a href="#" class="btn-m6">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End About <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Digital Marketing <<===== -->
    <section id="digital-marketing-area" class="digital-marketing-area background-color-2 pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="marketing-forms-area text-center">
                        <h2>Check your Website???s Digital Marketing</h2>
                        <div class="section-border"><span></span></div>
                        <form class="digital-m-form" action="#">
                            <input class="dig-form" type="text" name="email" placeholder="Enter your email address here*">
                            <button type="submit" class="btn-m6">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Digital Marketing <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Services <<===== -->
    <section id="services-area" class="services-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-content text-center">
                        <h3>Our Services</h3>
                        <h2 class="section-title">Explore Our Data Services</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row pt-40">
                <div class="col-lg-4 col-md-6 service-child-all">
                    <div class="services-item-fours media">
                        <div class="for-bg-fours">
                            <img class="fours-images" src="{{asset('assets/frontend/assets/img/home-4/optimization.png')}}" alt="">
                        </div>
                        <div class="service-media-four">
                            <h3>Search optimization</h3>
                            <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-child-all">
                    <div class="services-item-fours media">
                        <div class="for-bg-fours">
                            <img class="fours-images" src="{{asset('assets/frontend/assets/img/home-4/marketing.png')}}" alt="">
                        </div>
                        <div class="service-media-four">
                            <h3>Social marketing</h3>
                            <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-child-all">
                    <div class="services-item-fours media">
                        <div class="for-bg-fours">
                            <img class="fours-images" src="{{asset('assets/frontend/assets/img/home-4/affiliate.png')}}" alt="">
                        </div>
                        <div class="service-media-four">
                            <h3>Amazon affiliate</h3>
                            <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-child-all">
                    <div class="services-item-fours media">
                        <div class="for-bg-fours">
                            <img class="fours-images" src="{{asset('assets/frontend/assets/img/home-4/developments.png')}}" alt="">
                        </div>
                        <div class="service-media-four">
                            <h3>Web development</h3>
                            <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-child-all">
                    <div class="services-item-fours media">
                        <div class="for-bg-fours">
                            <img class="fours-images" src="{{asset('assets/frontend/assets/img/home-4/app-develo.png')}}" alt="">
                        </div>
                        <div class="service-media-four">
                            <h3>App Development</h3>
                            <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-child-all">
                    <div class="services-item-fours media">
                        <div class="for-bg-fours">
                            <img class="fours-images" src="{{asset('assets/frontend/assets/img/home-4/content-rocket.png')}}" alt="">
                        </div>
                        <div class="service-media-four">
                            <h3>Content Writing</h3>
                            <p>Naff at public school blog bobby Elizabeth super blo bamboozled blab.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Services <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Counter <<===== -->
    <div class="counter-area count-areas pt-130 pb-130">
        <div class="counter-absolute">
            <img src="{{asset('assets/frontend/assets/img/home-4/counter-top.jpg')}}" alt="">
            <img src="{{asset('assets/frontend/assets/img/home-4/counter-bottom.jpg')}}" alt="">
        </div>
        <div class="container">
            <div class="row counter-paddings">
                <div class="col-lg-6 col-md-12">
                    <div class="counter-images">
                        <img src="{{asset('assets/frontend/assets/img/home-4/counter-main.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 counter-child-col">
                            <div class="count-single">
                                <div class="count-images">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/project-c.png')}}" alt="">
                                </div>
                                <div class="count-fonts"><span class="counter">2,165 </span>+</div>
                                <p>Completed Projects</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 counter-child-col">
                            <div class="count-single">
                                <div class="count-images">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/user-c.png')}}" alt="">
                                </div>
                                <div class="count-fonts"><span class="counter">550 </span>+</div>
                                <p>Worldwide Users</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 counter-child-col">
                            <div class="count-single">
                                <div class="count-images">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/experience-c.png')}}" alt="">
                                </div>
                                <div class="count-fonts"><span class="counter">50 </span>+</div>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 counter-child-col">
                            <div class="count-single">
                                <div class="count-images">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/winner-c.png')}}" alt="">
                                </div>
                                <div class="count-fonts"><span class="counter">150 </span>+</div>
                                <p>Award Winner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====>> End Counter <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Testimonial <<===== -->
    <section id="testimonial-area" class="testimonial-areas pt-130 pb-130">
        <div class="testimonial-right-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-content text-center">
                        <h3>Testimonial</h3>
                        <h2 class="section-title">What???s Our Client Say</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row pt-70">
                <div class="col-lg-6 col-md-12 order-change-col">
                    <div class="testimonial-clicked">
                        <div class="testimonial-images">
                            <img src="{{asset('assets/frontend/assets/img/home-4/test1.png')}}" alt="">
                        </div>
                        <div class="testimonial-images">
                            <img src="{{asset('assets/frontend/assets/img/home-4/test2.png')}}" alt="">
                        </div>
                        <div class="testimonial-images">
                            <img src="{{asset('assets/frontend/assets/img/home-4/test3.png')}}" alt="">
                        </div>
                        <div class="testimonial-images">
                            <img src="{{asset('assets/frontend/assets/img/home-4/test4.png')}}" alt="">
                        </div>
                        <div class="testimonial-images">
                            <img src="{{asset('assets/frontend/assets/img/home-4/test5.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="testimonial-changes">
                        <div class="testimonial-inner-text">
                            <div class="display-flex media">
                                <div class="testimonial-inner-imgs">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/testimonial-four.png')}}" alt="">
                                </div>
                                <div class="testimonial-single-txts">
                                    <p>Digital is the largest digital agency USA with a team off limited than 70 people. We are famous for our as a company culture.</p>
                                    <h4>Abubokker Siddik A K</h4>
                                    <h5>Graphic Designer</h5>
                                    <div class="testimonial-icons">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-inner-text">
                            <div class="display-flex media">
                                <div class="testimonial-inner-imgs">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/testimonial-four2.png')}}" alt="">
                                </div>
                                <div class="testimonial-single-txts">
                                    <p>Digital is the largest digital agency USA with a team off limited than 70 people. We are famous for our as a company culture.</p>
                                    <h4>Abubokker Siddik A K</h4>
                                    <h5>Graphic Designer</h5>
                                    <div class="testimonial-icons">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-inner-text">
                            <div class="display-flex media">
                                <div class="testimonial-inner-imgs">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/testimonial-four3.png')}}" alt="">
                                </div>
                                <div class="testimonial-single-txts">
                                    <p>Digital is the largest digital agency USA with a team off limited than 70 people. We are famous for our as a company culture.</p>
                                    <h4>Abubokker Siddik A K</h4>
                                    <h5>Graphic Designer</h5>
                                    <div class="testimonial-icons">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-inner-text">
                            <div class="display-flex media">
                                <div class="testimonial-inner-imgs">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/testimonial-four4.png')}}" alt="">
                                </div>
                                <div class="testimonial-single-txts">
                                    <p>Digital is the largest digital agency USA with a team off limited than 70 people. We are famous for our as a company culture.</p>
                                    <h4>Abubokker Siddik A K</h4>
                                    <h5>Graphic Designer</h5>
                                    <div class="testimonial-icons">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-inner-text">
                            <div class="display-flex media">
                                <div class="testimonial-inner-imgs">
                                    <img src="{{asset('assets/frontend/assets/img/home-4/testimonial-four5.png')}}" alt="">
                                </div>
                                <div class="testimonial-single-txts">
                                    <p>Digital is the largest digital agency USA with a team off limited than 70 people. We are famous for our as a company culture.</p>
                                    <h4>Abubokker Siddik A K</h4>
                                    <h5>Graphic Designer</h5>
                                    <div class="testimonial-icons">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Testimonial <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Team <<===== -->
    <section id="Team-members" class="Team-members-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-content white-section text-center">
                        <h3>Our Team</h3>
                        <h2 class="section-title">Our Expert Members</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row pt-40">
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-team-wrapper">
                        <div class="single-team-img">
                            <img src="{{asset('assets/frontend/assets/img/home-4/team1.png')}}" alt="">
                        </div>
                        <div class="single-team-inner-text">
                            <h3>Makross Jento</h3>
                            <h5>Graphic Designer</h5>
                        </div>
                        <div class="single-team-socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-team-wrapper">
                        <div class="single-team-img">
                            <img src="{{asset('assets/frontend/assets/img/home-4/team2.png')}}" alt="">
                        </div>
                        <div class="single-team-inner-text">
                            <h3>Makross Jento</h3>
                            <h5>Graphic Designer</h5>
                        </div>
                        <div class="single-team-socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-team-wrapper">
                        <div class="single-team-img">
                            <img src="assets/img/home-4/team3.png" alt="">
                        </div>
                        <div class="single-team-inner-text">
                            <h3>Makross Jento</h3>
                            <h5>Graphic Designer</h5>
                        </div>
                        <div class="single-team-socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Team <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Blog <<===== -->
    <section id="blog-area" class="blog-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-content text-center">
                        <h3>Recent Blog</h3>
                        <h2 class="section-title">Create a blog and share your Post</h2>
                        <div class="section-border"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row pt-40">
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-blog-wrapper-all">
                        <a href="blog-details.html" class="single-blog-photo">
                            <img src="{{asset('assets/frontend/assets/img/home-4/blog1.png')}}" alt="">
                        </a>
                        <div class="blog-left-right">
                            <a href="blog-details.html" class="blog-single-text">
                                <h3>25 Rules to be successful in your business.</h3>
                            </a>
                            <div class="blog-images-text">
                                <img src="{{asset('assets/frontend/assets/img/home-4/blog-small1.png')}}" alt="">
                                <p>by Admin</p>
                                <i class="far fa-clock"></i>
                                <p>March 03 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-blog-wrapper-all">
                        <a href="blog-details.html" class="single-blog-photo">
                            <img src="{{asset('assets/frontend/assets/img/home-4/blog2.png')}}" alt="">
                        </a>
                        <a href="blog-details.html" class="blog-single-text">
                            <h3>25 Rules to be successful in your business.</h3>
                        </a>
                        <div class="blog-images-text">
                            <img src="{{asset('assets/frontend/assets/img/home-4/blog-small1.png')}}" alt="">
                            <p>by Admin</p>
                            <i class="far fa-clock"></i>
                            <p>March 03 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="single-blog-wrapper-all">
                        <a href="blog-details.html" class="single-blog-photo">
                            <img src="{{asset('assets/frontend/assets/img/home-4/blog3.png')}}" alt="">
                        </a>
                        <a href="blog-details.html" class="blog-single-text">
                            <h3>25 Rules to be successful in your business.</h3>
                        </a>
                        <div class="blog-images-text">
                            <img src="{{asset('assets/frontend/assets/img/home-4/blog-small1.png')}}" alt="">
                            <p>by Admin</p>
                            <i class="far fa-clock"></i>
                            <p>March 03 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Blog <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Discover Niketion <<===== -->
    <section id="discover-niketion" class="discover-niketion-area2 jarallax pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="discover-niketion-text">
                        <h2>Discover Niketion. It's easier than you think.</h2>
                        <p>Progressively deliver market-driven quality vectors rather than goal-oriented niche markets.
                        </p>
                        <a href="#" class="btn-m8">Buy Roktim $11 Only</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Discover Niketion <<===== 
    =========================== -->

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
                            <p>Copyrights ?? 2020. All rights reserved by Pointtheme</p>
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