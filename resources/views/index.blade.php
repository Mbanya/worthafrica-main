@extends('layouts.main')

@section('styles')
<style>
    .header-main-one-wrapper .thumbnail a img {
        max-width: 250px !important;
        max-height: 90px !important;
        width: auto;
        height: auto;
        object-fit: contain;
    }

    .header-main-one-wrapper {
        padding: 15px 0;
    }

    .header-main-one-wrapper .nav-area ul.nav-menu {
        display: flex;
        align-items: center;
        gap: 40px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav {
        margin: 0;
        padding: 0;
    }

    .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav a {
        padding: 0 5px;
        white-space: nowrap;
    }

    @media screen and (max-width: 1300px) {
        .header-main-one-wrapper .nav-area ul.nav-menu {
            gap: 30px;
        }
    }

    @media screen and (max-width: 1200px) {
        .header-main-one-wrapper .nav-area ul.nav-menu {
            gap: 25px;
        }
    }

    /* Sidebar alignment styles */
    .rts-sidebar-menu-desktop {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .rts-sidebar-menu-desktop .logo-1 {
        display: block;
        margin-bottom: 30px;
        width: 100%;
    }

    .rts-sidebar-menu-desktop .logo-1 img.logo {
        max-width: 150px;
        height: auto;
        display: block;
    }

    .rts-sidebar-menu-desktop .body {
        width: 100%;
    }

    .rts-sidebar-menu-desktop .get-in-touch {
        margin-top: 30px;
    }

    .rts-sidebar-menu-desktop .get-in-touch .wrapper {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .rts-sidebar-menu-desktop .get-in-touch .wrapper .single {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .rts-sidebar-menu-desktop .get-in-touch .wrapper .single i {
        margin-right: 0;
        margin-bottom: 0;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .rts-sidebar-menu-desktop .get-in-touch .wrapper .single a {
        word-break: break-word;
        line-height: 1.5;
    }

    .mobile-menu .mainmenu {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .mobile-menu .mainmenu li {
        width: 100%;
    }

    .mobile-menu .mainmenu li a.main {
        display: block;
        padding: 12px 0;
        width: 100%;
    }
</style>
@endsection

@section('content')
@include('partials.header')


@include('partials.slider')



<!-- rts about area start -->
<div id="who-we-are" class="rts-about-area-two rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="left-thumbnail-about-area-two">
                    <img loading="lazy" src="{{ asset('assets/images/about/04.webp') }}" alt="about">
                    <div class="small-image">
                        <img loading="lazy" src="{{ asset('assets/images/about/05.webp') }}" alt="small">
                    </div>
                    <div class="counter-about-area">
                        <h2 class="counter title"><span class="odometer" data-count="25">00</span>+
                        </h2>
                        <span>Year of experience</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_sm--80 mt_md--80">
                <div class="about-inner-content-two">
                    <div class="title-style-two left">
                        <span class="bg-content">About Us</span>
                        <span class="pre">More About Us</span>
                        <h2 class="title rts-text-anime-style-1">Get to know us</h2>
                    </div>
                    <div class="about-between-wrapper mb--50">
                        <p class="disc mb--40">
                            We focus on investing in the African people and growing their investment ideas
                        </p>
                        <div class="check-wrapper-area">
                            <h3 class="title mb--20">Our Belief</h3>
                            <div class="single-check mt--15">
                                <i class="fa-regular fa-circle-check" style="color: #3C72FC;"></i>
                                <p>Investing in the African people and growing their investment ideas.</p>
                            </div>
                            <div class="single-check mt--15">
                                <i class="fa-regular fa-circle-check" style="color: #3C72FC;"></i>
                                <p>Harnessing the continent's human capital while leveraging on technology.</p>
                            </div>
                            <div class="single-check mt--15">
                                <i class="fa-regular fa-circle-check" style="color: #3C72FC;"></i>
                                <p>Finding new ways to sustainably build a prosperous Africa.</p>
                            </div>
                        </div>
                        <p class="disc mt--40 mb--40">
                            At WORTHAFRICA, we believe that Africa's real value is its people and their enterprising spirit. We acknowledge and cherish the vast expertise available within the African people.
                        </p>
                    </div>
                    <div class="call-and-sign-area two">
                        <div class="call-area">
                            <div class="icon" style="background-color: #98D052;">
                                <i class="fa-sharp fa-regular fa-phone-volume text-white"></i>
                            </div>
                            <div class="information">
                                <span>Call us anytime</span>
                                <a href="tel:+254700123456">
                                    <h6 class="title">+254 700 123 456</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-area">
        <img loading="lazy" src="{{ asset('assets/images/about/shape/01.svg') }}" alt="shape" class="one">
        <img loading="lazy" src="{{ asset('assets/images/about/shape/02.svg') }}" alt="shape" class="two">
    </div>
</div>
<!-- rts about area end -->


<!-- rts service area start -->
<div id="what-we-do" class="rts-service-area pt--40 pb--60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Services</span>
                    <span class="pre">our Service</span>
                    <h2 class="title rts-text-anime-style-1">High Quality Services
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-2 mt--30">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-bg-style-one-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-style-swiper-wrapper-two">
                                <div class="swiper mySwiper-service-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-service-signle-wrapper">
                                                <div class="icons">
                                                    <img loading="lazy" src="{{ asset('assets/images/service/icons/01.svg') }}" alt="service">
                                                </div>
                                                <div class="information">
                                                    <h5 class="title">Advisory</h5>
                                                    <p class="disc">
                                                        We work with clients to develop tailored advisory and technical support solutions to meet their needs wherever their organization may be in the business cycle.
                                                    </p>
                                                    <a href="service-details.html" class="arrow-right">
                                                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                        <span>Learn More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-service-signle-wrapper">
                                                <div class="icons">
                                                    <img loading="lazy" src="{{ asset('assets/images/service/icons/02.svg') }}" alt="service">
                                                </div>
                                                <div class="information">
                                                    <h5 class="title">Analytics</h5>
                                                    <p class="disc">
                                                        Using our M&amp;E and Analytics services guarantees our clients time and cost savings; value for money; and guaranteed quality results.
                                                    </p>
                                                    <a href="service-details.html" class="arrow-right">
                                                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                        <span>Learn More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-service-signle-wrapper">
                                                <div class="icons">
                                                    <img loading="lazy" src="{{ asset('assets/images/service/icons/03.svg') }}" alt="service">
                                                </div>
                                                <div class="information">
                                                    <h5 class="title">Training</h5>
                                                    <p class="disc">
                                                        Our training solutions build competent manpower pool ready to face the technical and management challenges across key industries and sectors.
                                                    </p>
                                                    <a href="service-details.html" class="arrow-right">
                                                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                        <span>Learn More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-service-signle-wrapper">
                                                <div class="icons">
                                                    <img loading="lazy" src="{{ asset('assets/images/service/icons/01.svg') }}" alt="service">
                                                </div>
                                                <div class="information">
                                                    <h5 class="title">Jobs</h5>
                                                    <p class="disc">
                                                        Under our premier WORTHJOBS brand, we match great people with great jobs. We use the advanced technology to help you find the best.
                                                    </p>
                                                    <a href="service-details.html" class="arrow-right">
                                                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                        <span>Learn More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-service-signle-wrapper">
                                                <div class="icons">
                                                    <img loading="lazy" src="{{ asset('assets/images/service/icons/02.svg') }}" alt="service">
                                                </div>
                                                <div class="information">
                                                    <h5 class="title">Internships</h5>
                                                    <p class="disc">
                                                        A2B is our flagship internship service focused on providing opportunities to as many of the brilliant young talents and graduates into the job market
                                                    </p>
                                                    <a href="service-details.html" class="arrow-right">
                                                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                        <span>Learn More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-service-signle-wrapper">
                                                <div class="icons">
                                                    <img loading="lazy" src="{{ asset('assets/images/service/icons/03.svg') }}" alt="service">
                                                </div>
                                                <div class="information">
                                                    <h5 class="title">Technology</h5>
                                                    <p class="disc">
                                                        Our goal is to ensure that your business never fall short of effective IT services that will allow your systems to stay current and up-to-date 24/7
                                                    </p>
                                                    <a href="service-details.html" class="arrow-right">
                                                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                        <span>Learn More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service area end -->


<!-- rts call to action area start -->
<div class="rts-call-to-action-area-two bg_image">
    <div class="container-full">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cta-style-two-area">
                                <h3 class="title rts-text-anime-style-1">
                                    Let’s discuss about how we can help <br>
                                    make your business better
                                </h3>
                                <a href="contact.html" class="rts-btn btn-primary btn-white">Lets Work Together</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts call to action area end -->



<!-- rts business goal area start -->
<div class="business-goal-area-2 rts-section-gap">
    <div class="container pt--30">
        <div class="row">
            <div class="col-lg-6">
                <div class="consultancy-style-one">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Business Goal</span>
                        <span class="pre">JUST A CONSULTANCY</span>
                        <h2 class="title rts-text-anime-style-1">We know how to manage <br>
                            business globally
                        </h2>
                    </div>
                    <div class="signle-consultancy mb--30">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('assets/images/about/icons/01.svg') }}" alt="">
                        </div>
                        <div class="information">
                            <h4 class="title">Best Business Consulting</h4>
                            <p class="disc">
                                Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                gravida
                                rutrum
                            </p>
                        </div>
                    </div>
                    <div class="signle-consultancy">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('assets/images/about/icons/02.svg') }}" alt="">
                        </div>
                        <div class="information">
                            <h4 class="title">24/7 Customer Support</h4>
                            <p class="disc">
                                Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                gravida
                                rutrum
                            </p>
                        </div>
                    </div>
                    <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                        <a href="contact.html" class="rts-btn btn-primary">Contact Us</a>
                        <div class="vedio-icone">
                            <a class="video-play-button play-video popup-video"
                                href="https://www.youtube.com/watch?v=vZE0j_WCRvI"
                                aria-label="Watch promotional video on YouTube">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a href="#section1" class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumbnail-business-area-right-two">
                    <div class="large-thumbnail">
                        <img loading="lazy" src="{{ asset('assets/images/business-goal/02.webp') }}" alt="">
                    </div>
                    <div class="small-thumbnail images-r">
                        <img loading="lazy" src="{{ asset('assets/images/business-goal/01.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts business goal area end -->
</div>

{{-- <!-- rts counter up area start -->
<div class="rts-counter-up-area rts-section-gap counter-bg">
    <div class="container">
        <div class="row g-5">
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter">
                    <div class="icon">
                        <img loading="lazy" src="{{ asset('assets/images/counterup/icon/01.svg') }}" alt="Business_counter">
                    </div>
                    <div class="counter-details">
                        <h2 class="counter title"><span class="odometer" data-count="199">00</span>+
                        </h2>
                        <p class="disc">Successful Projects</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center two pl--30">
                    <div class="icon">
                        <img loading="lazy" src="{{ asset('assets/images/counterup/icon/02.svg') }}" alt="Business_counter">
                    </div>
                    <div class="counter-details">
                        <h2 class="counter title"><span class="odometer" data-count="300">00</span>+
                        </h2>
                        <p class="disc">Media Activities</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 justify-content-center three pl--50 pl_md--10 pl_sm--0">
                    <div class="icon">
                        <img loading="lazy" src="{{ asset('assets/images/counterup/icon/03.svg') }}" alt="Business_counter">
                    </div>
                    <div class="counter-details">
                        <h2 class="counter title"><span class="odometer" data-count="699">00</span>+
                        </h2>
                        <p class="disc">Skilled Experts</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter pl--10 four">
                    <div class="icon">
                        <img loading="lazy" src="{{ asset('assets/images/counterup/icon/04.svg') }}" alt="Business_counter">
                    </div>
                    <div class="counter-details">
                        <h2 class="counter title"><span class="odometer" data-count="120">00</span>+
                        </h2>
                        <p class="disc">Happy Clients</p>
                    </div>
                </div>
            </div>
            <!-- counter up area -->
        </div>
    </div>
</div>
<!-- rts counter up area end -->

<!-- start gallery section -->
<div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
    <div class="container pt--40">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper-gallery-project">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Projects</span>
                        <span class="pre">Popular Projects</span>
                        <h2 class="title rts-text-anime-style-1">Projects
                            Our Completed Projects
                        </h2>
                    </div>

                    <div class="swiper-paginations"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="project-style-one-wrapper">

                    <div class="swiper mySwiper-project-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-style-one">
                                    <a href="project-details.html" class="thumbnail">
                                        <img loading="lazy" src="{{ asset('assets/images/project/01.webp') }}" alt="project">
                                    </a>
                                    <div class="inner-content">
                                        <a href="project-details.html">
                                            <h5 class="title">Business Growth</h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-style-one">
                                    <a href="project-details.html" class="thumbnail">
                                        <img loading="lazy" src="{{ asset('assets/images/project/02.webp') }}" alt="project">
                                    </a>
                                    <div class="inner-content">
                                        <a href="project-details.html">
                                            <h5 class="title">Startup Solution</h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-style-one">
                                    <a href="project-details.html" class="thumbnail">
                                        <img loading="lazy" src="{{ asset('assets/images/project/01.webp') }}" alt="project">
                                    </a>
                                    <div class="inner-content">
                                        <a href="project-details.html">
                                            <h5 class="title">Marketing Growth</h5>
                                        </a>
                                        <span>Business Strategy</span>
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
<!-- start gallery section -->


<div class="rts-trusted-client rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-client-client text-center">
                    <p class="client-title">Our Trusted Clients</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="client-wrapper-one">
                <a href="#" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2"><img
                        src="{{ asset('assets/images/client/1.webp') }}" alt="business_invena"></a>
                <a href="#" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2"><img
                        src="{{ asset('assets/images/client/2.webp') }}" alt="business_invena"></a>
                <a href="#" data-animation="fadeInUp" data-delay="0.3" data-duration="1.2"><img
                        src="{{ asset('assets/images/client/3.webp') }}" alt="business_invena"></a>
                <a href="#" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2"><img
                        src="{{ asset('assets/images/client/4.webp') }}" alt="business_invena"></a>
                <a href="#" data-animation="fadeInUp" data-delay="0.5" data-duration="1.2"><img
                        src="{{ asset('assets/images/client/5.webp') }}" alt="business_invena"></a>
                <a href="#" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2"><img
                        src="{{ asset('assets/images/client/6.webp') }}" alt="business_invena"></a>
            </div>
        </div>
    </div>
</div>

<!-- rts team area start -->
<div class="rts-team-area rts-section-gapBottom pt--40">
    <div class="container">
        <div class="row">
            <div class="title-style-two center">
                <span class="bg-content">Members</span>
                <span class="pre">Expert Members</span>
                <h2 class="title rts-text-anime-style-1">Professionals Team
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper mySwiperh1_team pt--50 pb--80" dir="ltr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img loading="lazy" src="{{ asset('assets/images/team/04.webp') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details" dir="rtl">
                                    <a href="team-details.html">
                                        <h5 class="title">Archer Graham</h5>
                                    </a>
                                    <p>Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img loading="lazy" src="{{ asset('assets/images/team/05.webp') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details" dir="rtl">
                                    <a href="team-details.html">
                                        <h5 class="title">Amelia Clover</h5>
                                    </a>
                                    <p>Co-Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img loading="lazy" src="{{ asset('assets/images/team/06.webp') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details" dir="rtl">
                                    <a href="team-details.html">
                                        <h5 class="title">Beckett Hayden</h5>
                                    </a>
                                    <p>Deputy Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img loading="lazy" src="{{ asset('assets/images/team/07.webp') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details" dir="rtl">
                                    <a href="team-details.html">
                                        <h5 class="title">Julian Wyat</h5>
                                    </a>
                                    <p>Finance Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="team-details.html">
                                        <img loading="lazy" src="{{ asset('assets/images/team/07.webp') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details" dir="rtl">
                                    <a href="team-details.html">
                                        <h5 class="title">Julian Wyat</h5>
                                    </a>
                                    <p>Finance Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts team area end --> --}}



{{-- <!-- rts clients review area start -->
<div class="rts-client-review-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper" dir="ltr">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Review</span>
                        <span class="pre">Our Testimonial</span>
                        <h2 class="title ">Our Client Reviews
                        </h2>
                    </div>
                    <div class="pagination-wrapper">
                        <div class="swiper-pagination-fraction"></div>
                        <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="testimonials-wrapper-swiper-demo-2">
                    <div class="swiper mySwiper-testimonials-dmeo-2" dir="ltr">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonials-main-wrapper-two">
                                    <div class="left-thumbnail">
                                        <img loading="lazy" src="{{ asset('assets/images/testimonials/01.webp') }}" alt="testimonials">
                                    </div>
                                    <div class="right-content-testimonials">
                                        <p class="disc">
                                            I can't recommend The Gourmet Haven enough. It's a place for special
                                            occasions, date
                                            nights, or whenever you're in the mood for a culinary adventure. The
                                            combination of
                                            exceptional.
                                        </p>
                                        <div class="name-desig">
                                            <h6 class="title">William Henry</h6>
                                            <p>Designer at <b>Vertex Agency</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-main-wrapper-two">
                                    <div class="left-thumbnail">
                                        <img loading="lazy" src="{{ asset('assets/images/testimonials/01.webp') }}" alt="testimonials">
                                    </div>
                                    <div class="right-content-testimonials">
                                        <p class="disc">
                                            I can't recommend The Gourmet Haven enough. It's a place for special
                                            occasions, date
                                            nights, or whenever you're in the mood for a culinary adventure. The
                                            combination of
                                            exceptional.
                                        </p>
                                        <div class="name-desig">
                                            <h6 class="title">William Henry</h6>
                                            <p>Designer at <b>Vertex Agency</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-main-wrapper-two">
                                    <div class="left-thumbnail">
                                        <img loading="lazy" src="{{ asset('assets/images/testimonials/01.webp') }}" alt="testimonials">
                                    </div>
                                    <div class="right-content-testimonials">
                                        <p class="disc">
                                            I can't recommend The Gourmet Haven enough. It's a place for special
                                            occasions, date
                                            nights, or whenever you're in the mood for a culinary adventure. The
                                            combination of
                                            exceptional.
                                        </p>
                                        <div class="name-desig">
                                            <h6 class="title">William Henry</h6>
                                            <p>Designer at <b>Vertex Agency</b></p>
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
<!-- rts clients review area end --> --}}


<!-- rts careers area start -->
<div id="careers" class="rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Careers</span>
                    <span class="pre">Join Our Team</span>
                    <h2 class="title rts-text-anime-style-1">Build Your Career With Us
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--30">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="disc">We are always looking for talented individuals to join our team. Explore opportunities and grow with us.</p>
                    <a href="#contact" class="rts-btn btn-primary mt--30">View Open Positions</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts careers area end -->


<!-- appoinment areas tart -->
<div id="contact" class="appoinment-area-start rts-section-gapBottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="appoinment-wrapper-one-start">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Hello</span>
                        <span class="pre">Make An Appointment</span>
                        <h2 class="title">Request a free quote</h2>
                    </div>
                    <form action="#">
                        <div class="single-input-wrapper">
                            <div class="single-input">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="single-input">
                                <input type="number" placeholder="Number">
                            </div>
                        </div>
                        <div class="single-input">
                            <input type="email" placeholder="Your Email">
                        </div>
                        <div class="single-input mb--30">
                            <textarea placeholder="Type Your Message"></textarea>
                        </div>
                        <button class="rts-btn btn-primary">Submit Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="appoinment-thumbnail">
                    <img loading="lazy" src="{{ asset('assets/images/appoinment/01.webp') }}" alt="appoinment">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- appoinment areas end -->



<!-- rts blog area start -->
{{-- <div class="rts-blog-area rts-section-gapBottom pt--40 mb--310">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Blog</span>
                    <span class="pre">Blog & News</span>
                    <h2 class="title">Recent blog post
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="col-lg-12">
                <div class="blog-swiper-style-one">
                    <div class="swiper mySwiper-blog-one">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-blog-area-one">
                                    <p>Business Solution / <span>by David Dolean</span></p>
                                    <a href="blog-details.html">
                                        <h4 class="title">Building a Brand That from Market Leaders</h4>
                                    </a>
                                    <div class="bottom-details">
                                        <a href="blog-details.html" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('assets/images/blog/01.webp') }}" alt="blog-area">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-blog-area-one">
                                    <p>Business Solution / <span>by David Dolean</span></p>
                                    <a href="blog-details.html">
                                        <h4 class="title">Transforming Your Best Of Approach to Business</h4>
                                    </a>
                                    <div class="bottom-details">
                                        <a href="blog-details.html" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('assets/images/blog/02.webp') }}" alt="blog-area">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-blog-area-one">
                                    <p>Business Solution / <span>by David Dolean</span></p>
                                    <a href="blog-details.html">
                                        <h4 class="title">The quick settle tips of the new ages exist</h4>
                                    </a>
                                    <div class="bottom-details">
                                        <a href="blog-details.html" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('assets/images/blog/03.webp') }}" alt="blog-area">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-blog-area-one">
                                    <p>Business Solution / <span>by David Dolean</span></p>
                                    <a href="blog-details.html">
                                        <h4 class="title">Building a Brand That from Market Leaders</h4>
                                    </a>
                                    <div class="bottom-details">
                                        <a href="blog-details.html" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('assets/images/blog/01.webp') }}" alt="blog-area">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-blog-area-one">
                                    <p>Business Solution / <span>by David Dolean</span></p>
                                    <a href="blog-details.html">
                                        <h4 class="title">Transforming Your Best Of Approach to Business</h4>
                                    </a>
                                    <div class="bottom-details">
                                        <a href="blog-details.html" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('assets/images/blog/02.webp') }}" alt="blog-area">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-blog-area-one">
                                    <p>Business Solution / <span>by David Dolean</span></p>
                                    <a href="blog-details.html">
                                        <h4 class="title">The quick settle tips of the new ages exist</h4>
                                    </a>
                                    <div class="bottom-details">
                                        <a href="blog-details.html" class="thumbnail">
                                            <img loading="lazy" src="{{ asset('assets/images/blog/03.webp') }}" alt="blog-area">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- rts blog area end -->



<!-- rts footer two area wrapper -->
@include('partials.footer')
<!-- rts footer two area wrapper end -->



@include('partials.sidebar')
<!-- inner menu area desktop End -->


@include('partials.utilities')
@endsection
