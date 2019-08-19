'use strict';
(function () {


	/* - запрос на обратный звонок, шапка-меню -
		CALLBACK header
	*/
		var headerPopupCallbackForm = document.querySelector('#menu-callback-form');

		headerPopupCallbackForm.addEventListener('submit', function(){
			yaCounter50529997.reachGoal('callbackHeader', function (){});
			ga('send', 'event', 'callbackHeader', 'submit');
		});



		/* - кнопка ЗАБРОНИРОВАТЬ для главного разворота -
		ОТПРАВКА ФОРМЫ с главного разворота
	*/
		var promoForm = document.querySelector('.promo-form');

		promoForm.addEventListener('submit', function(){
			yaCounter50529997.reachGoal('callbackPromo', function (){});
			ga('send', 'event', 'callbackPromo', 'submit');
		});

	/* - кнопка купить для основного popup карточки товара -
		ОТПРАВКА ФОРМЫ ПОКУПКИ главная
	*/
		var catalogMainPopupForm = document.querySelector('#catalog-card-detail-form');

		catalogMainPopupForm.addEventListener('submit', function(){
			yaCounter50529997.reachGoal('requestMainCard', function (){});
			ga('send', 'event', 'requestMainCard', 'submit');
		});


	/* - кнопка купить для мелкого popup карточки товара -
		ОТПРАВКА ФОРМЫ ПОКУПКИ малая
	*/
		var catalogMinPopupForm = document.querySelector('#catalog-card-buy-form');

		catalogMinPopupForm.addEventListener('submit', function(){
			yaCounter50529997.reachGoal('requestCardBuy', function (){});
			ga('send', 'event', 'requestCardBuy', 'submit');
		});

	/* - запрос на обратный звонок, предпоследний cta -
		CALLBACK
	*/
		var buyNowCallbackForm = document.querySelector('.buy-now-form');

		buyNowCallbackForm.addEventListener('submit', function(){
			yaCounter50529997.reachGoal('callbackBuyNow', function (){});
			ga('send', 'event', 'callbackBuyNow', 'submit');
		});


	/* - запрос на обратный звонок, фоотер -
		CALLBACK footer
	*/
		var footerCallbackForm = document.querySelector('.callback-last-form');

		footerCallbackForm.addEventListener('submit', function(){
			yaCounter50529997.reachGoal('callbackFooter', function (){});
			ga('send', 'event', 'callbackFooter', 'submit');
		});



	/* 
		- клик на кнопку 

	*/

		var catalogItem = Array.from(document.querySelectorAll('.catalog-item'));

		catalogItem.forEach(function(el){

			if(el.getAttribute('data-test') == 'A') {

				el.querySelector('.catalog-item__btn').addEventListener('click', function(){
					console.log('orange');
					yaCounter50529997.reachGoal('catalog-btn-orange', function (){});
					ga('send', 'event', 'catalog-btn-orange', 'click');
				});

				el.querySelector('.catalog-item__btn-details').addEventListener('click', function(){
					console.log('details - orange');
					yaCounter50529997.reachGoal('catalog-btn-detail-orange', function (){});
					ga('send', 'event', 'catalog-btn-detail-orange', 'click');

				});

				document.querySelector('.catalog-card-detail-form').addEventListener('submit', function(){
					yaCounter50529997.reachGoal('main-popup-orange', function (){});
					ga('send', 'event', 'main-popup-orange', 'submit');
				});

				document.querySelector('.catalog-card-buy-form').addEventListener('submit', function(){
					yaCounter50529997.reachGoal('min-popup-orange', function (){});
					ga('send', 'event', 'min-popup-orange', 'submit');
				});
			}

			else if(el.getAttribute('data-test') == 'B') {

				el.querySelector('.catalog-item__btn').addEventListener('click', function(){
					console.log('green');
					yaCounter50529997.reachGoal('catalog-btn-green', function (){});
					ga('send', 'event', 'catalog-btn-green', 'click');
				});

				el.querySelector('.catalog-item__btn-details').addEventListener('click', function(){
					console.log('details - green');
					yaCounter50529997.reachGoal('catalog-btn-detail-green', function (){});
					ga('send', 'event', 'catalog-btn-detail-green', 'click');

				});

				document.querySelector('.catalog-card-detail-form').addEventListener('submit', function(){
					yaCounter50529997.reachGoal('main-popup-green', function (){});
					ga('send', 'event', 'main-popup-green', 'submit');
				});

				document.querySelector('.catalog-card-buy-form').addEventListener('submit', function(){
					yaCounter50529997.reachGoal('min-popup-green', function (){});
					ga('send', 'event', 'min-popup-green', 'submit');
				});
			}

		});


})(); // the end