(function () {
	'use strict';
	if (typeof anime === 'undefined') return;

	function init() {
		var container = document.getElementById('slider-anime-bg');
		var swiperEl = document.querySelector('.mySwiper-banner-two');
		if (!container || !swiperEl) return;

		var scenes = container.querySelectorAll('.slider-anime-scene');
		var currentIndex = -1;
		var loopAnimation = null;

		function buildScenes() {
			scenes[0].innerHTML = '<svg class="scene-svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid slice"><path fill="rgba(212,168,75,0.35)" d="M36,184 L24,144 L16,104 L24,64 L44,36 L76,16 L110,10 L144,16 L176,36 L190,70 L184,110 L164,144 L136,176 L96,190 L64,184 Z"/></svg>';

			var hexHtml = '';
			for (var row = 0; row < 8; row++) {
				for (var col = 0; col < 10; col++) {
					var x = 10 + col * 11 + (row % 2) * 5.5;
					var y = 12 + row * 9.5;
					hexHtml += '<span class="scene-hex" style="left:' + x + '%;top:' + y + '%"></span>';
				}
			}
			scenes[1].innerHTML = '<div class="scene-hex-grid">' + hexHtml + '</div>';

			scenes[2].innerHTML = '<div class="scene-planes">' +
				'<span class="scene-plane" style="--i:0"></span><span class="scene-plane" style="--i:1"></span>' +
				'<span class="scene-plane" style="--i:2"></span><span class="scene-plane" style="--i:3"></span><span class="scene-plane" style="--i:4"></span></div>';

			var stairsHtml = '';
			for (var s = 0; s < 6; s++) {
				stairsHtml += '<span class="scene-step" style="--i:' + s + '"></span>';
			}
			scenes[3].innerHTML = '<div class="scene-stairs">' + stairsHtml + '</div>';

			scenes[4].innerHTML = '<svg class="scene-svg scene-leaf" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid slice"><ellipse cx="100" cy="100" rx="45" ry="75" fill="rgba(74,124,89,0.35)" transform="rotate(-30 100 100)"/></svg>';
		}

		function setActiveScene(index) {
			var realIndex = ((index % 5) + 5) % 5;
			if (realIndex === currentIndex) return;
			currentIndex = realIndex;

			scenes.forEach(function (el, i) {
				el.classList.toggle('is-active', i === realIndex);
			});

			if (loopAnimation) loopAnimation.pause();
			runSceneEnterAnimation(scenes[realIndex], realIndex);
		}

		function runSceneEnterAnimation(sceneEl, index) {
			var children = sceneEl.querySelectorAll('[class^="scene-"]');
			if (children.length) {
				anime({
					targets: children,
					opacity: [0, 1],
					scale: [0.95, 1],
					duration: 800,
					easing: 'easeOutExpo',
					delay: anime.stagger(40, { start: 100 })
				});
			}

			if (index === 1 && sceneEl.querySelectorAll('.scene-hex').length) {
				loopAnimation = anime({
					targets: sceneEl.querySelectorAll('.scene-hex'),
					rotate: '+=360',
					duration: 20000,
					easing: 'linear',
					loop: true
				});
			} else if (index === 0 || index === 4) {
				var svg = sceneEl.querySelector('.scene-svg');
				if (svg) {
					loopAnimation = anime({
						targets: svg,
						rotate: '+=360',
						duration: 60000,
						easing: 'linear',
						loop: true
					});
				}
			}
		}

		buildScenes();
		container.parentElement.classList.add('slider-anime-active');
		setActiveScene(0);

		if (swiperEl.swiper) {
			setActiveScene(swiperEl.swiper.realIndex);
			swiperEl.swiper.on('slideChange', function () {
				setActiveScene(swiperEl.swiper.realIndex);
			});
		} else {
			var t = setInterval(function () {
				if (swiperEl.swiper) {
					clearInterval(t);
					setActiveScene(swiperEl.swiper.realIndex);
					swiperEl.swiper.on('slideChange', function () {
						setActiveScene(swiperEl.swiper.realIndex);
					});
				}
			}, 100);
			setTimeout(function () { clearInterval(t); }, 5000);
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', function () {
			setTimeout(init, 0);
		});
	} else {
		setTimeout(init, 0);
	}
})();
