$(function(){
	var oul = $('.according .ul');//获取公告
	var numLi = $('.according ol li ');//获取翻页
	var aliWidth = $('.according .ul ul').eq(0).width();
	//获取四个公告的长度


	numLi.click(function(){
		var index = $(this).index();
		$(this).addClass('current').siblings().removeClass();//翻页点击时候的变化
		oul.animate({'left':-aliWidth*index},800);//向左移动4个公告的长度
	});
});
