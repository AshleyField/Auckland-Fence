$(function(){

	$('.navigation').hide();
	$('.navigation').css("display","block !important");


	$('.bars').on('click',function(e){
		e.stopPropagation();
		$('.navigation').slideToggle(300);
	});
});

var swiper = new Swiper('.swiper-container', {
	autoHeight: true,
	loop: true,
	pagination: {
		el: '.swiper-pagination',
		dynamicBullets: true,
	},
	autoplay: {
		delay: 5000,
		disableOnInteraction: true,
	},
	fadeEffect: {
    crossFade: true
  },

});


$(function(){
	$('#back-to-top').hide();

	$(function()  {
		$(window).scroll(function(){
			if($(this).scrollTop() > 200) {
				$('#back-to-top').fadeIn();
			}
			else {
				$('#back-to-top').fadeOut();
			}
		})
	});

	$('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

})