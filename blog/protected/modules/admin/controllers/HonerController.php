<?php 
/**
* 
*/
class HonerController extends Controller
{
	
	public function actionIndex(){
		$model = Honer::model();
		$honerInfo = $model->findAll();
        foreach ($honerInfo as $key => $value) {
            if ($value->type) {
                $honerInfo[$key]->type = '作品';
            }else{
                $honerInfo[$key]->type = '荣誉';
            }
        }

		$this->render('index',array('honerInfo'=>$honerInfo));

	}

	public function actionAdd(){
		$honerModel = new Honer();

		if (isset($_POST['Honer'])) {
            
            
            // 上传头像
            $honerModel->thumb = CUploadedFile::getInstance($honerModel,'thumb');

            
            if ($honerModel->thumb == null) {
                 echo "<script type='text/javascript'>
                            alert('上传图片不可为空');
                      </script>";die();
             }else{
                    $fileType = $honerModel->thumb->type;
            
                    if( ($fileType == 'image/jpg')||($fileType == 'image/jpeg')
                        ||($fileType == 'image/png')||($fileType == 'imgage/gif') ){

                        $preRand = 'img_' . time() . mt_rand(0, 9999);
                        $imgName = $preRand . '.' . $honerModel->thumb->extensionName;
                        $honerModel->thumb->saveAs('uploads/honer/' . $imgName);
                        $honerModel->thumb = $imgName;

                        //缩略图
                        $path = dirname(Yii::app()->BasePath) . '/uploads/honer/';

                        $thumb = Yii::app()->thumb;
                        $thumb->image = $path . $imgName;
                        $thumb->width = 568;
                        $thumb->height=388;
                        $thumb->mode = 4;
                        $thumb->directory = $path;
                        $thumb->defaultName = $preRand;
                        $thumb->createThumb();
                        $thumb->save();
                    } else{
                        echo "<script type='text/javascript'>
                                alert('文件格式不正确');
                          </script>";die();
                        
                    }
             }

            $honerModel->attributes=$_POST['Honer'];
            $honerModel->thumb = $imgName;
            $honerModel->creattime = time();


            if ($honerModel->save()) {
                yii::app()->user->setFlash('addhoner','添加成功');
                $this->redirect(array('index'));
            } else{
                echo "添加失败";
            }
        }
        


		$this->render('add',array('honerModel'=>$honerModel));
	}


	public function actionEdit($id){
        $honerInfo = Honer::model()->findByPk($id);

        $imgName = $honerInfo->thumb;


        if (isset($_POST['Honer'])) {
            // foreach ($_POST['honer'] as $key => $value) {
            //     $honerInfo->$key=$value;
            // }
    
            // 上传头像
            $honerInfo->thumb = CUploadedFile::getInstance($honerInfo,'thumb');
            if ($honerInfo->thumb == null) {
                
            }else{
                $fileType = $honerInfo->thumb->type;

                    if(($fileType == 'image/jpg')||($fileType == 'image/jpeg')
                    ||($fileType == 'image/png')||($fileType == 'imgage/gif') ){
                    
                        $preRand = 'img_' . time() . mt_rand(0, 9999);
                        $imgName = $preRand . '.' . $honerInfo->thumb->extensionName;
                        $honerInfo->thumb->saveAs('uploads/honer/' . $imgName);
                        $honerInfo->thumb = $imgName;


                        //缩略图
                        $path = dirname(Yii::app()->BasePath) . '/uploads/honer/';

                        $thumb = Yii::app()->thumb;
                        $thumb->image = $path . $imgName;
                        $thumb->width = 568;
                        $thumb->height=388;
                        $thumb->mode = 4;
                        $thumb->directory = $path;
                        $thumb->defaultName = $preRand;
                        $thumb->createThumb();
                        $thumb->save();
                }
                
            }

            
            $honerInfo->attributes = $_POST['Honer'];
            $honerInfo->thumb = $imgName;
            $honerInfo->creattime = time();

            if ($honerInfo->save()) {
                $this->redirect(array('index'));
            }
        }

        $this->render('edit',array('honerModel'=>$honerInfo));
	}

	public function actionDel($id){
		$model = Honer::model();

		if($model->deleteByPk($id)){
			$this->redirect(array('index'));
		}
	}
}

 ?>