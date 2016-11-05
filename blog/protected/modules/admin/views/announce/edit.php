<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
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
			<td><?php echo $form->labelEx($announceInfo, 'title') ?></td>
			<td>
				<?php echo $form->textField($announceInfo, 'title') ?>
				<?php echo $form->error($announceInfo, 'title') ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($announceInfo, 'content') ?></td>
			<td>
				<?php echo $form->textArea($announceInfo, 'content',array('cols'=>50,'rows'=>10)) ?>
				<?php echo $form->error($announceInfo, 'content') ?>
			</td>
		</tr>



		<tr>
			<td colspan="10"><input type="submit" value="修改" class="input_button"/></td>
		</tr>
	</table>
	<?php $this->endWidget() ?>

</body>
</html>