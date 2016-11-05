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
		if(Yii::app()->user->hasFlash('addhoner')){
			echo "<script type='text/javascript'>
				        alert('添加成功');
				  </script>";
		}
		if(Yii::app()->user->hasFlash('del')){
			echo "<script type='text/javascript'>
				        alert('删除成功');
				  </script>";
		}
	 ?>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看荣誉和作品</td>
		</tr>
		<tr>
		  
				<td>编号</td>
				<td>标题</td>
				<td>内容</td>
				<td>类别</td>
				<td>操作</td>
				
		</tr>
		<?php foreach($honerInfo as $v): ?>
			<tr>
				<td><?php echo $v->id ?></td>
				<td><?php echo $v->title ?></td>
				<td><?php echo $v->content ?></td>
				<td><?php echo $v->type ?></td>
				<td>
					[<a href="<?php echo $this->createUrl('edit', array('id'=>$v->id)) ?>">编辑</a>]
					[<a href="<?php echo $this->createUrl('del', array('id'=>$v->id)) ?>">删除</a>]
				</td>
			</tr>
		<?php endforeach ?>
	</table>

</body>
</html>