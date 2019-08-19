(function(){

	$('.header-main__btn').on('click', function() {

		$.fancybox.open({
			src  : '#callback-popup',
			type : 'inline',

		touch : {
			vertical : false,  // Allow to drag content vertically
			// momentum : false   // Continuous movement when panning
		},

		});

	});

	var catalog_items = Array.from(document.querySelectorAll('.catalog-item'));


$('.catalog').on('click', function(e) {

  /*

    КУПИТЬ В 1 КЛИК

  */

  if (e.target.closest('.catalog-item__btn')) {
    var price_html = e.target.closest('.catalog-item').querySelector('.__new').innerHTML;
    var price_arr = price_html.split(' ');
    var price_arr_2 = price_arr.filter(n => isNaN(n) == false);
    var price_html_2 = price_arr_2.join('');
    document.querySelector('#popup-buy-one-click-price').value = price_html_2;
    document.querySelector('#popup-buy-one-click-name').value = e.target.closest('.catalog-item').querySelector('.catalog-item__name').textContent;
    // document.querySelector('#articul').value = e.target.closest('.catalog-item').dataset.art;

    document.querySelector('.popup-buy-one-click__img').setAttribute('src', e.target.closest('.catalog-item').querySelector('[slider-order="1"]').src);
    document.querySelector('.popup-buy-one-click__info--price span').innerHTML = e.target.closest('.catalog-item').querySelector('.__new').innerHTML;
    document.querySelector('.popup-buy-one-click__info--model').innerHTML = e.target.closest('.catalog-item').querySelector('.catalog-item__name').textContent;

		document.querySelector('.popup-buy-one-click__title').innerHTML = 'Отличный выбор!' + ' <br> ' + 'купить ' + '<b>' + e.target.closest('.catalog-item').querySelector('.catalog-item__name').textContent + '</b>';


    $.fancybox.open({
      src  : '#popup-buy-one-click',
      type : 'inline',
    });

  }

}); // делегирование на каталог



})();
