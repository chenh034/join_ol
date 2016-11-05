<?php
/**
 * 文章管理控制器
 */
class ArticleController extends Controller{

	public function filters(){
		return array(
				'accessControl',
			);
	}

	public function accessRules(){
		return array(
			//更加具体化
			// array(
			// 	'deny',
			// 	'actions'=>array('del','add'),
			// 	'users'	=> array('admin')
			// 	),

			array(
				'allow',
				'actions'=>array('index', 'del','add','edit'),
				'users'	=> array('@')
				),
			array(
				'deny',
				'users' => array('*')
				),


			);
	}


	/**
	 * 查看文章
	 */
	public function actionIndex($page=1){
		$cri = new CDbCriteria();
		$articleModel = Article::model();
		$total = $articleModel->count($cri);

		$pager = new CPagination($total);
		$pager->pageSize = 3;
		$pager->applyLimit($cri);

		$cri->order='aid DESC';

		$articleInfo = $articleModel->findAll($cri);
		// print_r($articleInfo);die();
        //$sql='SELECT * FROM {{article}} ORDER BY aid DESC';
        //$articleInfo= $articleModel->findAllBySql($sql);
		$data = array(
			'articleInfo'	=> $articleInfo,
			'pages'			=> $pager
			);

		$this->render('index', $data);
	}
	/**
	 * 添加文章
	 */
	public function actionAdd(){
		$articleModel = new Article();
		$category = Category::model();

		$categoryInfo = $category->findAllBySql("SELECT cid,cname FROM {{category}}");
		$cateArr = array();
		$cateArr[] = '请选择';
		foreach ($categoryInfo as $v) {
			$cateArr[$v->cid] = $v->cname;
		}

		$data = array(
			'articleModel'	=> $articleModel,
			'cateArr'		=> $cateArr
			);
		if(isset($_POST['Article'])){

			$articleModel->thumb = CUploadedFile::getInstance($articleModel, 'thumb');
			

			if ($articleModel->thumb == null) {
                
            }else{
                $fileType = $articleModel->thumb->type;

                    if(($fileType == 'image/jpg')||($fileType == 'image/jpeg')
                    ||($fileType == 'image/png')||($fileType == 'imgage/gif') ){
                    
                        $preRand = 'img_' . time() . mt_rand(0, 9999);
                        $imgName = $preRand . '.' . $articleModel->thumb->extensionName;
                        $articleModel->thumb->saveAs('uploads/article/' . $imgName);
                        $articleModel->thumb = $imgName;


                        //缩略图
                        $path = dirname(Yii::app()->BasePath) . '/uploads/article/';

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

			$articleModel->attributes = $_POST['Article'];
			$articleModel->thumb = $imgName;
			$articleModel->time = time();

			if($articleModel->save()){
				$this->redirect(array('index'));
			}
		}


		$this->render('add', $data);
	}

	public function actionEdit($aid){
		$articleModel = Article::model();

		$category = Category::model();

		$categoryInfo = $category->findAllBySql("SELECT cid,cname FROM {{category}}");
		$cateArr = array();
		$cateArr[] = '请选择';
		foreach ($categoryInfo as $v) {
			$cateArr[$v->cid] = $v->cname;
		}

		$articleInfo = $articleModel->findByPk($aid);
		$imgName = $articleInfo->thumb;

		if (isset($_POST['Article'])) {
			$articleInfo->thumb = CUploadedFile::getInstance($articleInfo,'thumb');
            if ($articleInfo->thumb == null) {
                
            }else{
                $fileType = $articleInfo->thumb->type;


                    if(($fileType == 'image/jpg')||($fileType == 'image/jpeg')
                    ||($fileType == 'image/png')||($fileType == 'imgage/gif') ){
                    
                        $preRand = 'img_' . time() . mt_rand(0, 9999);
                        $imgName = $preRand . '.' . $articleInfo->thumb->extensionName;
                        $articleInfo->thumb->saveAs('uploads/article/' . $imgName);
                        $articleInfo->thumb = $imgName;


                        //缩略图
                        $path = dirname(Yii::app()->BasePath) . '/uploads/article/';

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

            
            $articleInfo->attributes = $_POST['Article'];
            $articleInfo->thumb = $imgName;

            if ($articleInfo->save()) {
                $this->redirect(array('index'));

            }else{
            	echo "修改失败";die();
            }
		}

		$this->render('edit',array('articleModel'=>$articleInfo,'cateArr'=>$cateArr));

	}


	public function actionDel($aid){
		$articleModel = Article::model();

		if($articleModel->deleteByPk($aid)){
			$this->redirect(array('index'));
		}
	}
}









