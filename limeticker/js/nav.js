/**
 * Lime Ticker — mobile menu toggle.
 */
(function () {
	var burger = document.querySelector('.lt-burger');
	var menu = document.getElementById('lt-mobile-menu');
	var header = document.querySelector('.lt-header');

	if (!burger || !menu) return;

	function setMenuTop() {
		var height = header ? header.getBoundingClientRect().height : 68;
		document.documentElement.style.setProperty('--lt-mobile-menu-top', height + 'px');
	}

	burger.addEventListener('click', function () {
		setMenuTop();

		var open = menu.classList.toggle('is-open');
		burger.textContent = open ? '\u2715' : 'MENU';
		burger.setAttribute('aria-expanded', open ? 'true' : 'false');
		burger.style.background = open ? '#141507' : 'transparent';
		burger.style.color = open ? '#f6f6f1' : '#141507';
	});

	window.addEventListener('resize', setMenuTop);
})();
