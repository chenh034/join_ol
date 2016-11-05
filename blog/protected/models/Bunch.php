<?php 
class Bunch extends CActiveRecord{


	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{bunch}}";
	}

	public function attributeLabels(){
		return array(
			'name'	=> '部门名称'

			);
	}

	public function rules(){
		return array(

			array('name', 'required', 'message'=>'部门必填')
			);
	}

}