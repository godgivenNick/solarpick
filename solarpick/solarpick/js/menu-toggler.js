'use strict';
(function () {

if(document.querySelector('.burger')){

	var toggler = document.querySelector('.burger');
	toggler.addEventListener('click', function(){
		var menu = document.querySelector('.header-main__menu-mobile');
		menu.classList.toggle('header-main__menu-mobile--open');
	});
}
























})();
// end