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

}



var arrQuizPrompt = {

	"0" : {

		comment : 'Текущая скидка - 5%',

	},

	"1" : {

		comment : 'Текущая скидка - 7%',

	},

	"2" : {

		comment : 'Текущая скидка - 10%',

	},


	"3" : {

		comment : 'Текущая скидка - 12%',

	},


	"4" : {

		comment : 'Текущая скидка - 15%',

	},

}


var q_question = document.querySelector('#q_question');
var q_ans1 = document.querySelector('[q-ans="1"]');
var q_ans2 = document.querySelector('[q-ans="2"]');
var q_ans3 = document.querySelector('[q-ans="3"]');
var q_ans4 = document.querySelector('[q-ans="4"]');
var q_comment = document.querySelector('#q_prompt');

var q_question_block = document.querySelector('.quiz-content[q-type="question"]');
var q_prompt_block = document.querySelector('.quiz-content[q-type="prompt"]');
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
				console.log('15');
				q_15_percent.classList.add('__grac-15')
			}

			var q_progress_width = getComputedStyle(document.querySelector('.quiz-progress-bar__line')).width;

			console.log("Текущая длина до уменьшения на 136px: " + q_progress_width);

			var q_progress_width_new = (parseInt(q_progress_width, 10) - 136) + 'px';
			q_progress_line.style.width = q_progress_width_new;
			console.log("Длина после уменьшения: " + q_progress_line.style.width);

		}

		else if(e.target.getAttribute('q-btn') == "prompt"){

			var q_question_counter = q_question_block.getAttribute('q-counter');
			var q_prompt_counter = q_prompt_block.getAttribute('q-counter');

			q_question_block.setAttribute('q-counter', parseInt(q_question_counter, 10) + 1);
			q_prompt_block.setAttribute('q-counter', parseInt(q_prompt_counter, 10) + 1);

			q_question_block.style.display = "flex";
			q_prompt_block.style.display = "none";

			console.log(q_prompt_counter);

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
