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

    .banner-cta-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 1.5rem;
        justify-content: center;
    }
    .banner-cta-buttons .rts-btn {
        margin: 0;
    }

    /* Our Solutions section styles */
    #our-solutions {
        scroll-margin-top: 100px;
    }

    :root {
        --color-primary-blue: #3C72FC;
        --color-primary-green: #98D052;
    }

    #our-solutions .service-brand-badge {
        display: inline-block;
        padding: 8px 20px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 30px;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    #our-solutions .badge-blue { background-color: var(--color-primary-blue); }
    #our-solutions .badge-green { background-color: var(--color-primary-green); }

    #our-solutions .service-section {
        position: relative;
        overflow: hidden;
        padding: 80px 0;
        scroll-margin-top: 120px;
    }

    @media (max-width: 991px) {
        #our-solutions .service-section {
            padding: 60px 0;
        }
    }

    @media (max-width: 575px) {
        #our-solutions .service-section {
            padding: 50px 0;
        }
    }

    #our-solutions .service-section:nth-child(even) {
        background: linear-gradient(180deg, #fafbfc 0%, #f5f7fa 100%);
    }

    #our-solutions .service-section .content-wrapper {
        padding: 30px 0;
    }

    #our-solutions .service-section .content-wrapper .title {
        font-size: 28px;
        line-height: 1.3;
        margin-bottom: 25px;
    }

    #our-solutions .service-section .content-wrapper .disc {
        font-size: 16px;
        line-height: 1.8;
        color: #4a5568;
    }

    #our-solutions .service-section .content-wrapper .disc + .disc {
        margin-top: 18px;
    }

    #our-solutions .service-image-container {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.08);
        min-height: 320px;
        display: flex;
        align-items: center;
    }

    #our-solutions .service-image-container img {
        width: 100%;
        height: 100%;
        min-height: 320px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    #our-solutions .service-image-container:hover img {
        transform: scale(1.03);
    }

    #our-solutions .title-style-two {
        margin-bottom: 20px;
    }

    #our-solutions .title-style-two .title {
        margin-bottom: 0;
    }

    @media (min-width: 992px) {
        #our-solutions .service-section .pr--50 { padding-right: 50px; }
        #our-solutions .service-section .pl--50 { padding-left: 50px; }
    }

    #our-solutions .service-section:last-of-type {
        padding-bottom: 100px;
    }

    @media (max-width: 991px) {
        #our-solutions .service-section .mt_md--50,
        #our-solutions .service-section .mt_sm--50 {
            margin-top: 40px;
        }
    }
</style>
@endsection

@section('content')
@include('partials.header')


@include('partials.slider')



<!-- rts service area start -->
<div id="our-solutions" class="rts-section-gapTop">
    <div class="container pb--50">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Solutions</span>
                    <span class="pre">What We Offer</span>
                    <h2 class="title rts-text-anime-style-1">Our Solutions</h2>
                </div>
            </div>
        </div>
    </div>

<!-- Enable Section (Blue Theme) -->
<div id="enable" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr--50 pr_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-blue">Enable</span>
                    <h2 class="title mb--25">Revolutionising Talent & Skilled Workforce Development</h2>
                    <p class="disc mb--20">
                        The Enable Initiative is a partnership for connecting quality skilled workforce across Africa and Europe through an innovative work-readiness programme that delivers job-ready, pre-vetted talent. By identifying, assessing, mentoring, and developing emerging professionals, Enable provides employers with skilled candidates aligned to quality standards, while creating sustainable career pathways that support inclusive economic growth. Through ongoing strategic support, Enable ensures long-term value for employers and meaningful, scalable impact.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/enable.png') }}" alt="Enable Initiative" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AdScale Section (Green Theme) -->
<div id="adscale" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 pl--50 pl_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-green">AdScale</span>
                    <h2 class="title mb--25">Transforming Impact into Enterprise</h2>
                    <p class="disc mb--20">
                        AdScale transforms development impact by commercializing NGO models, proving effective social interventions can achieve sustainability and scale. This encourages innovation, entrepreneurship, and market-based solutions, generating attractive returns for impact investors.
                    </p>
                    <p class="disc mb--20">
                        AdScale initiative provides an innovative platform for new opportunities that leverage NGOs expertise and community relationships whilst adding commercial capabilities. We thus, partner with NGOs to ensure impact integrity and build their enterprise capacity for a sustainable impact.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/worth-index.png') }}" alt="AdScale Initiative" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Nexus Section (Blue Theme) -->
<div id="nexus" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr--50 pr_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-blue">Nexus</span>
                    <h2 class="title mb--25">Strategic Advisory & Technical Assistance Network for Africa</h2>
                    <p class="disc mb--20">
                        Nexus elevates Africa's strategic advisory ecosystem, making world-class expertise accessible to forward thinking enterprises, development partners, and governments.
                    </p>
                    <p class="disc mb--20">
                        Africa requires sophisticated strategic advisory, but world-class consultancy is often prohibitively expensive, and exceptional independent consultants struggle to scale their impact. Nexus addresses both by creating a quality-assured network that connects seasoned experts with high-value projects, providing institutional infrastructure for enterprise-grade delivery, while fostering knowledge transfer and capacity building.
                    </p>
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

<!-- Nobell Section (Green Theme) -->
<div id="nobell" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 pl--50 pl_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-green">Nobell</span>
                    <h2 class="title mb--25">From Skills Development to Sustainable Performance</h2>
                    <p class="disc mb--20">
                        Nobell is a capacity building and performance initiative built on the core belief that exceptional talent and sustained high performance are created, not discovered. Thus, Nobell initiative recognises that tailored training and continuous performance support are the cornerstones of nurturing, developing, and sustaining Africa's talent. Through carefully curated training programmes, experience-based learning, coaching, mentorship, and advanced technological innovation, the Nobell initiative is designed to scale Africa's talent to unmatched levels of excellence, competitiveness, and global relevance.
                    </p>
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

<!-- IKEIT Section (Green Theme) -->
<div id="ikeit" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr--50 pr_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-green">IKEIT</span>
                    <h2 class="title mb--25">Driving Technology & Innovation for Sustainable Impact</h2>
                    <p class="disc mb--20">
                        IKEIT Initiative focus on bridging Africa's technology and innovation gap, recognising the transformative potential of technology to improve health access, strengthen food security, advance women's empowerment, and address climate change. Through the IKEIT Initiative, it serves as a central hub for identifying, validating, and deploying high-impact technologies and innovations tailored to African contexts. The platform brings together innovators, implementers, and partners to develop strategic innovation partnerships, while providing technical assistance, deployment support, and ongoing maintenance to ensure solutions are scalable, resilient, and sustainable. By translating innovation into practical, real-world impact, IKEIT accelerates inclusive development and long-term systems change across the continent.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/ikeit.png') }}" alt="IKEIT Solutions" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projektfi Section (Blue Theme) -->
<div id="projektfi" class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 pl--50 pl_sm--15">
                <div class="content-wrapper">
                    <span class="service-brand-badge badge-blue">Projektfi</span>
                    <h2 class="title mb--25">Africa Hub for Effective Projects Delivery</h2>
                    <p class="disc mb--20">
                        Projektfi initiative provides project management and delivery services as surge capacity and technical assistance, enabling clients to implement development and business initiatives efficiently and at scale. It can host, manage, and deliver projects or grants on behalf of clients, with clearly defined results, quality standards, and accountability frameworks. By outsourcing project delivery to Projektfi, clients avoid the need to establish temporary or disruptive internal structures, systems, or teams. This approach ensures rapid mobilisation, effective execution, and high-quality outcomes—allowing clients to remain focused on their core mandates while projects are delivered professionally, transparently, and to agreed performance targets.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mt_md--50 mt_sm--50">
                <div class="service-image-container">
                    <img src="{{ asset('assets/images/service/projektfi.png') }}" alt="Projektfi Project Delivery" loading="lazy">
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
