$(function(){

//产品部分的飞入
	/*$("#chanp .img").slideDown(2000);*/
	$('#chanp .list li').eq(0).fadeIn(1000);
	$('#chanp .list li').eq(1).fadeIn(1500);
  	$('#chanp .list li').eq(2).fadeIn(2000);
  	$('#chanp .list li').eq(3).fadeIn(2500);
  	$('#chanp .list li').eq(4).fadeIn(3000);
  	$('#chanp .list li').eq(5).fadeIn(3500);
  	$('#chanp .list li').eq(6).fadeIn(4000);
 

 $("#chanp .list li ").eq(0).css({
 		'position':'relative',
 		'top':'74px',
 		'left':'-94px'

 	});
 $("#chanp .list li ").eq(1).css({
 		'position':'relative',
 		'top':'104px',
 		'left':'-44px'

 	});
 $("#chanp .list li ").eq(2).css({
 		'position':'relative',
 		'top':'134px',
 		'left':'-18px'

 	});
 $("#chanp .list li ").eq(3).css({
 		'position':'relative',
 		'top':'164px',
 		'left':'-8px'

 	});
 $("#chanp .list li ").eq(4).css({
 		'position':'relative',
 		'top':'198px',
 		'left':'-12px'

 	});
 $("#chanp .list li ").eq(5).css({
 		'position':'relative',
 		'top':'224px',
 		'left':'-30px'

 	});
 $("#chanp .list li ").eq(6).css({
 		'position':'relative',
 		'top':'254px',
 		'left':'-62px'

 	});

 window.onscroll=function(){
				if(document.body.scrollTop>0 || document.documentElement.scrollTop>0){
					$("#code .img").show(1500);
					$("#code .list").slideDown(2000);
					
					$("#shej .list").slideDown(4000);
					$("#shej .img").show(3000);
		};
		};
});
