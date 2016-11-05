<?php 

/**
* 公告管理控制器
*/
class AnnounceController extends Controller
{
	
	public function actionIndex(){
                $model = Announce::model();
        	$announceInfo = $model->findAll();

        	$this->render('index',array('announceInfo'=>$announceInfo));

	}


	public function actionAdd(){
                 $announceModel = new Announce();

                 if (isset($_POST['Announce'])) {
                 	$announceModel->attributes = $_POST['Announce'];
                        $announceModel->createtime = time();
                 	if ($announceModel->save()) {
                 		yii::app()->user->setFlash('add','添加成功');
                                $this->redirect(array('announce/index'));
                 	}else{
                        echo "添加失败";
                 	}
                 }


                 $this->render('add',array('announceModel'=>$announceModel));
	}


	public function actionEdit($id){
                 $model = Announce::model();
          
                 $announceInfo = $model->findByPk($id);

                 if (isset($_POST['Announce'])) {
                         $announceInfo->attributes = $_POST['Announce'];
                         if ($announceInfo->save()) {
                                 $this->redirect(array('announce/index'));
                         }else{
                                echo "修改失败";
                         }
                 }


                 $this->render('edit',array('announceInfo'=>$announceInfo));
        }


	public function actionDel($id){
                 $model = Announce::model();
                 if ($model->deleteByPk($id)) {
                        $this->redirect(array('announce/index'));
                 }else{
                        echo "删除失败";
                 }
	}



}

 ?>