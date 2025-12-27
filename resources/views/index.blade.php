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
                    <img loading="lazy" src="{{ asset('assets/images/about/about-us.png') }}" alt="about">
                    {{-- <div class="small-image">
                        <img loading="lazy" src="{{ asset('assets/images/about/05.webp') }}" alt="small">
                    </div> --}}
                    <div class="counter-about-area">
                        <h2 class="counter title"><span class="odometer" data-count="10">00</span>+
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
                                                    <a href="{{ route('what-we-do') }}#nexus" class="arrow-right">
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
                                                    <a href="{{ route('what-we-do') }}#worth-index" class="arrow-right">
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
                                                    <a href="{{ route('what-we-do') }}#nobell" class="arrow-right">
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
                                                    <a href="{{ route('what-we-do') }}#worth-jobs" class="arrow-right">
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
                                                    <a href="{{ route('what-we-do') }}#a2b" class="arrow-right">
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
                                                    <a href="{{ route('what-we-do') }}#ikeit" class="arrow-right">
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
                                <a href="{{ route('home') }}#contact" class="rts-btn btn-primary btn-white">Lets Work Together</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts call to action area end -->





<!-- appoinment areas tart -->
<div id="contact" class="appoinment-area-start rts-section-gapBottom" style="padding-top: 120px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="appoinment-wrapper-one-start">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Contact Us</span>
                        <span class="pre">Get In Touch</span>
                        <h2 class="title">Send us a message</h2>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger mb-4" role="alert">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="single-input-wrapper">
                            <div class="single-input">
                                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                            </div>
                            <div class="single-input">
                                <input type="tel" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
                            </div>
                        </div>
                        <div class="single-input">
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        </div>
                        <div class="single-input mb--30">
                            <textarea name="message" placeholder="Message" required>{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="rts-btn btn-primary">Submit Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="appoinment-thumbnail">
                    <img loading="lazy" src="{{ asset('assets/images/appoinment/contact.png') }}" alt="appoinment">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- appoinment areas end -->

<!-- rts footer two area wrapper -->
@include('partials.footer')
<!-- rts footer two area wrapper end -->



@include('partials.sidebar')
<!-- inner menu area desktop End -->


@include('partials.utilities')
@endsection
