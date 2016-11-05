<?php 
class BunchInfo extends CActiveRecord{


	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{bunch_info}}";
	}

	public function attributeLabels(){
		return array(
			'info'	=> '内容',
			'bunch_id'=>'所属部门'

			);
	}

	public function rules(){
		return array(

			array('info', 'required', 'message'=>'内容必填'),
			array('bunch_id','required','message'=>'所属部门不可为空')
			);
	}

	

	public function relations(){
		return array(
			'bunch_name'=> array(self::BELONGS_TO,'Bunch', 'bunch_id'),
			);
	}

}