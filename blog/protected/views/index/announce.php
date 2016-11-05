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

	<p style="margin:20px auto;width: 960px;text-align: center;" >
		<?php echo $announceInfo->title ?>
	</p>

	<div style="width: 980px;margin: 0 auto;">
		<?php echo $announceInfo->content ?>
	</div>