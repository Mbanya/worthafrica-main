<style>
/* Hero Section — unified header + slider */
.hero-section {
    position: relative;
    min-height: 100vh;
    width: 100%;
}

.hero-section .header-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
}

.hero-section .header-hero-overlay .header-top-area-wrapper {
    background: linear-gradient(to bottom, rgba(106,170,40,.92) 0%, rgba(106,170,40,.75) 60%, transparent 100%);
    border: none;
}

.hero-section .header-hero-overlay .header-top-area-wrapper .header-top-one-wrapper .left .mail a,
.hero-section .header-hero-overlay .header-top-area-wrapper .header-top-one-wrapper .left .working-time p,
.hero-section .header-hero-overlay .header-top-area-wrapper .header-top-one-wrapper .right .social-wrapper-one li a {
    color: rgba(255,255,255,.95) !important;
}

.hero-section .header-hero-overlay .header-main {
    background: linear-gradient(to bottom, rgba(255,255,255,.12) 0%, rgba(255,255,255,.06) 50%, transparent 100%);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: none;
}

.hero-section .header-hero-overlay .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav a {
    color: rgba(15,26,10,.9);
}

.hero-section .header-hero-overlay .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav a:hover {
    color: #0f1a0a;
}

.hero-section .header-hero-overlay .button-area .search {
    color: #0f1a0a;
}

.hero-section .header-hero-overlay.header--sticky.sticky {
    position: fixed !important;
}

.hero-section .header-hero-overlay.header--sticky.sticky .header-top-area-wrapper {
    background: #6aaa28;
}

.hero-section .header-hero-overlay.header--sticky.sticky .header-main {
    background: #fff;
    backdrop-filter: none;
    border-bottom: 1px solid #d8edc4;
    box-shadow: 0 2px 20px rgba(15,26,10,.06);
}

.hero-section .header-hero-overlay.header-over-dark .header-main {
    background: linear-gradient(to bottom, rgba(15,26,10,.75) 0%, rgba(15,26,10,.5) 50%, rgba(15,26,10,.3) 100%);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
}

.hero-section .header-hero-overlay.header-over-dark .header-top-area-wrapper {
    background: linear-gradient(to bottom, rgba(15,26,10,.85) 0%, rgba(15,26,10,.6) 60%, transparent 100%);
}

.hero-section .header-hero-overlay.header-over-dark .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav a,
.hero-section .header-hero-overlay.header-over-dark .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav a:hover {
    color: rgba(255,255,255,.95) !important;
}

.hero-section .header-hero-overlay.header-over-dark .button-area .search {
    color: rgba(255,255,255,.95) !important;
}

.hero-section .header-hero-overlay.header-over-dark .thumbnail img {
    filter: brightness(0) invert(1);
}

.hero-section .header-hero-overlay.header-over-dark .header-one-btn.quote-btn {
    background: rgba(255,255,255,.2) !important;
    border-color: rgba(255,255,255,.5) !important;
    color: #fff !important;
}

.hero-section .header-hero-overlay.header-over-dark .header-one-btn.quote-btn:hover {
    background: #98D052 !important;
    border-color: #98D052 !important;
    color: #0f1a0a !important;
}

.hero-section .header-hero-overlay.header-over-dark.header--sticky.sticky .header-main {
    background: #fff !important;
}

.hero-section .header-hero-overlay.header-over-dark.header--sticky.sticky .header-top-area-wrapper {
    background: #6aaa28 !important;
}

.hero-section .header-hero-overlay.header-over-dark.header--sticky.sticky .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav a,
.hero-section .header-hero-overlay.header-over-dark.header--sticky.sticky .header-main-one-wrapper .nav-area ul.nav-menu li.main-nav a:hover {
    color: #0f1a0a !important;
}

.hero-section .header-hero-overlay.header-over-dark.header--sticky.sticky .button-area .search {
    color: #0f1a0a !important;
}

.hero-section .header-hero-overlay.header-over-dark.header--sticky.sticky .thumbnail img {
    filter: none;
}

.hero-section .header-hero-overlay.header-over-dark.header--sticky.sticky .header-one-btn.quote-btn {
    background: #98D052 !important;
    border-color: #98D052 !important;
    color: #0f1a0a !important;
}

/* Hero Slider — anime.js */
.hero-slider-anime {
    --g: #98D052;
    --gdk: #6aaa28;
    --glt: #c5e990;
    --ink: #0f1a0a;
    --w: #ffffff;
    --off: #f5f9f0;
    --mut: #5a6b4e;
    --bdr: #d8edc4;
}

.hero-slider-anime {
    position: relative; width: 100%; min-height: 100vh; overflow: hidden;
}
#hero-bg-canvas { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none; }

.hero-slider-anime .swiper-wrapper { position: relative; width: 100%; min-height: 100vh; }
.hero-slider-anime .swiper-slide { position: absolute; inset: 0; opacity: 0; pointer-events: none; }
.hero-slider-anime .swiper-slide.active { opacity: 1; pointer-events: all; }

.hero-slider-anime .eyebrow-pill {
    display: inline-flex; align-items: center; gap: 9px;
    background: var(--g); color: var(--ink);
    font-family: 'DM Sans', sans-serif;
    font-size: 1rem; font-weight: 700; letter-spacing: .22em; text-transform: uppercase;
    padding: 12px 24px; border-radius: 100px;
    opacity: 0;
}
.hero-slider-anime .edot { width: 7px; height: 7px; border-radius: 50%; background: var(--gdk); flex-shrink: 0; }

.hero-slider-anime .slide-title {
    font-family: 'Red Hat Display', sans-serif;
    font-weight: 800; letter-spacing: -.025em; line-height: 1.05; color: var(--ink);
}
.hero-slider-anime .tl { display: block; overflow: hidden; }
.hero-slider-anime .tli { display: block; transform: translateY(110%); }

.hero-slider-anime .hl { color: var(--gdk); position: relative; display: inline-block; }
.hero-slider-anime .hl::after {
    content: ''; position: absolute; bottom: 2px; left: 0;
    width: 100%; height: 5px; background: var(--g); border-radius: 3px;
    transform: scaleX(0); transform-origin: left;
    transition: transform .55s cubic-bezier(.4,0,.2,1) .75s;
}
.hero-slider-anime .hl.on::after { transform: scaleX(1); }

.hero-slider-anime .slide-disc {
    font-family: 'DM Sans', sans-serif;
    font-size: 2.1rem; font-weight: 300; line-height: 1.75; color: var(--mut);
    opacity: 0;
}

.hero-slider-anime .slide-stats { display: flex; gap: 40px; border-top: 1.5px solid var(--bdr); padding-top: 28px; opacity: 0; }
.hero-slider-anime .sv { font-family: 'Red Hat Display', sans-serif; font-size: 2.6rem; font-weight: 800; color: var(--ink); line-height: 1; }
.hero-slider-anime .sv em { color: var(--gdk); font-style: normal; }
.hero-slider-anime .sl { font-family: 'DM Sans', sans-serif; font-size: .95rem; letter-spacing: .18em; text-transform: uppercase; color: var(--mut); margin-top: 6px; }

.hero-slider-anime .cta-row { display: flex; gap: 14px; flex-wrap: wrap; opacity: 0; }
.hero-slider-anime .btn {
    display: inline-flex; align-items: center; gap: 9px;
    font-family: 'Red Hat Display', sans-serif;
    font-size: 1.5rem; font-weight: 600; letter-spacing: .06em; text-transform: uppercase;
    padding: 20px 40px; border-radius: 6px; text-decoration: none;
    position: relative; overflow: hidden; transition: all .28s ease;
}
.hero-slider-anime .ba { transition: transform .28s ease; }
.hero-slider-anime .btn-g { background: var(--g); color: var(--ink); border: 2px solid var(--g); }
.hero-slider-anime .btn-g::before {
    content: ''; position: absolute; inset: 0; background: var(--gdk);
    transform: translateX(-101%); transition: transform .32s cubic-bezier(.4,0,.2,1); z-index: 0;
}
.hero-slider-anime .btn-g:hover::before { transform: translateX(0); }
.hero-slider-anime .btn-g:hover { color: #fff; box-shadow: 0 8px 28px rgba(152,208,82,.45); }
.hero-slider-anime .btn-g:hover .ba, .hero-slider-anime .btn-o:hover .ba { transform: translateX(5px); }
.hero-slider-anime .btn-g > * { position: relative; z-index: 1; }
.hero-slider-anime .btn-o { background: transparent; color: var(--ink); border: 2px solid var(--bdr); }
.hero-slider-anime .btn-o:hover { border-color: var(--g); background: var(--off); color: var(--gdk); }

/* Slide 1 */
.hero-slider-anime .s1 { width: 100%; min-height: 100vh; display: grid; grid-template-columns: 1fr 1fr; align-items: center; background: var(--ink); position: relative; overflow: hidden; }
.hero-slider-anime .s1 .slide-title { color: var(--w); }
.hero-slider-anime .s1 .slide-disc { color: rgba(255,255,255,.6); }
.hero-slider-anime .s1 .eyebrow-pill { background: var(--g); color: var(--ink); }
.hero-slider-anime .s1 .hl { color: var(--g); }
.hero-slider-anime .s1 .btn-o { color: var(--w); border-color: rgba(255,255,255,.25); }
.hero-slider-anime .s1 .btn-o:hover { border-color: var(--g); color: var(--g); background: rgba(152,208,82,.08); }
.hero-slider-anime .s1-deco { position: absolute; inset: 0; pointer-events: none; overflow: hidden; }
.hero-slider-anime .s1-arc {
    position: absolute; right: -120px; top: -120px;
    width: 600px; height: 600px; border-radius: 50%;
    background: radial-gradient(circle at 35% 35%, var(--glt), var(--g));
    opacity: 0;
}
.hero-slider-anime .s1-ring {
    position: absolute; right: 200px; top: -60px;
    width: 340px; height: 340px; border-radius: 50%;
    border: 2.5px solid rgba(152,208,82,.5); opacity: 0;
}
.hero-slider-anime .s1-bracket {
    position: absolute; bottom: 80px; left: 60px;
    width: 68px; height: 68px;
    border-left: 3px solid rgba(152,208,82,.6); border-bottom: 3px solid rgba(152,208,82,.6);
    opacity: 0;
}
.hero-slider-anime .s1-pill {
    position: absolute; top: 17%; right: 12%;
    width: 110px; height: 9px; border-radius: 5px; background: var(--g); opacity: 0;
}
.hero-slider-anime .s1-dotgrid {
    position: absolute; bottom: 18%; right: 7%;
    width: 110px; height: 110px; opacity: 0;
    background-image: radial-gradient(circle, rgba(152,208,82,.5) 2px, transparent 2px);
    background-size: 18px 18px;
}
.hero-slider-anime .s1-content { padding: 0 56px 0 90px; }
.hero-slider-anime .s1-title { font-size: clamp(4rem, 7.5vw, 7rem); margin: 24px 0 32px; }
.hero-slider-anime .s1-disc { max-width: 440px; }
.hero-slider-anime .s1-stats { margin: 28px 0; }
.hero-slider-anime .s1-visual {
    display: flex; align-items: center; justify-content: center;
    min-height: 100%; position: relative; z-index: 5;
}
.hero-slider-anime .s1-num {
    font-family: 'Red Hat Display', sans-serif; font-size: clamp(160px, 20vw, 290px); font-weight: 800;
    color: transparent; -webkit-text-stroke: 2.5px var(--g);
    user-select: none; position: relative; z-index: 2; opacity: 0;
}
.hero-slider-anime .s1-badge {
    position: absolute; bottom: 26%; left: 8%;
    background: var(--g); border-radius: 14px; padding: 16px 22px;
    opacity: 0; box-shadow: 0 20px 60px rgba(152,208,82,.38);
}
.hero-slider-anime .s1-badge .bv { font-family: 'Red Hat Display', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--ink); line-height: 1; }
.hero-slider-anime .s1-badge .bl { font-size: .9rem; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; color: var(--ink); opacity: .7; }
.hero-slider-anime .s1-o1 { position: absolute; width: 300px; height: 300px; border-radius: 50%; border: 1.5px solid rgba(152,208,82,.5); top:50%; left:50%; transform: translate(-50%,-50%); opacity: 0; }
.hero-slider-anime .s1-o2 { position: absolute; width: 420px; height: 420px; border-radius: 50%; border: 1.5px dashed rgba(152,208,82,.25); top:50%; left:50%; transform: translate(-50%,-50%); opacity: 0; }
.hero-slider-anime .odot { position: absolute; width: 12px; height: 12px; border-radius: 50%; background: var(--g); top: -6px; left: 50%; transform: translateX(-50%); box-shadow: 0 0 10px var(--g); }

/* Slide 2 */
.hero-slider-anime .s2 { width:100%; min-height:100vh; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; background:var(--ink); position:relative; overflow:hidden; }
.hero-slider-anime .s2 .slide-title { color: var(--w); }
.hero-slider-anime .s2 .slide-disc { color: rgba(255,255,255,.6); }
.hero-slider-anime .s2 .eyebrow-pill { background: var(--g); color: var(--ink); }
.hero-slider-anime .s2 .hl { color: var(--g); }
.hero-slider-anime .s2 .btn-o { color: var(--w); border-color: rgba(255,255,255,.25); }
.hero-slider-anime .s2 .btn-o:hover { border-color: var(--g); color: var(--g); background: rgba(152,208,82,.08); }
.hero-slider-anime .s2-deco { position:absolute; inset:0; pointer-events:none; overflow:hidden; }
.hero-slider-anime .s2-bigcircle {
    position:absolute; left:50%; top:50%; transform:translate(-50%,-50%);
    width:700px; height:700px; border-radius:50%;
    border: 2px solid rgba(255,255,255,.12); opacity:0;
}
.hero-slider-anime .s2-bigcircle2 {
    position:absolute; left:50%; top:50%; transform:translate(-50%,-50%);
    width:500px; height:500px; border-radius:50%;
    border: 1.5px dashed rgba(152,208,82,.4); opacity:0;
}
.hero-slider-anime .s2-gfill {
    position:absolute; left:50%; top:-180px; transform:translateX(-50%);
    width:400px; height:400px; border-radius:50%;
    background: radial-gradient(circle at 50% 60%, var(--glt), var(--g));
    opacity:0;
}
.hero-slider-anime .s2-triL {
    position:absolute; left:6%; top:50%; transform:translateY(-50%);
    width:0; height:0;
    border-top:60px solid transparent;
    border-bottom:60px solid transparent;
    border-right:90px solid var(--g);
    opacity:0;
}
.hero-slider-anime .s2-triR {
    position:absolute; right:6%; top:50%; transform:translateY(-50%);
    width:0; height:0;
    border-top:60px solid transparent;
    border-bottom:60px solid transparent;
    border-left:90px solid var(--g);
    opacity:0;
}
.hero-slider-anime .s2-dotL { position:absolute; left:18%; top:28%; width:14px; height:14px; border-radius:50%; background:var(--g); opacity:0; }
.hero-slider-anime .s2-dotR { position:absolute; right:18%; bottom:28%; width:10px; height:10px; border-radius:50%; background:var(--gdk); opacity:0; }
.hero-slider-anime .s2-hline { position:absolute; bottom:22%; left:50%; transform:translateX(-50%); height:2px; width:0; background:linear-gradient(to right, transparent, rgba(152,208,82,.6), transparent); }
.hero-slider-anime .s2-content { position:relative; z-index:10; max-width:720px; padding:0 40px; display:flex; flex-direction:column; align-items:center; gap:0; }
.hero-slider-anime .s2-pill { margin-bottom:24px; }
.hero-slider-anime .s2-title { font-size: clamp(4.2rem, 8vw, 7.5rem); margin-bottom: 32px; }
.hero-slider-anime .s2-disc { max-width:540px; text-align:center; margin-bottom:32px; }
.hero-slider-anime .s2-stats { justify-content:center; margin-bottom:36px; }
.hero-slider-anime .s2-cta { justify-content:center; }

/* Slide 3 */
.hero-slider-anime .s3 { width:100%; min-height:100vh; display:grid; grid-template-columns:1fr 1fr; align-items:center; background:var(--ink); position:relative; overflow:hidden; }
.hero-slider-anime .s3 .slide-title { color: var(--w); }
.hero-slider-anime .s3 .slide-disc { color: rgba(255,255,255,.6); }
.hero-slider-anime .s3 .eyebrow-pill { background: var(--g); color: var(--ink); }
.hero-slider-anime .s3 .hl { color: var(--g); }
.hero-slider-anime .s3 .btn-o { color: var(--w); border-color: rgba(255,255,255,.25); }
.hero-slider-anime .s3 .btn-o:hover { border-color: var(--g); color: var(--g); background: rgba(152,208,82,.08); }
.hero-slider-anime .s3-deco { position:absolute; inset:0; pointer-events:none; overflow:hidden; }
.hero-slider-anime .s3-sqbig {
    position:absolute; left:-100px; top:50%; transform:translateY(-50%) rotate(18deg);
    width:480px; height:480px;
    background: linear-gradient(145deg, var(--g), var(--glt));
    border-radius:40px; opacity:0;
}
.hero-slider-anime .s3-sqsm {
    position:absolute; left:260px; top:12%; rotate:30deg;
    width:160px; height:160px;
    border: 3px solid var(--g); border-radius:18px; opacity:0;
}
.hero-slider-anime .s3-bars { position:absolute; left:60px; bottom:15%; display:flex; align-items:flex-end; gap:8px; opacity:0; }
.hero-slider-anime .s3-bar { width:22px; background:var(--g); border-radius:4px 4px 0 0; transform:scaleY(0); transform-origin:bottom; }
.hero-slider-anime .s3-bgtext {
    position:absolute; left:-20px; top:50%; transform:translateY(-50%);
    font-family:'Red Hat Display', sans-serif; font-size:clamp(220px,28vw,400px); font-weight:800;
    color:transparent; -webkit-text-stroke:2px rgba(255,255,255,.08);
    line-height:1; user-select:none; opacity:0; white-space:nowrap;
}
.hero-slider-anime .s3-dotgrid {
    position:absolute; right:5%; top:20%;
    width:100px; height:100px; opacity:0;
    background-image: radial-gradient(circle, rgba(152,208,82,.5) 2px, transparent 2px);
    background-size:18px 18px;
}
.hero-slider-anime .s3-visual { position:relative; min-height:100%; z-index:5; }
.hero-slider-anime .s3-content { padding:0 90px 0 50px; z-index:10; position:relative; }
.hero-slider-anime .s3-title { font-size: clamp(4rem, 7vw, 7rem); margin: 24px 0 32px; }
.hero-slider-anime .s3-disc { max-width:440px; }
.hero-slider-anime .s3-stats { margin:28px 0; }

/* Slide 4 */
.hero-slider-anime .s4 { width:100%; min-height:100vh; background:var(--ink); position:relative; overflow:hidden; display:flex; align-items:center; }
.hero-slider-anime .s4 .slide-title { color: var(--w); }
.hero-slider-anime .s4 .slide-disc { color: rgba(255,255,255,.6); }
.hero-slider-anime .s4 .eyebrow-pill { background: var(--g); color: var(--ink); }
.hero-slider-anime .s4 .hl { color: var(--g); }
.hero-slider-anime .s4 .btn-o { color: var(--w); border-color: rgba(255,255,255,.25); }
.hero-slider-anime .s4 .btn-o:hover { border-color: var(--g); color: var(--g); background: rgba(152,208,82,.08); }
.hero-slider-anime .s4-panel {
    position:absolute; left:0; top:0; height:100%;
    width:38%; clip-path:polygon(0 0,100% 0,82% 100%,0 100%);
    background:linear-gradient(160deg, var(--gdk), var(--g));
    z-index:2; opacity:0;
}
.hero-slider-anime .s4-panel-num {
    position:absolute; top:50%; left:4%; transform:translateY(-50%);
    font-family:'Red Hat Display', sans-serif; font-size:clamp(100px,14vw,200px); font-weight:800;
    color:rgba(255,255,255,.18); line-height:1; user-select:none;
    z-index:3; opacity:0;
}
.hero-slider-anime .s4-circle {
    position:absolute; left:28%; top:50%; transform:translateY(-50%);
    width:200px; height:200px; border-radius:50%;
    background:var(--w); box-shadow: 0 0 0 12px var(--glt);
    z-index:4; opacity:0;
    display:flex; align-items:center; justify-content:center;
}
.hero-slider-anime .s4-circle-inner {
    font-family:'Red Hat Display', sans-serif; font-size:2.4rem; font-weight:800;
    color:var(--gdk); text-align:center; line-height:1.15;
}
.hero-slider-anime .s4-dotgrid {
    position:absolute; right:5%; bottom:15%;
    width:120px; height:120px; opacity:0;
    background-image: radial-gradient(circle, rgba(152,208,82,.5) 2px, transparent 2px);
    background-size:18px 18px;
}
.hero-slider-anime .s4-hline {
    position:absolute; right:5%; top:22%;
    height:3px; width:160px;
    background:linear-gradient(to left, transparent, rgba(152,208,82,.6));
    opacity:0;
}
.hero-slider-anime .s4-ring {
    position:absolute; right:-80px; top:50%; transform:translateY(-50%);
    width:320px; height:320px; border-radius:50%;
    border:2px solid rgba(255,255,255,.1); opacity:0;
}
.hero-slider-anime .s4-deco { position:absolute; inset:0; pointer-events:none; z-index:1; overflow:hidden; }
.hero-slider-anime .s4-content { position:relative; z-index:10; margin-left:46%; padding-right:80px; max-width:580px; }
.hero-slider-anime .s4-content .cta-row { flex-wrap: nowrap; }
.hero-slider-anime .s4-title { font-size: clamp(3.8rem, 6.5vw, 6.2rem); margin: 24px 0 32px; }
.hero-slider-anime .s4-disc { max-width:400px; }
.hero-slider-anime .s4-stats { margin:28px 0; }

/* Slide 5 — dark */
.hero-slider-anime .s5 { width:100%; min-height:100vh; background:var(--ink); position:relative; overflow:hidden; display:flex; align-items:center; }
.hero-slider-anime .s5 .slide-title { color: var(--w); }
.hero-slider-anime .s5 .sv { color: var(--w); }
.hero-slider-anime .s5 .slide-disc { color: rgba(255,255,255,.6); }
.hero-slider-anime .s5 .sl { color: rgba(255,255,255,.5); }
.hero-slider-anime .s5 .slide-stats { border-color: rgba(255,255,255,.12); }
.hero-slider-anime .s5 .btn-o { color: var(--w); border-color: rgba(255,255,255,.25); }
.hero-slider-anime .s5 .btn-o:hover { border-color:var(--g); color:var(--g); background:rgba(152,208,82,.08); }
.hero-slider-anime .s5 .hl { color: var(--g); }
.hero-slider-anime .s5-deco { position:absolute; inset:0; pointer-events:none; overflow:hidden; z-index:1; }
.hero-slider-anime .s5-burst {
    position:absolute; left:50%; top:-200px; transform:translateX(-50%);
    width:800px; height:800px; border-radius:50%;
    background:radial-gradient(circle at 50% 50%, var(--g) 0%, var(--glt) 25%, rgba(152,208,82,0) 70%);
    opacity:0;
}
.hero-slider-anime .s5-ring1 {
    position:absolute; left:50%; top:-60px; transform:translateX(-50%);
    width:500px; height:500px; border-radius:50%;
    border:1.5px solid rgba(152,208,82,.35); opacity:0;
}
.hero-slider-anime .s5-ring2 {
    position:absolute; left:50%; top:-120px; transform:translateX(-50%);
    width:700px; height:700px; border-radius:50%;
    border:1px dashed rgba(152,208,82,.2); opacity:0;
}
.hero-slider-anime .s5-lineL { position:absolute; left:0; bottom:40%; height:1.5px; width:0; background:linear-gradient(to right,transparent,var(--g)); }
.hero-slider-anime .s5-lineR { position:absolute; right:0; bottom:45%; height:1.5px; width:0; background:linear-gradient(to left,transparent,var(--g)); }
.hero-slider-anime .s5-dot1 { position:absolute; left:30%; top:35%; width:10px; height:10px; border-radius:50%; background:var(--g); opacity:0; }
.hero-slider-anime .s5-dot2 { position:absolute; right:25%; top:28%; width:6px; height:6px; border-radius:50%; background:var(--glt); opacity:0; }
.hero-slider-anime .s5-bgnum {
    position:absolute; left:50%; top:15%; transform:translateX(-50%);
    font-family:'Red Hat Display', sans-serif; font-size:clamp(160px,22vw,320px); font-weight:800;
    color:transparent; -webkit-text-stroke:1.5px rgba(152,208,82,.25);
    line-height:1; user-select:none; opacity:0;
}
.hero-slider-anime .s5-content { position:relative; z-index:10; width:100%; padding:0 90px; display:flex; justify-content:center; align-items:center; }
.hero-slider-anime .s5-left { max-width: 580px; }
.hero-slider-anime .s5-left .slide-title { font-size: clamp(4rem, 7vw, 7rem); margin: 24px 0 32px; }
.hero-slider-anime .s5-stats { flex-direction: row; gap: 32px; margin-top: 24px; }
.hero-slider-anime .s5-cta { margin-top: 28px; }

/* Chrome */
.hero-slider-anime .slide-progress {
    position:absolute; top:0; left:0; height:5px; width:0%;
    background:linear-gradient(to right, var(--gdk), var(--g), var(--glt));
    z-index:100; border-radius:0 4px 4px 0;
    box-shadow: 0 2px 12px rgba(152,208,82,.5);
}
.hero-slider-anime .slide-dots {
    position:absolute; left:60px; bottom:52px; z-index:100;
    display:flex; gap:8px; align-items:center;
}
.hero-slider-anime .dot {
    width:8px; height:8px; border-radius:50%; background:var(--bdr);
    cursor:pointer; transition:all .35s cubic-bezier(.4,0,.2,1);
    border:1.5px solid transparent;
}
.hero-slider-anime .dot.active { background:var(--g); width:28px; border-radius:4px; border-color:var(--gdk); }
.hero-slider-anime .dot.dark-mode { background: rgba(255,255,255,.25); }
.hero-slider-anime .dot.dark-mode.active { background: var(--g); }

.hero-slider-anime .slide-counter {
    position:absolute; left:24px; top:50%; transform:translateY(-50%);
    z-index:100; writing-mode:vertical-rl;
    display:flex; align-items:center; gap:10px; font-family:'Red Hat Display', sans-serif;
}
.hero-slider-anime .cc { font-size:.68rem; font-weight:700; letter-spacing:.1em; }
.hero-slider-anime .cl { width:1px; height:44px; }
.hero-slider-anime .ct { font-size:.62rem; letter-spacing:.1em; }
.hero-slider-anime .cc-light { color: var(--gdk); }
.hero-slider-anime .cl-light { background: var(--bdr); }
.hero-slider-anime .ct-light { color: var(--mut); }
.hero-slider-anime .cc-dark { color: var(--g); }
.hero-slider-anime .cl-dark { background: rgba(255,255,255,.2); }
.hero-slider-anime .ct-dark { color: rgba(255,255,255,.4); }

.hero-slider-anime .swiper-button-prev, .hero-slider-anime .swiper-button-next {
    position:absolute; bottom:44px; z-index:100;
    width:54px; height:54px; border-radius:50%;
    display:flex; align-items:center; justify-content:center;
    cursor:pointer; font-size:1.1rem;
    transition:all .25s ease; user-select:none;
}
.hero-slider-anime .swiper-button-next { right:64px; }
.hero-slider-anime .swiper-button-prev { right:130px; }
.hero-slider-anime .nav-light { border:2px solid var(--bdr); background:var(--w); color:var(--ink); box-shadow:0 4px 20px rgba(0,0,0,.07); }
.hero-slider-anime .nav-dark  { border:2px solid rgba(255,255,255,.2); background:rgba(255,255,255,.06); color:var(--w); }
.hero-slider-anime .nav-light:hover, .hero-slider-anime .nav-dark:hover { background:var(--g); border-color:var(--g); color:var(--ink); transform:scale(1.1); box-shadow:0 8px 30px rgba(152,208,82,.45); }

.hero-slider-anime .scroll-hint {
    position:absolute; right:20px; top:50%; transform:translateY(-50%);
    z-index:100; display:flex; flex-direction:column; align-items:center; gap:10px;
    writing-mode:vertical-rl; font-size:.52rem; letter-spacing:.3em; text-transform:uppercase;
}
.hero-slider-anime .scroll-track { width:2px; height:56px; border-radius:2px; overflow:hidden; position:relative; }
.hero-slider-anime .scroll-thumb { width:100%; height:26px; background:var(--g); border-radius:2px; position:absolute; top:0; }
.hero-slider-anime .sh-light { color:var(--mut); }
.hero-slider-anime .sh-light .scroll-track { background:var(--bdr); }
.hero-slider-anime .sh-dark  { color:rgba(255,255,255,.4); }
.hero-slider-anime .sh-dark  .scroll-track { background:rgba(255,255,255,.15); }

@media(max-width:860px){
    .hero-slider-anime .s1 { grid-template-columns:1fr!important; }
    .hero-slider-anime .s1-visual { display:none; }
    .hero-slider-anime .s3 { grid-template-columns:1fr!important; }
    .hero-slider-anime .s3-visual { display:none; }
    .hero-slider-anime .s4-content { margin-left:0!important; padding:0 28px!important; }
    .hero-slider-anime .s4-panel { width:100%; clip-path:polygon(0 0,100% 0,100% 28%,0 38%); height:40%; top:0; }
    .hero-slider-anime .s2-content { padding:0 28px; }
    .hero-slider-anime .s5-content { padding:0 28px; }
    .hero-slider-anime .s5-stats { flex-direction: column; }
    .hero-slider-anime .slide-dots { left:28px; }
    .hero-slider-anime .swiper-button-prev { right:90px; }
    .hero-slider-anime .swiper-button-next { right:24px; }
    .hero-slider-anime .slide-counter { display:none; }
    .hero-slider-anime .scroll-hint { display:none; }
}
</style>
