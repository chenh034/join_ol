<?php 

/**
* 
前台控制器

*/

class DefaultController extends Controller
{
	
	public $layout = 'application.modules.sign.views.layouts.conn';
	public function actionIndex()
	{
		$username=Yii::app()->session['username'];
		$did = Signduty::model()->find(
			array(
				'select' =>'did',
				'order' => 'did DESC',
				'limit' => 1,
				/*'condition' => 'did='.$did,*/ 
			));

		
		$id = $did['did'];
		$sql = "SELECT logintime FROM {{signduty}} WHERE did = $id ";
		$intime = Signduty::model()->findBySql($sql);
		$in = $intime['logintime']*1000-1000;

		$sql = "SELECT * FROM {{announce}} order by id desc limit 1";
		$announceInfo = Announce::model()->findAllBySql($sql);
		$data = array(
			'username' =>$username , 
			'in'=>$in ,
			'announceInfo' =>$announceInfo
			);
		$this->render('index',$data);
		// echo Yii::app()->request->baseUrl;die;
	}
	
	//过滤器

	public function filters() {
              return array(
                  array('application.filters.SessionCheckFilter')
              );
          }
}

