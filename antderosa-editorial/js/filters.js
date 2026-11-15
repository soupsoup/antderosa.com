/**
 * Lime Ticker — category filters (Launches, References).
 * Markup contract:
 *   .lt-filters[data-filter-group="x"] > button.lt-filter[data-filter="cat"]
 *   [data-filter-target="x"] > [data-cat="cat"]
 */
(function () {
	var groups = document.querySelectorAll('[data-filter-group]');
	Array.prototype.forEach.call(groups, function (bar) {
		var key = bar.getAttribute('data-filter-group');
		var target = document.querySelector('[data-filter-target="' + key + '"]');
		if (!target) return;
		var buttons = bar.querySelectorAll('.lt-filter');
		var items = target.querySelectorAll('[data-cat]');

		bar.addEventListener('click', function (e) {
			var btn = e.target.closest('.lt-filter');
			if (!btn) return;
			var f = btn.getAttribute('data-filter');
			Array.prototype.forEach.call(buttons, function (b) {
				b.setAttribute('aria-pressed', String(b === btn));
			});
			Array.prototype.forEach.call(items, function (item) {
				var show = f === 'all' || item.getAttribute('data-cat') === f;
				item.classList.toggle('is-hidden', !show);
			});
		});
	});
})();
