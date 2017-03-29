(function ($, root, undefined) {

	$(function () {

		'use strict';

		$('nav ul').slicknav({
			label: '',
			'beforeOpen': function(trigger){
				$('.slicknav_menu').addClass('open-slicknav');
			},
			'afterClose': function(trigger){
				$('.slicknav_menu').removeClass('open-slicknav');
			}
		});

		jQuery('.gallery a').each(function(){
			jQuery(this).attr({'data-lightbox':'galeria'})
		});

		lightbox.option({
			'showImageNumberLabel': false,
			'wrapAround': true
		});

		// DOM ready, take it away
		$('ul.slider').bxSlider({
			mode: 'fade',
			pager: false,
		});

		jQuery('.single-rutas header nav ul li:contains("Rutas")').addClass('current_page_item');

		jQuery('.single-post header nav ul li:contains("Noticias")').addClass('current_page_item');

		  $(".animsition").animsition({
		    inClass: 'overlay-slide-in-bottom',
		    outClass: 'overlay-slide-out-bottom',
		    inDuration: 1500,
		    outDuration: 800,
		    linkElement: '.animsition-link',
		    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
		    loading: true,
		    loadingParentElement: 'body', //animsition wrapper element
		    loadingClass: 'animsition-loading',
		    loadingInner: '', // e.g '<img src="loading.svg" />'
		    timeout: false,
		    timeoutCountdown: 5000,
		    onLoadEvent: true,
		    browser: [ 'animation-duration', '-webkit-animation-duration'],
		    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
		    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		    overlay : true,
		    overlayClass : 'animsition-overlay-slide',
		    overlayParentElement : 'body',
		    transition: function(url){ window.location.href = url; }
		  });

	});

})(jQuery, this);
