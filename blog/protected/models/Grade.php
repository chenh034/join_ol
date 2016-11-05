<?php 
class Grade extends CActiveRecord{


	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{grade}}";
	}

	public function attributeLabels(){
		return array(
			'name'	=> '年级名称'

			);
	}

	public function rules(){
		return array(
			array('name', 'required', 'message'=>'名称必填')
			);
	}

}