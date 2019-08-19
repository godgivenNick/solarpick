<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
    $nocahce = mt_rand();

     ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nick G.">
    <title>SolarPick - Солнечные Power Bank</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css?v=1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.min.css?v=13"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css?<?= $nocahce?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-compat/3.0.0-alpha1/jquery.min.js"></script>


    <!-- Yandex.Metrika counter -->
    <script type="application/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(52473481, "init", {
            id:52473481,
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52473481" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


    <script type='application/javascript'>
    (function(){ var widget_id = '1U8EtfGJxq';var d=document;var w=window;function l(){
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
      s.src = '//code.jivosite.com/script/widget/'+widget_id
        ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
      if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
      else{w.addEventListener('load',l,false);}}})();
    </script>


    <script type="application/javascript">
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js?<?= $nocahce?>" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', '67c7cd3fbf024eb8ac660f9e13dbdcc2');
    </script>


  </head>
  <body>
    <main class="main">
      <header class="promo" id="promo">
        <section class="quiz" id="quiz">
          <div class="quiz-main">
            <p class="quiz__title" style="padding: 0 15px; margin-top: 15px; text-align: center;"><span>Пройди тест - получи <span style="font-weight: bold; color: #219653;">беспроводную колонку </span> стоимостью 1090 руб. в подарок</span> и <span style="font-weight: bold; color: #219653;">10 бесплатных</span> советов для путешествий</p>
            <img class="quiz__bg" src="./img/quiz-bg.jpg?<?= $nocahce?>">
            <!-- <img class="quiz__img" src="./img/quiz-img-1.png?<?= $nocahce?>"> -->
            <img class="quiz__img" src="./img/kolonka.png?<?= $nocahce?>" style="left: 95px; bottom: 30px;">
            <div class="quiz-content" q-type="question" q-counter="0">
              <p class="quiz__question" id="q_question"></p>
              <div class="quiz-answers">
                <div class="quiz__answer"><span></span>
                  <p q-ans="1"></p>
                </div>
                <div class="quiz__answer"><span></span>
                  <p q-ans="2"></p>
                </div>
                <div class="quiz__answer"><span></span>
                  <p q-ans="3"></p>
                </div>
                <div class="quiz__answer"><span></span>
                  <p q-ans="4"></p>
                </div>
              </div>
              <button class="quiz__btn" q-btn="question" type="button"><span>Далее</span></button>
            </div>
            <div class="quiz-content" q-type="prompt" q-counter="0" style="display: none;">
              <p class="quiz__comment" id="q_prompt"></p>
              <p class="quiz__prompt">Пройдите тест до конца, чтобы получить максимальную скидку &mdash; 15%</p>
              <button class="quiz__btn" q-btn="prompt" type="button"><span>Далее</span></button>
            </div>
            <form class="quiz-content" q-type="form" q-counter="5" style="display: none;" action="main-form.php" method="post">
              <input type="hidden" name="fromurl" value="<?= 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
<input type="hidden" name="roistat_id" class="roistat_id" value="<?=$_COOKIE['roistat_visit']?>">
              <p class="quiz__comment">Оставьте нам свой телефон и получите Вашу беспроводную колонку при покупке пауербанка</p>
              <input type="hidden" name="callback" value="quiz">
              <input class="quiz__input" name="phone" type="tel" placeholder="Ваш телефон: " required>
              <button class="quiz__btn-success" q-btn="form" type="submit"><span>Получить скидку		</span></button>
            </form>
          </div>
          <div class="quiz-progress" style="display: none;">
            <div class="quiz-progress-bar">
              <div class="quiz-progress-bar__line">
                <div class="quiz-progress-bar__line--wrap"><span>Ваша скидка</span><img src="./img/quiz-arrow-white.svg"></div>
              </div>
            </div>
            <div class="quiz-progress-counter"><span q-percent="0">0%</span><span q-percent="1">5%</span><span q-percent="2">7%</span><span q-percent="3">10%</span><span q-percent="4">12%</span><span class="quiz-progress-counter--max __grac-15" q-percent="5">15%</span></div>
          </div>



          <script type="text/javascript">

          'use strict';
          (function () {

          var arrQuizQuestion = {

          	"0" : {

          		question : '1/5. Как часто вы выезжаете за город?',

          		ans1 : 'не езжу',
          		ans2 : 'раз в год',
          		ans3 : 'раз в месяц',
          		ans4 : 'раз в неделю',

          	},

          	"1" : {

          		question : 'Ломалась ли у вас машина на дороге?',

          		ans1 : 'пока нет',
          		ans2 : 'был 1 раз',
          		ans3 : 'постоянно',
          		ans4 : 'у меня нет машины',

          	},

          	"2" : {

          		question : '3/5. Ходите ли Вы в походы?',

          		ans1 : 'ни разу не был',
          		ans2 : 'был пару раз',
          		ans3 : 'постоянно хожу',
          		ans4 : 'езжу на дачу',

          	},

          	"3" : {

          		question : '4/5. Ходите ли Вы на охоту/рыбалку?',

          		ans1 : 'нет и не хочу',
          		ans2 : 'был разок',
          		ans3 : 'постоянно',
          		ans4 : 'нет, но хочу',

          	},

          	"4" : {

          		question : '5/5. Есть ли у вас складной нож и фонарь?',

          		ans1 : 'нет',
          		ans2 : 'есть оба',
          		ans3 : 'есть фонарь',
          		ans4 : 'есть нож',

          	},

          };

          var q_question = document.querySelector('#q_question');
          var q_ans1 = document.querySelector('[q-ans="1"]');
          var q_ans2 = document.querySelector('[q-ans="2"]');
          var q_ans3 = document.querySelector('[q-ans="3"]');
          var q_ans4 = document.querySelector('[q-ans="4"]');
          // var q_comment = document.querySelector('#q_prompt');

          var q_question_block = document.querySelector('.quiz-content[q-type="question"]');
          // var q_prompt_block = document.querySelector('.quiz-content[q-type="prompt"]');
          var q_form_block = document.querySelector('.quiz-content[q-type="form"]');

          var q_progress_counter = 0;
          var q_progress_counters = Array.from(document.querySelectorAll('.quiz-progress-counter span'));

          var btns = Array.from(document.querySelectorAll('.quiz__btn'));

          btns.forEach(function(el){

          	el.addEventListener('click', function(e){

          		var q_progress_line = document.querySelector('.quiz-progress-bar__line');

          		if(e.target.getAttribute('q-btn') == "question"){

          			var q_question_counter = q_question_block.getAttribute('q-counter');
          			q_question_block.setAttribute('q-counter', parseInt(q_question_counter, 10) + 1);

          			if(q_question_counter == "4"){
          				q_question_block.style.display = "none";
          				q_form_block.style.display = "flex";
          			}

          			q_progress_counter += 1;
          			q_progress_counters.forEach(function(el){
          				if(el.getAttribute('q-percent') == q_progress_counter) {
          					el.classList.add('__yeap');
          				}
          			});

          			var q_15_percent = document.querySelector('.quiz-progress-counter--max');

          			if(q_15_percent.classList.contains('__yeap')){
          				q_15_percent.classList.add('__grac-15')
          			}

          			var q_progress_width = getComputedStyle(document.querySelector('.quiz-progress-bar__line')).width;

          			var q_progress_width_new = (parseInt(q_progress_width, 10) - 136) + 'px';
          			q_progress_line.style.width = q_progress_width_new;

          		}

          		else if(e.target.getAttribute('q-btn') == "prompt"){

          			var q_question_counter = q_question_block.getAttribute('q-counter');
          			// var q_prompt_counter = q_prompt_block.getAttribute('q-counter');

          			q_question_block.setAttribute('q-counter', parseInt(q_question_counter, 10) + 1);
          			// q_prompt_block.setAttribute('q-counter', parseInt(q_prompt_counter, 10) + 1);

          			q_question_block.style.display = "flex";
          			// q_prompt_block.style.display = "none";


          			if(q_prompt_counter == "4"){
          				q_question_block.style.display = "none";
          				q_form_block.style.display = "flex";
          			}

          			q_progress_counter += 1;
          			q_progress_counters.forEach(function(el){
          				if(el.getAttribute('q-percent') == q_progress_counter) {
          					el.classList.add('__yeap');
          				}
          			});

          			var q_15_percent = document.querySelector('.quiz-progress-counter--max');

          			if(q_15_percent.classList.contains('__yeap')){
          				console.log('15');
          				q_15_percent.classList.add('__grac-15')
          			}

          			var q_progress_width = getComputedStyle(document.querySelector('.quiz-progress-bar__line')).width;

          			console.log("Текущая длина до уменьшения на 136px: " + q_progress_width);

          			var q_progress_width_new = (parseInt(q_progress_width, 10) - 136) + 'px';
          			q_progress_line.style.width = q_progress_width_new;
          			console.log("Длина после уменьшения: " + q_progress_line.style.width);
          		}

          	});

          });


          /* проверка каунтеров и подмена значений */

          // window.onload = function(){
          	var q_counter_current = document.querySelector('.quiz-content[q-type="question"]').getAttribute('q-counter');

          	q_question.innerHTML = arrQuizQuestion[0].question;
          	q_ans1.innerHTML = arrQuizQuestion[0].ans1;
          	q_ans2.innerHTML = arrQuizQuestion[0].ans2;
          	q_ans3.innerHTML = arrQuizQuestion[0].ans3;
          	q_ans4.innerHTML = arrQuizQuestion[0].ans4;

          	// q_comment.innerHTML = arrQuizPrompt[0].comment;

          // };

          var quiz = document.querySelector('.quiz-main');
          quiz.addEventListener('click', function(e){


          	var q_counter_current = document.querySelector('.quiz-content[q-type="question"]').getAttribute('q-counter');

          	if(parseInt(q_counter_current, 10) <= 4){

          		q_question.innerHTML = arrQuizQuestion[q_counter_current].question;
          		q_ans1.innerHTML = arrQuizQuestion[q_counter_current].ans1;
          		q_ans2.innerHTML = arrQuizQuestion[q_counter_current].ans2;
          		q_ans3.innerHTML = arrQuizQuestion[q_counter_current].ans3;
          		q_ans4.innerHTML = arrQuizQuestion[q_counter_current].ans4;

          		// q_comment.innerHTML = arrQuizPrompt[q_counter_current].comment;

          	}


          	var q_answers = Array.from(document.querySelectorAll('.quiz__answer'));

          	if(e.target.classList.contains('quiz__answer')){

          		q_answers.forEach(function(el){
          			el.classList.remove('__checked');
          		});

          		e.target.classList.add('__checked');
          	}


          });




          })();
          // end

          </script>


        </section>
        <header class="header">
          <ul class="header-info">
            <li class="header-info__item">Работаем ежедневно с 10:00 до 22:00</li>
            <li class="header-info__item">Доставка по всей России</li>
            <li class="header-info__item __rf"><a href="tel: 88007074260" class="header-info__item--phone">Бесплатно по России: <span>8 (800) 707-42-60</span></a></li>
            <li class="header-info__item __msk"><a href="tel: 84950085392" class="header-info__item--phone">По Москве: <span>8 (495) 008-53-92</span></a></li>
            <li class="header-info__item __spb"><a href="tel: 88126286049" class="header-info__item--phone">По Санкт-Петербургу: <span>8 (812) 628-60-49</span></a></li>
          </ul>
          <div class="header-main"><a class="header-main__logo" href="/"><span>SolarPick</span>

            <script type="text/javascript">
              (function(){
                var logo_link = document.querySelector('.header-main__logo');
                var logo_href = '/' + document.querySelector('.header-main__logo span').innerText.toLowerCase();

                logo_link.setAttribute('href', logo_href);

              })();
            </script>

              <p>Солнечная энергия<br>в вашем PowerBank</p></a>


            <ul class="header-main__menu">
              <li class="header-main__menu-item"><a href="#catalog">Каталог</a></li>
              <li class="header-main__menu-item"><a href="#benefit">Преимущества</a></li>
              <!-- <li class="header-main__menu-item"><a href="#video">Видео</a></li> -->
              <li class="header-main__menu-item"><a href="#contacts">Доставка</a></li>
              <li class="header-main__menu-item"><a href="#contacts">Контакты</a></li>
            </ul>
            <div class="header-main__tel-wrap"><a href="tel: 88007074260">Бесплатно по РФ: <span>8 (800) 707-42-60</span></a><a href="tel: 88126286049">Москва: <span>8 (495) 008-53-92</span></a><a href="tel: 84956485068">Санкт-Петербург: <span>8 (812) 628-60-49</span></a></div><a class="header-main__btn" href="javascript:;"><span>Заказать звонок</span></a>
            <div class="burger"><span class="burger__line-top"></span><span class="burger__line-center"></span><span class="burger__line-bot"></span></div>
            <ul class="header-main__menu-mobile">
              <li class="header-main-mobile__menu-item"><a href="#catalog">Каталог</a></li>
              <li class="header-main-mobile__menu-item"><a href="#benefit">Преимущества</a></li>
              <!-- <li class="header-main-mobile__menu-item"><a href="#video">Видео</a></li> -->
              <li class="header-main-mobile__menu-item"><a href="#contacts">Доставка</a></li>
              <li class="header-main-mobile__menu-item"><a href="#contacts">Контакты</a></li>
              <div class="header-main-mobile__menu-item-info"><span>Доставка по всей России</span><span>Работаем ежедневно с&#160;10:00&#160;до&#160;22:00</span><span>Россия: <a href="tel: 88007074260">8 (800) 707-42-60</a></span><span>Мск: <a href="tel: 88126286049">8 (495) 008-53-92</a></span><span>Спб: <a href="tel: 84956485068">8 (812) 628-60-49</a></span></div>
            </ul>
          </div>
          <div class="header-whatsapp"><a class="header-whatsapp__btn" href="https://wa.me/79219541952" target="_blank"><img src="./img/whatsapp.png?<?= $nocahce?>"><span>Whats App</span></a>
            <p class="header-whatsapp__helper">Нажмите, чтобы связаться с нами в Whats App <br> Мы всегда он-лайн!</p>
          </div>
        </header>
        <section class="offer">
          <h1>Солнечные Power Bank'и 3 в 1<br>
          с 2-мя USB и ярким фонариком <br>
          от <span class="offer__price" style="text-decoration: line-through; font-size: 30px;"> 2&#160;250&#160;₽ </span><span> &#160;1&#160;290&#160;₽ </span></h1>
          <h2 >Заряжаются от сети и солнца с помощью надежных солнечных панелей, полностью автономны, влагозащита IP65</h2>
          <img class="offer__banner" src="./img/promo-banner.png?<?= $nocahce?>">

          <?php
          //DATES

          $acc_day = date('j' ,strtotime('+3 day'));
          $acc_mouth = date('F' ,strtotime('+3 day'));

          if($acc_mouth == 'April'){
            $acc_mouth = 'Апреля';
          }
          elseif ($acc_mouth == 'May') {
            $acc_mouth = 'Мая';
          }

          elseif ($acc_mouth == 'June') {
            $acc_mouth = 'Июня';
          }

          elseif ($acc_mouth == 'July') {
            $acc_mouth = 'Июля';
          }

          elseif ($acc_mouth == 'August') {
            $acc_mouth = 'Августа';
          }
          elseif ($acc_mouth == 'September') {
            $acc_mouth = 'Сентября';
          }
          elseif ($acc_mouth == 'October') {
            $acc_mouth = 'Октября';
          }
          elseif ($acc_mouth == 'November') {
            $acc_mouth = 'Ноября';
          }
          elseif ($acc_mouth == 'December') {
            $acc_mouth = 'Декабря';
          }
          elseif ($acc_mouth == 'March') {
            $acc_mouth = 'Марта';
          }
          elseif ($acc_mouth == 'February') {
            $acc_mouth = 'Февраля';
          }
          elseif ($acc_mouth == 'January') {
            $acc_mouth = 'Января';
          }
           ?>


          <!-- акция -->
          <div class="offer__stock">
            Акция действует <br>
            до <span><?=$acc_day?>	<?=$acc_mouth?></span>
          </div>
          <!-- акция -->

        </section>
      </header>
      <section class="bullets" id="bullets">
        <ul class="bullets-list">
          <li class="bullets-item"><img src="./img/bullets/bullets_1.png?<?= $nocahce?>">
            <div class="bullets-item__wrapper">
              <p class="bullets-item__title">Зарядка от сети и солнца</p>
              <p class="bullets-item__text">Солнечная панель позволяет заряжать Power Bank без розетки</p>
            </div>
          </li>
          <li class="bullets-item"><img src="./img/bullets/bullets_2.png?<?= $nocahce?>">
            <div class="bullets-item__wrapper">
              <p class="bullets-item__title">Емкость 25000 мАч </p>
              <p class="bullets-item__text">Высокая емкость для поддержания заряда в дальних поездках. Время полного заряда из сети до 6 часов</p>
            </div>
          </li>
          <li class="bullets-item"><img src="./img/bullets/bullets_3.png?<?= $nocahce?>">
            <div class="bullets-item__wrapper">
              <p class="bullets-item__title">Влагозащита IP65</p>
              <p class="bullets-item__text">Мощная струя воды - не помеха. Все входы защищены резиновыми закрывашками</p>
            </div>
          </li>
          <li class="bullets-item"><img src="./img/bullets/bullets_4.png?<?= $nocahce?>">
            <div class="bullets-item__wrapper">
              <p class="bullets-item__title">2 USB выхода</p>
              <p class="bullets-item__text">Всего 1 Power Bank и возможность зарядить сразу 2 телефона</p>
            </div>
          </li>
        </ul>
      </section>
      <section class="catalog" id="catalog">
        <h3 class="catalog__title title">Каталог</h3>
        <div class="catalog-item">
          <div class="catalog-right">
            <div class="catalog-item__name">Солнечный Power Bank <span> Solar Pick</span></div>
            <ul class="catalog-item-chars">
              <li>Емкость - 4000 мАч</li>
              <li>LiPo аккумулятор - 1000 циклов заряда батареи</li>
              <li>Интерфейс - 2 USB / USB Type-C</li>
              <li>Размер - 153 х 76 х 7 мм</li>
              <li>Вес - 265 г.</li>
              <li>Светодиодный фонарь</li>
              <li>Сертификат качества - РСТ</li>
              <li>Входное напряжение - 5 В/2А</li>
            </ul>
            <p class="catalog-item__desc">Фирменные Power Bank от SolarPick незаменимая находка не только для туристов и путешественников. За счет постоянной подзарядки от солнечных лучей у вас в кармане практически "вечный двигатель". Повесьте солнечный Power Bank на рюкзак и он автоматически зарядится. Подключите к нему смартфон и заряд никогда не закончится. SolarPick имеют влагозащиту по стандарту IP65, это значит что вы можете заряжать Power Bank даже во время дождя. Теперь на связи не только вы - 2 USB выхода позволят заряжать одновременно 2 смартфона. Заряжайте Power Bank как истинный Илон Маск, хватит искать свободную розетку!</p>
            <div class="catalog-item__show-more"><span>Подробное описание</span></div>
            <div class="catalog-item-footer">
              <div class="catalog-item-prices"><span class="__old">2250 руб.</span><span class="__new">1290 руб.</span></div><a class="catalog-item__btn" type="button"><span>Купить в 1 клик</span></a>
            </div>
          </div>
          <div class="catalog-item__name __hidden">Солнечный Power Bank <span> Solar Pick</span></div>
          <div class="catalog-left"><a class="slider-btn slider-btn--prev" type="button" onclick="REV_1.previous()">
              <div class="slider-btn__circle"><img src="./img/slider_arrow_prev.svg"></div></a>
            <div class="slider-zone" slider="1">
              <div class="slider-counter">
                <span slider-counter="counter">1</span>
                <span slider-max="">&#160;/&#160;10</span>
              </div>
              <img class="slider-box" src="./img/catalog/g/tov1_10.jpg?<?= $nocahce?>" slider-order="10">
              <img class="slider-box" src="./img/catalog/g/tov3_1.jpg?<?= $nocahce?>" slider-order="1">
              <img class="slider-box" src="./img/catalog/g/tov1_2.jpg?<?= $nocahce?>" slider-order="2">
              <img class="slider-box" src="./img/catalog/g/tov3_3.jpg?<?= $nocahce?>" slider-order="3">
              <img class="slider-box" src="./img/catalog/g/tov1_4.jpg?<?= $nocahce?>" slider-order="4">
              <img class="slider-box" src="./img/catalog/g/tov1_5.jpg?<?= $nocahce?>" slider-order="5">
			  <img class="slider-box" src="./img/catalog/g/tov1_6.jpg?<?= $nocahce?>" slider-order="6">
			  <img class="slider-box" src="./img/catalog/g/tov1_7.jpg?<?= $nocahce?>" slider-order="7">
			  <img class="slider-box" src="./img/catalog/g/tov1_8.jpg?<?= $nocahce?>" slider-order="8">
			  <img class="slider-box" src="./img/catalog/g/tov1_9.jpg?<?= $nocahce?>" slider-order="9">
            </div>
            <a class="slider-btn slider-btn--next" type="button" onclick="REV_1.next()">
              <div class="slider-btn__circle"><img src="./img/slider_arrow_next.svg"></div></a>
          </div>
        </div>
        <div class="catalog-item">
          <div class="catalog-right">
            <div class="catalog-item__name">Солнечный Power Bank <span> Solar Pick </span></div>
            <ul class="catalog-item-chars">
              <li>Емкость - 6000 мАч</li>
              <li>LiPo аккумулятор - 1000 циклов заряда батареи</li>
              <li>Интерфейс - 2 USB / USB Type-C</li>
              <li>Размер - 153 х 76 х 8 мм</li>
              <li>Вес - 315 г.</li>
              <li>Светодиодный фонарь</li>
              <li>Сертификат качества - РСТ</li>
              <li>Входное напряжение - 5 В/2А</li>
            </ul>
            <p class="catalog-item__desc">Фирменные Power Bank от SolarPick незаменимая находка не только для туристов и путешественников. За счет постоянной подзарядки от солнечных лучей у вас в кармане практически "вечный двигатель". Повесьте солнечный Power Bank на рюкзак и он автоматически зарядится. Подключите к нему смартфон и заряд никогда не закончится. SolarPick имеют влагозащиту по стандарту IP65, это значит что вы можете заряжать Power Bank даже во время дождя. Теперь на связи не только вы - 2 USB выхода позволят заряжать одновременно 2 смартфона. Заряжайте Power Bank как истинный Илон Маск, хватит искать свободную розетку!</p>
            <div class="catalog-item__show-more"><span>Подробное описание</span></div>
            <div class="catalog-item-footer">
              <div class="catalog-item-prices"><span class="__old">2750 руб.</span><span class="__new">1690 руб.</span></div><a class="catalog-item__btn" type="button"><span>Купить в 1 клик</span></a>
            </div>
          </div>
          <div class="catalog-item__name __hidden">Солнечный Power Bank <span> Solar Pick </span></div>
          <div class="catalog-left"><a class="slider-btn slider-btn--prev" type="button" onclick="REV_2.previous()">
              <div class="slider-btn__circle"><img src="./img/slider_arrow_prev.svg"></div></a>
              <div class="slider-zone" slider="2">
                <div class="slider-counter">
                  <span slider-counter="counter">1</span>
                  <span slider-max="">&#160;/&#160;10</span>
                </div>
              <img class="slider-box" src="./img/catalog/g/tov1_10.jpg?<?= $nocahce?>" slider-order="10">
              <img class="slider-box" src="./img/catalog/g/tov2_1.jpg?<?= $nocahce?>" slider-order="1">
              <img class="slider-box" src="./img/catalog/g/tov1_2.jpg?<?= $nocahce?>" slider-order="2">
              <img class="slider-box" src="./img/catalog/g/tov2_3.jpg?<?= $nocahce?>" slider-order="3">
              <img class="slider-box" src="./img/catalog/g/tov1_4.jpg?<?= $nocahce?>" slider-order="4">
              <img class="slider-box" src="./img/catalog/g/tov1_5.jpg?<?= $nocahce?>" slider-order="5">
			  <img class="slider-box" src="./img/catalog/g/tov1_6.jpg?<?= $nocahce?>" slider-order="6">
			  <img class="slider-box" src="./img/catalog/g/tov1_7.jpg?<?= $nocahce?>" slider-order="7">
			  <img class="slider-box" src="./img/catalog/g/tov1_8.jpg?<?= $nocahce?>" slider-order="8">
			  <img class="slider-box" src="./img/catalog/g/tov1_9.jpg?<?= $nocahce?>" slider-order="9">
              </div>

            <a class="slider-btn slider-btn--next" type="button" onclick="REV_2.next()">
              <div class="slider-btn__circle"><img src="./img/slider_arrow_next.svg"></div></a>
          </div>
        </div>
        <div class="catalog-item">
          <div class="catalog-right">
            <div class="catalog-item__name">Солнечный Power Bank <span> Solar Pick </span></div>
            <ul class="catalog-item-chars">
              <li>Емкость - 10000 мАч</li>
              <li>LiPo аккумулятор - 1000 циклов заряда батареи</li>
              <li>Интерфейс - 2 USB / USB Type-C</li>
              <li>Размер - 153 х 76 х 9 мм</li>
              <li>Вес - 365 г.</li>
              <li>Светодиодный фонарь</li>
              <li>Сертификат качества - РСТ</li>
              <li>Входное напряжение - 5 В/2А</li>
            </ul>
            <p class="catalog-item__desc">Фирменные Power Bank от SolarPick незаменимая находка не только для туристов и путешественников. За счет постоянной подзарядки от солнечных лучей у вас в кармане практически "вечный двигатель". Повесьте солнечный Power Bank на рюкзак и он автоматически зарядится. Подключите к нему смартфон и заряд никогда не закончится. SolarPick имеют влагозащиту по стандарту IP65, это значит что вы можете заряжать Power Bank даже во время дождя. Теперь на связи не только вы - 2 USB выхода позволят заряжать одновременно 2 смартфона. Заряжайте Power Bank как истинный Илон Маск, хватит искать свободную розетку!</p>
            <div class="catalog-item__show-more"><span>Подробное описание</span></div>
            <div class="catalog-item-footer">
              <div class="catalog-item-prices"><span class="__old">3250 руб.</span><span class="__new">1980 руб.</span></div><a class="catalog-item__btn" type="button"><span>Купить в 1 клик</span></a>
            </div>
          </div>
          <div class="catalog-item__name __hidden">Солнечный Power Bank <span> Solar Pick </span></div>
          <div class="catalog-left"><a class="slider-btn slider-btn--prev" type="button" onclick="REV_3.previous()">
              <div class="slider-btn__circle"><img src="./img/slider_arrow_prev.svg"></div></a>
              <div class="slider-zone" slider="3">
                <div class="slider-counter">
                  <span slider-counter="counter">1</span>
                  <span slider-max="">&#160;/&#160;10</span>
                </div>
              <img class="slider-box" src="./img/catalog/g/tov1_10.jpg?<?= $nocahce?>" slider-order="10">
              <img class="slider-box" src="./img/catalog/g/tov1_1.jpg?<?= $nocahce?>" slider-order="1">
              <img class="slider-box" src="./img/catalog/g/tov1_2.jpg?<?= $nocahce?>" slider-order="2">
              <img class="slider-box" src="./img/catalog/g/tov1_3.jpg?<?= $nocahce?>" slider-order="3">
              <img class="slider-box" src="./img/catalog/g/tov1_4.jpg?<?= $nocahce?>" slider-order="4">
              <img class="slider-box" src="./img/catalog/g/tov1_5.jpg?<?= $nocahce?>" slider-order="5">
			  <img class="slider-box" src="./img/catalog/g/tov1_6.jpg?<?= $nocahce?>" slider-order="6">
			  <img class="slider-box" src="./img/catalog/g/tov1_7.jpg?<?= $nocahce?>" slider-order="7">
			  <img class="slider-box" src="./img/catalog/g/tov1_8.jpg?<?= $nocahce?>" slider-order="8">
			  <img class="slider-box" src="./img/catalog/g/tov1_9.jpg?<?= $nocahce?>" slider-order="9">
              </div>
            <a class="slider-btn slider-btn--next" type="button" onclick="REV_3.next()">
              <div class="slider-btn__circle"><img src="./img/slider_arrow_next.svg"></div></a>
          </div>
        </div>


      </section>
      <section class="benefit" id="benefit">
        <div class="benefit__container">
          <h3 class="title benefit__title">Покупая PowerBank SolarPick Вы также получите:</h3>
          <div class="benefit__wrap"><img class="benefit__bg" src="./img/benefit-bg-1.jpg?<?= $nocahce?>">
            <div class="benefit__col">
              <div class="benefit-item">
                <div class="benefit-item__header">
                  <div class="benefit-item__img"><img src="./img/benefit-1.svg"></div>
                  <h4 class="benefit-item__title">Эргономика</h4>
                </div>
                <p class="benefit-item__text">Power Bank SolarPick технологичны и эргономичны во всем - инженеры постарались создать эффективное устройство</p>
                <ul class="benefit-item__list">
                  <li class="benefit-item__text"><span>прорезиненные края</span> — современные и красивые украсят интерьер любой квартиры</li>
                  <li class="benefit-item__text"><span>вечный двигатель</span> — наличие солнечной панели позволяет получать и сохранять энергию солнца, а следовательно заряжать ваши устройства почти бесконечно</li>
                </ul>
              </div>
              <div class="benefit-item">
                <div class="benefit-item__header">
                  <div class="benefit-item__img"><img src="./img/benefit-2.svg"></div>
                  <h4 class="benefit-item__title">Удобство</h4>
                </div>
                <p class="benefit-item__text">Power Bank SolarPick станут полезным и незаменимым устройством в любой поездке</p>
                <ul class="benefit-item__list">
                  <li class="benefit-item__text"><span>маленький вес</span> — всего 265 грамм, за счет легкого LiPo аккумулятора внутри</li>
                  <li class="benefit-item__text"><span>светодиодный фонарь</span> — в дороге не позволительная роскошь расходовать заряд телефона на фонарик, но только не в случае Power Bankа SolarPick</li>
                </ul>
              </div>
            </div>
            <div class="benefit__col">
              <div class="benefit-item">
                <div class="benefit-item__header">
                  <div class="benefit-item__img"><img src="./img/benefit-3.svg"></div>
                  <h4 class="benefit-item__title">Многофункциональность</h4>
                </div>
                <p class="benefit-item__text">Помимо функции Power Bankа еще много всего интересного</p>
                <ul class="benefit-item__list">
                  <li class="benefit-item__text"><span>3 в 1</span> — пауербанк / аккумулятор энергии / яркий фонарь</li>
                  <li class="benefit-item__text"><span>зарядка всех известных устройств</span> — позволяет зарядить смартфоны, планшеты, часы, а также любые другие электронные гаджеты</li>
                </ul>
              </div>
              <div class="benefit-item">
                <div class="benefit-item__header">
                  <div class="benefit-item__img"><img src="./img/benefit-4.svg"></div>
                  <h4 class="benefit-item__title">Быстрая зарядка</h4>
                </div>
                <p class="benefit-item__text">Солнечные панели не самый эффективный способ аккумулировать энергию, однако SolarPick делает это эффективно в случаею с электронными гаджетами</p>
                <ul class="benefit-item__list">
                  <li class="benefit-item__text"><span>несколько часов</span> — уйдет на полную зарядку Power Bankа от прямых солнечных лучей, это примерно так же как у старых зарядных устройств</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <form class="middle-form" id="middle_form" action="main-form.php" method="post">
        <input type="hidden" name="fromurl" value="<?= 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
<input type="hidden" name="roistat_id" class="roistat_id" value="<?=$_COOKIE['roistat_visit']?>">
        <input type="hidden" name="callback" value="middle_form">
        <div class="middle-form__container">
          <p class="middle-form__title">Мы бесплатно проконсультируем Вас по любому вопросу</p>
          <p class="middle-form__text">Оставьте свой телефон, и мы перезвоним Вам в течение 5 минут</p>
          <div class="middle-form__wrap">
            <input class="middle-form__field" type="tel" name="phone" id="middle_form_phone" placeholder="+7 (___) ___-__-__" required>
            <button class="middle-form__btn" type="submit"><span>Перезвоните мне</span></button>
          </div>
        </div>
      </form>
      <section class="pain" id="pain">
        <h3 class="pain__title title">Солнечные Power Bank SolarPick подходят вам если:</h3>
        <div class="pain__container">
          <div class="pain-item"><img class="pain-item__img" src="./img/pain/pain_1.jpg?<?= $nocahce?>">
            <div class="pain-item-content">
              <div class="pain-item__title">Обычного Power Bankа не хватает?
                <img src="./img/pain/pain-bul-1.png?<?= $nocahce?>">
              </div>
              <p>Телефон постоянно разряжается, а обычного Power Bankа не хватает, т.к. они максимум на 5-10 мАч. Если вы постоянно на связи или уезжаете в командировки, то состояние постоянно разряжающегося телефона вам знакомо</p>
            </div>
          </div>
          <div class="pain-item"><img class="pain-item__img" src="./img/pain/pain_2.jpg?<?= $nocahce?>">
            <div class="pain-item-content">
              <h4 class="pain-item__title">Нет розетки чтобы подзарядиться?
                <img src="./img/pain/pain-bul-2.png?<?= $nocahce?>">

              </h4>
              <p>Заканчивается энергия и поблизости нет розетки чтобы пополнить заряд - это частое явление. Теперь не нужно исктаь розетку - пауербанк заряжается от солнца!</p>
            </div>
          </div>
          <div class="pain-item"><img class="pain-item__img" src="./img/pain/pain_3.jpg?<?= $nocahce?>">
            <div class="pain-item-content">
              <h4 class="pain-item__title">Путешествуете вдвоем и не хватает энергии?
                <img src="./img/pain/pain-bul-3.png?<?= $nocahce?>">
              </h4>
              <p>Путешествуя в компании каждый заряженный телефон на вес золота. Power Bank <span>Solar Pick</span> поможет зарядить до 5 телефонов, причем заряжая 2 одновременно.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="video" id="video" style="display: none;">
        <div class="video__container">
          <h3 class="title video__title">Распаковка и обзор на походный набор для выживания Camping Set</h3><a class="video__btn" href="https://youtu.be/NChHhbcM97w" data-fancybox>
            <div class="video__btn-img"></div></a>
        </div>
      </section>
      <section class="profit">
        <p class="profit__title title">Преимущества Power Bankа SolarPick</p>
        <div class="container profit__container">
          <div class="profit-col profit-col__left">
            <div class="bubble bubble-1"></div>
            <div class="bubble bubble-2"></div>
            <div class="bubble bubble-3"></div>
            <div class="bubble bubble-4"></div>
            <div class="bubble bubble-5"></div>
            <div class="bubble bubble-6"></div>
            <div class="profit-item__img"><img src="./img/profit/profit-5.jpg?<?= $nocahce?>"></div>
            <div class="profit-item__content">
              <p class="profit-item__title">Зарядка от солнца</p>
              <p class="profit-item__text">Power Bank SolarPiick можно не заряжать от розетки - втроенная лицевая солнечная панель эффективно заряжает внутреннюю батарею.</p>
            </div>
            <div class="profit-item__img"><img src="./img/profit/profit-3.jpg?<?= $nocahce?>"></div>
            <div class="profit-item__content">
              <p class="profit-item__title">Влагозащита IP65</p>
              <p class="profit-item__text">Все разъемы находятся под резиновыми уплотнителями, благодаря чему, Power Bank SolarPick не боятся прямых попаданий воды, не страшно если вы попадете в ливневый дождь.</p>
            </div>
            <div class="profit-item__img"><img src="./img/profit/profit-1.jpg?<?= $nocahce?>"></div>
          </div>
          <div class="profit-col profit-col__right">
            <div class="bubble bubble-r1"></div>
            <div class="bubble bubble-r2"></div>
            <div class="bubble bubble-r3"></div>
            <div class="bubble bubble-r4"></div>
            <div class="bubble bubble-r5"></div>
            <div class="bubble bubble-r6"></div>
            <div class="bubble bubble-r7"></div>
            <div class="profit-item__content">
              <p class="profit-item__title">Высокая емкость</p>
              <p class="profit-item__text">Емкость Power Bankов SolarPick позволяет зарядить до 5 современных смартфонов. Номинальная емкость пауербанка составляет 25000 мАч</p>
            </div>
            <div class="profit-item__img"><img src="./img/profit/profit-2.jpg?<?= $nocahce?>"></div>
            <div class="profit-item__content">
              <p class="profit-item__title">Полная автономность</p>
              <p class="profit-item__text">Уезжая далеко на природу можно не беспокоиться что ваш смартфон разрядится. Можно путешествовать неделями без намеков на цивилизацию и быть при этом постоянно на связи</p>
            </div>
            <div class="profit-item__img"><img src="./img/profit/profit-4.jpg?<?= $nocahce?>"></div>
            <div class="profit-item__content">
              <p class="profit-item__title">Функциональность</p>
              <p class="profit-item__text">Power Bank SolarPick заряжаются от солнца, имеют 2 USB выходя для зарядки сразу двух самртфонов, а также светодиодный фонарь, соответсвенно не требующий смены батареек или зарядки аккумулятора от розетки.</p>
            </div>
          </div>
          <div class="profit-mobile">

            <div class="profit-item__content">
              <p class="profit-item__title">Высокая емкость</p>
              <p class="profit-item__text">Емкость Power Bankов SolarPick позволяет зарядить до 5 современных смартфонов. Номинальная емкость пауербанка составляет 25000 мАч</p>
            </div>

            <div class="profit-item__content">
              <p class="profit-item__title">Зарядка от солнца</p>
              <p class="profit-item__text">Power Bank SolarPiick можно не заряжать от розетки - втроенная лицевая солнечная панель эффективно заряжает внутреннюю батарею.</p>
            </div>

            <div class="profit-item__img"><img src="./img/profit/profit-1.jpg?<?= $nocahce?>"></div>
            <div class="profit-item__content">
              <p class="profit-item__title">Полная автономность</p>
              <p class="profit-item__text">Уезжая далеко на природу можно не беспокоиться что ваш смартфон разрядится. Можно путешествовать неделями без намеков на цивилизацию и быть при этом постоянно на связи</p>
            </div>

            <div class="profit-item__content">
              <p class="profit-item__title">Влагозащита IP65</p>
              <p class="profit-item__text">Все разъемы находятся под резиновыми уплотнителями, благодаря чему, Power Bank SolarPick не боятся прямых попаданий воды, не страшно если вы попадете в ливневый дождь.</p>
            </div>

            <div class="profit-item__img"><img src="./img/profit/profit-4.jpg?<?= $nocahce?>"></div>
            <div class="profit-item__content">
              <p class="profit-item__title">Функциональность</p>
              <p class="profit-item__text">Power Bank SolarPick заряжаются от солнца, имеют 2 USB выходя для зарядки сразу двух самртфонов, а также светодиодный фонарь, соответсвенно не требующий смены батареек или зарядки аккумулятора от розетки.</p>
            </div>

          </div>
        </div>
      </section>
      <section class="payment" id="payment">
        <div class="payment-item"><img class="payment-item__img" src="./img/pay.svg">
          <p class="payment-item__title">Оплата любым удобным способом</p>
          <ul class="payment-item-list">
            <li><span>наличными в магазине или курьеру</span> при получении заказа</li>
            <li><span>картой в магазине</span> при получении заказа</li>
            <li><span>через Сбербанк-онлайн</span> до выдачи заказа или прямо в магазине</li>
          </ul>
        </div>
        <div class="payment-item"><img class="payment-item__img" src="./img/delivery.svg">
          <p class="payment-item__title">Доставка быстро по всей России</p>
          <ul class="payment-item-list">
            <li><span>По Москве </span> &mdash; 350 руб.</li>
            <li><span>По Санкт-Петербургу </span> &mdash; 300 руб.</li>
            <li><span>Почтой России </span> &mdash; 350 руб.</li>
            <li><span>через СДЭК </span> &mdash; 790 руб.</li>
          </ul>
        </div>
      </section>
      <div class="contacts" id="contacts">
        <div class="contacts__container">
          <div class="contacts-left">
            <h3 class="contacts__title title">Наши контакты</h3>
            <div class="contacts-left__wrap">
              <div class="contacts-left-item"><span>Москва</span>
                <p>ул. Покровка, д.&#160;3-7(ст.&#160;м.&#160;Китай-город)</p><a href="tel: 84956485068">8&#160;(495)&#160;008-53-92</a>
              </div>
              <div class="contacts-left-item"><span>Санкт-Петербург</span>
                <p>Лиговский&#160;пр.&#160;50&#160;к.5</p><a href="tel: 88126286049">8&#160;(812)&#160;628-60-49</a>
              </div>
              <div class="contacts-left-item"><span>По всей России</span>
                <p>более 2000 пунктов самовывоза</p><a href="tel: 88007074260">8&#160;(800)&#160;707-42-60</a>
              </div>
            </div>
          </div>
          <form class="contacts-form" id="contacts_form" action="main-form.php" method="post">
            <input type="hidden" name="fromurl" value="<?= 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
<input type="hidden" name="roistat_id" class="roistat_id" value="<?=$_COOKIE['roistat_visit']?>">
            <input type="hidden" name="callback" value="contacts_form">
            <p class="contacts-form__title">Закажите прямо сейчас и получите бесплатную доставку</p>
            <p class="contacts-form__text">Мы перезвоним Вам прямо сейчас и ответим на все вопросы</p>
            <div class="contacts-form__wrap">
              <input class="contacts-form__field" type="tel" name="phone" id="contacts_form_phone" placeholder="+7 (___) ___-__-__" required>
              <button class="contacts-form__btn" type="submit"><span>Перезвоните мне</span></button>
            </div>
          </form>
        </div>
      </div>
      <footer class="footer">
        <p>© SolarPick, 2019.<br>Все права защищены</p>
        <p>Данный сайт носит информационный характер и не является публичной офертой</p>
        <p><a href="https://sgholding.ru/privacy_policy.pdf" target="_blank">Политика конфиденциальности</a></p>
      </footer>
      <div id="callback-popup">
        <div class="callback-popup" data-selectable="true">
          <p class="popup__title">Заказ звонка</p>
          <p class="popup__text __1">Вы можете заказать бесплатный звонок заполнив форму ниже.</p>
          <p class="popup__text __2">Наш специалист свяжется с Вами в ближайшее время и проконсультирует по всем возникшим вопросам</p>
          <p class="popup__text-hidden"></p>
          <form class="callback-form" id="callback-form" action="main-form.php" method="post">
            <input type="hidden" name="fromurl" value="<?= 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
<input type="hidden" name="roistat_id" class="roistat_id" value="<?=$_COOKIE['roistat_visit']?>">
            <input type="name" name="name" id="menu-callback-name" placeholder="Ваше имя:">
            <input type="tel" name="phone" required id="menu-callback-phone" placeholder="+7 (___) ___-__-__">
            <button class="callback-form__btn" type="submit">
              <p class="callback-form__btn--gg">Мы перезвоним</p>
              <p class="callback-form__btn--text">Отправить</p>
            </button>
            <input type="hidden" name="callback" value="menu-popup">
          </form>
        </div>
      </div>
      <div id="popup-buy-one-click">
        <div class="popup-buy-one-click" data-selectable="true">
          <p class="popup-buy-one-click__title">Отличный выбор!</p>
          <div class="popup-buy-one-click__header"><img class="popup-buy-one-click__img">
            <div class="popup-buy-one-click__info">
              <p class="popup-buy-one-click__info--model"></p>
              <p class="popup-buy-one-click__info--price">Цена: <span></span></p>
            </div>
          </div>
          <p class="popup-callback__text">Оставьте свои контактные данные, и наш специалист свяжется с Вами в ближайшее время для уточнения деталей заказа</p>
          <form class="popup-buy-one-click-form" id="popup-buy-one-click-form" method="post" action="main-form.php">
            <input type="hidden" name="fromurl" value="<?= 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
<input type="hidden" name="roistat_id" class="roistat_id" value="<?=$_COOKIE['roistat_visit']?>">
            <input id="popup-buy-one-click--name" type="text" name="name" placeholder="Ваше имя: ">
            <input id="popup-buy-one-click--phone" type="tel" name="phone" required placeholder="Контактный номер: ">

            <button class="popup-buy-one-click__btn" type="submit">Оформить заказ</button>
            <input type="hidden" name="callback" value="popup-buy-one-click">
            <input type="hidden" id="popup-buy-one-click-price" name="model-price">
            <input type="hidden" id="popup-buy-one-click-name" name="model-name">
          </form>
        </div>
      </div>
      <div id="promo-popup-thx">
        <div class="promo-popup-thx">
          <p class="promo-popup-thx__title">Отлично! Ваша заявка успешно отправлена</p>
          <p class="promo-popup-thx__text">Пожалуйста, дождитесь звонка нашего специалиста</p>
        </div>
      </div>
    </main>

    <form style="display:none" method="get" action="10.pdf">
   <button id="getDenPDF" type="submit">Download!</button>
</form>

<script type="text/javascript">
  // $('.quiz__btn-success').on('click',function(){
  //   $('#getDenPDF').click();
  // });
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.fancybox.min.js"></script> -->

    <script type="text/javascript" src="js/input-mask.js?666"></script>

    <script type="text/javascript" src="js/mask-input-phone.js"></script>
    <script type="text/javascript" src="js/menu-toggler.js"></script>
    <script type="text/javascript" src="js/slider-my.js?<?= $nocahce?>"></script>
    <script type="text/javascript" src="js/catalog.js"></script>
    <script type="text/javascript" src="js/popups.js?<?= $nocahce?>"></script>
    <script type="text/javascript" src="js/script.js?<?= $nocahce?>"></script>
  </body>
</html>
