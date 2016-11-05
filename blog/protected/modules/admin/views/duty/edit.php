<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
	<title>Document</title>

	<script type="text/javascript">
      function delInput(fileIndex){  
      	// console.log(111);
        // var filediv = document.getElementById("upForms");  
        var input = document.getElementById(fileIndex);  
        input.remove();  
    }  

     
       $(function(){
              var Inputcount = 1;
              function addInput(data){
                  var box = $('#'+data);
                  var content = '';

                  var cs = '';
                  cs = data;
                  cs = cs.substr(4,3);
                  cs = cs.replace('-','');
                  cs +=Inputcount;
                  console.log(cs);
                  Inputcount++;  
                  content += 
                  "<p id='"+cs+"' ><input name=' "+data+'['+Inputcount+"]'" + 
                  "> <a "+'href='+"'javascript:delInput("+cs+ ")"+"'"+">删除</a></p>";
                  box.append(content);
                  
               }
              function delInput(){
                 $(this).parent().empty();

               }
	        $(".add").bind('click',{dataname:$(this).attr('name')}, function(data){
	        	var tip = $(this).attr('name');
	        	addInput(tip);
	        });
       });
    </script>
	<style type="text/css">
       input{
       	width: 80px;
       	margin-bottom: 6px;
       }
       td{
       	width: 130px;
       }
	</style>


</head>
<body>
	<form enctype="multipart/form-data" id="yw0" action="http://www.myjoin.cn/index.php?r=admin/duty/update" method="post">
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
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty1-1">				
            </td>

			<td>
			  <div id="duty2-1">
			  	
			  </div>
				  <input type="button" value="增加人员" class="add" name="duty2-1">
			</td>

			<td>
			  <div id="duty3-1">
			  
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty3-1">
			</td>

			<td>
			  <div id="duty4-1">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty4-1">
			</td>

			<td>
			  <div id="duty5-1">
			  
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty5-1">
			</td>

			<td>
			  <div id="duty6-1">
			  	
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty6-1">
			</td>

			<td>
			  <div id="duty7-1">
			
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty7-1"> 
			</td>
		</tr>

		<tr>
			<td>10:00-11:30</td>
			<td>
			  <div id="duty1-2">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty1-2">				
            </td>

			<td>
			  <div id="duty2-2">
			  	
			  </div>
				  <input type="button" value="增加人员" class="add" name="duty2-2">
			</td>

			<td>
			  <div id="duty3-2">
			  
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty3-2">
			</td>

			<td>
			  <div id="duty4-2">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty4-2">
			</td>

			<td>
			  <div id="duty5-2">
			  
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty5-2">
			</td>

			<td>
			  <div id="duty6-2">
			  	
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty6-2">
			</td>

			<td>
			  <div id="duty7-2">
			
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty7-2"> 
			</td>
		</tr>
		<tr>
			<td>13:30-15:00</td>
			<td>
			  <div id="duty1-3">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty1-3">				
            </td>

			<td>
			  <div id="duty2-3">
			  	
			  </div>
				  <input type="button" value="增加人员" class="add" name="duty2-3">
			</td>

			<td>
			  <div id="duty3-3">
			  
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty3-3">
			</td>

			<td>
			  <div id="duty4-3">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty4-3">
			</td>

			<td>
			  <div id="duty5-3">
			  
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty5-3">
			</td>

			<td>
			  <div id="duty6-3">
			  	
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty6-3">
			</td>

			<td>
			  <div id="duty7-3">
			
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty7-3"> 
			</td>
		</tr>
		<tr>
			<td>15:30-17:00</td>
			<td>
			  <div id="duty1-4">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty1-4">				
            </td>

			<td>
			  <div id="duty2-4">
			  	
			  </div>
				  <input type="button" value="增加人员" class="add" name="duty2-4">
			</td>

			<td>
			  <div id="duty3-4">
			  
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty3-4">
			</td>

			<td>
			  <div id="duty4-4">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty4-4">
			</td>

			<td>
			  <div id="duty5-4">
			  
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty5-4">
			</td>

			<td>
			  <div id="duty6-4">
			  	
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty6-4">
			</td>

			<td>
			  <div id="duty7-4">
			
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty7-4"> 
			</td>
		</tr>
		<tr>
			<td>17:30-19:00</td>
			<td>
			  <div id="duty1-5">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty1-5">				
            </td>

			<td>
			  <div id="duty2-5">
			  	
			  </div>
				  <input type="button" value="增加人员" class="add" name="duty2-5">
			</td>

			<td>
			  <div id="duty3-5">
			  
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty3-5">
			</td>

			<td>
			  <div id="duty4-5">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty4-5">
			</td>

			<td>
			  <div id="duty5-5">
			  
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty5-5">
			</td>

			<td>
			  <div id="duty6-5">
			  	
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty6-5">
			</td>

			<td>
			  <div id="duty7-5">
			
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty7-5"> 
			</td>
		</tr>
		<tr>
			<td>19:30-21:00</td>
		    <td>
			  <div id="duty1-6">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty1-6">				
            </td>

			<td>
			  <div id="duty2-6">
			  	
			  </div>
				  <input type="button" value="增加人员" class="add" name="duty2-6">
			</td>

			<td>
			  <div id="duty3-6">
			  
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty3-6">
			</td>

			<td>
			  <div id="duty4-6">
			  	
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty4-6">
			</td>

			<td>
			  <div id="duty5-6">
			  
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty5-6">
			</td>

			<td>
			  <div id="duty6-6">
			  	
			  </div>
		      <input type="button" value="增加人员" class="add" name="duty6-6">
			</td>

			<td>
			  <div id="duty7-6">
			
			  </div>
			  <input type="button" value="增加人员" class="add" name="duty7-6"> 
			</td>
		</tr>
		
	</table>
	<p><input type="submit"></p>
	</form>

	

</body>
</html>