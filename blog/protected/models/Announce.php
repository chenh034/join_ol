<?php 
class Announce extends CActiveRecord{


	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{Announce}}";
	}

	public function attributeLabels(){
		return array(
			// 'cname'	=> '栏目名称'
			'title' => '公告标题',
			'content' => '公告内容'

			);
	}

	public function rules(){
		return array(

			array('title', 'required', 'message'=>'标题必填'),
			array('content', 'required', 'message'=>'内容必填'),
			);
	}

}