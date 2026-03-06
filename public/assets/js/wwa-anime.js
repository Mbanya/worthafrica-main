(function () {
    'use strict';

    const section = document.getElementById('who-we-are');
    if (!section || typeof anime === 'undefined') return;

    let entered = false;

    function enterSection() {
        if (entered) return;
        entered = true;

        const tl = anime.timeline({ easing: 'easeOutExpo' });

        tl.add({ targets: '.wwa-bg-circle', opacity: [0, .18], scale: [.5, 1], duration: 1200 }, 0)
            .add({ targets: '.wwa-bg-dots', opacity: [0, .25], translateY: [20, 0], duration: 800 }, 100)
            .add({ targets: '.wwa-bg-line', opacity: [0, .2], scaleY: [0, 1], duration: 900, transformOrigin: 'top center' }, 200)
            .add({ targets: '.wwa-label', opacity: [0, 1], translateX: [-30, 0], duration: 700, easing: 'easeOutBack' }, 200)
            .add({ targets: '#wwa-visual-card', opacity: [0, 1], translateY: [50, 0], duration: 900 }, 350)
            .add({ targets: '#wwa-ring1', opacity: [0, 1], scale: [.4, 1], duration: 800, easing: 'easeOutBack' }, 500)
            .add({ targets: '#wwa-ring2', opacity: [0, 1], scale: [.3, 1], duration: 700, easing: 'easeOutBack' }, 580)
            .add({ targets: ['#wwa-tag1', '#wwa-tag2', '#wwa-tag3'], opacity: [0, 1], translateX: [20, 0], duration: 500, delay: anime.stagger(100), easing: 'easeOutBack' }, 650)
            .add({ targets: '#wwa-stat-badge', opacity: [0, 1], translateY: [20, 0], scale: [.85, 1], duration: 700, easing: 'easeOutBack' }, 750)
            .add({ targets: '#wwa-headline', opacity: [0, 1], translateY: [28, 0], duration: 700 }, 400)
            .add({ targets: '#wwa-tabs', opacity: [0, 1], translateY: [16, 0], duration: 600 }, 560);

        anime({ targets: '#wwa-ring2', rotate: '1turn', duration: 22000, loop: true, easing: 'linear' });

        initWwaCanvas();

        setTimeout(() => switchTab(0, true), 900);
    }

    function initWwaCanvas() {
        const cv = document.getElementById('wwa-bg-canvas');
        if (!cv) return;
        const card = document.getElementById('wwa-visual-card');
        if (!card) return;
        const cx = cv.getContext('2d');
        let pts = [];
        const particleCount = 45;

        function resize() {
            const rect = card.getBoundingClientRect();
            const W = rect.width;
            const H = rect.height;
            const dpr = window.devicePixelRatio || 1;
            cv.width = W * dpr;
            cv.height = H * dpr;
            cv.style.width = W + 'px';
            cv.style.height = H + 'px';
            cx.setTransform(1, 0, 0, 1, 0, 0);
            cx.scale(dpr, dpr);
            if (pts.length === 0) {
                for (let i = 0; i < particleCount; i++) pts.push(new Particle(W, H));
            } else {
                pts.forEach(function (p) { p.W = W; p.H = H; });
            }
        }

        function Particle(W, H) {
            this.reset(W, H);
        }
        Particle.prototype.reset = function (W, H) {
            this.x = Math.random() * W;
            this.y = Math.random() * H;
            this.rad = Math.random() * 2.5 + 0.8;
            this.vx = (Math.random() - 0.5) * 0.28;
            this.vy = (Math.random() - 0.5) * 0.28;
            this.a = Math.random() * 0.2 + 0.04;
            this.W = W;
            this.H = H;
        };
        Particle.prototype.tick = function () {
            this.x += this.vx;
            this.y += this.vy;
            if (this.x < 0 || this.x > this.W || this.y < 0 || this.y > this.H) this.reset(this.W, this.H);
        };
        Particle.prototype.draw = function () {
            cx.beginPath();
            cx.arc(this.x, this.y, this.rad, 0, Math.PI * 2);
            cx.fillStyle = 'rgba(152,208,82,' + this.a + ')';
            cx.fill();
        };

        resize();
        const ro = new ResizeObserver(() => resize());
        ro.observe(card);

        function loop() {
            const rect = card.getBoundingClientRect();
            const W = rect.width;
            const H = rect.height;
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
            pts.forEach(function (p) {
                p.W = W;
                p.H = H;
                p.tick();
                p.draw();
            });
            requestAnimationFrame(loop);
        }
        loop();
    }

    const obs = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            enterSection();
            obs.disconnect();
        }
    }, { threshold: 0.15 });
    obs.observe(section);

    const tabs = document.querySelectorAll('.wwa-tab');
    const panels = document.querySelectorAll('.wwa-panel');
    let activeTab = 0;

    const progressHeights = ['25%', '50%', '75%', '100%'];
    const tagLabels = [
        ['Social Enterprise', 'Technology', 'Africa-Rooted'],
        ['10+ Years', 'Gap Bridging', 'Ideas Exchange'],
        ['Commercial Discipline', 'Quality Standards', 'Community-Led'],
        ['Enable · AdScale', 'Nexus · Nobell', 'IKEIT · Projektfi'],
    ];

    function switchTab(idx, initial = false) {
        if (idx === activeTab && !initial) return;

        tabs.forEach((t, i) => t.classList.toggle('active', i === idx));

        if (!initial) {
            const current = document.querySelector('.wwa-panel.active');
            if (current) {
                anime({
                    targets: current,
                    opacity: [1, 0],
                    translateY: [0, -12],
                    duration: 250,
                    easing: 'easeInQuart',
                    complete() {
                        current.classList.remove('active');
                        current.style.display = 'none';
                        showPanel(idx);
                    }
                });
            }
        } else {
            showPanel(idx);
        }

        anime({ targets: '#wwa-tab-progress', height: progressHeights[idx], duration: 500, easing: 'easeOutQuart' });

        const tagEls = document.querySelectorAll('.wwa-tag');
        const labels = tagLabels[idx];
        tagEls.forEach((t, i) => {
            if (labels[i]) t.textContent = labels[i];
        });
        anime({
            targets: '#wwa-card-tags .wwa-tag',
            opacity: [0, 1],
            translateX: [12, 0],
            duration: 400,
            delay: anime.stagger(80),
            easing: 'easeOutBack'
        });

        activeTab = idx;
    }

    function showPanel(idx) {
        const panel = document.querySelector(`[data-panel="${idx}"]`);
        if (!panel) return;
        panel.style.display = 'block';
        panel.classList.add('active');

        const header = panel.querySelector('.wwa-panel-header');
        const body = panel.querySelector('.wwa-panel-body');
        const chips = panel.querySelector('.wwa-chips');
        const quote = panel.querySelector('.wwa-quote');
        const pcards = panel.querySelectorAll('.wwa-pcard');
        const next = panel.querySelector('.wwa-next');

        const tl = anime.timeline({ easing: 'easeOutExpo' });

        tl.add({ targets: panel, opacity: [0, 1], duration: 300 }, 0)
            .add({ targets: header, opacity: [0, 1], translateY: [20, 0], duration: 550, easing: 'easeOutBack' }, 50)
            .add({ targets: body, opacity: [0, 1], translateY: [16, 0], duration: 500 }, 150);

        if (chips) tl.add({ targets: chips.querySelectorAll('.wwa-chip'), opacity: [0, 1], translateY: [10, 0], scale: [.9, 1], duration: 400, delay: anime.stagger(60), easing: 'easeOutBack' }, 280);
        if (quote) tl.add({ targets: quote, opacity: [0, 1], translateX: [-12, 0], duration: 500 }, 380);
        if (pcards.length) tl.add({ targets: pcards, opacity: [0, 1], translateY: [16, 0], scale: [.95, 1], duration: 450, delay: anime.stagger(60), easing: 'easeOutBack' }, 250);
        if (next) tl.add({ targets: next, opacity: [0, 1], duration: 400 }, '-=200');
    }

    tabs.forEach(t => t.addEventListener('click', () => switchTab(+t.dataset.tab)));

    document.addEventListener('click', e => {
        const btn = e.target.closest('.wwa-next');
        if (btn) switchTab(+btn.dataset.next);
    });

    if (section.getBoundingClientRect().top < window.innerHeight) enterSection();

    (function initReachSection() {
        const reachSection = document.getElementById('our-reach');
        if (!reachSection || typeof anime === 'undefined') return;

        let reachEntered = false;
        const reachObs = new IntersectionObserver(function (entries) {
            if (!entries[0].isIntersecting || reachEntered) return;
            reachEntered = true;
            reachObs.disconnect();

            const title = reachSection.querySelector('.our-reach-title');
            const cards = reachSection.querySelectorAll('[data-reach-card]');

            const tl = anime.timeline({ easing: 'easeOutExpo' });
            tl.add({ targets: title.querySelector('.pre'), opacity: [0, 1], translateY: [24, 0], duration: 600, easing: 'easeOutBack' }, 0)
                .add({ targets: title.querySelector('.title'), opacity: [0, 1], translateY: [32, 0], scale: [0.92, 1], duration: 750, easing: 'easeOutElastic(1,.6)' }, 80)
                .add({ targets: title.querySelector('.bg-content'), opacity: [0, 1], duration: 500 }, 120);

            cards.forEach(function (card, i) {
                const fromX = i === 0 ? -80 : i === 2 ? 80 : 0;
                const fromY = i === 1 ? 60 : 45;
                tl.add({ targets: card, opacity: [0, 1], translateX: [fromX, 0], translateY: [fromY, 0], scale: [0.85, 1], duration: 850, easing: 'easeOutElastic(1,.45)' }, 180 + i * 90);
            });

            cards.forEach(function (card, i) {
                const icon = card.querySelector('.reach-icon');
                const number = card.querySelector('.reach-number');
                const label = card.querySelector('.reach-label');
                const delay = 550 + i * 180;
                tl.add({ targets: icon, scale: [0, 1], rotate: [-180, 0], duration: 700, easing: 'easeOutElastic(1,.6)' }, delay)
                    .add({ targets: number, opacity: [0, 1], translateY: [20, 0], scale: [0.8, 1], duration: 550, easing: 'easeOutBack' }, delay + 120)
                    .add({ targets: label, opacity: [0, 1], translateY: [8, 0], duration: 450 }, delay + 220);
            });

            cards.forEach(function (card, i) {
                const icon = card.querySelector('.reach-icon');
                anime({ targets: icon, scale: [1, 1.06, 1], duration: 2200, delay: 1400 + i * 350, loop: true, easing: 'easeInOutSine' });
            });

            cards.forEach(function (card) {
                card.addEventListener('mouseenter', function () {
                    anime({ targets: card, translateY: [0, -10], duration: 320, easing: 'easeOutQuart' });
                });
                card.addEventListener('mouseleave', function () {
                    anime({ targets: card, translateY: [-10, 0], duration: 320, easing: 'easeOutQuart' });
                });
            });
        }, { threshold: 0.2 });
        reachObs.observe(reachSection);
    })();
})();
