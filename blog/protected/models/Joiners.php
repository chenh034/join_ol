<?php 

/**
* 
*/
class Joiners extends CActiveRecord
{
	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "joiners";
	}
	
	public function attributeLabels(){
		return array(                 
                 'jname'=>'姓名',
                 'gender'=>'性别',
                 'bunch_id'=>'部门',
                 'xid'=>'学院',
                 'grade_id'=>'年级',
                 'thumb'=>'头像',
			);
	}


	public function rules(){
		return array(
                array('jname','required','message'=>'姓名必填'),
                array('gender','required','message'=>'性别必填'),
                array('bunch_id','required','message'=>'部门必填'),
                array('bunch_id','bselect'),
                array('xid','required','message'=>'学院必填'),
                array('xid','xselect'),
                array('grade_id','required','message'=>'年级必填'),
                // array('thumb','file','types'=>'jpg,gif,png,jpeg', 'message'=>'没有上传或者类型不符')
                array('thumb','safe'),
			);
	}

	public function bselect(){
		if ($this->bunch_id=='0') {
			$this->addError('bunch_id','请选择部门');
		}
	}

	public function xselect(){
		if ($this->xid<=0) {
			$this->addError('xid','请选择学院');
		}
	}


	public function relations(){
		return array(
			'academy'	=> array(self::BELONGS_TO,'Academy', 'xid'),
			'bunch_name'	=> array(self::BELONGS_TO,'Bunch', 'bunch_id'),
			'grade_name'	=> array(self::BELONGS_TO,'Grade', 'grade_id')
			);
	}

}


 ?>