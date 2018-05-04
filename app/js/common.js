$(function () {

	$(document).ready(function(){
		/**
		 * При прокрутке страницы, показываем или срываем кнопку
		 */
		$(window).scroll(function () {
			// Если отступ сверху больше 75px то показываем кнопку "Наверх"
			if ($(this).scrollTop() > 300) {
				$('#button-up').fadeIn();
			} else {
				$('#button-up').fadeOut();
			}
		});
		
		/** При нажатии на кнопку мы перемещаемся к началу страницы */
		$('#button-up').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
		
	});

});
var slideout = new Slideout({
	'panel': document.getElementById('panel'),
	'menu': document.getElementById('menu'),
	'padding': 256,
	'tolerance': 70
  });

  // Toggle button
  document.querySelector('.toggle-button').addEventListener('click', function() {
	slideout.toggle();
  });