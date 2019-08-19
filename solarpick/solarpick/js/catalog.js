   $('.catalog-item__show-more').on('click', function(e){
     var that = $(this);
     // console.log($(this));
     var container = that.parents('.catalog-item');
     var content = container.find('.catalog-item-chars.__hidden');
     var content_2 = container.find('.catalog-item__fun.__hidden');
     var content_3 = container.find('.catalog-item__compl.__hidden');

     // container.toggleClass('dropdown-container_open');
     content.slideToggle(200);
     content.css('display', 'flex');
     content_2.css('display', 'block');
     content_3.css('display', 'block');

     $(this).toggleClass('__down');

     if($(this).hasClass('__down')){
     	$(this).find('span').html('Скрыть описание');
     } else {
     	$(this).find('span').html('Подробное описание');
        content_2.css('display', 'none');
        content_3.css('display', 'none');
     }

     var desc = container.find('.catalog-item__desc');
     desc.toggleClass('__height');
   });

	$( document ).ready(function() {

		// console.log('загрузился дом');

   		if($(window).width() <= 700) {
   			// console.log('если ширина окна меньше или равна 700px');
			var width = $('.slider-zone').width();
			width = width * .75833 + 30;
			$('.slider-zone').height(width + 'px');

			$( window ).resize(function() {
				var width = $('.slider-zone').width();
				$('.slider-zone').height(width * 0.75833 + 30 + 'px');
			});
   		}

	});


