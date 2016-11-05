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
			<td class="th" colspan="10">添加成员</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($joinersModel, 'jname') ?></td>
			<td>
				<?php echo $form->textField($joinersModel, 'jname') ?>
				<?php echo $form->error($joinersModel, 'jname') ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($joinersModel, 'gender') ?></td>
			<td>
				<?php echo $form->radioButtonList(
					    $joinersModel,
						'gender',
						array(0=>'男',1=>'女'),
						array('separator'=>'&nbsp')
				)?>
				<?php echo $form->error($joinersModel, 'gender') ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($joinersModel, 'bunch_id') ?></td>
			<td>
				<?php echo $form->dropDownList($joinersModel, 'bunch_id',$bunch) ?>
				<?php echo $form->error($joinersModel, 'bunch_id') ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($joinersModel, 'grade_id') ?></td>
			<td>
				<?php echo $form->dropDownList($joinersModel, 'grade_id',$grade) ?>
				<?php echo $form->error($joinersModel, 'grade_id') ?>
			</td>
		</tr>

        <tr>
			<td><?php echo $form->labelEx($joinersModel, 'xid') ?></td>
			<td>
				<?php echo $form->dropDownList($joinersModel, 'xid',$academyInfo) ?>
				<?php echo $form->error($joinersModel, 'xid') ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $form->labelEx($joinersModel, 'thumb') ?></td>
			<td>
				<?php echo $form->fileField($joinersModel, 'thumb') ?>
				<?php echo $form->error($joinersModel, 'thumb') ?>
				请上传<span color="red"><strong>115*155px</strong></span>的图片！否则头像变形人家不管的啦= =
			</td>
		</tr>



		<tr>
			<td colspan="10"><input type="submit" value="添加" class="input_button"/></td>
		</tr>
	</table>
	<?php $this->endWidget() ?>

</body>
</html>