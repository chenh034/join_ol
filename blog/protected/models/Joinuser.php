<?php

// 前台用户模型
class Joinuser extends CActiveRecord{
	

	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{signuser}}";
	}


	
	


	

}
















