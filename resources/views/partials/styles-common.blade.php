<style>
    :root {
        --header-g: #98D052;
        --header-gdk: #6aaa28;
        --header-ink: #0f1a0a;
        --header-mut: #5a6b4e;
        --header-bdr: #d8edc4;
        --header-off: #f5f9f0;
    }

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

    .header-one .header-top-area-wrapper {
        background: var(--header-gdk);
        border-bottom: none;
    }

    .header-one .header-top-area-wrapper .header-top-one-wrapper .left .mail a,
    .header-one .header-top-area-wrapper .header-top-one-wrapper .left .working-time p {
        color: rgba(255, 255, 255, 0.9);
        font-family: 'DM Sans', sans-serif;
        font-size: 13px;
        font-weight: 500;
    }

    .header-one .header-top-area-wrapper .header-top-one-wrapper .left .mail a:hover {
        color: #fff;
    }

    .header-one .header-top-area-wrapper .header-top-one-wrapper .right .social-wrapper-one li a {
        color: rgba(255, 255, 255, 0.85);
    }

    .header-one .header-top-area-wrapper .header-top-one-wrapper .right .social-wrapper-one li a:hover {
        color: var(--header-g);
    }

    .header-one .header-main {
        background: linear-gradient(to bottom, var(--header-off) 0%, var(--header-off) 85%, rgba(255, 255, 255, 0.98) 100%);
        border-bottom: none;
    }

    .header-one.header--sticky.sticky {
        background: #fff !important;
        border-bottom: 1px solid var(--header-bdr);
        box-shadow: 0 2px 20px rgba(15, 26, 10, 0.06);
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
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: .04em;
        color: var(--header-ink);
        transition: color .25s ease;
    }

    .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav a:hover {
        color: var(--header-gdk);
    }

    .header-one .button-area .header-one-btn.quote-btn {
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 600;
        font-size: 13px;
        letter-spacing: .06em;
        text-transform: uppercase;
        background: var(--header-g) !important;
        color: var(--header-ink) !important;
        border: 2px solid var(--header-g) !important;
        border-radius: 6px;
        padding: 12px 24px;
        transition: all .28s ease;
    }

    .header-one .button-area .header-one-btn.quote-btn:hover {
        background: var(--header-gdk) !important;
        border-color: var(--header-gdk) !important;
        color: #fff !important;
        box-shadow: 0 8px 28px rgba(152, 208, 82, .45);
    }

    .header-one .button-area .search {
        color: var(--header-ink);
    }

    .header-one .button-area .search:hover {
        color: var(--header-gdk);
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
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 600;
        color: var(--header-ink);
    }

    .mobile-menu .mainmenu li a.main:hover {
        color: var(--header-gdk);
    }
</style>
