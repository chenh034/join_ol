$(function(){
	var oul = $('.scroll ul');
	var ali = $('.scroll ul li');
	var opoint = $(".point");
	var numLi = $('.point ul li');
	var aliWidth = $('.scroll ul li img').eq(0).width();
	//eq(x)选择指定的index值的元素（在这里指的是第一张图片的宽）
	var _now = 0;  //控制数字样式的计数器
	var _now2 = 0;  //控制图片运动距离的计数器
	var timeId;

	var ullength = oul.children().length;
    var ulWith = ullength*aliWidth;

    oul.width(ulWith);

    var pointlength = oul.children().length;
    var pointWith = ullength*aliWidth;

    opoint.width(pointWith);



	numLi.click(function(){
		var index = $(this).index();
		_now = index;
		_now2 = index;
		$(this).addClass('poc_now').siblings().removeClass();
		oul.animate({'left':-aliWidth*index},1000);
	});
		/*animate() 方法执行 CSS 属性集的自定义动画。
该方法通过CSS样式将元素从一个状态改变为另一个状态。CSS属性值是逐渐改变的，这样就可以创建动画效果。
只有数字值可创建动画。字符串值无法创建动画*/	


	/*图片运动函数，无返回值*/
	function slider (){
			if (_now == numLi.size()-1){
				ali.eq(0).css({
					'position':'relative',
					'left':oul.width()
				});
				_now=0;
			}else{
				_now++;
			}
		
			_now2++;

			numLi.eq(_now).addClass('poc_now').siblings().removeClass();
			oul.animate({'left':-aliWidth*_now2},1000,function(){
				if ( _now == 0 ) {
					ali.eq(0).css('position','static');
					oul.css('left',0);
					_now2 = 0;
				
				}
			});
		}
	//setInterval() 方法可按照指定的周期（以毫秒计）来调用函数或计算表达式
	timeId = setInterval(slider,3000);


	//当鼠标指针位于元素上方时，会发生mouseover事件
	$('.scroll').mouseover(function(){
		clearInterval(timeId);
	});//鼠标移入，取消计时器

	//当鼠标指针从元素上移开时，发生mouseout事件
	$('.scroll').mouseout(function(){
		timeId = setInterval(slider,3000);
	});

	

	//第二部分的动态
	$(".notice_content li ").click(function(){
		$(".notice_content li").hide(500); 
		var index = $(this).index();
		$("#content li").eq(index).show(1000).siblings().hide();
		
		$("#btn_small .li1").fadeIn();
		$("#btn_small .li2").fadeIn(800);
		$("#btn_small .li3").fadeIn(1500);
		$("#btn_small .li4").fadeIn(2000);

	});
	

	$("#btn_small li").mouseover(function(){
		var index = $(this).index();
		$("#content li").eq(index).slideDown(1000).siblings().hide();
		$(this).show().siblings().show();
	});

	$("#notice").mouseleave(function(){
		$(".notice_content li").show(1000);
		$("#content li").hide();
		$("#btn_small .li1").fadeOut(900);
		$("#btn_small .li2").fadeOut(800);
		$("#btn_small .li3").fadeOut(400);
		$("#btn_small .li4").fadeOut(100);
	});
});