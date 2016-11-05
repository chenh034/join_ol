<?php 

/**
* 团队模块控制器
*/
class TeamController extends Controller
{
	
	public function actionIndex(){
        

                $bunchInfoModel = BunchInfo::model();
                $joinersModel = Joiners::model();

                $sql1 = "SELECT * FROM {{bunch_info}}  where bunch_id = 4 order by id desc limit 0,5";
                $sql2 = "SELECT * FROM {{bunch_info}} where bunch_id = 5 order by id desc limit 0,4";
                $sql3 = "SELECT * FROM {{bunch_info}} where bunch_id = 6 order by id desc limit 0,7";



                $devInfo = $bunchInfoModel->findAllBySql($sql1);
                $designInfo = $bunchInfoModel->findAllBySql($sql2);
                $proInfo = $bunchInfoModel->findAllBySql($sql3);

                // 获取年级信息
                // 进行排序，优先取出高年级
                $grade = Grade::model()->findAllByAttributes(array('is_show'=>1));
                foreach ($grade as $key => $value) {
                    $gradeArray[] = $value->name;
                }

            
                function my_sort($a,$b){
                    $a = substr($a, 0,4);
                    $b = substr($b, 0,4);
                    if ($a==$b) return 0;
                    return ($a<$b)?-1:1;

                }
                usort($gradeArray,"my_sort");
                foreach ($gradeArray as $key => $value) {
                    $gradeInfo[] = Grade::model()->findByAttributes(array('name'=>$value));
                }


                foreach ($gradeInfo as $key => $value) {
			$joinsql = "SELECT * FROM joiners  where grade_id = $value->id order by bunch_id";
                    $joinersInfo[] = $joinersModel->findAllBySql($joinsql);
                    //$joinersInfo[] = $joinersModel->findAllByAttributes(array('grade_id'=>$value->id));
                }




		$this->render('index',array('devInfo'=>$devInfo,'designInfo'=>$designInfo,'proInfo'=>$proInfo,'joinersInfo'=>$joinersInfo));
	}

        public function actionAjax(){

                $id = $_POST['id'];

                $join = Joiners::model()->findByPk($id);

                // var_dump($join);


                $joiners = array();
                $joiners['jname'] = $join->jname;
                $joiners['bunch'] =  $join['bunch_name']->name;
                $joiners['grade'] = $join['grade_name']->name;
                $joiners['academy'] = $join['academy']->academy;
                if ($join->gender) {
                      $joiners['gender'] = '女';
                }else{
                        $joiners['gender'] = '男';
                }

                $infos = CJSON::encode($joiners);

                print_r($infos);
        
        }



}

 ?>