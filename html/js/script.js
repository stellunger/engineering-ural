$(function(){
	$('.b-scroll-up').click(function(){
		$('html, body').animate({scrollTop:0});
		return false;
	});
	
	$('.b-img-gal-link').fancybox();
});