@extends('layouts.main')

@section('title', 'What We Do - WorthAfrica Group')
@section('meta_description', 'Discover WorthAfrica Group\'s comprehensive business solutions: Strategy Consulting (Nexus), Performance Analytics (Worth Index), Executive Search (Worth Jobs), Training (Nobell), Internships (A2B), and IT Solutions (IKEIT).')

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
                    <h2 class="title rts-text-anime-style-1">Six Pillars of Excellence</h2>
                </div>
            </div>
        </div>
        <div class="service-nav-cards">
            <!-- Nexus -->
            <a href="#nexus" class="service-nav-card">
                <div class="icon icon-blue">
                    <i class="fa-solid fa-chess-rook"></i>
                </div>
                <h5>Nexus</h5>
                <p>Strategy & Performance Consulting</p>
            </a>
            <!-- Worth Index -->
            <a href="#worth-index" class="service-nav-card">
                <div class="icon icon-green">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <h5>Worth Index</h5>
                <p>M&E & Performance Analytics</p>
            </a>
            <!-- Worth Jobs -->
            <a href="#worth-jobs" class="service-nav-card">
                <div class="icon icon-blue">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h5>Worth Jobs</h5>
                <p>Executive Search & HR Solutions</p>
            </a>
            <!-- Nobell -->
            <a href="#nobell" class="service-nav-card">
                <div class="icon icon-green">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h5>Nobell</h5>
                <p>Training & Development</p>
            </a>
            <!-- A2B -->
            <a href="#a2b" class="service-nav-card">
                <div class="icon icon-blue">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h5>A2B</h5>
                <p>Internships & Apprenticeships</p>
            </a>
            <!-- IKEIT -->
            <a href="#ikeit" class="service-nav-card">
                <div class="icon icon-green">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h5>IKEIT</h5>
                <p>IT Solutions & Technology</p>
            </a>
        </div>
    </div>
</div>

<!-- NEXUS Section (Blue Theme) -->
<div id="nexus" class="service-section rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr--50 pr_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-blue">Nexus</span>
                    <h2 class="title mb--25">Strategy & Performance Consulting</h2>
                    <p class="disc mb--20">
                        NEXUS is an emerging strategy and performance consulting firm, with particular expertise in strategy management, performance benchmarking, and process transformation for NGOs and SMEs. Leveraging our renowned benchmarking and best practices database, we provide clients with fact-based advice that drives cost optimization and improved service quality.
                    </p>
                    <p class="disc mb--30">
                        Our expertise is a blend of the depth of our experience, technical excellence, and dedication to delivering exceptional service to every single client without exception. Our philosophy is built on a true spirit of bringing together the worth of local expertise and experience.
                    </p>
                    <div class="check-wrapper-area">
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Strategy Management & Development</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Performance Benchmarking</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Process Transformation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/nexus.png') }}" alt="Nexus Strategy Consulting" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- WORTH INDEX Section (Green Theme) -->
<div id="worth-index" class="service-section rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 pl--50 pl_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-green">Worth Index</span>
                    <h2 class="title mb--25">M&E Outsourcing & Performance Analytics</h2>
                    <p class="disc mb--20">
                        Our WORTH-INDEX services focus on providing M&E outsourcing services and performance analytics for a wide range of sectors including health, agriculture, education, environment, tourism, and SMEs.
                    </p>
                    <p class="disc mb--20">
                        We provide end to end customized performance tracking outsourcing services ranging from Project M&E, Customer Service Analytics; Markets and Product Performance Assessments. All our services cost far less than what you could normally incur in-house to have an effective performance tracking system.
                    </p>
                    <div class="check-wrapper-area">
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Project M&E Services</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Customer Service Analytics</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Markets & Product Performance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/worth-index.png') }}" alt="Worth Index Analytics" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- WORTH JOBS Section (Blue Theme) -->
<div id="worth-jobs" class="service-section rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr--50 pr_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-blue">Worth Jobs</span>
                    <h2 class="title mb--25">Executive Search & Talent Management</h2>
                    <p class="disc mb--20">
                        WORTHJOBS is our premier service aimed to support our clients to match great people with great jobs. We use the world's most advanced technology to build bespoke solutions to help you find the best. We always create productive and fruitful relationships with our clients by adding value to your business.
                    </p>
                    <p class="disc mb--30">
                        Our team brings extensive experience and a track record of accomplishments in executive search and talent management. We always aim to bring the highest levels of certainty and satisfaction through a deep-set commitment to our clients, and comprehensive industry expertise.
                    </p>
                    <div class="check-wrapper-area">
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Executive Search Services</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Talent Management Solutions</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Customized HR Advisory</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/worth-jobs.png') }}" alt="Worth Jobs HR Solutions" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- NOBELL Section (Green Theme) -->
<div id="nobell" class="service-section rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 pl--50 pl_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-green">Nobell</span>
                    <h2 class="title mb--25">Training & Coaching Solutions</h2>
                    <p class="disc mb--20">
                        Nobell as our training division is an emerging market leader in creating essential competency skills by providing relevant training and coaching solutions to individuals and corporate organizations. The Nobell training solutions and practice aims at building a competent manpower pool ready to face the challenges and opportunities arising in dynamic economies in Africa and beyond.
                    </p>
                    <p class="disc mb--30">
                        Our commitment to 'continuous improvement' reflects in our Quality Management Systems and the time we take to design our programmes that incorporate practical training delivery approaches, thus making us a preferred and proficient training partner.
                    </p>
                    <div class="check-wrapper-area">
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Corporate Training Programs</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Individual Coaching Solutions</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Competency Skills Development</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/nobell.png') }}" alt="Nobell Training" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- A2B Section (Blue Theme) -->
<div id="a2b" class="service-section rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr--50 pr_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-blue">A2B</span>
                    <h2 class="title mb--25">Internships & Apprenticeships</h2>
                    <p class="disc mb--20">
                        A2B is our flagship internship service focused on providing opportunities to as many of the brilliant young talents and graduates into the job market to learn the ropes as quickly as possible and begin to contribute to the new rising Africa!
                    </p>
                    <p class="disc mb--20">
                        A2B is aimed to help excelling young people and graduates to realize their dreams through customized and impactful internships and apprenticeships across various corporate organizations and NGOs in Kenya and abroad. We do not focus on one specific sector, or location, so you can have wide range and diversity for opportunities.
                    </p>
                    <div class="check-wrapper-area">
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Multi-sector Opportunities</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Customized Placements</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-blue"></i>
                            <p>Local & International Options</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/a2b.png') }}" alt="A2B Internships" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- IKEIT Section (Green Theme) -->
<div id="ikeit" class="service-section rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 pl--50 pl_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-green">IKEIT</span>
                    <h2 class="title mb--25">IT Solutions & Technology</h2>
                    <p class="disc mb--20">
                        Our Information Technology Solutions enables our clients to optimize performance in major business areas and maximize returns on their technology investments across the enterprise. Whether it is assessing your current performance, implementing process improvements, optimizing your enterprise-wide system or applying technology solutions to business performance issues, our IKEIT teams can lead your company to breakthrough performance improvements.
                    </p>
                    <p class="disc mb--30">
                        We focus on providing IT services that will allow your business to breathe with the relief in knowing that a trusted IT service provider is on your side. Our goal is to ensure that your business never fall short of effective IT services that will allow your system to stay current and up-to-date.
                    </p>
                    <div class="check-wrapper-area">
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Performance Optimization</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Enterprise System Solutions</p>
                        </div>
                        <div class="single-check mt--15">
                            <i class="fa-regular fa-circle-check text-green"></i>
                            <p>Cutting-edge Technology</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/ikeit.png') }}" alt="IKEIT Solutions" loading="lazy">
                </div>
            </div>
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
