<header class="header-one header--sticky">
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
                            <div class="working-time">
                                <p><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                            </div>
                        </div>
                        <div class="right">
                            {{-- <ul class="top-nav">
                                <li><a href="blog-list.html">Company news</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul> --}}
                            <ul class="social-wrapper-one">
                                <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="#" aria-label="linkedin"><i
                                            class="fab fa-linkedin-in"></i></a></li>
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
                                    <li class="main-nav">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="main-nav">
                                        <a href="{{ route('home') }}#who-we-are">Who we are</a>
                                    </li>
                                    <li class="main-nav">
                                        <a href="{{ route('what-we-do') }}">What we do</a>
                                    </li>
                                    <li class="main-nav">
                                        <a href="{{ route('home') }}#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="loader-wrapper">
                                <div class="loader">
                                </div>
                                <div class="loader-section section-left"></div>
                                <div class="loader-section section-right"></div>
                            </div>
                            <div class="button-area">
                                <button class="search" id="search" aria-label="Search"><i
                                        class="far fa-search"></i></button>
                                <a href="{{ route('home') }}#contact"
                                        class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Lets Work Together</a>
                                <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                                    <img class="menu-light" src="assets/images/icons/01.svg" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
