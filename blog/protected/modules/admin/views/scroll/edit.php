﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL = "<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/";
		window.onload = function(){
			window.UEDITOR_CONFIG.initialFrameWidth = 900;
			window.UEDITOR_CONFIG.initialFrameHeight = 600;
			UE.getEditor('content');
		}

	</script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/ueditor.config.js"></script>
	<title>Document</title>
</head>
<body>
	
	<?php 
		$form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('enctype'=>'multipart/form-data')));
	 ?>
	<table class="table">
		<tr >
			<td class="th" colspan="10">发表文章</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($Infos, 'url') ?></td>
			<td>
				<?php echo $form->textArea($Infos, 'url', array('cols'=>50,'rows'=>1)) ?>
				<?php echo $form->error($Infos, 'url') ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($Infos, 'img_src') ?></td>
			<td>
				<?php echo $form->fileField($Infos, 'img_src') ?>
				<?php echo $form->error($Infos, 'img_src') ?>
				请上传<span color="red"><strong>1423*400px</strong></span>的图片
			</td>
		</tr>
		<tr>
			<td>原轮播图</td>
			<td><img width="380" height="150" src="<?php echo Yii::app()->request->baseUrl ?>/uploads/scroll/<?php echo $Infos->img_src ?>"></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($Infos, 'info') ?></td>
			<td>
				<?php echo $form->textArea($Infos, 'info', array('cols'=>50,'rows'=>10,'maxlength'=>100)) ?>
				<?php echo $form->error($Infos, 'info') ?>
			</td>
		</tr>
		<tr>
			<td colspan="10"><input type="submit" class="input_button" value="发布"/></td>
		</tr>
	</table>
	<?php $this->endWidget() ?>
</body>
</html>