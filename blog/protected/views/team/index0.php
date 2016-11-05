<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>卓音在线</title>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/join.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/join.css">
</head>
<body>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/join_team.css">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/join_team.js"></script>
<script type="text/javascript">
	$(function () {  
	    //hover某处显示悬浮框  
	    $(".team li img").mouseover(function(e){  
	        //获取鼠标位置函数  
	        console.log($(this).html());
	        var mousePos = mousePosition(e);  

	        var t = $(this).prev().attr('href');
	        // var  xOffset = 20;  
	        // var  yOffset = 10;  
	        // $("#tooltip").css("display","block").css("position","absolute").css("top",(mousePos.y - yOffset) + "px").css("left",(mousePos.x + xOffset) + "px");  
	        // $("#tooltip").append("悬浮窗内容");  
	        $.ajax({
        		type: "post",
        		url: "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=team/ajax",
        		data: {id:$(this).attr('alt')},
        		dataType: "json",
        		success:function(data){
        			
        			var i = (t)/6;
        			var i = Math.ceil(i); 
        			var  yOffset = 10; 
        			if (i%2) {
        				var  xOffset = 20; 
        				$("#tooltip").css("display","block").css("position","absolute").css("top",(mousePos.y - yOffset) + "px").css("left",(mousePos.x + xOffset) + "px");
        				 
        			} else{
        				var  xOffset = 250; 
        				$("#tooltip").css("display","block").css("position","absolute").css("top",(mousePos.y - yOffset) + "px").css("left",(mousePos.x - xOffset) + "px");
        			};
        			 
			        var  yOffset = 10; 
        			
        			var content = '';
        			
                     content += '<ul>'
                              + '<li>'+'<span>姓名：</span>'+data.jname+'</li>'
                              + '<li>'+'<span>部门：</span>'+data.bunch+'</li>'
                              + '<li>'+'<span>学院：</span>'+data.academy+'</li>'
                              + '<li>'+'<span>年级：</span>'+data.grade+'</li>'
                              + '</ul>';
        	
        			$("#tooltip").html(content);
        		}
        	});
	              
	     });  
	     //鼠标离开表格隐藏悬浮框  
	     $(".team li img").mouseout(function(){  
	         $("#tooltip").empty();  
	         $("#tooltip").css("display","none");  
	     });  
	  
	});
	//获取鼠标坐标  
	function mousePosition(ev){   
	    ev = ev || window.event;   
	    if(ev.pageX || ev.pageY){   
	        return {x:ev.pageX, y:ev.pageY};   
	    }   
	    return {   
	        x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,   
	        y:ev.clientY + document.body.scrollTop - document.body.clientTop   
	    };   
	} 
</script>
<div id="top">
		<div id="top_content">
			<div id="top_logo">
				<img src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/top_logo.png">
			</div>
			<div id="top_nav">
				<ul>
					<li class="duang"><a href="<?php echo  $this->createUrl('index/index') ?>">首页</a></li>
					<li id="yes" ><a href="<?php echo  $this->createUrl('team/index') ?>">团队</a></li>
					<li><a href="<?php echo  $this->createUrl('compo/index') ?>">作品</a></li>
					<li><a href="<?php echo  $this->createUrl('about/index') ?>">关于我们</a></li>
					<li><a href="<?php echo  $this->createUrl('/sign') ?>">值岗签到</a></li>

				</ul>
			</div>
		</div>
</div>
<div id="chanp">
		<div class="content">
			<h1>产品部</h1><span>我不是产品狗</span>
			<p>product department</p>
			<div class="line"></div>
			<div class="chanp_content">
				<div class="img"></div>
				<div class="list">
					
						<?php foreach ($proInfo as $key => $value): ?>
							<li>
					
								<?php echo @$value->info ?>
							</li>
						<?php endforeach ?>
				
				</div>
			</div>
		</div>
	</div>
	<div id="code">
		<div class="content">
			<h1>技术部</h1><span>我不是程序猿</span>
			<p>technical division</p>
			<div class="line"></div>
			<div class="list">
					<ol>
						<?php foreach ($devInfo as $key => $value): ?>
							<li>
					
								<?php echo $value->info ?>
							</li>
						<?php endforeach ?>
					</ol>
			</div>
			<div class="img"></div>
		</div>
	</div>
	<div id="shej">
		<div class="content">
			<h1>设计部</h1><span>我不是设计狮</span>
			<p>design department</p>
			<div class="line"></div>
			<div class="img"></div>
			<div class="list">
				<li>
					<?php foreach ($designInfo as $key => $value): ?>
						<li>
					
						<?php echo @$value->info ?>
						</li>
					<?php endforeach ?>
				</li>
			</div>
		</div>
	</div>
	<div class="team">
		<h1>团队成员</h1>
		<div id="tooltip" class="tip">
	
		</div> 
		<?php foreach ($joinersInfo as $key => $value): ?>

			<?php foreach ($value as $k => $v): ?>
			
		            <li>
					    <a href="<?php echo $k+1 ?>" style="display:none;" ></a>
						<img alt="<?php echo $v->id ?>" src="<?php echo Yii::app()->request->baseUrl ?>/uploads/head/<?php echo $v->thumb ?>" >
					</li>	
			<?php endforeach ?>
					
		<?php endforeach ?>
	</div>