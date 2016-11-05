<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/ueditor.config.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL = "<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/";
		window.onload = function(){
			window.UEDITOR_CONFIG.initialFrameWidth = 900;
			window.UEDITOR_CONFIG.initialFrameHeight = 600;
			UE.getEditor('content');


		}
	</script>
	<title>Document</title>
	<style type="text/css">
		span{
			color: #f00;
		}
	</style>
</head>
<body>
	<?php $form = $this->beginWidget('CActiveForm',array(
		'enableClientValidation'=> true,
		'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		'clientOptions' => array(
				'validateOnsubmit'	=> true
			),
	)) ?>
	<table class="table">
		<tr>
			<td><?php echo $form->labelEx($announceModel, 'title') ?></td>
			<td>
				<?php echo $form->textField($announceModel, 'title') ?>
				<?php echo $form->error($announceModel, 'title') ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($announceModel, 'content') ?></td>
			<td>
				<?php echo $form->textArea($announceModel, 'content',array('id'=>'content')) ?>
				<?php echo $form->error($announceModel, 'content') ?>
			</td>
		</tr>



		<tr>
			<td colspan="10"><input type="submit" value="添加" class="input_button"/></td>
		</tr>
	</table>
	<?php $this->endWidget() ?>

</body>
</html>