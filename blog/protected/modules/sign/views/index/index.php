<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/style/index.css">
	<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/Jquery.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/proq.js"> </script>


	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/exit.js"></script>
	<script type="text/javascript" src="script/ip.js"></script>
	<asp:HiddenField ID="hidTime" runat="server" Value="5400" />


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
				<div id="timing">
					<span >

						<?php echo " <script type='text/javascript' language='javascript'>
   									    function show_cur_times(){
									    var timestamp = new Date().getTime();
									    var timestamp1 = timestamp - ";echo $in;echo ";

									    function   formatDate(now)   {     
									              var   hour=now.getHours()-8;  
									              var   minute=now.getMinutes();     
									              var   second=now.getSeconds();     
									              return  hour+':'+minute+':'+second;     
									              }     
									         
									              var d = new Date(timestamp1);
									              var e = formatDate(d);
									    document.getElementById('timing').innerHTML= e;
									    
									}setInterval('show_cur_times()',100);
									    </script>"		;
 ?>
					 	
					 </span>
				</div>
			</div>
		</div>
		<div id="notice">
			<div class="announce">
				<div class="noticeboard">
					<h3></h3>
					<span >

						<?php echo $username; ?>
					 	
					 </span>
				</div>
				
					<a href="<?php echo $this->createUrl('announce/index') ?>">进入公告</a>
				
			</div>
			<div class="logo"></div>
		</div>
	</div>
	
	</center>
</body>
