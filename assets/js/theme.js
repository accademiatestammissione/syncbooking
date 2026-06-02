(function () {
	const header = document.querySelector('[data-header]');
	const toggle = document.querySelector('[data-menu-toggle]');
	const menu = document.querySelector('[data-menu]');

	function updateHeader() {
		if (!header) {
			return;
		}

		header.classList.toggle('is-scrolled', window.scrollY > 16);
	}

	if (toggle && menu) {
		toggle.addEventListener('click', function () {
			const isOpen = menu.classList.toggle('is-open');
			toggle.setAttribute('aria-expanded', String(isOpen));
		});
	}

	updateHeader();
	window.addEventListener('scroll', updateHeader, { passive: true });
})();
