<head>
	<title>个人中心</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/style/my-all.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/Jquery.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/proq.js"> </script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/script/exit.js"></script>
	<script type="text/javascript" src="script/ip.js"></script>
	<link rel="shortcut icon" type="<?php echo Yii::app()->request->baseUrl ?>/assets/index/image/x-icon" href="favicon.ico" />  
</head>
<body>
<center>
	
    <div id="content">
      	<!-- <img class="my-logo" src="<?php //echo Yii::app()->request->baseUrl ?>/assets/index/img/my-img2.png" alt=""  /> -->
      	<div class="all-table">

	      	<table class="table" align="center">
			   <tr>
					<td class="first" style="width: 110px;"></td>
					<td class="first">周一</td>
					<td class="first">周二</td>
					<td class="first">周三</td>
					<td class="first">周四</td>
					<td class="first">周五</td>
					<td class="first">周六</td>
					<td class="first">周日</td>
				</tr>
				<tr>
					<td class="time">8:00-9:30</td>
					<td>
					  <div id="duty1-1">
					    <?php if ($Infos['duty1-1']): ?>
					    	<?php foreach ($Infos['duty1-1'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					   
					  	
					  </div>				
		            </td>

					<td>
					  <div id="duty2-1">
					    <?php if ($Infos['duty2-1']): ?>
					    	<?php foreach ($Infos['duty2-1'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>

					</td>

					<td>
					  <div id="duty3-1">
					     <?php if ($Infos['duty3-1']): ?>
					     	<?php foreach ($Infos['duty3-1'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			     	
					     <?php endif ?>
					  
					  </div>
					</td>

					<td>
					  <div id="duty4-1">
					    <?php if ($Infos['duty4-1']): ?>
						    <?php foreach ($Infos['duty4-1'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    
					    <?php endif ?>
					  	
					  </div>
					</td>

					<td>
					  <div id="duty5-1">
					    <?php if ($Infos['duty5-1']): ?>
					    	<?php foreach ($Infos['duty5-1'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  
					  </div>
				
					</td>

					<td>
					  <div id="duty6-1">
					    <?php if ($Infos['duty6-1']): ?>
					    	<?php foreach ($Infos['duty6-1'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>
				
					</td>

					<td>
					  <div id="duty7-1">
					    <?php if ($Infos['duty7-1']): ?>
					    	<?php foreach ($Infos['duty7-1'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					
					  </div> 
					</td>
				</tr>

				<tr>
					<td class="time">10:00-11:30</td>
					<td>
					  <div id="duty1-2">
					    <?php if ($Infos['duty1-2']): ?>
					    	<?php foreach ($Infos['duty1-2'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					   
					  	
					  </div>				
		            </td>

					<td>
					  <div id="duty2-2">
					    <?php if ($Infos['duty2-2']): ?>
					    	<?php foreach ($Infos['duty2-2'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>

					</td>

					<td>
					  <div id="duty3-2">
					     <?php if ($Infos['duty3-2']): ?>
					     	<?php foreach ($Infos['duty3-2'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			     	
					     <?php endif ?>
					  
					  </div>
					</td>

					<td>
					  <div id="duty4-2">
					    <?php if ($Infos['duty4-2']): ?>
						    <?php foreach ($Infos['duty4-2'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    
					    <?php endif ?>
					  	
					  </div>
					</td>

					<td>
					  <div id="duty5-2">
					    <?php if ($Infos['duty5-2']): ?>
					    	<?php foreach ($Infos['duty5-2'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>				    	
						    	
						    <?php endif ?>
					  
					  </div>
				
					</td>

					<td>
					  <div id="duty6-2">
					    <?php if ($Infos['duty6-2']): ?>
					    	<?php foreach ($Infos['duty6-2'] as $key => $value): ?>
						    
						    		<?php echo $value.","; ?>
							
							<?php endforeach ?>
 	
					    <?php endif ?>
					  	
					  </div>
				
					</td>

					<td>
					  <div id="duty7-2">
					    <?php if ($Infos['duty7-2']): ?>
					    	<?php foreach ($Infos['duty7-2'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
  			    	
					    <?php endif ?>
					
					  </div> 
					</td>
				</tr>
				<tr>
					<td class="time">13:30-15:00</td>
					<td>
					  <div id="duty1-3">
					    <?php if ($Infos['duty1-3']): ?>
					    	<?php foreach ($Infos['duty1-3'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
				    			    	
					    <?php endif ?>
					   
					  	
					  </div>				
		            </td>

					<td>
					  <div id="duty2-3">
					    <?php if ($Infos['duty2-3']): ?>
					    	<?php foreach ($Infos['duty2-3'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>

					</td>

					<td>
					  <div id="duty3-3">
					     <?php if ($Infos['duty3-3']): ?>
					     	<?php foreach ($Infos['duty3-3'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			     	
					     <?php endif ?>
					  
					  </div>
					</td>

					<td>
					  <div id="duty4-3">
					    <?php if ($Infos['duty4-3']): ?>
						    <?php foreach ($Infos['duty4-3'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    
					    <?php endif ?>
					  	
					  </div>
					</td>

					<td>
					  <div id="duty5-3">
					    <?php if ($Infos['duty5-3']): ?>
					    	<?php foreach ($Infos['duty5-3'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  
					  </div>
				
					</td>

					<td>
					  <div id="duty6-3">
					    <?php if ($Infos['duty6-3']): ?>
					    	<?php foreach ($Infos['duty6-3'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>
				
					</td>

					<td>
					  <div id="duty7-3">
					    <?php if ($Infos['duty7-3']): ?>
					    	<?php foreach ($Infos['duty7-3'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					
					  </div> 
					</td>
				</tr>
				<tr>
					<td class="time">15:30-17:00</td>
					<td>
					  <div id="duty1-4">
					    <?php if ($Infos['duty1-4']): ?>
					    	<?php foreach ($Infos['duty1-4'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					   
					  	
					  </div>				
		            </td>

					<td>
					  <div id="duty2-4">
					    <?php if ($Infos['duty2-4']): ?>
					    	<?php foreach ($Infos['duty2-4'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>

					</td>

					<td>
					  <div id="duty3-4">
					     <?php if ($Infos['duty3-4']): ?>
					     	<?php foreach ($Infos['duty3-4'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			     	
					     <?php endif ?>
					  
					  </div>
					</td>

					<td>
					  <div id="duty4-4">
					    <?php if ($Infos['duty4-4']): ?>
						    <?php foreach ($Infos['duty4-4'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    
					    <?php endif ?>
					  	
					  </div>
					</td>

					<td>
					  <div id="duty5-4">
					    <?php if ($Infos['duty5-4']): ?>
					    	<?php foreach ($Infos['duty5-4'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  
					  </div>
				
					</td>

					<td>
					  <div id="duty6-4">
					    <?php if ($Infos['duty6-4']): ?>
					    	<?php foreach ($Infos['duty6-4'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>
				
					</td>

					<td>
					  <div id="duty7-4">
					    <?php if ($Infos['duty7-4']): ?>
					    	<?php foreach ($Infos['duty7-4'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					
					  </div> 
					</td>
				</tr>
				<tr>
					<td class="time">17:30-19:00</td>
					<td>
					  <div id="duty1-5">
					    <?php if ($Infos['duty1-5']): ?>
					    	<?php foreach ($Infos['duty1-5'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					   
					  	
					  </div>				
		            </td>

					<td>
					  <div id="duty2-5">
					    <?php if ($Infos['duty2-5']): ?>
					    	<?php foreach ($Infos['duty2-5'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>

					</td>

					<td>
					  <div id="duty3-5">
					     <?php if ($Infos['duty3-5']): ?>
					     	<?php foreach ($Infos['duty3-5'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			     	
					     <?php endif ?>
					  
					  </div>
					</td>

					<td>
					  <div id="duty4-5">
					    <?php if ($Infos['duty4-5']): ?>
						    <?php foreach ($Infos['duty4-5'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    
					    <?php endif ?>
					  	
					  </div>
					</td>

					<td>
					  <div id="duty5-5">
					    <?php if ($Infos['duty5-5']): ?>
					    	<?php foreach ($Infos['duty5-5'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  
					  </div>
				
					</td>

					<td>
					  <div id="duty6-5">
					    <?php if ($Infos['duty6-5']): ?>
					    	<?php foreach ($Infos['duty6-5'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>
				
					</td>

					<td>
					  <div id="duty7-5">
					    <?php if ($Infos['duty7-5']): ?>
					    	<?php foreach ($Infos['duty7-5'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					
					  </div> 
					</td>
				</tr>
				<tr>
					<td class="time">19:30-21:00</td>
				    <td>
					  <div id="duty1-6">
					    <?php if ($Infos['duty1-6']): ?>
					    	<?php foreach ($Infos['duty1-6'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					   
					  	
					  </div>				
		            </td>

					<td>
					  <div id="duty2-6">
					    <?php if ($Infos['duty2-6']): ?>
					    	<?php foreach ($Infos['duty2-6'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  	
					  </div>

					</td>

					<td>
					  <div id="duty3-6">
					     <?php if ($Infos['duty3-6']): ?>
					     	<?php foreach ($Infos['duty3-6'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			     	
					     <?php endif ?>
					  
					  </div>
					</td>

					<td>
					  <div id="duty4-6">
					    <?php if ($Infos['duty4-6']): ?>
						    <?php foreach ($Infos['duty4-6'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    
					    <?php endif ?>
					  	
					  </div>
					</td>

					<td>
					  <div id="duty5-6">
					    <?php if ($Infos['duty5-6']): ?>
					    	<?php foreach ($Infos['duty5-6'] as $key => $value): ?>
						    	
						    		<?php echo $value.","; ?>
						    	
						    <?php endforeach ?>
						    	
						    	

						    	
						    			    	
					    <?php endif ?>
					  
					  </div>
				
					</td>

					<td>
					  <div id="duty6-6">
					    <?php if ($Infos['duty6-6']): ?>
					    	<?php foreach ($Infos['duty6-6'] as $key => $value): ?>
				    			
								<?php echo $value.","; ?>
				    			
     			        		<?php endforeach ?>							    		  

  
					    	
					    <?php endif ?>
					  	
					  </div>
				
					</td>

					<td>
					  <div id="duty7-6">
					    <?php if ($Infos['duty7-6']): ?>
					    	<?php foreach ($Infos['duty7-6'] as $key => $value): ?>
						    	<?php echo $value.","; ?>
										
						    	
						    <?php endforeach ?>
					  
					    <?php endif ?>
						
					  </div> 
					</td>
				</tr>
				
			</table>	
      	</div>	
    </div>

	
	
	</center>
	<!-- 显示居中 -->
</body>
</html>