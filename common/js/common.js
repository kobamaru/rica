// common.js

(function(jQuery){

	// menu
	jQuery(function(){
		var jQueryheader = jQuery('.header');

		jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop()>350){
				jQueryheader.addClass('fixed');
			} else {
				jQueryheader.removeClass('fixed')
			}
		});

		jQuery('.nav_toggle').on('click',function(){
			jQueryheader.toggleClass('open');
		});
	});

	jQuery(function(){
		var topBtn = jQuery('.pagetop');
		topBtn.click(function(){
			jQuery('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	});

	jQuery(function(){
		jQuery('.tgl_open').on('click',function(event){
			event.preventDefault();
			jQuery(this).parent().find('.tgl_detail').slideToggle(500,function(){
				jQuery(this).parent().find('.tgl_open').fadeOut(300);
			});
		});
	});

	jQuery('a[href^="#"]:not(".tgl_open a")').click(function() {
		var speed = 400;
		var href= jQuery(this).attr("href");
		var target = jQuery(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});

	if($('.list_service').length){
		$('.list_service li span').matchHeight();
	}

})(jQuery);
