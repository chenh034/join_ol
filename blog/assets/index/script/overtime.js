$(function(){
	var oBtn = $('#overshow');
	var overtime = $('.overtime');
	var oClose =$('.close')

	//浏览器可视区域的宽度
	var browserWidth = $(window).width();

	//浏览器可视区域的高度
	var browserHeight = $(window).height();

	//浏览器纵向滚动条距离上边界的值
	var browserScrollTop = $(window).scrollTop();

	
	//弹出窗口的宽度
	var overtimeWidth = overtime.outerWidth(true);

	//弹出窗口的高度
	var overtimeHeight = overtime.outerHeight(true);

	//left的值等于刘篮球可视区域的的宽度/2-弹出窗口的宽度/2
	var positionLeft = browserWidth/2-overtimeWidth/2;
	//top的值等于刘篮球可视区域的的高度/2-弹出窗口的高度/2+浏览器纵向滚动条距离上边界的值
	var positionTop = browserHeight/2-overtimeHeight/2+browserScrollTop;


	var oMask = '<div class="mask"></div>'
	//遮挡层的宽度
	var maskWidth = $(document).width();
	//遮挡层的高度
	var maskHeight = $(document).height();



	oBtn.click(function(){
		overtime.show().animate({
			'left':positionLeft+'px',
			'top':positionTop+'px'
		},500);
	$('body').append(oMask);
	$('.mask').width(maskWidth).height(maskHeight);
	});


	$(window).resize(function(){	
		if(overtime.is(':visible')){
			browserWidth = $(window).width();
			browserHeight = $(window).height();
			positionLeft = browserWidth/2 - overtimeWidth/2+browserScrollLeft;
			positionTop = browserHeight/2 - overtimeHeight/2+browserScrollTop;

			overtime.animate({
						'left':positionLeft+'px',
						'top':positionTop+'px'
			},500);		
		}
	});

	$(window).scroll(function(){
		if(overtime.is(':visible')){
			browserScrollTop = $(window).scrollTop();
			browserScrollLeft = $(window).scrollLeft();
			positionLeft = browserWidth/2 - overtimeWidth/2+browserScrollLeft;
			positionTop = browserHeight/2 - overtimeHeight/2+browserScrollTop;
			overtime.animate({
						'left':positionLeft+'px',
						'top':positionTop+'px'
			},500).dequeue();
		}
				
	});

	oClose.click(function(){
		overtime.hide();
		$('.mask').remove();
	});
	});