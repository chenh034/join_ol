<?php 
/**
* 
*/
class AboutController extends Controller
{
	
	public function actionIndex(){

        $sql = "SELECT id FROM {{honer}} WHERE type='0'";
      
        	$aboutInfo = Honer::model()->findAllBySql($sql);
        	$total = count($aboutInfo);


		$this->render('index', array('total'=>$total));
	}

	public function actionAjax($page){
    	$offset = $page*4;
    	$sql = "SELECT id,thumb FROM {{honer}} WHERE type='0' order by id desc limit $offset,3";
    	
		$compoInfo = Honer::model()->findAllBySql($sql);

		$info = CJSON::encode($compoInfo);
		print_r($info);

    }

	

}


 ?>