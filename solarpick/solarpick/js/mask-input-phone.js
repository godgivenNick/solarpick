'use strict';
(function () {

	var im = new Inputmask("+7 (999) 999-99-99", {
		showMaskOnHover: false,
	});

	var sooqa = Array.from(document.querySelectorAll('input[type="tel"]'));

	sooqa.forEach(function(el){
		im.mask(el);
	});

})(); // the end
