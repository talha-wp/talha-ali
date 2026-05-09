/**
 * Lead paragraph: scroll-triggered line reveal (mask shrinks to reveal text).
 * Requires GSAP and ScrollTrigger loaded before this script.
 */
(function () {
	if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

	var el = document.querySelector('.lead-paragraph-reveal');
	if (!el) return;

	gsap.registerPlugin(ScrollTrigger);

	var lines = el.querySelectorAll('.lead-paragraph-line');
	lines.forEach(function (line) {
		var mask = line.querySelector('.mask');
		if (!mask) return;

		gsap.to(mask, {
			scaleX: 0,
			transformOrigin: 'right center',
			ease: 'none',
			scrollTrigger: {
				trigger: line,
				scrub: true,
				start: 'top center',
				end: 'bottom center',
			},
		});
	});

	window.addEventListener('resize', function () {
		ScrollTrigger.refresh();
	});
})();
