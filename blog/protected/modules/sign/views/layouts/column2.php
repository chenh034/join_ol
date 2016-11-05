<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>卓音签到系统</title>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/exit.js"></script>
	
	
</head>
	<center>	
		<div id="nav" class="nav">
		<!-- 最上部导航 -->
			<div class="title">
				<p>卓音<span >签到系统</span></p>
			</div>
			<ul>
				<li class="current"><a href="<?php echo $this->createUrl('index/index') ?>" >首页</a></li>
				<li><a href="<?php echo $this->createUrl('announce/index') ?>" >历史公告</a></li>
				<li><a href="<?php echo $this->createUrl('myindex/index') ?>" >个人中心</a></li>
			</ul>
			<a href="javascript:;" id="exitshow">退出登录</a>
		</div>
		<?php  echo $content; ?>

	 	<div id="bottom">
			<div id="last">
				<div class="center">
					<p>Registration System</p>
					<span>东北师范大学·学生就业指导中心·卓音工作室</span>
				</div>
			</div>
		</div>
		
		<div class="exit hide">
			<p>确定退出</p>
			<div class="btn">
				<a class="close" onclick="window.close();" href="<?php echo $this->createUrl('login/out') ?>" target="_self">确定</a>
				<a href="#" class="no">取消</a>
			</div>
		</div>
		<a href="javascript:;" id="ipshow"></a>
		<!-- ip失败按钮 -->
		<div class="ip hide">
			IP验证失败，请到工作室签到
		</div>
		<script type="text/javascript">
			// window.onbeforeunload = function(event) { return confirm("确定离开此页面吗？"); }
		</script>
	</center>
	</html>