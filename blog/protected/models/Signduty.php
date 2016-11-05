<?php

// 值岗模型
class Signduty extends CActiveRecord{
	

	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{signduty}}";
	}


	
	


	

}


