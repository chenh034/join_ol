<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
	<title>Document</title>
</head>
<body>
    <?php 
		if(Yii::app()->user->hasFlash('del')){
			echo Yii::app()->user->getFlash('del');
		}
	 ?>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看轮播图</td>
		</tr>

		<tr>
			<td>ID</td>
			<td>简介</td>
			<td>状态</td>
			<td>操作</td>
		</tr>
		<?php if (count($Infos)) {?>
		    <?php foreach($Infos as $v): ?>
				<tr>
					<td><?php echo $v->id ?></td>
					<td><?php echo $v->info ?></td>
					<td>
					    <?php if ($v->is_show) {?>
					    	正在显示
					    <?php }else{?>
					        未显示
					    <?php } ?>
						
					</td>
					<td>
					    <?php if ($v->is_show) {?>
					    	[<a href="<?php echo $this->createUrl('show', array('id'=>$v->id)) ?>">取消显示</a>]
					    <?php }else{?>
					        [<a href="<?php echo $this->createUrl('show', array('id'=>$v->id)) ?>">显示</a>]
					    <?php } ?>
						[<a href="<?php echo $this->createUrl('edit', array('id'=>$v->id)) ?>">编辑</a>]
						[<a href="<?php echo $this->createUrl('del', array('id'=>$v->id)) ?>">删除</a>]
					</td>
				</tr>
			<?php endforeach ?>
	
		<?php }else{?>
		    <tr>
		    	<td>提示：</td>
		    	<td>暂时无轮播图</td>
		    </tr>

		<?php  }?>
		
		
	</table>
	<div class="page">
		<?php 
			$this->widget('CLinkPager', array(
				'header'	=>	'',
				'firstPageLabel'	=> '首页',
				'lastPageLabel'	=> '末页',
				'prevPageLabel'	=> '上一页',
				'nextPageLabel'	=> '下一页',
				'pages'			=> $pages,
				'maxButtonCount'=> 5,
				

				));
		 ?>
	</div>
</body>
</html>