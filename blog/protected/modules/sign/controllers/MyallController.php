<?php 

/**
* 
个人主页全体值岗控制器

*/

class MyallController extends Controller
{
	public $layout = 'application.modules.sign.views.layouts.conn';
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

	
	//过滤器

	public function filters() {
              return array(
                  array('application.filters.SessionCheckFilter')
              );
          }
}
















 ?>