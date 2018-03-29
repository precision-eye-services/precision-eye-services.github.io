jQuery(function ($) {

	$(document).ready(function () {

		// LOADER 
		// $('body').jpreLoader({

		// 	showSplash: false,
		// 	autoClose: true,

		// });

		// VIDEO SETUP
		jQuery('.player').mb_YTPlayer();

		$('#volume').click(function () {

			$('#bgndVideo').toggleVolume();
		});

		// LIGHTBOX 
		$('.lightbox').fancybox();

		// CAROUSELS						
		$("#serv-carousel").owlCarousel({

			autoPlay: false,
			stopOnHover: true,
			itemsCustom: [
				[0, 1],
				[600, 2],
				[900, 3],
			],

		});

		$("#post-carousel").owlCarousel({

			autoPlay: true,
			singleItem: true,
			stopOnHover: true,
			pagination: true,
			navigation: true,
			navigationText: false,

		});

		$("#quote-carousel").owlCarousel({

			autoPlay: false,
			singleItem: true,
			stopOnHover: true,
			transitionStyle: "goDown",

		});

		$("#blog-carousel").owlCarousel({

			autoPlay: false,
			pagination: true,
			stopOnHover: true,
			navigation: true,
			navigationText: false,
			itemsCustom: [
				[0, 1],
				[600, 2],
				[900, 3],
			],

		});

		$("#clients-carousel").owlCarousel({

			autoPlay: false,
			stopOnHover: true,
			itemsCustom: [
				[0, 1],
				[600, 4],
				[900, 6],
			],
		});

	});


	$(window).load(function () {
		// RESPONSIVE FIX
		if ($(window).width() < 1200) {
			$('.transit-words').removeClass('transit-words');
		}

		function GetURLParameter(sParam) {
			var query = window.location.search.substring(1);
			var vars = query.split("&");
			for (var i = 0; i < vars.length; i++) {
				var pair = vars[i].split("=");
				if (pair[0] == sParam) { return pair[1]; }
			}
			return (false);
		}

		// SUB MENU HOVER		
		$('.main-menu li').hover(function () {
			if($('header.sticky').length > 0) {
				$('.sub-menu', this).stop().show();
				$('.sub-menu', this).animate({ opacity: 1, top: '24px' }, 300);
			} else {
				$('.sub-menu', this).stop().show();
				$('.sub-menu', this).animate({ opacity: 1, top: '10px' }, 300);
			}
		},
		function () {
			$('.sub-menu', this).stop().animate({ opacity: 0, top: '60px' }, 200);
			setTimeout(function () { $('.sub-menu', this).hide(); }, 300);
		});

		// CHANGE PAGE
		// $('a').click(function (event) {
		// 	if(event.target.target !== '_blank') {
		// 		var href = $(this).attr('href');
		// 		var curtain = $(this).data('curtain');
	
		// 		if (href != undefined && href != '#' && !$(this).hasClass('lightbox') && curtain != false) {
		// 			event.preventDefault();
	
		// 			$('#curtain').animate({ width: "100%" }, 500, 'easeOutQuint');
	
		// 			var demoColor = GetURLParameter('color');
		// 			if (demoColor) {
		// 				setTimeout(function () { window.location.replace(href + '?color=' + demoColor); }, 1000);
		// 			} else {
		// 				setTimeout(function () { window.location.replace(href); }, 1000);
		// 			}
		// 		}
		// 	}
		// });


		/* SCROLL TO SECTIONS */
		$('*[data-scrollto]').click(function () {

			var dest = $(this).data('scrollto');
			var pixels = $(dest).offset().top - 70;
			var ms = Math.round(1000 + pixels / 5);

			$('html, body').animate({
				scrollTop: pixels
			}, ms, 'easeOutQuint');

		});

		// TOOLTIPS
		$('#icons-menu ul li').hover(
			function () {
				var title = $(this).data('title');
				$(this).append('<div class="tooltip" id="icons-tooltip">' + title + '</div>');
				var moveL = $('#icons-tooltip').width() / 2 - 13;
				$('#icons-tooltip').css('margin-left', '-' + moveL + 'px');
			},

			function () {
				$('#icons-tooltip').remove();
			}
		);

		$('#quick-icons ul.quick-menu li').hover(
			function () {
				var title = $(this).data('title');
				$(this).append('<div class="tooltip-top" id="icons-tooltip-top">' + title + '</div>');
			},

			function () {
				$('#icons-tooltip-top').remove();
			}
		);

		// BTN UP
		$('.btn-up').click(function () {
			$('html, body').animate({
				scrollTop: 0
			}, 2000, 'easeOutQuint');
		});


		// PURE EFFECTS 
		$('[class^="transit-"], [class*=" transit-"]').each(function () {

			// Delay
			delay = $(this).data('delay');
			if (delay == '') { delay = 0; }
			$(this).css('animation-delay', delay + 'ms');

			// Appear
			appear = $(this).data('appear');

			// Class
			var animClass;
			if ($(this).hasClass('transit-left')) { animClass = 'fadeInLeft'; }
			if ($(this).hasClass('transit-right')) { animClass = 'fadeInRight'; }
			if ($(this).hasClass('transit-top')) { animClass = 'fadeInUp'; }
			if ($(this).hasClass('transit-bottom')) { animClass = 'fadeInDown'; }
			if ($(this).hasClass('transit-fade')) { animClass = 'fadeIn'; }
			if ($(this).hasClass('transit-bouncein')) { animClass = 'bounceIn'; }
			if ($(this).hasClass('transit-flip')) { animClass = 'flipInY'; }
			if ($(this).hasClass('transit-pulse')) { animClass = 'pulse'; }
			if ($(this).hasClass('transit-bounce')) { animClass = 'bounce'; }
			if ($(this).hasClass('transit-rotate')) { animClass = 'rotateIn'; }

			// Animation
			if (appear == false) {

				$(this).addClass('animated');
				$(this).addClass(animClass);

			} else {

				$(this).appear(function () {

					$(this).addClass('animated');
					$(this).addClass(animClass);

				}, { accX: 0, accY: -200 });
			}

		});


		// TEXT EFFECT		
		$('.transit-words').appear(function () {
			$(this).textillate({

				loop: false,
				initialDelay: 0,
				autoStart: true,
				in: {

					effect: 'fadeIn',
					delayScale: 1.5,
					delay: 30,
					shuffle: true,

				}
			});
		}, { accX: 0, accY: -200 });


		// SCROLLING EVENTS
		$(window).scroll(function (iconsPos) {

			var quote = $(window).scrollTop();
			var iconsPos = $(window).height() - 50;


			// Menu		
			if (quote >= 50) {
				$('.header-clear').addClass('sticky');
				$('#mobile-menu').css('top', '70px');
			}
			else {
				$('.header-clear').removeClass('sticky');
				$('#mobile-menu').css('top', '');
			}

			if (quote >= 30) {
				$('.header-dark').addClass('sticky');
				$('#mobile-menu').css('top', '70px');
			}
			else {
				$('.header-dark').removeClass('sticky');
				$('#mobile-menu').css('top', '');
			}

			// Icons
			if (quote >= iconsPos) {

				$('.quick-menu').fadeIn(500);
				$('.btn-up').fadeIn(500);

			}
			else {

				$('.quick-menu').fadeOut(500);
				$('.btn-up').fadeOut(500);

			}


		});


		// MOBILE MENU
		$('.open-menu').click(function () {

			$('i', this).toggleClass('icon-menu');
			$('i', this).toggleClass('icon-cross');

			$('#mobile-menu').slideToggle(500, 'easeInOutQuint');

		});

		$('#mobile-menu .menu-item-parent').click(function () {

			$('.sub-menu', this).slideToggle(500, 'easeInOutQuint');

		});


		// PORTFOLIO

		// Masonry
		var $portfolio = $('.port-list');

		$portfolio.masonry({

			columnWidth: '.col-1-3',
			itemSelector: '.col-1-3'

		});

		// Filtering
		$('.port-filter li').click(function () {

			var filter = $(this).data('filter');

			$('.port-filter li').each(function () {

				if ($(this).data('filter') == filter) {

					$(this).addClass('selected');

				} else {

					$(this).removeClass('selected');

				}

			});

			$('.port-list .port-item').each(function () {

				if (filter == 'all') {

					$(this).animate({ opacity: 1 }, 800, 'easeInOutExpo');

				} else {

					if ($(this).hasClass(filter)) {

						$(this).animate({ opacity: 1 }, 800, 'easeInOutExpo');

					} else {

						$(this).animate({ opacity: 0.1 }, 800, 'easeInOutExpo');

					}

				}

			});

		});


		// VIDEOFOLIO
		var $videofolio = $('.video-list');

		$videofolio.masonry({

			columnWidth: '.col-1-3',
			itemSelector: '.col-1-3'

		});



		// COUNTERS
		$('#counters .col-1-4').appear(function () {

			$('.count-value').countTo();

		}, { accX: 0, accY: -200 });


		// CONTACT PAGE
		var mapH = $(window).height() - 100;
		$('#contacts .gmap').css('height', mapH + 'px');

		// UI ELEMENTS

		$('#ui-accordion').accordion();

		$('#ui-tabs').tabs();

		$('.ui-toggle-header').click(function () {
			$('.ui-toggle-content', this).toggle();
		});

	});
});

window.addEventListener('DOMContentLoaded', function() {
	if(document.querySelector('.contact-form') !== null) {
		document.querySelector('.contact-form').addEventListener('submit', function(e) {
			e.preventDefault();
			e.stopImmediatePropagation();
			var name = e.target.querySelector('#name').value.trim();
			var pname = e.target.querySelector('#pname').value.trim();
			var phone = e.target.querySelector('#phone').value.trim();
			var email = e.target.querySelector('#email').value.toLowerCase().trim();
			var message = e.target.querySelector('#message').value;
			var contact = e.target.querySelector('#contact').checked;
			var subscribe,
				contact_zepto,
				contact_miloop;

			if(e.target.querySelector('#subscribe') !== null)
				subscribe = e.target.querySelector('#subscribe').checked;
			else if(e.target.querySelector('#contact_zepto') !== null)
				contact_zepto = e.target.querySelector('#contact_zepto').checked;
			else if(e.target.querySelector('#contact_miloop') !== null)
				contact_miloop = e.target.querySelector('#contact_miloop').checked;

			var post_data = {
				'subject': 'Contact Form Request',
				'from_name': name,
				'email': 'info@precisioneye.net',
				'email_from': email,
				'message': '<h2>Contact Form Request</h2><table width="400px">\
				<tr><td width="25%"><strong>Name</strong></td><td width="75%">' + name + '</td></tr>\
				<tr><td width="25%"><strong>Practice Name</strong></td><td width="75%">' + pname + '</td></tr>\
				<tr><td width="25%"><strong>Email Address</strong></td><td width="75%">' + email + '</td></tr>\
				<tr><td width="25%"><strong>Phone Number</strong></td><td width="75%">' + phone + '</td></tr>\
				<tr><td width="25%"><strong>Message</strong></td><td width="75%">' + message + '</td></tr>'
			};
			if(contact)
				post_data.message += '<tr><td width="25%"><strong>Contact</strong></td><td width="75%"><strong>Yes</strong>, I would like someone to contact me with information about Precision Eye Services.</td></tr>';
			if(subscribe)
				post_data.message += '<tr><td width="25%"><strong>Subscribe</strong></td><td width="75%"><strong>Yes</strong>, I would like to receive company news and updates from Precision Eye Services.</td></tr>';
			else if(contact_zepto)
				post_data.message += '<tr><td width="25%"><strong>Zepto</strong></td><td width="75%"><strong>Yes</strong>, I would like someone to contact me with information about Zepto.</td></tr>';
			else if(contact_miloop)
				post_data.message += '<tr><td width="25%"><strong>miLoop</strong></td><td width="75%"><strong>Yes</strong>, I would like someone to contact me with information about miLOOP&trade;.</td></tr>';
			 post_data.message += '</table>';


			 document.querySelector('.contact-form .response-message').textContent = '';
			//Ajax post data to server
			jQuery.ajax({
				type: 'POST',
				url: 'https://danmoe.systems/email/precisioneye',
				data: post_data,
				dataType: 'json',
				complete: function(res) {
					if(res.status === 200 || res.status === 201) {
						document.querySelector('.contact-form .response-message').textContent = 'Success! We have received your request and will reach out shortly.';
					} else {
						document.querySelector('.contact-form .response-message').textContent = 'We encountered an error while processing your request. Please try again later.';
					}
				}
			});
		});
	}
});