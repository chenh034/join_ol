<?php 

/**
* 公告管理器
*/
class AnnounceController extends Controller
{
	public $layout = 'application.modules.sign.views.layouts.conn';
	public function actionIndex()
	{
		$sql = "SELECT * FROM {{announce}} order by id desc limit 0,7";
		$announceInfo = Announce::model()->findAllBySql($sql);
	  	$this->render('index',array('announceInfo' =>$announceInfo));
	}



	
	//过滤器

	public function filters() {
              return array(
                  array('application.filters.SessionCheckFilter')
              );
          }
          }

 ?>