<?php 

/**
* 
个人主页个人中心控制器

*/

class MyoneController extends Controller
{
	public $layout = 'application.modules.sign.views.layouts.conn';
	public function actionIndex()
	{
		
		$this->render('index');
		
	}
	
	//过滤器

	public function filters() {
              return array(
                  array('application.filters.SessionCheckFilter')
              );
          }
}
















 ?>