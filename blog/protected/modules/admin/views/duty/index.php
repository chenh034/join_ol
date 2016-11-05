<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
	<title>Document</title>


	<style type="text/css">
       
	</style>


</head>
<body>
	<table class="table" align="center">
	   <tr>
			<td></td>
			<td>周一</td>
			<td>周二</td>
			<td>周三</td>
			<td>周四</td>
			<td>周五</td>
			<td>周六</td>
			<td>周日</td>
		</tr>
		<tr>
			<td>8:00-9:30</td>
			<td>
			  <div id="duty1-1">
			    <?php if ($Infos['duty1-1']): ?>
			    	<?php foreach ($Infos['duty1-1'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty1-1')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			   
			  	
			  </div>				
            </td>

			<td>
			  <div id="duty2-1">
			    <?php if ($Infos['duty2-1']): ?>
			    	<?php foreach ($Infos['duty2-1'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty2-1')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>

			</td>

			<td>
			  <div id="duty3-1">
			     <?php if ($Infos['duty3-1']): ?>
			     	<?php foreach ($Infos['duty3-1'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty3-1')); ?>">清空本节岗</a>]		
				    	

				    	
				    			     	
			     <?php endif ?>
			  
			  </div>
			</td>

			<td>
			  <div id="duty4-1">
			    <?php if ($Infos['duty4-1']): ?>
				    <?php foreach ($Infos['duty4-1'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty4-1')); ?>">清空本节岗</a>]		
				    	

				    	
				    
			    <?php endif ?>
			  	
			  </div>
			</td>

			<td>
			  <div id="duty5-1">
			    <?php if ($Infos['duty5-1']): ?>
			    	<?php foreach ($Infos['duty5-1'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty5-1')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  
			  </div>
		
			</td>

			<td>
			  <div id="duty6-1">
			    <?php if ($Infos['duty6-1']): ?>
			    	<?php foreach ($Infos['duty6-1'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty6-1')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>
		
			</td>

			<td>
			  <div id="duty7-1">
			    <?php if ($Infos['duty7-1']): ?>
			    	<?php foreach ($Infos['duty7-1'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty7-1')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			
			  </div> 
			</td>
		</tr>

		<tr>
			<td>10:00-11:30</td>
			<td>
			  <div id="duty1-2">
			    <?php if ($Infos['duty1-2']): ?>
			    	<?php foreach ($Infos['duty1-2'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty1-2')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			   
			  	
			  </div>				
            </td>

			<td>
			  <div id="duty2-2">
			    <?php if ($Infos['duty2-2']): ?>
			    	<?php foreach ($Infos['duty2-2'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty2-2')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>

			</td>

			<td>
			  <div id="duty3-2">
			     <?php if ($Infos['duty3-2']): ?>
			     	<?php foreach ($Infos['duty3-2'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty3-2')); ?>">清空本节岗</a>]		
				    	

				    	
				    			     	
			     <?php endif ?>
			  
			  </div>
			</td>

			<td>
			  <div id="duty4-2">
			    <?php if ($Infos['duty4-2']): ?>
				    <?php foreach ($Infos['duty4-2'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty4-2')); ?>">清空本节岗</a>]		
				    	

				    	
				    
			    <?php endif ?>
			  	
			  </div>
			</td>

			<td>
			  <div id="duty5-2">
			    <?php if ($Infos['duty5-2']): ?>
			    	<?php foreach ($Infos['duty5-2'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty5-2')); ?>">清空本节岗</a>]
				    	
				    	
				    <?php endif ?>
			  
			  </div>
		
			</td>

			<td>
			  <div id="duty6-2">
			    <?php if ($Infos['duty6-2']): ?>
			    	<?php foreach ($Infos['duty6-2'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				</li>
			<?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty6-2')); ?>">清空本节岗删除</a>]
				
				    	</li>
				    	

			    	
			    <?php endif ?>
			  	
			  </div>
		
			</td>

			<td>
			  <div id="duty7-2">
			    <?php if ($Infos['duty7-2']): ?>
			    	<?php foreach ($Infos['duty7-2'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty7-2')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			
			  </div> 
			</td>
		</tr>
		<tr>
			<td>13:30-15:00</td>
			<td>
			  <div id="duty1-3">
			    <?php if ($Infos['duty1-3']): ?>
			    	<?php foreach ($Infos['duty1-3'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty1-3')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			   
			  	
			  </div>				
            </td>

			<td>
			  <div id="duty2-3">
			    <?php if ($Infos['duty2-3']): ?>
			    	<?php foreach ($Infos['duty2-3'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty2-3')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>

			</td>

			<td>
			  <div id="duty3-3">
			     <?php if ($Infos['duty3-3']): ?>
			     	<?php foreach ($Infos['duty3-3'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty3-3')); ?>">清空本节岗</a>]		
				    	

				    	
				    			     	
			     <?php endif ?>
			  
			  </div>
			</td>

			<td>
			  <div id="duty4-3">
			    <?php if ($Infos['duty4-3']): ?>
				    <?php foreach ($Infos['duty4-3'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty4-3')); ?>">清空本节岗</a>]		
				    	

				    	
				    
			    <?php endif ?>
			  	
			  </div>
			</td>

			<td>
			  <div id="duty5-3">
			    <?php if ($Infos['duty5-3']): ?>
			    	<?php foreach ($Infos['duty5-3'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty5-3')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  
			  </div>
		
			</td>

			<td>
			  <div id="duty6-3">
			    <?php if ($Infos['duty6-3']): ?>
			    	<?php foreach ($Infos['duty6-3'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty6-3')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>
		
			</td>

			<td>
			  <div id="duty7-3">
			    <?php if ($Infos['duty7-3']): ?>
			    	<?php foreach ($Infos['duty7-3'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty7-3')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			
			  </div> 
			</td>
		</tr>
		<tr>
			<td>15:30-17:00</td>
			<td>
			  <div id="duty1-4">
			    <?php if ($Infos['duty1-4']): ?>
			    	<?php foreach ($Infos['duty1-4'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty1-4')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			   
			  	
			  </div>				
            </td>

			<td>
			  <div id="duty2-4">
			    <?php if ($Infos['duty2-4']): ?>
			    	<?php foreach ($Infos['duty2-4'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty2-4')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>

			</td>

			<td>
			  <div id="duty3-4">
			     <?php if ($Infos['duty3-4']): ?>
			     	<?php foreach ($Infos['duty3-4'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty3-4')); ?>">清空本节岗</a>]		
				    	

				    	
				    			     	
			     <?php endif ?>
			  
			  </div>
			</td>

			<td>
			  <div id="duty4-4">
			    <?php if ($Infos['duty4-4']): ?>
				    <?php foreach ($Infos['duty4-4'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty4-4')); ?>">清空本节岗</a>]		
				    	

				    	
				    
			    <?php endif ?>
			  	
			  </div>
			</td>

			<td>
			  <div id="duty5-4">
			    <?php if ($Infos['duty5-4']): ?>
			    	<?php foreach ($Infos['duty5-4'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty5-4')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  
			  </div>
		
			</td>

			<td>
			  <div id="duty6-4">
			    <?php if ($Infos['duty6-4']): ?>
			    	<?php foreach ($Infos['duty6-4'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty6-4')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>
		
			</td>

			<td>
			  <div id="duty7-4">
			    <?php if ($Infos['duty7-4']): ?>
			    	<?php foreach ($Infos['duty7-4'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty7-4')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			
			  </div> 
			</td>
		</tr>
		<tr>
			<td>17:30-19:00</td>
			<td>
			  <div id="duty1-5">
			    <?php if ($Infos['duty1-5']): ?>
			    	<?php foreach ($Infos['duty1-5'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty1-5')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			   
			  	
			  </div>				
            </td>

			<td>
			  <div id="duty2-5">
			    <?php if ($Infos['duty2-5']): ?>
			    	<?php foreach ($Infos['duty2-5'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty2-5')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>

			</td>

			<td>
			  <div id="duty3-5">
			     <?php if ($Infos['duty3-5']): ?>
			     	<?php foreach ($Infos['duty3-5'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty3-5')); ?>">清空本节岗</a>]		
				    	

				    	
				    			     	
			     <?php endif ?>
			  
			  </div>
			</td>

			<td>
			  <div id="duty4-5">
			    <?php if ($Infos['duty4-5']): ?>
				    <?php foreach ($Infos['duty4-5'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty4-5')); ?>">清空本节岗</a>]		
				    	

				    	
				    
			    <?php endif ?>
			  	
			  </div>
			</td>

			<td>
			  <div id="duty5-5">
			    <?php if ($Infos['duty5-5']): ?>
			    	<?php foreach ($Infos['duty5-5'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty5-5')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  
			  </div>
		
			</td>

			<td>
			  <div id="duty6-5">
			    <?php if ($Infos['duty6-5']): ?>
			    	<?php foreach ($Infos['duty6-5'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty6-5')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>
		
			</td>

			<td>
			  <div id="duty7-5">
			    <?php if ($Infos['duty7-5']): ?>
			    	<?php foreach ($Infos['duty7-5'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty7-5')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			
			  </div> 
			</td>
		</tr>
		<tr>
			<td>19:30-21:00</td>
		    <td>
			  <div id="duty1-6">
			    <?php if ($Infos['duty1-6']): ?>
			    	<?php foreach ($Infos['duty1-6'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty1-6')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			   
			  	
			  </div>				
            </td>

			<td>
			  <div id="duty2-6">
			    <?php if ($Infos['duty2-6']): ?>
			    	<?php foreach ($Infos['duty2-6'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty2-6')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  	
			  </div>

			</td>

			<td>
			  <div id="duty3-6">
			     <?php if ($Infos['duty3-6']): ?>
			     	<?php foreach ($Infos['duty3-6'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty3-6')); ?>">清空本节岗</a>]		
				    	

				    	
				    			     	
			     <?php endif ?>
			  
			  </div>
			</td>

			<td>
			  <div id="duty4-6">
			    <?php if ($Infos['duty4-6']): ?>
				    <?php foreach ($Infos['duty4-6'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty4-6')); ?>">清空本节岗</a>]		
				    	

				    	
				    
			    <?php endif ?>
			  	
			  </div>
			</td>

			<td>
			  <div id="duty5-6">
			    <?php if ($Infos['duty5-6']): ?>
			    	<?php foreach ($Infos['duty5-6'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    	</li>
				    <?php endforeach ?>
				    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty5-6')); ?>">清空本节岗</a>]		
				    	

				    	
				    			    	
			    <?php endif ?>
			  
			  </div>
		
			</td>

			<td>
			  <div id="duty6-6">
			    <?php if ($Infos['duty6-6']): ?>
			    	<?php foreach ($Infos['duty6-6'] as $key => $value): ?>
				    	<li>
						<?php echo $value; ?>
				    	</li>	
     			        <?php endforeach ?>
		    		[<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty6-6')); ?>">清空本节岗</a>]
				    		    
			    	
			    <?php endif ?>
			  	
			  </div>
		
			</td>

			<td>
			  <div id="duty7-6">
			    <?php if ($Infos['duty7-6']): ?>
			    	<?php foreach ($Infos['duty7-6'] as $key => $value): ?>
				    	<li>
				    		<?php echo $value; ?>
				    		
				    	</li>
								
				    	
				    <?php endforeach ?>
			    [<a href="<?php echo $this->createUrl('del', array('name'=>$value,'time'=>'duty7-6')); ?>">清空本节岗</a>]	
			    <?php endif ?>
				
			  </div> 
			</td>
		</tr>
		
	</table>

	

</body>
</html>