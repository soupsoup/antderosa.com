/**
 * Anthony Editorial — mobile menu toggle.
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

	function setOpen(open) {
		setMenuTop();
		menu.classList.toggle('is-open', open);
		document.body.classList.toggle('lt-menu-open', open);
		burger.textContent = open ? '\u2715' : 'MENU';
		burger.setAttribute('aria-expanded', open ? 'true' : 'false');
		burger.style.background = open ? '#191a20' : 'transparent';
		burger.style.color = open ? '#f6f6f1' : '#191a20';
	}

	burger.addEventListener('click', function () {
		setOpen(!menu.classList.contains('is-open'));
	});

	menu.addEventListener('click', function (event) {
		var link = event.target.closest('a');
		if (link && link.getAttribute('href') !== '#') {
			setOpen(false);
		}
	});

	document.addEventListener('keydown', function (event) {
		if (event.key === 'Escape') {
			setOpen(false);
		}
	});

	window.addEventListener('resize', setMenuTop);
	setMenuTop();
})();
