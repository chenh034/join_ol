<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/style/index.css">
	<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/Jquery.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/proq.js"> </script>
	<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/log.js"> </script>


	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/script/exit.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/script/ip.js"></script>
	<asp:HiddenField ID="hidTime" runat="server" Value="5400" />
	
	
	<script>
	function signtime(){
	var span = $("#timing span");
	span.text("00:00");
	var s = 0;
	var m = 0;
	var w = setInterval(function(){
		if (s == 60) {
			m+1;
			s=0;
		}
		s = s+1;
		span.text((m< 10 ? "0" + m : m) + ":" + (s < 10 ? "0" + s : s));
		if (m==90&&s==0) {
			//clearInterval(w);
		}
	},1000)
	}</script>
</head>
<body>
	<center>
	

		
	<div id="content">
		<div id="sign">
			<p class="name1">Registration</p></br>
			<p class="name2">System</p>
			<span class="num"><script type="text/javascript">
						var now=new Date();
						var hour=now.getHours();
						if(hour<10&&hour>8)document.write("第一节岗")
						else if(hour<12)document.write("第二节岗")
						else if(hour<13)document.write("午休时间")
						else if(hour<15)document.write("第三节岗")
						else if(hour<17)document.write("第四节岗")
						else if(hour<19)document.write("第五节岗")
						else if(hour<21)document.write("第六节岗")	
					</script></span>
			<div class="greatcircle">
				<h1>
				<!--上午8点到10点显示第一节岗8:30-9:30，
				上午10点到12点显示第一节岗10:00-11:30，
				下午12点到15点显示第一节岗13:30-15:00，
				下午15点到17点显示第一节岗15:30-17:00，
				下午17点到19点显示第一节岗17:30-19:00，
				下午19点到21点显示第一节岗19:30-21:00，-->
					<script type="text/javascript">
						var now=new Date();
						var hour=now.getHours();
						if(hour<10&&hour>8)document.write("8:00-9:30")
						else if(hour<12)document.write("10:00-11:30")
						else if(hour<13)document.write("午休时间")
						else if(hour<15)document.write("13:30-15:00")
						else if(hour<17)document.write("15:30-17:00")
						else if(hour<19)document.write("17:30-19:00")
						else if(hour<21)document.write("19:30-21:00")	
					</script>
				</h1>
				<div class="smallcircle" >
					<a onclick="signtime()">签到</a>
				</div>
				
			</div>
		</div>
		<div id="notice">
			<div class="announce">
				<div class="noticeboard">
					<h3></h3>
					<span >

					
					 	
					 </span>
				</div>
				
					<a href="announce.php">进入公告</a>
				
			</div>
			<div class="logo"></div>
		</div>
	</div>
	
	<div class="log">
		<p>Hello Joiners</p>
		<form action="http://www.myjoin.cn?r=sign/login/login" method="post">
			<h1>
				<!-- 用户名 -->
			</h1>
			<input type="text" class="yourname" name="username"></input><br>
			<h2>
				<!-- 密码 -->
			</h2>
			<input type="password" class="yourpw" name="password"></input><br>

			<input type="submit" name="submit" class="login" value=""></input>
		</form>
					<!-- 登录 -->
		

		
		<span>东北师范大学·学生就业指导中心·卓音工作室</span>
	</div>
	
	<div class="exit hide">
		<p>确定退出</p>
		<div class="btn">
			<a class="close" onclick="window.close();" href="doLogin.php?action=logout">确定</a>
			<a href="#" class="no">取消</a>
		</div>
	</div>
	<a href="javascript:;" id="ipshow"></a>
	<!-- ip失败按钮 -->
	<div class="ip hide">
		IP验证失败，请到工作室签到
	</div>
	<script type="text/javascript">
		window.onbeforeunload = function(event) { return confirm("确定离开此页面吗？"); }
	</script>
	</center>
</body>
</html>