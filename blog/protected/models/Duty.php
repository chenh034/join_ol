<?php 
class Duty extends CActiveRecord{


	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{duty}}";
	}

	public function attributeLabels(){
		return array(
			'name'	=> '人员姓名'

			);
	}

	public function rules(){
		return array(

			array('name', 'required', 'message'=>'姓名必填')
			);
	}

}