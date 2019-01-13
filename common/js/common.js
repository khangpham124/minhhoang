$(document).ready(function(){
	
	$('.js-sidebar-tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.js-sidebar-tabs li').removeClass('current');
		$('.js-sidebar-tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

	$('.js-banner-tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.js-banner-tabs li').removeClass('current');
		$('.js-banner-tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

	// $('.js-dropdown > a').on('click',function(event){
    
	// 	event.preventDefault()
		
	// 	$(this).parent().toggleClass('open');
		
	// 	$(this).parent().find('.dropdown-menu').first().toggle(300);
		
	// 	$(this).parent().siblings().find('ul').hide(200);
	// });

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
	
	$('.header-hamburger').click(function() {
		$(this).toggleClass('active');
		$('.navigation-sp').toggleClass('open');
		$('#wrapper').toggleClass('menu-open');
	});

});