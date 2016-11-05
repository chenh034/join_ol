$(function(){
	var oBtn = $('#exitshow');
	var exit = $('.exit');
	var oClose =$('.no');
	var close = $('.close');//浏览器可视区域的宽度
	var browserWidth = $(window).width();

	//浏览器可视区域的高度
	var browserHeight = $(window).height();

	//浏览器纵向滚动条距离上边界的值
	var browserScrollTop = $(window).scrollTop();

	
	//弹出窗口的宽度
	var exitWidth = exit.outerWidth(true);

	//弹出窗口的高度
	var exitHeight = exit.outerHeight(true);

	//left的值等于刘篮球可视区域的的宽度/2-弹出窗口的宽度/2
	var positionLeft = browserWidth/2-exitWidth/2;
	//top的值等于刘篮球可视区域的的高度/2-弹出窗口的高度/2+浏览器纵向滚动条距离上边界的值
	var positionTop = browserHeight/2-exitHeight/2+browserScrollTop;

	oBtn.click(function(){
		exit.show().animate({
			'left':positionLeft+'px',
			'top':positionTop+'px'
		},500);
	});

	//close.click();

	$(window).resize(function(){	
		if(exit.is(':visible')){
			browserWidth = $(window).width();
			browserHeight = $(window).height();
			positionLeft = browserWidth/2 - exitWidth/2+browserScrollLeft;
			positionTop = browserHeight/2 - exitHeight/2+browserScrollTop;

			exit.animate({
						'left':positionLeft+'px',
						'top':positionTop+'px'
			},500);		
		}
	});

	$(window).scroll(function(){
		if(exit.is(':visible')){
			browserScrollTop = $(window).scrollTop();
			//browserScrollLeft = $(window).scrollLeft();
			//positionLeft = browserWidth/2 - exitWidth/2+browserScrollLeft;
			positionTop = browserHeight/2 - exitHeight/2+browserScrollTop;
			exit.animate({
						'left':positionLeft+'px',
						'top':positionTop+'px'
			},500).dequeue();
		}
				
	});

	oClose.click(function(){
		exit.hide();
	});
	});