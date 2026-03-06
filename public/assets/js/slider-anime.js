(function () {
  'use strict';
  if (typeof anime === 'undefined') return;

  const home = document.getElementById('home');
  if (!home || !home.classList.contains('hero-slider-anime')) return;

  const DARK_SLIDES = [0, 1, 2, 3, 4];
  const HEADER_DARK_SLIDES = [0, 1, 2, 3, 4];
  const DURATION = 7000;
  let current = 0;
  let isAnimating = false;
  let timer = null;
  let progAnim = null;

  const slideEls = home.querySelectorAll('.swiper-slide');
  const dotsEl = document.getElementById('hero-dots');
  const ccEl = document.getElementById('hero-cc');
  const progEl = document.getElementById('hero-prog');

  if (!slideEls.length || !dotsEl || !ccEl || !progEl) return;

  slideEls.forEach(function (_, i) {
    const d = document.createElement('div');
    d.className = 'dot' + (i === 0 ? ' active' : '');
    d.setAttribute('role', 'button');
    d.setAttribute('aria-label', 'Go to slide ' + (i + 1));
    d.addEventListener('click', function () { goTo(i); });
    dotsEl.appendChild(d);
  });

  function startProg() {
    if (progAnim) progAnim.pause();
    progEl.style.width = '0%';
    progAnim = anime({ targets: progEl, width: '100%', duration: DURATION, easing: 'linear' });
  }

  function updateUI(i) {
    ccEl.textContent = String(i + 1).padStart(2, '0');
    dotsEl.querySelectorAll('.dot').forEach(function (d, j) {
      d.classList.toggle('active', j === i);
    });
    setTheme(i);
  }

  function setTheme(slideIndex) {
    const isDark = DARK_SLIDES.includes(slideIndex);
    const headerOverDark = HEADER_DARK_SLIDES.includes(slideIndex);

    const heroSection = home.closest('.hero-section');
    const header = heroSection && heroSection.querySelector('.header-hero-overlay');
    if (header) {
      header.classList.toggle('header-over-dark', headerOverDark);
    }

    const btnP = document.getElementById('hero-btn-prev');
    const btnN = document.getElementById('hero-btn-next');
    const sh = document.getElementById('hero-scroll-hint');
    const dots = home.querySelectorAll('.dot');
    const cl = home.querySelector('.cl');
    const ct = home.querySelector('.ct');

    if (isDark) {
      btnP.className = 'swiper-button-prev nav-dark';
      btnN.className = 'swiper-button-next nav-dark';
      sh.className = 'scroll-hint sh-dark';
      dots.forEach(function (d) { d.classList.add('dark-mode'); });
      ccEl.className = 'cc cc-dark';
      if (cl) cl.className = 'cl cl-dark';
      if (ct) ct.className = 'ct ct-dark';
    } else {
      btnP.className = 'swiper-button-prev nav-light';
      btnN.className = 'swiper-button-next nav-light';
      sh.className = 'scroll-hint sh-light';
      dots.forEach(function (d) { d.classList.remove('dark-mode'); });
      ccEl.className = 'cc cc-light';
      if (cl) cl.className = 'cl cl-light';
      if (ct) ct.className = 'ct ct-light';
    }
  }

  function animIn(slide, idx) {
    const tl = anime.timeline({ easing: 'easeOutExpo' });
    const eyebrow = slide.querySelector('.eyebrow-pill');
    const tlis = slide.querySelectorAll('.tli');
    const hls = slide.querySelectorAll('.hl');
    const disc = slide.querySelector('.slide-disc');
    const ctas = slide.querySelector('.cta-row');

    hls.forEach(function (h) { h.classList.remove('on'); });

    if (idx === 0) {
      const arc = slide.querySelector('.s1-arc');
      const ring = slide.querySelector('.s1-ring');
      const bracket = slide.querySelector('.s1-bracket');
      const pill = slide.querySelector('.s1-pill');
      const dotgrid = slide.querySelector('.s1-dotgrid');
      const o1 = slide.querySelector('.s1-o1');
      const o2 = slide.querySelector('.s1-o2');
      const num = slide.querySelector('.s1-num');
      const badge = slide.querySelector('.s1-badge');

      tl
        .add({ targets: arc, opacity: [0, 0.92], scale: [0.1, 1], duration: 1100, easing: 'easeOutElastic(1,.55)' }, 0)
        .add({ targets: ring, opacity: [0, 1], scale: [0.2, 1], duration: 900 }, 80)
        .add({ targets: [pill, bracket], opacity: [0, 1], scale: [0, 1], duration: 600, delay: anime.stagger(70), easing: 'easeOutBack' }, 200)
        .add({ targets: dotgrid, opacity: [0, 1], translateX: [30, 0], duration: 600 }, 280)
        .add({ targets: eyebrow, opacity: [0, 1], translateY: [-24, 0], duration: 680, easing: 'easeOutBack' }, 160)
        .add({ targets: tlis, translateY: ['110%', '0%'], duration: 900, delay: anime.stagger(100), easing: 'easeOutQuart', complete: function () { hls.forEach(function (h) { h.classList.add('on'); }); } }, 300)
        .add({ targets: disc, opacity: [0, 1], translateY: [26, 0], duration: 650 }, '-=480')
        .add({ targets: ctas, opacity: [0, 1], translateY: [18, 0], duration: 540 }, '-=430')
        .add({ targets: [o1, o2], opacity: [0, 1], scale: [0.15, 1], duration: 1000, delay: anime.stagger(120), easing: 'easeOutElastic(1,.6)' }, 380)
        .add({ targets: num, opacity: [0, 1], scale: [0.3, 1], duration: 1100, easing: 'easeOutElastic(1,.5)' }, 500)
        .add({ targets: badge, opacity: [0, 1], translateY: [36, 0], scale: [0.6, 1], duration: 750, easing: 'easeOutBack', complete: function () { isAnimating = false; } }, 680);

      anime({ targets: o1, rotate: '1turn', duration: 11000, loop: true, easing: 'linear' });
      anime({ targets: o2, rotate: '-1turn', duration: 19000, loop: true, easing: 'linear' });
    } else if (idx === 1) {
      const bc1 = slide.querySelector('.s2-bigcircle');
      const bc2 = slide.querySelector('.s2-bigcircle2');
      const gf = slide.querySelector('.s2-gfill');
      const triL = slide.querySelector('.s2-triL');
      const triR = slide.querySelector('.s2-triR');
      const dotL = slide.querySelector('.s2-dotL');
      const dotR = slide.querySelector('.s2-dotR');
      const hl2 = slide.querySelector('.s2-hline');

      tl
        .add({ targets: gf, opacity: [0, 0.85], scale: [0, 1], duration: 1000, easing: 'easeOutElastic(1,.6)' }, 0)
        .add({ targets: bc1, opacity: [0, 1], scale: [0.2, 1], duration: 1000 }, 60)
        .add({ targets: bc2, opacity: [0, 1], scale: [0.2, 1], duration: 900 }, 120)
        .add({ targets: triL, opacity: [0, 1], translateX: [-80, 0], duration: 700, easing: 'easeOutBack' }, 250)
        .add({ targets: triR, opacity: [0, 1], translateX: [80, 0], duration: 700, easing: 'easeOutBack' }, 300)
        .add({ targets: [dotL, dotR], opacity: [0, 1], scale: [0, 1], duration: 500, delay: anime.stagger(80), easing: 'easeOutBack' }, 350)
        .add({ targets: eyebrow, opacity: [0, 1], translateY: [-28, 0], duration: 650, easing: 'easeOutBack' }, 180)
        .add({ targets: tlis, translateY: ['110%', '0%'], duration: 950, delay: anime.stagger(110), easing: 'easeOutQuart', complete: function () { hls.forEach(function (h) { h.classList.add('on'); }); } }, 320)
        .add({ targets: disc, opacity: [0, 1], translateY: [24, 0], duration: 640 }, '-=500')
        .add({ targets: ctas, opacity: [0, 1], translateY: [18, 0], duration: 520 }, '-=440')
        .add({ targets: hl2, width: ['0%', '100%'], duration: 700 }, '-=300')
        .add({ targets: bc2, rotate: '1turn', duration: 25000, loop: true, easing: 'linear' }, 1200);

      setTimeout(function () { isAnimating = false; }, 2500);
    } else if (idx === 2) {
      const sqbig = slide.querySelector('.s3-sqbig');
      const sqsm = slide.querySelector('.s3-sqsm');
      const bars = slide.querySelectorAll('.s3-bar');
      const bgtext = slide.querySelector('.s3-bgtext');
      const dotgrid = slide.querySelector('.s3-dotgrid');

      tl
        .add({ targets: bgtext, opacity: [0, 1], translateX: [-60, 0], duration: 900, easing: 'easeOutQuart' }, 0)
        .add({ targets: sqbig, opacity: [0, 0.88], scale: [0.08, 1], rotate: ['-15deg', '18deg'], duration: 1100, easing: 'easeOutElastic(1,.55)' }, 0)
        .add({ targets: sqsm, opacity: [0, 1], scale: [0, 1], duration: 800, easing: 'easeOutBack' }, 120)
        .add({ targets: dotgrid, opacity: [0, 1], translateY: [-20, 0], duration: 600 }, 250)
        .add({ targets: bars, scaleY: [0, 1], opacity: [0, 1], duration: 700, delay: anime.stagger(70), easing: 'easeOutElastic(1,.6)' }, 350)
        .add({ targets: eyebrow, opacity: [0, 1], translateX: [40, 0], duration: 650, easing: 'easeOutBack' }, 200)
        .add({ targets: tlis, translateY: ['110%', '0%'], duration: 940, delay: anime.stagger(110), easing: 'easeOutQuart', complete: function () { hls.forEach(function (h) { h.classList.add('on'); }); } }, 350)
        .add({ targets: disc, opacity: [0, 1], translateX: [30, 0], duration: 640 }, '-=480')
        .add({ targets: ctas, opacity: [0, 1], translateX: [20, 0], duration: 520, complete: function () { isAnimating = false; } }, '-=420');
    } else if (idx === 3) {
      const panel = slide.querySelector('.s4-panel');
      const pnum = slide.querySelector('.s4-panel-num');
      const circle = slide.querySelector('.s4-circle');
      const dg = slide.querySelector('.s4-dotgrid');
      const hl4 = slide.querySelector('.s4-hline');
      const ring4 = slide.querySelector('.s4-ring');

      tl
        .add({ targets: panel, opacity: [0, 1], translateX: ['-100%', '0%'], duration: 900, easing: 'easeOutQuart' }, 0)
        .add({ targets: pnum, opacity: [0, 1], translateX: [-40, 0], duration: 700, easing: 'easeOutExpo' }, 200)
        .add({ targets: circle, opacity: [0, 1], scale: [0, 1], duration: 900, easing: 'easeOutElastic(1,.6)' }, 400)
        .add({ targets: ring4, opacity: [0, 1], scale: [0.3, 1], duration: 800, easing: 'easeOutBack' }, 300)
        .add({ targets: [dg, hl4], opacity: [0, 1], translateX: [30, 0], duration: 600, delay: anime.stagger(80) }, 350)
        .add({ targets: eyebrow, opacity: [0, 1], translateX: [40, 0], duration: 650, easing: 'easeOutBack' }, 220)
        .add({ targets: tlis, translateY: ['110%', '0%'], duration: 940, delay: anime.stagger(110), easing: 'easeOutQuart', complete: function () { hls.forEach(function (h) { h.classList.add('on'); }); } }, 380)
        .add({ targets: disc, opacity: [0, 1], translateX: [28, 0], duration: 640 }, '-=470')
        .add({ targets: ctas, opacity: [0, 1], translateX: [18, 0], duration: 520, complete: function () { isAnimating = false; } }, '-=410');
    } else if (idx === 4) {
      const burst = slide.querySelector('.s5-burst');
      const r1 = slide.querySelector('.s5-ring1');
      const r2 = slide.querySelector('.s5-ring2');
      const lL = slide.querySelector('.s5-lineL');
      const lR = slide.querySelector('.s5-lineR');
      const d1 = slide.querySelector('.s5-dot1');
      const d2 = slide.querySelector('.s5-dot2');
      const bgn = slide.querySelector('.s5-bgnum');

      tl
        .add({ targets: burst, opacity: [0, 0.55], scale: [0.3, 1], duration: 1200, easing: 'easeOutExpo' }, 0)
        .add({ targets: r1, opacity: [0, 1], scale: [0.2, 1], duration: 1000, easing: 'easeOutExpo' }, 80)
        .add({ targets: r2, opacity: [0, 1], scale: [0.2, 1], duration: 1100, easing: 'easeOutExpo' }, 140)
        .add({ targets: bgn, opacity: [0, 1], translateY: [-30, 0], duration: 900 }, 200)
        .add({ targets: lL, width: ['0px', '220px'], duration: 800, easing: 'easeOutQuart' }, 400)
        .add({ targets: lR, width: ['0px', '180px'], duration: 700, easing: 'easeOutQuart' }, 480)
        .add({ targets: [d1, d2], opacity: [0, 1], scale: [0, 1], duration: 500, delay: anime.stagger(100), easing: 'easeOutBack' }, 500)
        .add({ targets: eyebrow, opacity: [0, 1], translateY: [20, 0], duration: 700, easing: 'easeOutBack' }, 350)
        .add({ targets: tlis, translateY: ['110%', '0%'], duration: 950, delay: anime.stagger(110), easing: 'easeOutQuart', complete: function () { hls.forEach(function (h) { h.classList.add('on'); }); } }, 450)
        .add({ targets: disc, opacity: [0, 1], translateY: [22, 0], duration: 650 }, '-=470')
        .add({ targets: ctas, opacity: [0, 1], translateY: [15, 0], duration: 540, complete: function () { isAnimating = false; } }, '-=420');

      anime({ targets: burst, scale: [1, 1.06], duration: 3000, loop: true, direction: 'alternate', easing: 'easeInOutSine', delay: 1500 });
      anime({ targets: r1, rotate: '1turn', duration: 20000, loop: true, easing: 'linear' });
      anime({ targets: r2, rotate: '-1turn', duration: 30000, loop: true, easing: 'linear' });
    }
  }

  function animOut(slide, idx, cb) {
    const tlis = slide.querySelectorAll('.tli');
    const eyebrow = slide.querySelector('.eyebrow-pill');
    const disc = slide.querySelector('.slide-disc');
    const ctas = slide.querySelector('.cta-row');

    const dirs = [
      { ty: -22, tx: 0 },
      { ty: 0, tx: 0 },
      { ty: 0, tx: 30 },
      { ty: 0, tx: 30 },
      { ty: 22, tx: 0 }
    ];
    const d = dirs[idx] || dirs[0];

    const decoSelectors = '.s1-arc,.s1-ring,.s1-bracket,.s1-pill,.s1-dotgrid,.s1-o1,.s1-o2,.s1-num,.s1-badge,.s2-bigcircle,.s2-bigcircle2,.s2-gfill,.s2-triL,.s2-triR,.s2-dotL,.s2-dotR,.s2-hline,.s3-sqbig,.s3-sqsm,.s3-bar,.s3-bgtext,.s3-dotgrid,.s4-panel,.s4-panel-num,.s4-circle,.s4-dotgrid,.s4-hline,.s4-ring,.s5-burst,.s5-ring1,.s5-ring2,.s5-dot1,.s5-dot2,.s5-bgnum';
    const decoEls = slide.querySelectorAll(decoSelectors);

    anime.timeline({ easing: 'easeInQuart' })
      .add({ targets: [ctas, disc], opacity: 0, translateY: d.ty, translateX: d.tx, duration: 280, delay: anime.stagger(40) }, 0)
      .add({ targets: tlis, translateY: idx === 4 ? '110%' : '-110%', duration: 420, delay: anime.stagger(50) }, 30)
      .add({ targets: eyebrow, opacity: 0, duration: 250 }, 60)
      .add({ targets: decoEls, opacity: 0, duration: 350, delay: anime.stagger(18), complete: cb }, 80);
  }

  function goTo(next) {
    if (isAnimating || next === current) return;
    isAnimating = true;
    clearTimeout(timer);
    const prev = slideEls[current];
    const nxt = slideEls[next];
    animOut(prev, current, function () {
      prev.classList.remove('active');
      nxt.classList.add('active');
      current = next;
      updateUI(current);
      animIn(nxt, current);
      startProg();
      schedule();
    });
  }

  function schedule() {
    timer = setTimeout(function () {
      goTo((current + 1) % slideEls.length);
    }, DURATION);
  }

  document.getElementById('hero-btn-prev').addEventListener('click', function () {
    goTo((current - 1 + slideEls.length) % slideEls.length);
  });
  document.getElementById('hero-btn-next').addEventListener('click', function () {
    goTo((current + 1) % slideEls.length);
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowRight') goTo((current + 1) % slideEls.length);
    if (e.key === 'ArrowLeft') goTo((current - 1 + slideEls.length) % slideEls.length);
  });

  anime({ targets: '#hero-sthumb', translateY: [0, 30], duration: 1600, loop: true, direction: 'alternate', easing: 'easeInOutSine' });

  (function canvasInit() {
    const cv = document.getElementById('hero-bg-canvas');
    if (!cv) return;
    const cx = cv.getContext('2d');
    let W, H, pts = [];

    function resize() {
      W = cv.width = window.innerWidth;
      H = cv.height = home.offsetHeight || window.innerHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    function P() {
      this.r();
    }
    P.prototype.r = function () {
      this.x = Math.random() * W;
      this.y = Math.random() * H;
      this.rad = Math.random() * 2.5 + 0.8;
      this.vx = (Math.random() - 0.5) * 0.28;
      this.vy = (Math.random() - 0.5) * 0.28;
      this.a = Math.random() * 0.2 + 0.04;
    };
    P.prototype.tick = function () {
      this.x += this.vx;
      this.y += this.vy;
      if (this.x < 0 || this.x > W || this.y < 0 || this.y > H) this.r();
    };
    P.prototype.draw = function () {
      cx.beginPath();
      cx.arc(this.x, this.y, this.rad, 0, Math.PI * 2);
      cx.fillStyle = 'rgba(152,208,82,' + this.a + ')';
      cx.fill();
    };

    for (let i = 0; i < 65; i++) pts.push(new P());

    function loop() {
      cx.clearRect(0, 0, W, H);
      for (let i = 0; i < pts.length; i++) {
        for (let j = i + 1; j < pts.length; j++) {
          const dx = pts[i].x - pts[j].x;
          const dy = pts[i].y - pts[j].y;
          const d = Math.sqrt(dx * dx + dy * dy);
          if (d < 130) {
            cx.beginPath();
            cx.moveTo(pts[i].x, pts[i].y);
            cx.lineTo(pts[j].x, pts[j].y);
            cx.strokeStyle = 'rgba(152,208,82,' + (0.09 * (1 - d / 130)) + ')';
            cx.lineWidth = 0.7;
            cx.stroke();
          }
        }
      }
      pts.forEach(function (p) { p.tick(); p.draw(); });
      requestAnimationFrame(loop);
    }
    loop();
  })();

  animIn(slideEls[0], 0);
  startProg();
  schedule();
})();
