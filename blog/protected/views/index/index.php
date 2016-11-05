<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>卓音在线</title>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/join.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/jquery.pagination.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/pagination.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/join.css">
	<script type="text/javascript">
	$(function(){
		var initPagination = function() {
			var num_entries = <?php echo $total ?>; //数据总数
			// 创建分页
			$("#Pagination").pagination(num_entries, {
				num_edge_entries: 1, //边缘页数
				num_display_entries: 2, //主体页数
				callback: pageselectCallback,
				items_per_page: 8, //每页显示项
				prev_text: "前一页",
				next_text: "后一页"
			});
		 };

		function pageselectCallback(page_index){
			page_index=page_index;
			$.ajax({
				url:"<?php echo Yii::app()->request->baseUrl ?>/index.php?r=index/ajax&page="+page_index,//路径
				dataType: "json",//数据
				// data:{page:page_index},//传的参数
				success:function(data){
					var content = '';	
					var baseUrl = "<?php echo Yii::app()->request->baseUrl ?>";			
					$.each(data,function(n,value){//data你要被循环的数组或对象，回调函数每次循环做什么事
        				$("#activity #activity_content").empty();//empty


        				content += "<li class='li'> <div><a href='"
        				       + baseUrl+'/index.php?r=index/detail&aid='+value.aid
        				       +"'><img src='"+ baseUrl+'/uploads/article/'+value.thumb+"'></a> </div><p>"
        				       +value.title+"</p></li>";


                                               
        			});
        			

        			$("#activity #activity_content").html(content);
				}
			});
			return false;
		}

		//ajax加载

		$("#activity #activity_content").load("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=index/ajax&page=0", null, initPagination);
	});
</script>
</head>
<body style="width:1423px; margin:-20px auto;">
    <div id="top">
		<div id="top_content">
			<div id="top_logo">
				<img src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/top_logo.png">
			</div>
			<div id="top_nav">
				<ul>
					<li id="yes" class="duang"><a href="<?php echo  $this->createUrl('index/index') ?>">首页</a></li>
					<li><a href="<?php echo  $this->createUrl('team/index') ?>">团队</a></li>
					<li><a href="<?php echo  $this->createUrl('compo/index') ?>">作品</a></li>
					<li><a href="<?php echo  $this->createUrl('about/index') ?>">关于我们</a></li>
					<li><a href="<?php echo  $this->createUrl('/sign') ?>">值岗签到</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="banner">
		<div class="scroll">
			<ul>
			    <?php foreach ($scrollInfo as $key => $value): ?>
			    	<li><img src="<?php echo Yii::app()->request->baseUrl.'/uploads/scroll/'.$value->img_src;?>" ></li>
			    <?php endforeach ?>
			</ul>
		</div>
		
		<div class="point">
			<ul>
			    <?php foreach ($scrollInfo as $key => $value): ?>
					<li class="poc_r"></li>
				<?php endforeach ?>
	
			</ul>
		</div>
	</div>
	<div id="notice">
		<div class="notice_top">
			<p class="big">公告板</p>
			<div class="img"></div>
			<p class="small">ANNUNCIATOR   BOARDS</p>
		</div>
		<div class="notice_content">
			<ul>
				<li>
					<div id="content1"></div>
					<p>工作室规定</p>
				</li>
				<li>
					<div id="content2"></div>
					<p>今日值岗</p>
				</li>
				<li>
					<div id="content3"></div>
					<p>今日值日</p>
				</li>
				<li class="no">
					<div id="content4"></div>
					<p>近期通知</p>
				</li>
			</ul>
		</div>
		<div id="btn_small">
			<ul>
				<li class="li1" title="规定"></li>
				<li class="li2" title="值岗"></li>
				<li class="li3" title="值日"></li>
				<li class="li4" title="公告"></li>
			</ul>
		</div>
		<div id="content">
			<ul>
				<li>
					<p class="li1_p">1.<strong style="color: red;">禁止 看视频、玩游戏</strong>或做其他与工作无关之事</p>
					<p class="li1_p">2.按时上岗<strong style="color: red;">签到</strong>,请假请提前一天，说明具体原因，且事后补岗</p>
					<p class="li1_p">3.保持桌面整洁</p>
					<p class="li1_p">4.对来访老师要主动热情、有礼貌</p>
					<p class="li1_p">5.禁止大声喧哗</p>
				</li>
				<li>
					<div class="li2"></div>
					<p><?php echo $date ?></p>
					<p><?php echo $weekStr ?></p>
					<p><?php echo date("H:i:s") ?></p>
					<p>值岗人员：
					<?php if ($dutyInfo != "无") { ?>
							<?php foreach ($dutyInfo as $key => $value): ?>
						  		<span> <?php print_r($value);echo '&nbsp;' ?></span>
						  	
							<?php endforeach ?>
					<?php }else{
						echo "<span> $dutyInfo </span>";
						} ?>
					  
					</p>
				</li>
				<li>
					<div class="li3"></div>
						<p><?php echo $date ?></p>
						<p><?php echo $weekStr ?></p>
						<p>今天第一组值日哦，第一组的同学们不要忘记啦！！</p>
				</li>
				<li>
					<div id="announce">
						<?php foreach ($announceInfo as $key => $value): ?>
							<p>
							   <a href="<?php echo $this->createUrl('announce',array('id'=>$value->id)) ?>">
                                  <?php echo $value->title ?>
							   </a>
							   <span>(<?php echo date("Y-m-d",$value->createtime) ?>)</span>
							</p>
						<?php endforeach ?>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div id="activity">
		<div class="notice_top">
			<p class="big">joiners 活动</p>
			<div class="img"></div>
			<p class="small">OUR  ACTIVITIES</p>
		</div>
		<p class="chinese">我们的活动，我们共同的欢乐时光</p>
		<div id="activity_content">

			
		    

		</div>
		<div id="Pagination" class="pagination">
	</div>

