$(function(){
	var aA = $('.nav ul li ');

	aA.mousemove(function(){

		 $(this).addClass('current').siblings().removeClass('current');
	});

});
