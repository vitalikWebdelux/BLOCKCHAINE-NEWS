var themeModule;

(function($) {
	themeModule = (function() {

		var elements = {
			$html : $('html'),
			$document : $( document ),
		}


		/**
		 *-------------------------------------------------------------------------------------------------------------------------------------------
		 * Validate inputs
		 *-------------------------------------------------------------------------------------------------------------------------------------------
		 */
		function validateInputs() {
			$('input[name="phone"], input[name="your-phone"], input[name="client_phone"]').on('change keyup keydown', function() {
				var myVar = $(this).val();
				var digit = ('' + myVar)[2];

				if (digit == '0') {
					$(this).val(' ');
					$(this).blur().focus();
				}
				$('input[type="submit"]').attr('disabled', 'disabled');

				var re = new RegExp("_$");

				if (!re.test(myVar)) {
					$(this).removeClass('error-phone');
					$('input[type="submit"]').removeAttr('disabled');
					$('button[type="submit"]').removeAttr('disabled').find('.shine-button__el').addClass('animate');
				} else {
					$(this).addClass('error-phone');
				}
			});
		}

		// /**
		//  *-------------------------------------------------------------------------------------------------------------------------------------------
		//  * leadGenerator
		//  *-------------------------------------------------------------------------------------------------------------------------------------------
		//  */
		// // Set cookie
		// function setCookie(name, value, minutes) {

		// 	var expires = "";

		// 	if (minutes) {
		// 		var date = new Date();
		// 		date.setTime(date.getTime() + minutes * 1000);
		// 		expires = "; expires=" + date.toUTCString();
		// 	}

		// 	document.cookie = name + "=" + (value || "")  + expires + "; path=/";
		// }

		// // Get cookie
		// function readCookie(name) {

		// 	var nameEQ = name + "=";
		// 	var ca = document.cookie.split(';');

		// 	for(var i=0;i < ca.length;i++) {
		// 		var c = ca[i];
		// 		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		// 			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		// 	}

		// 	return null;

		// }

		return {
			init: function() {
				this.textsCut();
				this.addClassInWordpress();
				this.searchMove();
			},

			/**
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 * 1. Cursor
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 */
			textsCut: function() {
		
				$('.wpp-post-title').each(function(){
					$(this).attr('title', $(this).text());
					if($(this).text().length >= 40 ){
						$(this).text($(this).text().slice(0, 40)+'...');
					}
		
				})

				$('.wpd-form-wrap .ql-editor').attr('data-placeholder', 'Написать комментарий');
				if($('body').children().hasClass('nojq')){
					$('.wpd-form-wrap .wpd-login a').before('Вы ввошли в ');

				} else {
					$('.wpd-form-wrap .wpd-login a').text('Логин');
				}
			},

			searchMove: function() {
				let i = false;
				$('.icon--search').on('click', function(){
					$('.bn-header__option, .input').addClass('active');
					$('.bn-header__search').addClass('active');
					$('.bn-header__exit').addClass('active');
					$('.bn-header__input').focus();
					ia(i = true);
				})
				$('.bn-header__exit').on('click', function(){
					$('.bn-header__search').removeClass('active');
					$('.bn-header__option, .input').removeClass('active');
					$('.bn-header__exit').removeClass('active');
					ia(i = false);
				})
				function ia(i){
					if(i){
						$('.icon--search').on('click', function(){
							console.log($('.bn-header__input').val());
						})
					} else { 
						$('.bn-header__input').val(null);
					}
				}

			},

			/**
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 * 1. Cursor
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 */
			addClassInWordpress: function() {  
				$('.menu-item').each(function(){
					$(this).addClass('nav-item');
					$(this).children().addClass('link-item');
				})
			},

			/**
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 * 2. Leaflet map
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 */


			ajaxHandler: function() {
		        $('body').on('submit', 'form', function (e) {
			        e.preventDefault();
			        var formData = $(this).serializeArray();
			        $.ajax({
			            type: 'POST',
			            url: "/wp-admin/admin-ajax.php",
			            data: formData,
			            beforeSend: function beforeSend() {
			           
			            },
				            success: function success(data) {
					              console.log('send')
				            },
				            error: function error(data) {
				              console.log('error: ' + formData);
				            }
			          	});
		          	return false;
		        });
      		},

      		// sliders: function(){
      // 			if($('.bn__slider').length > 0){
      // 				$('.bn__slider').slick({
      // 					slidesToShow: 1,
						// slidesToScroll: 1,
						// nextArrow: "<button class=\"dl-hero__slider-next dl-ico dl-ico--arrow slick-arrow--next\"></button>",
						// prevArrow: "<button class=\"dl-hero__slider-prev dl-ico dl-ico--arrow slick-arrow--prev\"></button>",
						// dots: true,
						// autoplay: true,
  				// 		autoplaySpeed: 5000,
  				// 		dotsClass: 'red-dots',
						// responsive: [{
						// 		breakpoint: 760,
						// 		settings: {
						// 			slidesToShow: 2,
						// 		},
								
						// 	},
						// 	{
						// 		breakpoint: 500,
						// 		settings: {
						// 			slidesToShow: 1,
						// 			variableWidth: true,
						// 		}
						// 	},
						
						// ],
      				// })
      			// }
      		// }


		}
	}());
})(jQuery);

jQuery(document).ready(function () {
    themeModule.init();
});

