(function () {

'use strict';

var phone = $('form input[name="phone"]').val();
var name = $('form input[name="name"]').val();



// callback from menu

$('#callback-form').on('submit', function(e){
  e.preventDefault();

  if(e.target.querySelector('input[type="tel"]').value.replace(/[^0-9]/g, '').length == 11){

    e.target.querySelector('input[type="tel"]').style.borderColor = "";
    e.target.querySelector('input[type="tel"]').style.color = "";
    e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "";

  $.ajax({
    type: 'POST',
    url: './main-form.php',
    data: $(this).serialize(),
    success: function(data) {
        document.getElementById('callback-form').reset();

        $('.callback-form__btn .callback-form__btn--text').html('УСПЕШНО!');

        $('#callback-form').css('pointer-events','none');

        $('#callback-form input').addClass('__success-animation');

        $('.popup__text.__1').html('Ваша заявка успешно отправлена! Пожалуйста, дождитесь звонка нашего специалиста');
        $('.popup__text.__2').css('display', 'none');

        setTimeout( function(){

           $('#callback-form input').addClass('__none');

        }, 1750);

      setTimeout( function(){

        $('#callback-form input').removeClass('__success-animation');

        $('#callback-form input').removeClass('__none');

        $('.callback-form__btn .callback-form__btn--text').html('Отправить');

        $('.popup__text.__1').html('Вы можете заказать бесплатный звонок заполнив форму ниже.');
        $('.popup__text.__2').css('display', 'block');

      }, 10000);
    }
  })

} else {
  e.target.querySelector('input[type="tel"]').style.borderColor = "red";
  e.target.querySelector('input[type="tel"]').style.color = "red";
  e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "red";
}

});


// Купить в 1 клик

$('#popup-buy-one-click-form').on('submit', function(e){

  e.preventDefault();

  if(e.target.querySelector('input[type="tel"]').value.replace(/[^0-9]/g, '').length == 11){

    e.target.querySelector('input[type="tel"]').style.borderColor = "";
    e.target.querySelector('input[type="tel"]').style.color = "";
    e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "";

  $.ajax({
    type: 'POST',
    url: './main-form.php',
    data: $(this).serialize(),
    success: function(data) {

      document.getElementById('popup-buy-one-click-form').reset();

      $('#popup-buy-one-click-form').css('pointer-events','none');

      $('.popup-buy-one-click .popup-callback__text').html('Отличный выбор! Ваша заявка успешно отправлена <br> Пожалуйста, дождитесь звонка нашего специалиста');

      $('.popup-buy-one-click__btn').html('Готово!');

      setTimeout( function(){
        $('#popup-buy-one-click-form').css('pointer-events','auto');

        $('.popup-buy-one-click__btn').html('Оформить заказ');

         $('.popup-buy-one-click .popup-callback__text').html('Оставьте свои контактные данные, и наш специалист свяжется с Вами в ближайшее время для уточнения деталей заказа');

      }, 10000);

    }
  })

} else {
  e.target.querySelector('input[type="tel"]').style.borderColor = "red";
  e.target.querySelector('input[type="tel"]').style.color = "red";
  e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "red";
}


});



// Купить в 1 клик

$('.middle-form').on('submit', function(e){

  e.preventDefault();

  if(e.target.querySelector('input[type="tel"]').value.replace(/[^0-9]/g, '').length == 11){

    e.target.querySelector('input[type="tel"]').style.borderColor = "";
    e.target.querySelector('input[type="tel"]').style.color = "";
    e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "";

  $.ajax({
    type: 'POST',
    url: './main-form.php',
    data: $(this).serialize(),
    success: function(data) {

      document.querySelector('.middle-form').reset();

      $('.middle-form').css('pointer-events','none');

      $('.middle-form__btn span').html('Готово!');

      setTimeout( function(){

        $.fancybox.open({
          src  : '#promo-popup-thx',
          type : 'inline',

        });

      }, 1000);

      setTimeout( function(){
        $('.middle-form').css('pointer-events','auto');
        $('.middle-form__btn span').html('Перезвоните мне');

      }, 10000);

    }
  })

} else {
  e.target.querySelector('input[type="tel"]').style.borderColor = "red";
  e.target.querySelector('input[type="tel"]').style.color = "red";
  e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "red";
}

});












$('.contacts-form').on('submit', function(e){

  e.preventDefault();

  if(e.target.querySelector('input[type="tel"]').value.replace(/[^0-9]/g, '').length == 11){

    e.target.querySelector('input[type="tel"]').style.borderColor = "";
    e.target.querySelector('input[type="tel"]').style.color = "";
    e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "";

  $.ajax({
    type: 'POST',
    url: './main-form.php',
    data: $(this).serialize(),
    success: function(data) {

      document.querySelector('.middle-form').reset();

      $('.contacts-form').css('pointer-events','none');

      $('.contacts-form__btn span').html('Готово!');

      setTimeout( function(){

        $.fancybox.open({
          src  : '#promo-popup-thx',
          type : 'inline',

        });

      }, 1000);

      setTimeout( function(){
        $('.contacts-form').css('pointer-events','auto');
        $('.contacts-form__btn span').html('Перезвоните мне');

      }, 10000);

    }
  })

} else {
  e.target.querySelector('input[type="tel"]').style.borderColor = "red";
  e.target.querySelector('input[type="tel"]').style.color = "red";
  e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "red";
}


});


$('form.quiz-content').on('submit', function(e){

  e.preventDefault();

  if(e.target.querySelector('input[type="tel"]').value.replace(/[^0-9]/g, '').length == 11){

    e.target.querySelector('input[type="tel"]').style.borderColor = "";
    e.target.querySelector('input[type="tel"]').style.color = "";
    e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "";

  $.ajax({
    type: 'POST',
    url: './main-form.php',
    data: $(this).serialize(),
    success: function(data) {
$('#getDenPDF').click();
      document.querySelector('form.quiz-content').reset();

      $('form.quiz-content').css('pointer-events','none');

      $('.quiz__btn-success span').html('Готово!');

      setTimeout( function(){

        $.fancybox.open({
          src  : '#promo-popup-thx',
          type : 'inline',

        });

      }, 1000);

      setTimeout( function(){
        $('form.quiz-content').css('pointer-events','auto');
        $('.quiz__btn-success span').html('Получить скидку');

      }, 10000);

    }
  })

} else {
  e.target.querySelector('input[type="tel"]').style.borderColor = "red";
  e.target.querySelector('input[type="tel"]').style.color = "red";
  e.target.querySelector('input[type="tel"]').nextElementSibling.style.color = "red";
}

});


})();
