$(document).foundation();

//Terrill: Add class when the small viewport menu is visible
(function(){
	let smallMenu = document.getElementById('topbar-center-logo');

	let toggleClass = function(){
		if ( smallMenu.style.display != 'none' ) {
			document.body.classList.add('small-viewport-menu');
		} else {
			document.body.classList.remove('small-viewport-menu');
		}
	};

	let observeMenu = function(){
		let observer = new MutationObserver(function(mutations) {
			let change = null;
			mutations.forEach(function(mutationRecord) {
				if ( mutationRecord.target == smallMenu ) {
					change = true;
				}
			});
			if (change) toggleClass();
		});

		observer.observe(smallMenu, { attributes : true, attributeFilter : ['style'] });
	};
	
	toggleClass();
	observeMenu();
})();
