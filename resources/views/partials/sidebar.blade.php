<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/logo.png') }}" alt="worthafrica-logo" style="max-width: 150px; height: auto;"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                Empowering businesses across Africa with innovative solutions and expert consulting services.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+254736508817">+254 736 508 817</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@worthafrica.org">info@worthafrica.org</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="{{ route('home') }}">worthafrica.org</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="https://maps.app.goo.gl/Q4XKH3t6eP695vZc7" target="_blank">Nairobi, Kenya</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <a href="{{ route('home') }}" class="main" aria-expanded="false">Home</a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}" class="main" aria-expanded="false">Who we are</a>
                </li>
                <li>
                    <a href="{{ route('what-we-do') }}" class="main" aria-expanded="false">What we do</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#careers" class="main" aria-expanded="false">Careers</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#contact" class="main" aria-expanded="false">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
