<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>卓音在线</title>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/jquery.pagination.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/pagination.css">
	
	<script type="text/javascript">
		$(function(){
			var initPagination = function() {
				var num_entries = <?php echo $total ?>; //数据总数
				// 创建分页
				$("#Pagination").pagination(num_entries, {
					num_edge_entries: 1, //边缘页数
					num_display_entries: 2, //主体页数
					callback: pageselectCallback,
					items_per_page: 4, //每页显示项
					prev_text: "前一页",
					next_text: "后一页"
				});
			 };

			function pageselectCallback(page_index){
				page_index=page_index;
				$.ajax({
					url:"<?php echo Yii::app()->request->baseUrl ?>/index.php?r=compo/ajax&page="+page_index,//路径
					dataType: "json",//数据
					// data:{page:page_index},//传的参数
					success:function(data){
						var content = '';	
						var baseUrl = "<?php echo Yii::app()->request->baseUrl ?>";			
						$.each(data,function(n,value){//data你要被循环的数组或对象，回调函数每次循环做什么事
	        				$("#compo_content .creation").empty();//empty


	        				content += "<div class='creation_content'><div class='a'><a href='##'><img src='"
	        				        +baseUrl+'/uploads/honer/'+value.thumb
	        				        +"'></a><p>"+value.title+"</p></div></div>";


	                                               
	        			});
	        			

	        			$("#compo_content .creation").html(content);
					}
				});
				return false;
			}

			//ajax加载

			$("#compo_content .creation").load("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=compo/ajax&page=0", null, initPagination);
		});
	</script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/join_compo.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/join.css">
<div id="top">
		<div id="top_content">
			<div id="top_logo">
				<img src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/top_logo.png">
			</div>
			<div id="top_nav">
				<ul>
					<li class="duang"><a href="<?php echo  $this->createUrl('index/index') ?>">首页</a></li>
					<li><a href="<?php echo  $this->createUrl('team/index') ?>">团队</a></li>
					<li id="yes"><a href="<?php echo  $this->createUrl('compo/index') ?>">作品</a></li>
					<li><a href="<?php echo  $this->createUrl('about/index') ?>">关于我们</a></li>
					<li><a href="<?php echo  $this->createUrl('/sign') ?>">值岗签到</a></li>

				</ul>
			</div>
		</div>
	</div>
	<div id="first">
		<ul>
			<li class="li1"></li>
			<li class="li2"></li>
			<li class="li3"></li>
		</ul>
		<p>我们承担东师重要网站的开发与维护</p>
	</div>
	<div id="compo_content">
		<div class="notice_top">
			<p class="big">网站作品</p>
			<div class="img"></div>
			<p class="small">OUR  CREATION</p>
		</div>
		<div class="creation">
			

				
             
		</div>
		<div id="Pagination" class="pagination">
        <!-- <div class="link">
				<p><span>相关链接：</span><a href="">东北师范大学文学院 </a><a href="">净月保卫处</a><a href="">本部保卫处</a><a href="">地理科学学院团委</a></p>

		</div>-->
	</div>
	<!-- <div id="homework">
		<div class="notice_top">
			<p class="big">作业展示</p>
			<div class="img"></div>
			<p class="small">OUR  HOMEWORK</p>
		</div>
		<div class="code">
			<h1>2015年技术部寒假作业</h1>
			<div class="code_content">
				<div id="can">
					<h2>黄灿</h2>
					<a href="">360</a>
					<a href="">微博</a>
					<a href="">qq音乐</a>
					<a href="">qq会员</a>
					<a href="">淘宝网</a>
				</div>
				<div id="wan">
					<h2>肖宛直</h2>
					<a href="">360</a>
					<a href="">飞信</a>
					<a href="">微博</a>
					<a href="">qq音乐</a>
					<a href="">qq会员</a>
				</div>
				<div id="yan">
					<h2>武炎</h2>
					<a href="">360</a>
					<a href="">飞信</a>
					<a href="">微博</a>
					<a href="">qq音乐</a>
					<a href="">qq会员</a>
				</div>
				<div id="meng">
					<h2>邸如梦</h2>
					<a href="">360</a>
					<a href="">微博</a>
				</div>
				<div id="xiao">
					<h2>杨霄</h2>
					<a href="">飞信</a>
					<a href="">微博</a>
					<a href="">qq会员</a>
				</div>
			</div>
		</div>
		<div class="shej">
			<h1>设计部卓音在线网页美工n版</h1>
			<div class="shej_content">
				<div class="team">
					<h2>第一项目小组：</h2>
					<p>张家铭<a href="">（1）</a><a href="">（2）</a><a href="">（3）</a></p>
					<p>刘茂<a href="">（1）</a><a href="">（2）</a><a href="">（3）</a></p>
					<p>王鑫<a href="">（1）</a><a href="">（2）</a><a href="">（3）</a></p>
					<p>黄潆莹<a href=""> （1）</a><a href="">（2）</a><a href="">（3）</a></p>
				</div>
				<div class="team">
					<h2>第二项目小组：</h2>
					<p>冯鸣昱<a href="">（1）</a><a href="">（2）</a><a href="">（3）</a></p>
					<p>孙悦<a href="">（1）</a><a href="">（2）</a><a href="">（3）</a></p>
				</div>
				<div class="team">
					<h2>第三项目小组：</h2>         
					<p>慕玥<a href="">（1）</a><a href="">（2）</a><a href="">（3）</a></p>
					<p>陈青青<a href="">（1）</a><a href="">（2）</a><a href="">（3）</a></p>
					<p>王少彤<a href="">（1）</a><a href="">（2）</a><a href="">（3）</a></p>
				</div>
			</div>
		</div>
	</div> -->