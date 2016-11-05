<?php 

/**
* 
*/
class Academy extends CActiveRecord
{
	
	public static function model($className = __CLASS__){
		return parent::model($className);
	}


	public function tableName(){
		return "academy";
	}
   
   public function attributeLabels(){
		return array(
				'academy'	=> '学院',
				
			);
	}

	public function rules(){
		return array(
                array('academy','required','message'=>'学院不可为空')
			);
	}

}

 ?>