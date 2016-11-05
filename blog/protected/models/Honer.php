<?php 
class Honer extends CActiveRecord{


	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{honer}}";
	}

	public function attributeLabels(){
		return array(
			'title'	=> '标题',
			'thumb'=> '图片',
			'content'=>'内容介绍',
			'type' =>'类别'

			);
	}

	public function rules(){
		return array(

			array('title', 'required', 'message'=>'标题必填'),
			array('content', 'required', 'message'=>'内容必填'),
			array('type', 'required', 'message'=>'类别必填'),
			array('thumb', 'safe'),
			);
	}

}