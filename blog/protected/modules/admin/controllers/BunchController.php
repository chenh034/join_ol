<?php 

/**
* 
*/
class BunchController extends Controller
{
	
	public function actionIndex(){
		$model = Bunch::model();
		$bunchInfo = $model->findAll();

		$this->render('index',array('bunchInfo'=>$bunchInfo));

	}

	public function actionAdd(){
         $bunchModel = new Bunch();
         if (isset($_POST['Bunch'])) {
            $bunchModel->attributes = $_POST['Bunch'];
            if ($bunchModel->save()) {
            	yii::app()->user->setFlash('addBunch','添加成功');
                $this->redirect(array('bunch/index'));
            }else{
            	echo "添加失败";
            }
         }


         $this->render('add',array('bunchModel'=>$bunchModel));
	}

	public function actionEdit($id){
		$bunchInfo = Bunch::model()->findByPk($id);
		if (isset($_POST['Bunch'])) {
			$bunchInfo->attributes = $_POST['Bunch'];
			if ($bunchInfo->save()) {
				$this->redirect(array('bunch/index'));
			}else{
				echo "修改失败";
			}
		}

		$this->render('edit',array('bunchModel'=>$bunchInfo));
	}

	public function actionDel($id){
		$bunchModel = Bunch::model();
		$joinersModel = Joiners::model();

		$joinersInfo = $joinersModel->findByAttributes(array('bunch_id'=>$id));

		if(is_object($joinersInfo)){
			Yii::app()->user->setFlash('hasJoiner', '该部门下面有成员,请先删除成员');
			$this->redirect(array('index'));
			
		}else {
			if($bunchModel->deleteByPk($id)){
				$this->redirect(array('index'));
			}
		}
		
	}

	
}

 ?>