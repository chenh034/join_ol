<?php 
/**
* 
*/
class GradeController extends Controller
{
	
	public function actionIndex(){
		$gradeInfo = Grade::model()->findAll();
		
		$this->render('index',array('gradeInfo'=>$gradeInfo));

	}

	public function actionAdd(){
		$gradeModel = new Grade();

		if (isset($_POST['Grade'])) {
			$gradeModel->attributes = $_POST['Grade'];
			if ($gradeModel->save()) {
				yii::app()->user->setFlash('addgrade','添加成功');
                $this->redirect(array('grade/index'));
			}else{
				echo "添加失败";
			}
		}

		$this->render('add',array('gradeModel'=>$gradeModel));
	}

	public function actionEdit($id){
		$gradeInfo = Grade::model()->findByPk($id);

		if (isset($_POST['Grade'])) {
			$gradeInfo->attributes = $_POST['Grade'];
			if ($gradeInfo->save()) {
				$this->redirect(array('index',array('index')));
			}else{
				echo "修改失败";die();
			}
		}

		$this->render('edit',array('gradeModel'=>$gradeInfo));
	}

	public function actionDel($id){
		$model = Grade::model();
		if ($model->deleteByPk($id)) {
			$this->redirect(array('grade/index'));
		}else{
			echo "删除失败";die();
		}
	}

	public function actionActiveSer($id){
		$gradeModel = Grade::model()->findByPk($id);
		$gradeModel->is_show = 1;
		$gradeModel->save();
		$this->redirect(array('grade/index'));

    }

    public function actionActiveSerCancel($id){
    	$gradeModel = Grade::model()->findByPk($id);
    	$gradeModel->is_show = 0;
    	$gradeModel->save();
    	$this->redirect(array('grade/index'));
    }

}
 ?>