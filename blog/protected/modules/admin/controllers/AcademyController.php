<?php 

/**
* 
*/
class AcademyController extends Controller
{
	
	public function actionAdd(){
		$academyModel = new Academy();


		if(isset($_POST['Academy'])){

			$academyModel->attributes = $_POST['Academy'];

			if($academyModel->save()){
				$this->redirect(array('index'));
			}

		}

		$this->render('add', array('academyModel'=>$academyModel));
	}

	public function actionIndex(){
		$academyModel = Academy::model();
		$sql = "SELECT xid,academy FROM academy";
		$academyInfo = $academyModel->findAllBySql($sql);

		$this->render('index', array('academyInfo'=>$academyInfo));
	}

	public function actionEdit($xid){
		$academyModel = Academy::model();

		$academyInfo = $academyModel->findByPk($xid);

		if (isset($_POST['Academy'])) {
			$academyInfo->attributes = $_POST['Academy'];
			if ($academyInfo->save()) {
				$this->redirect(array('academy/index'));
			}else{
				echo "编辑失败";
			}
		}

		$this->render('edit',array('academyModel'=>$academyInfo));
	}

	public function actionDel($xid){
		$academyModel = Academy::model();
		$joinersModel = Joiners::model();

		$joinersInfo = $joinersModel->findByAttributes(array('xid'=>$xid));

		if(is_object($joinersInfo)){
			Yii::app()->user->setFlash('hasJoiner', '该学院下面有成员,请先删除成员');
			$this->redirect(array('index'));
			
		}else {
			if($academyModel->deleteByPk($xid)){
				$this->redirect(array('index'));
			}
		}
	}
}

 ?>