$(function () {

	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function () {
				if ($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}

	});
	
	$(function () {
		$('.popup-modal').magnificPopup({
			type: 'inline',
			preloader: false,
			focus: '#username',
			modal: true
		});
		$(document).on('click', '.popup-modal-dismiss', function (e) {
			e.preventDefault();
			$.magnificPopup.close();
		});
	});

	$(document).ready(function(){
		/**
		 * При прокрутке страницы, показываем или срываем кнопку
		 */
		$(window).scroll(function () {
			// Если отступ сверху больше 75px то показываем кнопку "Наверх"
			if ($(this).scrollTop() > 75) {
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