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
			<td class="th" colspan="10">添加荣誉</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($honerModel, 'title') ?></td>
			<td>
				<?php echo $form->textField($honerModel, 'title') ?>
				<?php echo $form->error($honerModel, 'title') ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($honerModel, 'type') ?></td>
			<td>
				<?php echo $form->radioButtonList(
					    $honerModel,
						'type',
						array(0=>'荣誉',1=>'作品'),
						array('separator'=>'&nbsp')
				)?>
				<?php echo $form->error($honerModel, 'type') ?>
			</td>
		</tr>

		

		<tr>
			<td><?php echo $form->labelEx($honerModel, 'thumb') ?></td>
			<td>
				<?php echo $form->fileField($honerModel, 'thumb') ?>
				<?php echo $form->error($honerModel, 'thumb') ?>
				请上传<span color="red"><strong>412*282px</strong></span>的图片
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($honerModel, 'content') ?></td>
			<td>
				<?php echo $form->textArea($honerModel, 'content',array('cols'=>50,'rows'=>10))?>
				<?php echo $form->error($honerModel, 'content') ?>
			</td>
		</tr>



		<tr>
			<td colspan="10"><input type="submit" value="添加" class="input_button"/></td>
		</tr>
	</table>
	<?php $this->endWidget() ?>

</body>
</html>