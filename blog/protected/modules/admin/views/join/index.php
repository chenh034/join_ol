<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/jquery-1.7.2.min.js">
	</script>
	<title>Document</title>
</head>
<body>
	<?php 
		if(Yii::app()->user->hasFlash('add')){
			echo "<script type='text/javascript'>
				        alert('添加成功');
				  </script>";
		}
	 ?>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看成员</td>
		</tr>
		<tr>
		    <?php $form = $this->beginWidget('CActiveForm',array(
				'enableClientValidation'=> true,
				// 'action'=> Yii::app()->request->baseUrl.'/index.php?r=admin/join/classify',
				'clientOptions' => array(
				'validateOnsubmit'	=> true
			),
	       )) ?>
				<td>编号</td>
				<td>姓名 &nbsp;&nbsp;&nbsp;
                    <?php echo $form->textField($classify,'jname') ?>
                    <input type="submit" value="查询" />
				</td>
				<td>性别</td>
				<td><?php echo $form->labelEx($classify, 'bunch_id') ?> &nbsp; 
				    <?php echo $form->dropDownList($classify, 'bunch_id',$bunch) ?>
				     <?php echo $form->error($classify, 'bunch_id') ?>
				</td>
				<td><?php echo $form->labelEx($classify, 'xid') ?> &nbsp; 
				  <?php echo $form->dropDownList($classify, 'xid',$academyInfo) ?>
				  <?php echo $form->error($classify, 'xid') ?>
				</td>
            <?php $this->endWidget() ?>
		</tr>
        
        <table id="ajax" class="table">
		<?php foreach($joinersInfo as $v): ?>
			<tr>
				<td><?php echo $v->id ?></td>
				<td><?php echo $v->jname ?></td>
				<td><?php echo $v->gender ?></td>
				<td><?php echo $v['bunch_name']->name ?></td>
				<td><?php echo $v['academy']->academy ?></td>
				<td><?php echo $v['grade_name']->name ?></td>
				<td>
					[<a href="<?php echo $this->createUrl('edit', array('id'=>$v->id)) ?>">编辑</a>]
					[<a href="<?php echo $this->createUrl('del', array('id'=>$v->id)) ?>">删除</a>]
				</td>
			</tr>
		<?php endforeach ?>
		</table>
	</table>

	<!-- <table id="ajax">

	</table> -->

	<script type="text/javascript">
        $("select").change(function(){
        	$.ajax({
        		type: "post",
        		url: "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=admin/join/ajax",
        		data: {bunch_id:$("#Joiners_bunch_id").val() , xid:$("#Joiners_xid").val()},
        		dataType: "json",
        		success:function(data){
        			var content;
        			$.each(data,function(n,value){
        				$("#ajax").empty();
        				
                        content += '<tr>' + '<td>'+ value.id+'</td>'
                                  +'<td>'+value.jname+'</td>'+'<td>'+value.gender+'</td>'
                                  +'<td>'+value.bunch_id+'</td>' 
                                  +'<td>'+value.xid+ '</td>'
                                  +'<td>'+value.grade_id+'</td>'
                                  +'<td>'
                                  +"[<a href=<?php echo Yii::app()->request->baseUrl ?>/index.php?r=admin/join/edit&id=" +value.id+ " >编辑</a>]"
                                  +"[<a href=<?php echo Yii::app()->request->baseUrl ?>/index.php?r=admin/join/del&id= " +value.id+ ">删除</a>]"
                                  +'</td>' + '<tr/>' ;
        			});
        			$("#ajax").html(content);
        		}
        	});
        })
	</script>
</body>
</html>