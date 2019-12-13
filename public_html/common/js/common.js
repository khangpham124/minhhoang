$(document).ready(function(){
	
	$('.js-sidebar-tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.js-sidebar-tabs li').removeClass('current');
		$('.js-sidebar-tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

	$('.tpye_realsell').show();
	$('.js-banner-tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');
		var input_id = $(this).attr('data-type');
		var type_search = $(this).attr('data-cate');
		
		$('.js-banner-tabs li').removeClass('current');
		$('.js-banner-tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
		$("#type_search").val(type_search);
		$('.slBox').hide();
		$(".type_"+type_search).show();
		if(type_search=='realbld') {
			$('.nonBld').hide();
		} else {
			$('.nonBld').show()
		}
	});

	$('.js-price').each(function(){
		val = parseInt($(this).text());
		text = val/1000000000;
		if(text){
			if(text < 1){
				text = text*1000;
				$(this).text(text + " triệu");
				return;
			}
			$(this).text(text + " tỷ");
		}
	});
	$('.js-dropdown-sp').on('click', function(){
		$(this).siblings().removeClass('open');
		$(this).toggleClass('open');	
		$(this).find('.dropdown-menu').first().slideToggle(300);	
		$(this).siblings().find('ul').hide(200);
	});

	$('.js-dropdown').hover(
		function(){
			$('.js-dropdown').removeClass('open')
			$(this).addClass('open');	
			$(this).find('.dropdown-menu').first().slideDown(300);	
			$(this).siblings().find('ul').hide(200);
		},
		function(){
			$(this).removeClass('open');	
			$(this).find('.dropdown-menu').first().slideUp(300);
		}
	)

	$('.js-nav li').each(function(){
		if(window.location.href == $(this).find('a').attr('href')){
			$(this).addClass('active');
		}
	});
	
	$('.header-hamburger').click(function() {
		$(this).toggleClass('active');
		$('.navigation-sp').toggleClass('open');
		$('#wrapper').toggleClass('menu-open');
	});

	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		if (scroll > 100){
			$('.js-menu').addClass('active');
		} else {
			$('.js-menu').removeClass('active');
		}
	});
});