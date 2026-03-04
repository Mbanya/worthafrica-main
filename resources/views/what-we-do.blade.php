@extends('layouts.main')

@section('title', 'What We Do - WorthAfrica Group')
@section('meta_description', 'Discover WorthAfrica Group\'s Our Solutions: Enable (Talent & Workforce Development), AdScale (Impact Enterprise), Nexus (Strategic Advisory), Nobell (Capacity Building), IKEIT (Technology & Innovation), and Projektfi (Project Delivery).')

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

    /* Custom Page Styles */
    :root {
        --color-primary-blue: #3C72FC;
        --color-primary-green: #98D052;
    }

    .service-brand-badge {
        display: inline-block;
        padding: 8px 20px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 30px;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .badge-blue { background-color: var(--color-primary-blue); }
    .badge-green { background-color: var(--color-primary-green); }

    .service-section {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid #eee;
    }
    .service-section:last-child {
        border-bottom: none;
    }

    .service-section:nth-child(even) {
        background: #f9f9f9;
    }

    .service-section .content-wrapper {
        padding: 20px 0;
    }

    .service-icon-large {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        font-size: 32px;
        color: #fff;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .icon-blue { background-color: var(--color-primary-blue); }
    .icon-green { background-color: var(--color-primary-green); }

    .service-image-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        height: 100%;
        min-height: 400px;
    }

    .service-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .service-image-container:hover img {
        transform: scale(1.05);
    }

    .breadcrumb-wrapper {
        background: linear-gradient(135deg, rgba(60, 114, 252, 0.95) 0%, rgba(152, 208, 82, 0.95) 100%),
                    url('{{ asset("assets/images/banner/strategic-advisory.png") }}') center/cover;
        padding: 120px 0 80px;
    }

    .service-nav-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* Force 3 columns */
        gap: 30px;
        margin-top: 40px;
    }

    @media (max-width: 991px) {
        .service-nav-cards {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 575px) {
        .service-nav-cards {
            grid-template-columns: 1fr;
        }
    }

    .service-nav-card {
        background: #fff;
        border-radius: 8px;
        padding: 35px 25px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        text-decoration: none;
        color: inherit;
        display: block;
        border: 1px solid #f0f0f0;
    }

    .service-nav-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        border-color: var(--color-primary-blue);
    }

    .service-nav-card .icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #fff;
    }

    .text-blue { color: var(--color-primary-blue) !important; }
    .text-green { color: var(--color-primary-green) !important; }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 40px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    .animate-on-scroll {
        opacity: 0;
        animation-fill-mode: forwards; /* key to keep state after animation */
        animation-duration: 0.8s;
        animation-timing-function: ease-out;
    }

    .animate-fade-in-up {
        animation-name: fadeInUp;
    }

    /* Simple delay utilities */
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }

</style>
@endsection

@section('content')
@include('partials.header')

<!-- Breadcrumb Area -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-left text-center">
                    <span class="pre" style="color: rgba(255,255,255,0.9);">Our Solutions</span>
                    <h1 class="title rts-text-anime-style-1" style="color: #fff; margin-bottom: 15px;">
                        What We Do
                    </h1>
                    <p class="disc" style="color: rgba(255,255,255,0.95); max-width: 700px; margin: 0 auto; font-size: 18px;">
                        Comprehensive business solutions designed to drive growth, optimize performance, and unlock your organization's full potential.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Navigation Cards -->
<div class="rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center mb--50">
                    <span class="bg-content">Solutions</span>
                    <span class="pre">Our Expertise</span>
                    <h2 class="title rts-text-anime-style-1">Our Solutions</h2>
                </div>
            </div>
        </div>
        <div class="service-nav-cards">
            <!-- Enable -->
            <a href="{{ route('home') }}#enable" class="service-nav-card">
                <div class="icon icon-blue">
                    <i class="fa-solid fa-users-gear"></i>
                </div>
                <h5>Enable</h5>
                <p>Talent & Skilled Workforce Development</p>
            </a>
            <!-- AdScale -->
            <a href="{{ route('home') }}#adscale" class="service-nav-card">
                <div class="icon icon-green">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <h5>AdScale</h5>
                <p>Transforming Impact into Enterprise</p>
            </a>
            <!-- Nexus -->
            <a href="{{ route('home') }}#nexus" class="service-nav-card">
                <div class="icon icon-blue">
                    <i class="fa-solid fa-chess-rook"></i>
                </div>
                <h5>Nexus</h5>
                <p>Strategic Advisory & Technical Assistance</p>
            </a>
            <!-- Nobell -->
            <a href="{{ route('home') }}#nobell" class="service-nav-card">
                <div class="icon icon-green">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h5>Nobell</h5>
                <p>Skills Development & Sustainable Performance</p>
            </a>
            <!-- IKEIT -->
            <a href="{{ route('home') }}#ikeit" class="service-nav-card">
                <div class="icon icon-green">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h5>IKEIT</h5>
                <p>Technology & Innovation</p>
            </a>
            <!-- Projektfi -->
            <a href="{{ route('home') }}#projektfi" class="service-nav-card">
                <div class="icon icon-blue">
                    <i class="fa-solid fa-folder-tree"></i>
                </div>
                <h5>Projektfi</h5>
                <p>Project Management & Delivery</p>
            </a>
</div>
</div>
</div>

<!-- CTA Section -->
<div class="rts-call-to-action-area-two bg_image">
    <div class="container-full">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cta-style-two-area">
                                <h3 class="title rts-text-anime-style-1">
                                    Ready to transform your business? <br>
                                    Let's discuss your needs today.
                                </h3>
                                <a href="{{ route('home') }}#contact" class="rts-btn btn-primary btn-white">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
@include('partials.sidebar')
@include('partials.utilities')
@endsection
