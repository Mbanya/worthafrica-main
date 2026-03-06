<section class="hero-section" id="hero-section">
    <header class="header-one header--sticky header-hero-overlay">
        <div class="header-top-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-one-wrapper">
                            <div class="left">
                                <div class="mail">
                                    <a href="mailto:info@worthafrica.org"><i class="fal fa-envelope"></i>
                                        info@worthafrica.org</a>
                                </div>
                            
                            </div>
                            <div class="right">
                                <ul class="social-wrapper-one">
                                    <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a class="mr--0" href="#" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-main-one-wrapper">
                            <div class="thumbnail">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/logo.png') }}" alt="worthafrica-logo">
                                </a>
                            </div>
                            <div class="main-header">
                                <div class="nav-area">
                                    <ul class="nav-menu">
                                        <li class="main-nav"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="main-nav"><a href="{{ route('home') }}#about-us">Who we are</a></li>
                                        <li class="main-nav"><a href="{{ route('what-we-do') }}">What we do</a></li>
                                        <li class="main-nav"><a href="{{ route('home') }}#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="loader-wrapper">
                                    <div class="loader"></div>
                                    <div class="loader-section section-left"></div>
                                    <div class="loader-section section-right"></div>
                                </div>
                                <div class="button-area">
                                    <button class="search" id="search" aria-label="Search"><i class="far fa-search"></i></button>
                                    <a href="{{ route('home') }}#contact" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Lets Work Together</a>
                                    <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                                        <img class="menu-light" src="{{ asset('assets/images/icons/01.svg') }}" alt="Menu-icon">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="home" class="hero-slider-anime">
        <canvas id="hero-bg-canvas" aria-hidden="true"></canvas>

        <div class="swiper-wrapper">
            @include('partials.slider-slides')
        </div>

        <div class="slide-progress" id="hero-prog"></div>
        <div class="slide-dots" id="hero-dots"></div>
        <div class="slide-counter" id="hero-counter">
            <span class="cc cc-light" id="hero-cc">01</span>
            <div class="cl cl-light"></div>
            <span class="ct ct-light">05</span>
        </div>
        <div class="swiper-button-prev nav-light" id="hero-btn-prev" aria-label="Previous slide">←</div>
        <div class="swiper-button-next nav-light" id="hero-btn-next" aria-label="Next slide">→</div>
        <div class="scroll-hint sh-light" id="hero-scroll-hint">
            <span>Scroll</span>
            <div class="scroll-track"><div class="scroll-thumb" id="hero-sthumb"></div></div>
        </div>
    </div>
</section>
