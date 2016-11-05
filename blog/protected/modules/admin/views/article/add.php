<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/ueditor.config.js"></script>
	<script type="text/javascript">
		// window.UEDITOR_HOME_URL = "<?php echo Yii::app()->request->baseUrl ?>/assets/admin/org/ueditor/";
		// window.onload = function(){
		// 	window.UEDITOR_CONFIG.initialFrameWidth = 900;
		// 	window.UEDITOR_CONFIG.initialFrameHeight = 600;
		// 	UE.getEditor('content');


		// }
	</script>
	<script type="text/javascript">
	    var editor;
		var _editor;
		$(function() {
		     editor = UE.getEditor('content', {
		         initialFrameWidth: 900,
		         initialFrameHeight: 600,
		     });


		    //重新实例化一个编辑器，防止在上面的editor编辑器中显示上传的图片或者文件
		    _editor = UE.getEditor('upload_ue');
		    _editor.ready(function () {
		        //设置编辑器不可用
		        _editor.setDisabled();
		        //隐藏编辑器，因为不会用到这个编辑器实例，所以要隐藏
		        _editor.hide();
		        //侦听图片上传
		        _editor.addListener('beforeInsertImage', function (t, arg) {
		        	var img_scr = '';
		        	$.each(arg,function(index,value){
		        		img_scr+=value.src;

		        	});
		            //将地址赋值给相应的input,只去第一张图片的路径
		            $("#picture").attr("value",img_scr);
		            //图片预览
		            $("#preview").attr("src", arg[0].src);
		        })
		        //侦听文件上传，取上传文件列表中第一个上传的文件的路径
		        _editor.addListener('afterUpfile', function (t, arg) {
		            $("#file").attr("value", _editor.options.filePath + arg[0].url);
		        })
		    });
		});    
		//弹出图片上传的对话框
		function upImage() {
		    var myImage = _editor.getDialog("insertimage");
		    myImage.open();
		}
		//弹出文件上传的对话框
		function upFiles() {
		    var myFiles = _editor.getDialog("attachment");
		    myFiles.open();
		}
	</script>


	<title>Document</title>
</head>
<body>

    
	<script type="text/plain" id="upload_ue"></script>  
	
	<?php 
		$form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('enctype'=>'multipart/form-data')));
	 ?>
	<table class="table">
		<tr >
			<td class="th" colspan="10">发表文章</td>
		</tr>
		<tr>
			<td>
			   <input type="text" id="picture" name="cover" />
			   <a href="javascript:void(0);" onclick="upImage();">上传图片</a>
            </td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($articleModel, 'title') ?></td>
			<td>
				<?php echo $form->textField($articleModel, 'title', array('maxlength'=>20)) ?>
				<?php echo $form->error($articleModel, 'title') ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($articleModel, 'is_top') ?></td>
			<td>
				<?php 
					echo $form->radioButtonList(
						$articleModel,
						'is_top',
						array(0=>'否',1=>'是'),
						array('separator'=>'&nbsp')
						)
				 ?>
			
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($articleModel, 'cid') ?></td>
			<td>
				<?php echo $form->dropDownList($articleModel,'cid', $cateArr) ?>
				<?php echo $form->error($articleModel, 'cid') ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($articleModel, 'thumb') ?></td>
			<td>
				<?php echo $form->fileField($articleModel, 'thumb') ?>
				<?php echo $form->error($articleModel, 'thumb') ?>
				请上传<span color="red"><strong>354*265px</strong></span>的图片
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($articleModel, 'info') ?></td>
			<td>
				<?php echo $form->textArea($articleModel, 'info', array('cols'=>50,'rows'=>10,'maxlength'=>100)) ?>
				<?php echo $form->error($articleModel, 'info') ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($articleModel, 'content') ?></td>
			<td>
		
				<?php echo $form->textArea($articleModel, 'content',array('id'=>'content')) ?>
				<?php echo $form->error($articleModel, 'content') ?>
			</td>
		</tr>
		<tr>
			<td colspan="10"><input type="submit" class="input_button" value="发布"/></td>
		</tr>
	</table>
	<?php $this->endWidget() ?>
</body>
</html>