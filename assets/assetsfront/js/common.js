window.onload = function() {
	if (window.matchMedia('(max-width: 1169px)').matches) {
		var navMenu = document.querySelector('.header__nav');
		var navMenuOpen = document.querySelector('.header__nav-opener');
		var navMenuClose = document.querySelector('.header__nav-closer');
		var body = document.querySelector('body');

		if (navMenu) {
			navMenuOpen.addEventListener('click', function() {
				navMenu.classList.add('header__nav--open');
				body.style.overflow = 'hidden';
			});

			navMenuClose.addEventListener('click', function() {
				navMenu.classList.remove('header__nav--open');
				body.style.overflow = 'auto';
			});
		}

		var header = document.querySelector('.header');
		var delta = 10;

		window.addEventListener('scroll', function(e) {
			var scroll = window.scrollY;
			delta < scroll
				? header.classList.add('header-hidden-js')
				: scroll === delta || header.classList.remove('header-hidden-js');
			delta = 0 < scroll ? scroll : 0;
		});

		var searchBar = document.querySelector('.header__search');
		var searchBarOpener = document.querySelector('.header__search-opener');
		var searchBarCloser = document.querySelector('.header__search-closer');

		searchBarOpener.addEventListener('click', function() {
			searchBar.classList.add('header__search--open');
		});

		searchBarCloser.addEventListener('click', function() {
			searchBar.classList.remove('header__search--open');
		});
	}
};
