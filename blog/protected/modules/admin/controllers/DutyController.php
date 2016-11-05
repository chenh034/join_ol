<?php 

/**
* 
*/
class DutyController extends Controller
{
	
	public function actionIndex(){

		$dutyModel = Duty::model();
		$duty1_1 = $dutyModel->findByAttributes(array('time'=>'duty1-1'));



        $dutyInfo = $dutyModel->findAll();

        foreach ($dutyInfo as $key => $value) {
        	// 
        	$names = explode(',', $value->name);
        	$Infos[$value->time] = $names;
        }

        $this->render('index',array('Infos'=>$Infos));




	}


	public function actionEdit(){

		$this->render('edit');
	}

	public function actionUpdate(){
		$dutyModel = new Duty();

		foreach ($_POST as $key => $value) {
			switch ($key) {
				case 'duty1-1':
					
					$this->insert($_POST[$key],$key);

					break;
				case 'duty2-1':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty3-1':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty4-1':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty5-1':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty6-1':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty7-1':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty1-2':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty2-2':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty3-2':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty4-2':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty5-2':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty6-2':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty7-2':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty1-3':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty2-3':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty3-3':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty4-3':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty5-3':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty6-3':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty7-3':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty1-4':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty2-4':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty3-4':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty4-4':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty5-4':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty6-4':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty7-4':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty1-5':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty2-5':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty3-5':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty4-5':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty5-5':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty6-5':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty7-5':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty1-6':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty2-6':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty3-6':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty4-6':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty5-6':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty6-6':
					$this->insert($_POST[$key],$key);
					break;
				case 'duty7-6':
					$this->insert($_POST[$key],$key);
					break;
				

			}
		}
		$this->redirect(array('index'));
	}

	public function insert($data,$key){
		$name = implode(',', $data);
		$model = Duty::model();
		if ($dutyInfo = $model->findByAttributes(array('time'=>$key))) {
			
			$dutyInfo->name = $name;
			if ($dutyInfo->save()) {
				
			}else{
				echo "修改失败";die();
			}
		}else{
			$dutyModel = new Duty();
			$dutyModel->name = $name;
			$dutyModel->time = $key;
			if ($dutyModel->save()) {
				
			}else{
				echo "修改失败";die();
			}
		}

		
	}

	public function actionDel($name,$time){
		 $count = Duty::model()->deleteAll('time=:time',array(':time'=>$time)); 

		if($count>0){  
		  $this->redirect(array('index'));
		}else{  
		   echo "删除失败";  
		}  
	}

}


 ?>