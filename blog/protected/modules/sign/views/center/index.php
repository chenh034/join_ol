<head>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/style/my-index.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/jQuery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/exit.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />  
</head>
<body>
<center>
	
    <div id="content">
      
        <img class="my-logo" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/my-img1.png" alt=""  />
        <div class="my-buttom">
            <a href="<?php echo $this->createUrl('myone/index') ?>" class="one">个人值岗表</a>
            <a href="<?php echo $this->createUrl('myall/index') ?>" class="all">全体值岗</a>
        </div>
    </div>
</center>
	
	
</body>
</html>