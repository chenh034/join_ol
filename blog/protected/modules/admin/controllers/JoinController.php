<?php 

/**
* 
*/
class JoinController extends Controller
{
	
	public function actionIndex(){
        // 为分类查询设置模型
        // $classify = new Joiners();

        // 取出所有人员信息
        $joinersModel=Joiners::model();
        if (isset($_POST['Joiners'])) {
            $cri = new CDbCriteria();
            $cri->addSearchCondition('jname',$_POST['Joiners']['jname']);
            
            $joinersInfo = $joinersModel->findAll($cri);

        }else {

                $sql = " SELECT * FROM joiners ";
                $joinersInfo = $joinersModel->findAllBySql($sql);
                
        }

        foreach ($joinersInfo as $k => $v) {
            //echo (boolean)$v->gender;
            if ($v->gender) {
                $joinersInfo["$k"]->gender='女';
            } else{
                $joinersInfo["$k"]->gender='男';
            }
        }
        // print_r($joinersInfo[0]->academy->academy);die();
       
        // 关联学院数据表
        $academy = Academy::model();
        $academyInfo = $academy->findAllBySql('SELECT xid,academy FROM academy');
        $acaArr=array();
        $acaArr[]='请选择';
        foreach ($academyInfo as $key => $value) {
            $acaArr[$value->xid] = $value->academy;
        }

        // 关联部门数据表
        $bunchModel = Bunch::model();
        $bunchInfo = $bunchModel->findAll();
        $bunch[] = '请选择';
        foreach ($bunchInfo as $key => $value) {
            $bunch[$value->id] = $value->name;
        }

        // 关联年级数据表
        $gradeModel = Grade::model();
        $gradeInfo = $gradeModel->findAll();
        $grade[] = '请选择';
        foreach ($gradeInfo as $key => $value) {
            $grade[$value->id] = $value->name;
        }
        


		$this->render('index',array('joinersInfo'=>$joinersInfo,
                                    'academyInfo'=>$acaArr,
                                    'classify'=>$joinersModel,
                                    'bunch'=>$bunch,
                                    'grade'=>$grade
            ));
	}

    public function actionAjax(){
        $joinersModel = Joiners::model();
        $cri = new CDbCriteria();
        // $cri->addSearchCondition('jname',$_POST['Joiners']['jname']);
        if ($_POST['bunch_id']!='0' && $_POST['xid']!='0') {
            
            $cri->addCondition('bunch_id = :bunch_id');
            $cri->params[':bunch_id'] = $_POST['bunch_id'];
            $cri->addCondition('xid ='.$_POST['xid']);


        }else if($_POST['bunch_id']=='0' && $_POST['xid']!='0')
        {   //print_r($_POST);die;
            $cri->addCondition('xid ='.$_POST['xid'] );
            
        }else if($_POST['bunch_id']!='0' && $_POST['xid']=='0')
        {
            $cri->addCondition('bunch_id= :bunch_id');
            $cri->params[':bunch_id']=$_POST['bunch_id'];
        }else {
            $cri->order='id ASC';
        }
        $joinersInfo = $joinersModel->findAll($cri);

        foreach ($joinersInfo as $k => $v) {
            //echo (boolean)$v->gender;
            if ($v->gender) {
                $joinersInfo["$k"]->gender='女';
            } else{
                $joinersInfo["$k"]->gender='男';
            }

            $joinersInfo[$k]->xid = $joinersInfo[$k]->academy->academy;
            $joinersInfo[$k]->bunch_id = $joinersInfo[$k]->bunch_name->name;
            $joinersInfo[$k]->grade_id = $joinersInfo[$k]->grade_name->name;
        }

        $infos = CJSON::encode($joinersInfo);
        print_r($infos);
    }



    public function actionAdd(){
        
        $joinersModel=new Joiners();
        
        // 关联学院数据表
        $academy = Academy::model();
        $academyInfo = $academy->findAllBySql('SELECT xid,academy FROM academy');
        $acaArr=array();
        $acaArr[0]='请选择';
        foreach ($academyInfo as $key => $value) {
            $acaArr[$value->xid] = $value->academy;
        }

        // 关联部门数据表
        $bunchModel = Bunch::model();
        $bunchInfo = $bunchModel->findAll();
        $bunch[] = '请选择';
        foreach ($bunchInfo as $key => $value) {
            $bunch[$value->id] = $value->name;
        }

        // 关联年级数据表
        $gradeModel = Grade::model();
        $gradeInfo = $gradeModel->findAll();
        $grade[] = '请选择';
        foreach ($gradeInfo as $key => $value) {
            $grade[$value->id] = $value->name;
        }


        if (isset($_POST['Joiners'])) {
            
            
            // 上传头像
            $joinersModel->thumb = CUploadedFile::getInstance($joinersModel,'thumb');

            
            
            if ($joinersModel->thumb == null) {
                 echo "<script type='text/javascript'>
                            alert('上传头像不可为空');
                      </script>";die();
             }else{
                $fileType = $joinersModel->thumb->type;
                if( ($fileType == 'image/jpg')||($fileType == 'image/jpeg')
                ||($fileType == 'image/png')||($fileType == 'imgage/gif') ){

                    $preRand = 'img_' . time() . mt_rand(0, 9999);
                    $imgName = $preRand . '.' . $joinersModel->thumb->extensionName;
                    $joinersModel->thumb->saveAs('uploads/head/' . $imgName);
                    $joinersModel->thumb = $imgName;

                    //缩略图
                    $path = dirname(Yii::app()->BasePath) . '/uploads/head/';

                    $thumb = Yii::app()->thumb;
                    $thumb->image = $path . $imgName;
                    $thumb->width = 181;
                    $thumb->height=210;
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

            $joinersModel->attributes=$_POST['Joiners'];
            $joinersModel->thumb = $imgName;


            if ($joinersModel->save()) {
                yii::app()->user->setFlash('add','添加成功');
                $this->redirect(array('join/index'));
            } else{
                echo "添加失败";
            }
        }
        
    	$this->render('add',array('joinersModel'=>$joinersModel,
                                  'academyInfo'=>$acaArr,
                                  'bunch'=>$bunch,
                                  'grade'=>$grade
                          ) );
    }





    public function actionEdit($id){
        
        $joinersModel=Joiners::model();
        $joinersInfo=$joinersModel->findByPk($id);
        $imgName = $joinersInfo->thumb;


        if (isset($_POST['Joiners'])) {
            // foreach ($_POST['Joiners'] as $key => $value) {
            //     $joinersInfo->$key=$value;
            // }
    
            // 上传头像
            $joinersInfo->thumb = CUploadedFile::getInstance($joinersInfo,'thumb');
            if ($joinersInfo->thumb == null) {
                
            }else{
                $fileType = $joinersInfo->thumb->type;

                    if(($fileType == 'image/jpg')||($fileType == 'image/jpeg')
                    ||($fileType == 'image/png')||($fileType == 'imgage/gif') ){
                    
                        $preRand = 'img_' . time() . mt_rand(0, 9999);
                        $imgName = $preRand . '.' . $joinersInfo->thumb->extensionName;
                        $joinersInfo->thumb->saveAs('uploads/head/' . $imgName);
                        $joinersInfo->thumb = $imgName;


                        //缩略图
                        $path = dirname(Yii::app()->BasePath) . '/uploads/head/';

                        $thumb = Yii::app()->thumb;
                        $thumb->image = $path . $imgName;
                        $thumb->width = 181;
                        $thumb->height=210;
                        $thumb->mode = 4;
                        $thumb->directory = $path;
                        $thumb->defaultName = $preRand;
                        $thumb->createThumb();
                        $thumb->save();
                }
                
            }

            
            $joinersInfo->attributes = $_POST['Joiners'];
            $joinersInfo->thumb = $imgName;

            if ($joinersInfo->save()) {
                $this->redirect(array('index'));
            }
        }


        // 关联学院数据表
        $academy = Academy::model();
        $academyInfo = $academy->findAllBySql('SELECT xid,academy FROM academy');
        $acaArr=array();
        $acaArr[]='请选择';
        foreach ($academyInfo as $key => $value) {
            $acaArr[$value->xid] = $value->academy;
        }

        $bunchModel = Bunch::model()->findAll();
        foreach ($bunchModel as $key => $value) {
            $bunch[$value->id] = $value->name;
        }

        // 关联年级数据表
        $gradeModel = Grade::model();
        $gradeInfo = $gradeModel->findAll();
        $grade[] = '请选择';
        foreach ($gradeInfo as $key => $value) {
            $grade[$value->id] = $value->name;
        }



        $this->render('edit',array(
                'joinersModel'=>$joinersInfo,
                'academyInfo'=>$acaArr,
                'bunch'=>$bunch,
                'grade'=>$grade
                      
            ));
    }


    public function actionDel($id){
        $joinersModel=Joiners::model();
        if($joinersModel->deleteByPk($id)){
            yii::app()->user->setFlash('del','删除成功');
            $this->redirect(array('index'));
        }
    }


}


 ?>