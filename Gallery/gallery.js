'use strict';

window.addEventListener('load', function () {
	document.getElementsByClassName('preloader')[0].classList.add('fade');
	document.getElementsByClassName('preloader')[0].style.display = 'none';
	var cylinders = document.querySelectorAll('.cylinder');

	for (var i = 0; i < cylinders.length; i++) {
		cylinder(cylinders[i]);
	}
});

function cylinder(root) {
	var figure = root.querySelector('figure'),
	    nav = root.querySelector('nav'),
	    images = figure.children,
	    n = images.length,
	    gap = root.dataset.gap || 0,
	    bfc = 'bfc' in root.dataset,
	    theta = 2 * Math.PI / n,
	    currImage = 0;

	setupcylinder(n, parseFloat(getComputedStyle(images[0]).width));
	window.addEventListener('resize', function () {
		setupcylinder(n, parseFloat(getComputedStyle(images[0]).width));
	});

	setupNavigation();

	function setupcylinder(n, s) {
		var apothem = s / (2 * Math.tan(Math.PI / n));

		figure.style.transformOrigin = '50% 50% ' + -apothem + 'px';

		for (var i = 0; i < n; i++) {
			images[i].style.padding = gap + 'px';
		}for (i = 1; i < n; i++) {
			images[i].style.transformOrigin = '50% 50% ' + -apothem + 'px';
			images[i].style.transform = 'rotateY(' + i * theta + 'rad)';
		}
		if (bfc) for (i = 0; i < n; i++) {
			images[i].style.backfaceVisibility = 'hidden';
		}rotatecylinder(currImage);
	}

	function setupNavigation() {
		nav.addEventListener('click', onClick, true);

		function onClick(e) {
			e.stopPropagation();

			var t = e.target;
			if (t.tagName.toUpperCase() != 'BUTTON') return;

			if (t.classList.contains('next')) {
				currImage++;
			} else {
				currImage--;
			}

			rotatecylinder(currImage);
		}
	}

	function rotatecylinder(imageIndex) {
		figure.style.transform = 'rotateY(' + imageIndex * -theta + 'rad)';
	}
}