@extends('layouts.main')

@section('title', 'About Us - WorthAfrica Group')
@section('meta_description', 'WorthAfrica is a purpose-driven firm at the intersection of social enterprise, technology, and economic growth — rooted in Africa and connected to global markets.')

@section('styles')
@include('partials.styles-common')
<style>
    .breadcrumb-wrapper {
        background: linear-gradient(135deg, rgba(60, 114, 252, 0.95) 0%, rgba(152, 208, 82, 0.95) 100%),
                    url('{{ asset("assets/images/banner/strategic-advisory.png") }}') center/cover;
        padding: 120px 0 80px;
    }

    .our-reach-section {
        padding: 120px 0;
        background: #fff;
    }
    #our-reach .our-reach-title .bg-content,
    #our-reach .our-reach-title .pre,
    #our-reach .our-reach-title .title {
        opacity: 0;
    }
    #our-reach .our-reach-card {
        opacity: 0;
    }
    #our-reach .our-reach-card .reach-icon {
        transform: scale(0) rotate(-180deg);
    }
    #our-reach .our-reach-card .reach-number {
        opacity: 0;
        transform: translateY(20px) scale(0.8);
    }
    #our-reach .our-reach-card .reach-label {
        opacity: 0;
    }
    @media (max-width: 991px) {
        .our-reach-section { padding: 80px 0; }
    }
    @media (max-width: 575px) {
        .our-reach-section { padding: 60px 0; }
    }
    .our-reach-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 900px;
        margin: 0 auto;
    }
    .our-reach-card {
        background: #fff;
        border: 1px solid #e5e5e5;
        border-radius: 8px;
        padding: 40px 25px;
        text-align: center;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .our-reach-card:hover {
        border-color: #3C72FC;
        box-shadow: 0 8px 30px rgba(60, 114, 252, 0.08);
    }
    .our-reach-card:nth-child(2):hover { border-color: #98D052; box-shadow: 0 8px 30px rgba(152, 208, 82, 0.08); }
    .our-reach-card:nth-child(3):hover { border-color: #3C72FC; }
    .our-reach-card .reach-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 20px;
        color: #fff;
    }
    .our-reach-card:nth-child(1) .reach-icon { background: #3C72FC; }
    .our-reach-card:nth-child(2) .reach-icon { background: #98D052; }
    .our-reach-card:nth-child(3) .reach-icon { background: #3C72FC; }
    .our-reach-card .reach-icon img {
        filter: brightness(0) invert(1);
        object-fit: contain;
    }
    .our-reach-card .reach-number {
        font-size: 42px;
        font-weight: 700;
        color: #1a1a1a;
        line-height: 1.2;
        margin-bottom: 8px;
    }
    .our-reach-card .reach-label {
        font-size: 15px;
        font-weight: 700;
        color: #555;
        margin: 0;
    }
    @media (max-width: 767px) {
        .our-reach-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .our-reach-card .reach-number {
            font-size: 36px;
        }
    }

    .hexagon-tabs-section {
        padding: 80px 0 100px;
        background: #fff;
    }
    .hexagon-tabs-nav {
        display: flex;
        gap: 0;
        justify-content: center;
        margin-bottom: 30px;
        border-bottom: 1px solid #e5e5e5;
    }
    .hexagon-tabs-nav button {
        padding: 14px 28px;
        background: #f5f5f5;
        border: none;
        border-bottom: 3px solid transparent;
        font-weight: 600;
        font-size: 15px;
        color: #333;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-bottom: -1px;
    }
    .hexagon-tabs-nav button:hover {
        background: #eee;
    }
    .hexagon-tabs-nav button.active {
        background: rgba(152, 208, 82, 0.2);
        border-bottom-color: #98D052;
        color: #1a1a1a;
    }
    .hexagon-tabs-intro {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 50px;
        font-size: 16px;
        line-height: 1.7;
        color: #555;
    }
    .hexagon-panel {
        display: none;
    }
    .hexagon-panel.active {
        display: block;
    }
    .hexagon-grid-wrapper {
        position: relative;
        min-height: 320px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0;
        padding: 20px 0;
    }
    .hexagon-bg-pattern {
        position: absolute;
        inset: 0;
        pointer-events: none;
        overflow: hidden;
    }
    .hexagon-bg-pattern svg {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0.15;
    }
    .hexagon-card {
        position: relative;
        width: 260px;
        min-height: 280px;
        margin: 0 -18px;
        transition: transform 0.3s ease, filter 0.3s ease;
        z-index: 2;
    }
    .hexagon-card .hexagon-svg {
        display: block;
        width: 100%;
        height: auto;
    }
    .hexagon-card .hex-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        text-align: center;
        padding: 24px 12px;
    }
    #panel-stand-for .hexagon-card:nth-child(1) { transform: translateY(55px); }
    #panel-stand-for .hexagon-card:nth-child(2) { transform: translateY(-48px); }
    #panel-stand-for .hexagon-card:nth-child(3) { transform: translateY(55px); }
    #panel-stand-for .hexagon-card:nth-child(4) { transform: translateY(-48px); }
    #panel-unites .hexagon-card:nth-child(1) { transform: translateY(-48px); }
    #panel-unites .hexagon-card:nth-child(2) { transform: translateY(55px); }
    #panel-unites .hexagon-card:nth-child(3) { transform: translateY(-48px); }
    #panel-unites .hexagon-card:nth-child(4) { transform: translateY(55px); }
    #panel-partner .hexagon-card:nth-child(1) { transform: translateY(-48px); }
    #panel-partner .hexagon-card:nth-child(2) { transform: translateY(-48px); }
    #panel-partner .hexagon-card:nth-child(3) { transform: translateY(55px); }
    #panel-partner .hexagon-card:nth-child(4) { transform: translateY(55px); }
    .hexagon-card:hover {
        transform: translateY(-5px) scale(1.02) !important;
        filter: drop-shadow(0 15px 25px rgba(152, 208, 82, 0.25));
    }
    .hexagon-card .hex-title {
        font-size: 17px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 18px;
        line-height: 1.35;
        letter-spacing: 0.01em;
    }
    .hexagon-card .hex-desc {
        font-size: 13px;
        line-height: 1.7;
        color: #555;
        margin: 0;
        letter-spacing: 0.01em;
    }
    @media (max-width: 1199px) {
        .hexagon-card {
            width: 240px;
            min-height: 260px;
            margin: 0 -15px;
        }
    }
    @media (max-width: 991px) {
        .hexagon-tabs-nav {
            flex-wrap: wrap;
            justify-content: center;
        }
        .hexagon-tabs-nav button {
            padding: 12px 20px;
            font-size: 14px;
        }
        .hexagon-grid-wrapper {
            flex-direction: column;
            align-items: center;
            min-height: auto;
            gap: 25px;
        }
        .hexagon-card {
            width: 280px;
            min-height: 200px;
            margin: 0;
            transform: none !important;
        }
        .hexagon-card:hover {
            transform: translateY(-5px) scale(1.02) !important;
        }
    }
</style>
@include('partials.wwa-styles')
@endsection

@section('content')
@include('partials.header')

<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-left text-center">
                    <span class="pre" style="color: rgba(255,255,255,0.9);">Who We Are</span>
                    <h1 class="title rts-text-anime-style-1" style="color: #fff; margin-bottom: 15px;">
                        About Us
                    </h1>
                    <p class="disc" style="color: rgba(255,255,255,0.95); max-width: 700px; margin: 0 auto; font-size: 18px;">
                        A purpose-driven firm at the intersection of social enterprise, technology, and economic growth — rooted in Africa and connected to global markets.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.who-we-are-section')

<section id="our-reach" class="our-reach-section">
    <div class="container">
        <div class="title-style-two center mb--50 our-reach-title">
            <span class="bg-content">Reach</span>
            <span class="pre">Our Impact</span>
            <h2 class="title rts-text-anime-style-1">Our Reach</h2>
        </div>
        <div class="our-reach-grid">
            <div class="our-reach-card" data-reach-card>
                <div class="reach-icon">
                    <img src="{{ asset('assets/images/about/icons/04.svg') }}" alt="" width="28" height="28">
                </div>
                <div class="reach-number"><span class="odometer" data-count="6">0</span></div>
                <p class="reach-label">Active Initiatives</p>
            </div>
            <div class="our-reach-card" data-reach-card>
                <div class="reach-icon">
                    <img src="{{ asset('assets/images/about/icons/05.svg') }}" alt="" width="28" height="28">
                </div>
                <div class="reach-number"><span class="odometer" data-count="10">0</span>+</div>
                <p class="reach-label">Partner Organisations</p>
            </div>
            <div class="our-reach-card" data-reach-card>
                <div class="reach-icon">
                    <img src="{{ asset('assets/images/about/icons/01.svg') }}" alt="" width="28" height="28">
                </div>
                <div class="reach-number"><span class="odometer" data-count="25">0</span>+</div>
                <p class="reach-label">Professionals Involved</p>
            </div>
        </div>
    </div>
</section>

<div class="hexagon-tabs-section rts-section-gap">
    <div class="container">
        <div class="hexagon-tabs-nav" role="tablist">
            <button type="button" class="active" data-tab="stand-for" role="tab" aria-selected="true">What We Stand For</button>
            <button type="button" data-tab="unites" role="tab" aria-selected="false">What Unites Our Initiatives</button>
            <button type="button" data-tab="partner" role="tab" aria-selected="false">Why Partner with Us</button>
        </div>
        <p class="hexagon-tabs-intro">
            Our values are not aspirational statements — they are the operating principles that shape every partnership, initiative, and delivery decision we make.
        </p>
        <div class="hexagon-panel active" id="panel-stand-for" role="tabpanel">
            <div class="hexagon-grid-wrapper">
                <div class="hexagon-bg-pattern" aria-hidden="true">
                    <svg viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice">
                        <defs>
                            <pattern id="hex-pattern" x="0" y="0" width="80" height="70" patternUnits="userSpaceOnUse">
                                <polygon points="40,0 80,20 80,55 40,70 0,55 0,20" fill="none" stroke="#98D052" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#hex-pattern)"/>
                    </svg>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">Integrity</h3>
                        <p class="hex-desc">Integrity is central to everything we do — we believe that enterprise value must never come at the expense of community trust or ethical conduct.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">Innovation as Practice</h3>
                        <p class="hex-desc">We embrace innovation and emerging technology — not as trends, but as tools for scaling sustainable impact.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">Partnerships as Foundation</h3>
                        <p class="hex-desc">Every initiative is built on trusted relationships with NGOs, employers, governments, and investors who share our vision.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">Scalable, Sustainable Impact</h3>
                        <p class="hex-desc">We build for permanence. Our programs are designed to grow, replicate, and endure.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon-panel" id="panel-unites" role="tabpanel" hidden>
            <div class="hexagon-grid-wrapper">
                <div class="hexagon-bg-pattern" aria-hidden="true">
                    <svg viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice">
                        <defs>
                            <pattern id="hex-pattern-2" x="0" y="0" width="80" height="70" patternUnits="userSpaceOnUse">
                                <polygon points="40,0 80,20 80,55 40,70 0,55 0,20" fill="none" stroke="#98D052" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#hex-pattern-2)"/>
                    </svg>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">Quality Assurance</h3>
                        <p class="hex-desc">Every initiative operates within robust quality frameworks. Quality is non-negotiable and embedded at every stage.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">Sustainable Impact</h3>
                        <p class="hex-desc">We design for longevity. Sustainability is central to every intervention we undertake.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">Partnership-Led Delivery</h3>
                        <p class="hex-desc">Partnerships bring complementary expertise, community trust and credibility to bear on shared goals.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">Inclusive Growth</h3>
                        <p class="hex-desc">We design to expand opportunity and positive impact for communities, professionals and enterprises.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hexagon-panel" id="panel-partner" role="tabpanel" hidden>
            <div class="hexagon-grid-wrapper">
                <div class="hexagon-bg-pattern" aria-hidden="true">
                    <svg viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice">
                        <defs>
                            <pattern id="hex-pattern-3" x="0" y="0" width="80" height="70" patternUnits="userSpaceOnUse">
                                <polygon points="40,0 80,20 80,55 40,70 0,55 0,20" fill="none" stroke="#98D052" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#hex-pattern-3)"/>
                    </svg>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">For Impact Investors</h3>
                        <p class="hex-desc">AdScale and Enable offer investment opportunities with measurable social returns and verifiable impact at scale.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">For Employers</h3>
                        <p class="hex-desc">Enable and Nobell deliver skilled workforce accelerating productivity, quality and efficiency across your business enterprise.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">For NGOs and Development Partners</h3>
                        <p class="hex-desc">AdScale and Projektfi provide delivery capability to scale program impact.</p>
                    </div>
                </div>
                <div class="hexagon-card">
                    <svg class="hexagon-svg" viewBox="0 0 260 280" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="130,0 260,70 260,210 130,280 0,210 0,70" fill="white" stroke="#98D052" stroke-width="2"/>
                    </svg>
                    <div class="hex-content">
                        <h3 class="hex-title">For Governments &amp; Policymakers</h3>
                        <p class="hex-desc">Nexus &amp; IKEIT offer strategic advisory and technology deployment support that strengthens national development agendas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-call-to-action-area-two bg_image">
    <div class="container-full">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cta-style-two-area">
                                <h3 class="title rts-text-anime-style-1">
                                    Let's discuss about how we can help <br>
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

@include('partials.footer')
@include('partials.sidebar')
@include('partials.utilities')
@endsection

@push('scripts')
<script defer src="{{ asset('assets/js/wwa-anime.js') }}?v={{ file_exists(public_path('assets/js/wwa-anime.js')) ? filemtime(public_path('assets/js/wwa-anime.js')) : time() }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.hexagon-tabs-nav button[data-tab]');
    const panels = document.querySelectorAll('.hexagon-panel');
    tabs.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            tabs.forEach(function(t) {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            panels.forEach(function(p) {
                const isActive = p.id === 'panel-' + tabId;
                p.classList.toggle('active', isActive);
                p.hidden = !isActive;
            });
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
        });
    });
});
</script>
@endpush
