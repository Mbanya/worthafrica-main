<style>
.wwa-section {
    --wwa-g: #98D052;
    --wwa-gdk: #6aaa28;
    --wwa-glt: #c5e990;
    --wwa-ink: #0f1a0a;
    --wwa-w: #ffffff;
    --wwa-off: #f5f9f0;
    --wwa-mut: #5a6b4e;
    --wwa-bdr: #d8edc4;
    --wwa-dark: #111c0a;
}

#who-we-are.wwa-section {
    position: relative;
    padding: 100px 0 120px;
    overflow: hidden;
    background: var(--wwa-w);
}

.wwa-bg {
    position: absolute; inset: 0;
    pointer-events: none; overflow: hidden; z-index: 0;
}
.wwa-bg-circle {
    position: absolute;
    width: 700px; height: 700px; border-radius: 50%;
    background: radial-gradient(circle at 40% 40%, var(--wwa-glt), rgba(152,208,82,0));
    top: -200px; right: -200px;
    opacity: .18;
}
.wwa-bg-dots {
    position: absolute;
    bottom: 60px; left: 40px;
    width: 160px; height: 160px;
    background-image: radial-gradient(circle, var(--wwa-g) 1.8px, transparent 1.8px);
    background-size: 20px 20px;
    opacity: .25;
}
.wwa-bg-line {
    position: absolute;
    width: 1px; height: 300px;
    background: linear-gradient(to bottom, transparent, var(--wwa-g), transparent);
    right: 15%; top: 50%; transform: translateY(-50%);
    opacity: .2;
}

.wwa-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 60px;
    position: relative; z-index: 1;
}

.wwa-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}

.wwa-left {
    position: sticky;
    top: 100px;
}

.wwa-visual-wrapper {
    position: relative;
}

.wwa-label {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 40px;
    opacity: 0;
    transform: translateX(-30px);
}
.wwa-label-bar { width: 40px; height: 3px; background: var(--wwa-g); border-radius: 2px; }
.wwa-label-text {
    font-family: 'Red Hat Display', sans-serif;
    font-size: 14px; font-weight: 700; letter-spacing: .28em;
    text-transform: uppercase; color: var(--wwa-gdk);
}

.wwa-visual-card {
    position: relative;
    background: var(--wwa-dark);
    border-radius: 24px;
    overflow: hidden;
    aspect-ratio: 4/5;
    opacity: 0;
    transform: translateY(40px);
}

.wwa-bg-canvas {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    pointer-events: none;
}
.wwa-graphic-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    pointer-events: none;
    color: var(--wwa-g);
    opacity: .12;
}
.wwa-graphic-overlay svg {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.wwa-stat-badge {
    position: absolute;
    bottom: 28px; left: 28px;
    background: var(--wwa-g);
    border-radius: 16px;
    padding: 20px 28px;
    z-index: 5;
    opacity: 0;
    transform: translateY(20px) scale(.9);
}
.wsb-num {
    font-family: 'Red Hat Display', sans-serif;
    font-size: 42px; font-weight: 800;
    color: var(--wwa-ink); line-height: 1;
}
.wsb-label {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px; font-weight: 700;
    letter-spacing: .18em; text-transform: uppercase;
    color: var(--wwa-ink); opacity: .7;
    margin-top: 4px;
}

.wwa-ring {
    position: absolute; top: -60px; right: -60px;
    width: 200px; height: 200px; border-radius: 50%;
    border: 2px solid rgba(152,208,82,.35);
    pointer-events: none;
    z-index: 5;
}
.wwa-ring-inner {
    position: absolute; top: -30px; right: -30px;
    width: 120px; height: 120px; border-radius: 50%;
    border: 1.5px dashed rgba(152,208,82,.5);
    pointer-events: none;
    z-index: 5;
}

.wwa-tags {
    position: absolute;
    top: 28px; right: 28px;
    display: flex; flex-direction: column; gap: 8px;
    z-index: 5;
}
.wwa-tag {
    background: rgba(255,255,255,.1);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(152,208,82,.3);
    color: var(--wwa-g);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; font-weight: 600;
    letter-spacing: .15em; text-transform: uppercase;
    padding: 8px 14px; border-radius: 100px;
    opacity: 0; transform: translateX(20px);
}

.wwa-progress {
    position: absolute;
    left: -24px; top: 0;
    width: 3px; height: 0%;
    background: var(--wwa-g); border-radius: 2px;
    transition: height .5s ease;
    transform-origin: top;
}

.wwa-right { }

.wwa-headline {
    margin-bottom: 48px;
    opacity: 0;
    transform: translateY(24px);
}
.wwa-pre {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px; font-weight: 700; letter-spacing: .28em;
    text-transform: uppercase; color: var(--wwa-g);
    margin-bottom: 12px; display: block;
}
.wwa-h2 {
    font-family: 'Red Hat Display', sans-serif;
    font-size: 48px; font-weight: 800; letter-spacing: -.025em; line-height: 1.2;
    color: var(--wwa-ink);
}
.wwa-h2 span { color: var(--wwa-gdk); }
.wwa-h2-sub {
    font-family: 'DM Sans', sans-serif;
    margin-top: 16px;
    font-size: 16px; font-weight: 300; line-height: 1.7; color: var(--wwa-mut);
}

.wwa-tabs {
    display: flex; gap: 0;
    border-bottom: 2px solid var(--wwa-bdr);
    margin-bottom: 40px;
    opacity: 0;
}
.wwa-tab {
    position: relative;
    padding: 14px 28px;
    font-family: 'DM Sans', sans-serif;
    font-size: 15px; font-weight: 700;
    letter-spacing: .16em; text-transform: uppercase;
    color: var(--wwa-mut);
    cursor: pointer;
    background: none; border: none;
    transition: color .25s;
}
.wwa-tab::after {
    content: '';
    position: absolute; bottom: -2px; left: 0;
    width: 0; height: 2px;
    background: var(--wwa-g); border-radius: 2px;
    transition: width .35s cubic-bezier(.4,0,.2,1);
}
.wwa-tab.active { color: var(--wwa-ink); }
.wwa-tab.active::after { width: 100%; }
.wwa-tab:hover { color: var(--wwa-gdk); }

.wwa-panels { position: relative; }

.wwa-panel {
    display: none;
    opacity: 0;
}
.wwa-panel.active {
    display: block;
}

.wwa-panel-header {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 24px;
}
.wwa-icon {
    width: 52px; height: 52px; flex-shrink: 0;
    border-radius: 14px;
    background: var(--wwa-off);
    border: 1.5px solid var(--wwa-bdr);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem;
    color: var(--wwa-gdk);
}
.wwa-panel-title {
    font-family: 'Red Hat Display', sans-serif;
    font-size: 28px; font-weight: 800;
    color: var(--wwa-ink); line-height: 1.2;
    padding-top: 6px;
}

.wwa-panel-body {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px; font-weight: 300;
    line-height: 1.8; color: var(--wwa-mut);
    margin-bottom: 28px;
}

.wwa-chips {
    display: flex; flex-wrap: wrap; gap: 10px;
    margin-bottom: 28px;
}
.wwa-chip {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: 'DM Sans', sans-serif;
    background: var(--wwa-off); border: 1.5px solid var(--wwa-bdr);
    color: var(--wwa-gdk); font-size: 14px; font-weight: 600;
    letter-spacing: .1em; text-transform: uppercase;
    padding: 8px 16px; border-radius: 100px;
}
.wwa-chip::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--wwa-g); }

.wwa-quote {
    position: relative;
    background: var(--wwa-off);
    border-left: 4px solid var(--wwa-g);
    border-radius: 0 12px 12px 0;
    padding: 20px 24px;
    font-family: 'Red Hat Display', sans-serif;
    font-size: 18px; font-weight: 700;
    color: var(--wwa-ink); line-height: 1.5;
    margin-top: 8px;
}
.wwa-quote::before {
    content: '"';
    position: absolute; top: -8px; left: 20px;
    font-size: 4rem; line-height: 1;
    color: var(--wwa-g); font-family: 'Red Hat Display', sans-serif;
    opacity: .4;
}

.wwa-portfolio {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 12px; margin-bottom: 28px;
}
.wwa-pcard {
    background: var(--wwa-off);
    border: 1.5px solid var(--wwa-bdr);
    border-radius: 12px;
    padding: 16px 18px;
    transition: all .25s ease;
    cursor: pointer;
    text-decoration: none;
    color: inherit;
}
.wwa-pcard:hover {
    border-color: var(--wwa-g);
    background: rgba(152,208,82,.06);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(152,208,82,.15);
}
.wpc-name {
    font-family: 'Red Hat Display', sans-serif;
    font-size: 17px; font-weight: 800; color: var(--wwa-ink);
    margin-bottom: 4px;
}
.wpc-desc {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; color: var(--wwa-mut); line-height: 1.5;
}
.wpc-dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: var(--wwa-g); margin-bottom: 10px;
}

.wwa-next {
    display: inline-flex; align-items: center; gap: 10px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; font-weight: 600; letter-spacing: .08em;
    text-transform: uppercase; color: var(--wwa-gdk);
    cursor: pointer; background: none; border: none;
    padding: 0; transition: gap .25s;
}
.wwa-next:hover { gap: 16px; }
.wwa-next-arr { font-size: 1.1rem; }

@media (max-width: 1199px) {
    .wwa-h2 { font-size: 36px; }
}
@media (max-width: 767px) {
    .wwa-h2 { font-size: 32px; }
}
@media (max-width: 575px) {
    .wwa-h2 { font-size: 26px; }
}
@media(max-width: 900px){
    .wwa-grid { grid-template-columns: 1fr; gap: 48px; }
    .wwa-left { position: static; }
    .wwa-container { padding: 0 28px; }
    .wwa-tab { padding: 12px 18px; font-size: 14px; }
    #who-we-are.wwa-section { padding: 70px 0 90px; }
}
@media (max-width: 767px) {
    .wsb-num { font-size: 36px; }
}
</style>
