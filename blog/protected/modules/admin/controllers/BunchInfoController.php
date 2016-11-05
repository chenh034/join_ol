<?php 
/**
* 
*/
class BunchInfoController extends Controller
{   

	public function actionIndex(){
		$model = BunchInfo::model();
		$bunchInfo = $model->findAll();

		$this->render('index',array('bunchInfo'=>$bunchInfo));
	}
	
	public function actionAdd(){
		$model = new BunchInfo();

		$bunchModel = Bunch::model()->findAll();

		foreach ($bunchModel as $key => $value) {
			$bunch[$value->id] = $value->name;
		}

		if (isset($_POST['BunchInfo'])) {
			$model->attributes = $_POST['BunchInfo'];
			if ($model->save()) {
				  yii::app()->user->setFlash('addBunchInfo','添加成功');
                  $this->redirect(array('bunchinfo/index'));
			}else{
				echo "添加失败";
			}
		}

		$this->render('add',array('bunchInfoModel'=>$model,'bunch'=>$bunch));
	}

	public function actionEdit($id){
		$model = BunchInfo::model();

		$BunchInfo = $model->findByPk($id);

		$bunchModel = Bunch::model()->findAll();
		foreach ($bunchModel as $key => $value) {
			$bunch[$value->id] = $value->name;
		}

		if (isset($_POST['BunchInfo'])) {
			$BunchInfo->attributes = $_POST['BunchInfo'];
			if ($BunchInfo->save()) {
				$this->redirect(array('bunchinfo/index'));
			}else{
				echo "编辑失败";
			}
		}

		$this->render('edit',array('bunchInfoModel'=>$BunchInfo,'bunch'=>$bunch));
	}

	public function actionDel($id){
		$model = BunchInfo::model();
		if ($model->deleteByPk($id)) {
			$this->redirect(array('index'));
		}
	}
}

 ?>