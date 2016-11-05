<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
	<title>Document</title>
</head>
<body>
	<?php 
		if(Yii::app()->user->hasFlash('hasJoiner')){
			echo Yii::app()->user->getFlash('hasJoiner');
		}
	 ?>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看栏目</td>
		</tr>
		<tr>
			<td>XID</td>
			<td>学院名称</td>
			<td>操作</td>
		</tr>

		<?php foreach($academyInfo as $v): ?>
			<tr>
				<td><?php echo $v->xid ?></td>
				<td><?php echo $v->academy ?></td>
				<td>
					[<a href="<?php echo $this->createUrl('edit', array('xid'=>$v->xid)) ?>">编辑</a>]
					[<a href="<?php echo $this->createUrl('del', array('xid'=>$v->xid)) ?>">删除</a>]
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>