<head>
	<title>历史公告</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/style/announce.css">
	
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/Jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/proq.js"> </script>


	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/exit.js"></script>
	
</head>
<body>
<center>
	
	<div id="content">
	<!-- 历史公告 -->
		<div class="join">
			<!-- 卓音公告 -->
		</div >
		<h2>
			<!-- 最新公�?-->
		</h2>
		<div class="according">
			<div class="ul">
				
			</div>
			<div class="ul-p">
			<?php foreach ($announceInfo as $key => $value): ?>
					<p>
						<a href="<?php echo $this->createUrl('/index/announce',array('id'=>$value->id)) ?>" target='_blank'>
                            <?php echo $value->title ?>
						</a>
						<span>(<?php echo date("Y-m-d",$value->createtime) ?>)</span>
					</p>
			<?php endforeach ?>	
			</div>
			
		</div>
	</div>
	
</body>
