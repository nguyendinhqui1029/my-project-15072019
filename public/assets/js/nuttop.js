// JavaScript Document
$(function(){
	var offset=300,
	scroll_opacity=1200,
	scroll_duration= 700,
	$back_to_top=$('.Game-online');
	$(window).scroll(function(){
		($(this).scrollTop()>offset)? $Game_online.addClass('visible'): $Game_online.removeClass('visible fade-out');
	if($(this).scrollTop() > scroll_opacity){
		$Game_online.addClass('fade-out');
	}
	}
	
	
	);
	$Game_online.on('click',function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:0},scroll_duration);
	});
	
	
	
	
})();