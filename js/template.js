jQuery(function(){
$('.table_half_wrap-js .front_text').click(function(e){
	e.preventDefault();
	var current = $(this).closest('.table_half_wrap-js');
	if(current.hasClass('closed')){
		current.removeClass('closed');
	}else{
		current.addClass('closed');
	}
});
$(".size_class").magnificPopup({
			type:"image",
			gallery: {
				enabled: true,
				tCounter : "%curr%  %total%"
			}
		});

	$(window).load(function() {
		$("body").removeClass("no-trans");
	});

	// Animations
	//-----------------------------------------------
	if (($("[data-animation-effect]").length>0)) {
		$("[data-animation-effect]").each(function() {
			var item = $(this),
			animationEffect = item.attr("data-animation-effect");

			if(!Modernizr.touch) {
				item.appear(function() {
					if(item.attr("data-effect-delay")) item.css("effect-delay", 0 + "ms");
					setTimeout(function() {
						item.addClass('animated object-visible ' + animationEffect);

					}, item.attr("data-effect-delay"));
				}, {accX: 0, accY: -130});
			} else {
				item.addClass('object-visible');
			}
		});
	}
	// Text Rotators
	//-----------------------------------------------
	if ($(".text-rotator").length>0) {
		$(".text-rotator").each(function() {
			var tr_animationEffect = $(this).attr("data-rotator-animation-effect");
			$(this).Morphext({
				animation: ""+tr_animationEffect+"", // Overrides default "bounceIn"
				separator: ",", // Overrides default ","
				speed: 5000 // Overrides default 2000
			});
		});
	};

	// Stats Count To
	//-----------------------------------------------
	if ($(".stats [data-to]").length>0) {
		$(".stats [data-to]").each(function() {
			var stat_item = $(this),
			offset = stat_item.offset().top;
			if($(window).scrollTop() > (offset - 800) && !(stat_item.hasClass('counting'))) {
				stat_item.addClass('counting');
				stat_item.countTo();
			};
			$(window).scroll(function() {
				if($(window).scrollTop() > (offset - 800) && !(stat_item.hasClass('counting'))) {
					stat_item.addClass('counting');
					stat_item.countTo();
				}
			});
		});
	};

	// Magnific popup
	//-----------------------------------------------
	if (($(".popup-img").length > 0) || ($(".popup-iframe").length > 0) || ($(".popup-img-single").length > 0)) {
		$(".popup-img").magnificPopup({
			type:"image",
			gallery: {
				enabled: true,
			}
		});
		$(".popup-img-single").magnificPopup({
			type:"image",
			gallery: {
				enabled: false,
			}
		});
		$('.popup-iframe').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			preloader: false,
			fixedContentPos: false
		});
	};

	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		}
	});

	//Scroll totop
	//-----------------------------------------------
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$(".scrollToTop").fadeIn();
		} else {
			$(".scrollToTop").fadeOut();
		}
	});

	$(".scrollToTop").click(function() {
		$("body,html").animate({scrollTop:0},800);
	});

	//Modal
	//-----------------------------------------------
	if($(".modal").length>0) {
		$(".modal").each(function() {
			$(".modal").prependTo( "body" );
		});
	}

	// Pricing tables popovers
	//-----------------------------------------------
	if ($(".pricing-tables").length>0) {
		$(".plan .pt-popover").popover({
			trigger: 'hover'
		});
	};

	/* maska*/
	$(".phone-mask--js").mask("+7 (999) 999 99 99");


}); // End document ready


/*----------- FEEDBACK_MODAL Form -----------*/
jQuery(function(){
	var form = $('form[name=FEEDBACK_MODAL]');

	form.submit(function() {
		$('#form-loading-feedback-modal').fadeIn();
		$('#error-feedback-modal, #success-feedback-modal, #beforesend-feedback-modal').hide();

		if(validate()){
			submission();
		} else{
			$('#form-loading-feedback-modal').hide();
			$('#beforesend-feedback-modal, #results-feedback-modal').fadeIn();
		};
		$('input, select, textarea, button', form).blur();
		return false;
	});

	function validate() {
		var errors = [];
		$('.req', form).each(function() {
			if(!$(this).val()){
				errors.push(1);
				$(this).addClass('error');
			} else $(this).removeClass('error');
		});
		if(errors.length === 0)
			 return true;
		else return false;
	};

	function submission(){
		$.ajax({
				type: 'POST',
				url: form.attr('action'),
				dataType: 'json',
				data: form.serialize(),
				success: function(data){

					$('#form-loading-feedback-modal').hide();
					$('input, textarea', form).removeClass('error');
					if(data <= 1){

						$('#results-feedback-modal, #success-feedback-modal').fadeIn();
						$('input, select, textarea', form).not('[type=hidden], [type=submit]').val('');
					}else $('#results-feedback-modal, #error-feedback-modal').hide().fadeIn();
				},
				error: function(data){

					$('#form-loading-feedback-modal').hide();
					$('#results-feedback-modal, #error-feedback-modal').hide().fadeIn();
				}
		});
		return false;
	};

    $('button.close').click(function(){
		$('#form-loading-feedback-modal, #results-feedback-modal').hide();
		$('input, textarea', form).removeClass('error');
		$('input, select, textarea', form).not('[type=hidden], [type=submit]').val('');
	});
});

/*----------- SIMPLE_FORM_1 Form -----------*/
jQuery(function(){
	var formTel = $('.formTel');

	$('.formTelBanner, .form-feadback').on("submit",function(Event) {
		Event.preventDefault();
		var that = this;

		$.ajax({
			type: 'POST',
			url: that.action,
			dataType: 'json',
			data: $(that).serialize(),
			success: function(data){

				$("input[name='phone']").val('')

				$(".form-feadback").length > 0 ? sended() : '';
			},
			error: function(data){

			}
		});

		function sended() {
			$(".form-feadback")[0].reset()
			$('.form-sended').fadeIn(1200);

			setTimeout(function () {
				$('.form-sended').fadeOut(1200);
			},4000);

		}

	});

});


/*----------- CALLBACK_MODAL Form -----------*/
jQuery(function(){
	var form = $('form[name=CALLBACK_MODAL]');

	form.submit(function() {
		$('#form-loading-callback-modal').fadeIn();
		$('#error-callback-modal, #success-callback-modal, #beforesend-callback-modal').hide();
		if(validate()){
			submission({"ya_goal" : 'zakaz_z_sh_ok'});
		} else{
			$('#form-loading-callback-modal').hide();
			$('#beforesend-callback-modal, #results-callback-modal').fadeIn();
		};
		$('input, select, textarea, button', form).blur();
		return false;
	});

	function validate() {
		var errors = [];
		$('.req', form).each(function() {
			console.log(this);
			if(!$(this).val()){
				errors.push(1);
				$(this).addClass('error');
			} else $(this).removeClass('error');
		});
		if(errors.length === 0)
			return true;
		else return false;
	};

	function submission(){
		$.ajax({
			type: 'POST',
			url: form.attr('action'),
			dataType: 'json',
			data: form.serialize(),
			success: function(data){
				$('#form-loading-callback-modal').hide();
				$('input, textarea', form).removeClass('error');

				if(data <= 1){
					$('#results-callback-modal, #success-callback-modal').fadeIn();
					$('input, select, textarea', form).not('[type=hidden], [type=submit]').val('');
				}else $('#results-callback-modal, #error-callback-modal').hide().fadeIn();
			},
			error: function(data){

				$('#form-loading-callback-modal').hide();
				$('#results-callback-modal, #error-callback-modal').hide().fadeIn();
			}
		});
		return false;
	};
});



/*----------- CALLBACK_MODAL Form на странице контакты-----------*/
jQuery(function(){
	var form = $('form[name=CALLBACK_MODAL_CONTACTY_PAGE]');

	form.submit(function() {
		$('#form-loading-callback-modal').fadeIn();
		$('#error-callback-modal, #success-callback-modal, #beforesend-callback-modal').hide();
		if(validate()){
			submission({"ya_goal" : 'zakaz_z_sh_ok'});
		} else{
			$('#form-loading-callback-modal').hide();
			$('#beforesend-callback-modal, #results-callback-modal').fadeIn();
		};
		$('input, select, textarea, button', form).blur();
		return false;
	});

	function validate() {
		var errors = [];
		$('.req', form).each(function() {
			if(!$(this).val()){
				errors.push(1);
				$(this).addClass('error');
			} else $(this).removeClass('error');
		});
		if(errors.length === 0)
			return true;
		else return false;
	};

	function submission(){

		var data = new FormData(jQuery('#formContant')[0]);

		console.log(form)
		$.ajax({
			data: data,
			url: '/message.php',
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST', // For jQuery < 1.9
			success: function(data){
				console.log(data);
				$('#form-loading-callback-modal').hide();
				$('input, textarea', form).removeClass('error');

				if(data <= 1){
					$('#results-callback-modal, #success-callback-modal').fadeIn();
					$('input, select, textarea', form).not('[type=hidden], [type=submit]').val('');
				}else $('#results-callback-modal, #error-callback-modal').hide().fadeIn();
			},
			error: function(data){
				console.log(data.responseText);
				$('#form-loading-callback-modal').hide();
				$('#results-callback-modal, #error-callback-modal').hide().fadeIn();
			}
		});
		return false;
	};
});
if (jQuery(".btn-print").length>0) {
	function print_window() {
		var mywindow = window;
		mywindow.document.close();
		mywindow.focus();
		mywindow.print();
		mywindow.close();
	}
}

//��������� ����� ��� �������� ������

$(document).ready(function(){
	$('.modal_enter').on('click', function(){
		$('body').toggleClass('modal-open call_back_trigger')
		$(".page-wrapper").append('<div class="modal-backdrop fade in"></div>');
		$('.modal.fade').toggle();
		$('.call_back_mdfrom').slideToggle();
	});

	//	$('.modal.fade')
	$(document).on('click','.modal.fade, .call_back_mdfrom__close' ,function(){

		if ( $('body').hasClass('call_back_trigger') ) {
			$('body').removeClass('call_back_trigger')
			$('body').toggleClass('modal-open');
			$('.modal-backdrop').remove();
			$('.modal.fade').hide();
			$('.call_back_mdfrom').hide();
		}
	});

	$(".front_text-js").on('click', function(){

		var table_all = $(this).closest('.table_all_wrap-js');

		table_all.siblings().find('.table_wrap-js').slideUp();
		table_all.find('.table_wrap-js').slideToggle();

	});

	$('.slider-banner-container .slider-banner').show().revolution({
		delay:10000,
		startwidth:1140,
		startheight:425,

		navigationArrows:"solo",

		navigationStyle: "round",
		navigationHAlign:"center",
		navigationVAlign:"bottom",
		navigationHOffset:0,
		navigationVOffset:20,

		soloArrowLeftHalign:"left",
		soloArrowLeftValign:"center",
		soloArrowLeftHOffset:20,
		soloArrowLeftVOffset:0,

		soloArrowRightHalign:"right",
		soloArrowRightValign:"center",
		soloArrowRightHOffset:20,
		soloArrowRightVOffset:0,

		fullWidth:"on",

		spinner:"spinner0",

		stopLoop:"off",
		stopAfterLoops:-1,
		stopAtSlide:-1,
		onHoverStop:"on",

		shuffle:"off",

		autoHeight:"off",
		forceFullWidth:"off",

		hideThumbsOnMobile:"off",
		hideNavDelayOnMobile:1500,
		hideBulletsOnMobile:"off",
		hideArrowsOnMobile:"off",
		hideThumbsUnderResolution:0,

		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		startWithSlide:0
	});

	if ($('.slider-uslygy-block').length > 0) {
		$('.slider-uslygy-block').slick({
			slidesToShow: 4,
			autoplay: true,
			dots: true,
			slidesToScroll: 1,
			infinite: true,
			arrows: false,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
			]

		});
	}
	$( ".section:even" ).css( "background-color", "#f1f1f1" );

	$(".dropdown").on('mouseover',function () {
		$(this).addClass('open');
	});
	$(".dropdown").on('mouseout',function () {
		$(this).removeClass('open');
	});

    $(".dropdown").on('click',function () {
        $(this).toggleClass('open-my');
    });


$(".menu-mobile-my-la").html($("#navbar-collapse-1").html());
	$(".menu-mobile-my-la").mmenu({
		offCanvas: {
			position: 'right',
			zposition: 'front',
		},
	},
	{
		language: "ru"
	});
	var API = $(".menu-mobile-my-la").data('mmenu');

	var $icon = $("#icon-menu");


	$icon.on( "click", function() {
		API.open();

	});


	$(".menu-first-lvl").on("click", function(e){
		e.preventDefault();
	});

$(window).on("resize",function () {
	if($(window).width() > 767){
		API.close();
	}

	if($(window).width() < 767){
		API.close();
		$(".menu-first-lvl").attr('href','#mm-3');
		$(".menu-first-lvl").on("click", function(e){
			return true;
		});
	}
})
	if ($(window).width() <= 768){
		$(".menu-first-lvl").attr('href','#mm-3');
		$(".menu-first-lvl").on("click", function(e){
			return true;
		});
	}


    /*------MENU------*/

	/*var $menu = $("#my-menu").mmenu({
		offCanvas: {
			position: 'right',
			zposition: 'front',
		}
	});

	var $icon = $("#mmenu-icon");

	var API = $menu.data( "mmenu" );


	console.log(API.bind( "openPanel:after"));

	$icon.on( "click", function() {

		API.open();

	});

	API.bind( "openPanel:after", function() {
console.log('this!');
		setTimeout(function() {

			$icon.addClass( "is-active" );

		}, 100);

		$icon.on( "click", function() {

			API.close();

		});

	});

	API.bind( "closed", function() {
		console.log('this!--------');
		setTimeout(function() {

			$icon.removeClass( "is-active" );

		}, 100);

		$icon.on( "click", function() {

			API.open();

		});

	});*/
/*
	$(".hamburger").on("click",function(){
		$(this).toggleClass('is-active');
	});
*/



});
