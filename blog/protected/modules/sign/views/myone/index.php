<head>
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/style/my-one.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/jQuery.js"></script>
	<script type="text/javascript " src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/leave.js"></script>
	<script type="text/javascript " src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/overtime.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/exit.js"></script>
	<link rel="shortcut icon" type="<?php echo Yii::app()->request->baseUrl ?>/assets/index/image/x-icon" href="favicon.ico" />  
</head>
<body>
<center>
	
    <div id="content">
      	<img class="my-logo" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/my-img2.png" alt=""  />
      	
      
      
      	<a href="javascript:;" id="show">
      		<!-- 请假 -->
      	</a>
      	<a href="javascript:;" id="overshow">
      		<!-- 加班 -->
      	</a>
      
    </div>
	
	
	<div class="leave hide">
		<h1>
			<!-- 是否确定请假？ -->
		</h1>
		<a href="javascript:;" class="close">
			<!-- 关闭 -->
		</a>
		<a href="my-oneaction.php?action=leave" class="yes">
			<p><!-- 确定 --></p>
		</a>
	</div>
	<div class="overtime hide">
		<h1>
			<!-- 是否确定加班？ -->
		</h1>
		<a href="javascript:;" class="close">
			<!-- 关闭 -->
		</a>
		<a href="my-oneaction.php?action=addsign" class="yes">
			<p><!-- 确定 --></p>
		</a>
	</div>
	
	</center>
	<!-- 显示居中 -->
</body>
</html>