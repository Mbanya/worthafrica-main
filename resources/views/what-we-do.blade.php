@extends('layouts.main')

@section('title', 'What We Do - WorthAfrica Group')
@section('meta_description', 'Discover WorthAfrica Group\'s Our Solutions: Enable (Talent & Workforce Development), AdScale (Impact Enterprise), Nexus (Strategic Advisory), Nobell (Capacity Building), IKEIT (Technology & Innovation), and Projektfi (Project Delivery).')

@section('styles')
@include('partials.styles-common')
<style>
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

    #our-solutions {
        scroll-margin-top: 100px;
    }

    .service-section {
        position: relative;
        overflow: hidden;
        padding: 80px 0;
        scroll-margin-top: 120px;
    }
    .service-section:last-of-type {
        padding-bottom: 100px;
    }

    .service-section:nth-child(even) {
        background: linear-gradient(180deg, #fafbfc 0%, #f5f7fa 100%);
    }

    .service-section .content-wrapper {
        padding: 30px 0;
    }

    .service-section .content-wrapper .title {
        font-size: 28px;
        line-height: 1.3;
        margin-bottom: 25px;
    }

    .service-section .content-wrapper .disc {
        font-size: 16px;
        line-height: 1.8;
        color: #4a5568;
    }

    .service-section .content-wrapper .disc + .disc {
        margin-top: 18px;
    }

    @media (max-width: 991px) {
        .service-section {
            padding: 60px 0;
        }
        .service-section .pr--50 { padding-right: 15px; }
        .service-section .pl--50 { padding-left: 15px; }
        .service-section .mt_md--50,
        .service-section .mt_sm--50 {
            margin-top: 40px;
        }
    }

    @media (max-width: 575px) {
        .service-section {
            padding: 50px 0;
        }
    }

    @media (min-width: 992px) {
        .service-section .pr--50 { padding-right: 50px; }
        .service-section .pl--50 { padding-left: 50px; }
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
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.08);
        min-height: 320px;
        display: flex;
        align-items: center;
    }

    .service-image-container img {
        width: 100%;
        height: 100%;
        min-height: 320px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .service-image-container:hover img {
        transform: scale(1.03);
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
