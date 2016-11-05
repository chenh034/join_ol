<?php 
/**
* 作品模块控制�?
*/
class CompoController extends Controller
{
	

      public function actionIndex(){

        	//$honerModel = Honer::model();
   
		//$total = $honerModel->count();

        
       		$sql = "SELECT id FROM {{honer}} WHERE type='1'";
      
        	$compoInfo = Honer::model()->findAllBySql($sql);
        	$total = count($compoInfo);
   


		$this->render('index',array('total'=>$total));


      }

      public function actionAjax($page){
    	$offset = $page*4;
    	$sql = "SELECT id,title,thumb FROM {{honer}} WHERE type='1' order by id desc limit $offset,4";
    	
		$compoInfo = Honer::model()->findAllBySql($sql);

		$info = CJSON::encode($compoInfo);
		print_r($info);

    }


}


 ?>