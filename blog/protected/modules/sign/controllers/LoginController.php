<?php
/**
 * 前台登陆控制器
 */
class LoginController extends Controller{
	/**
	 * 前台登陆模板
	 */
	public $layout = 'application.modules.sign.views.layouts.conn';
	public function actionToLogin(){
        $this->renderpartial('index');
    }
    public function actionIndex(){
         $this->renderpartial('index');
    }
	
	public function actionLogin(){
		
		
		
		$user_name = $_POST['username'];
		$password = $_POST['password'];
		//var_dump($user_name);die();
		$user = Joinuser::model()->find('username=:username', array(':username' => $user_name));
		
        if(  $password  == $user->password){

            if( !isset( $_SESSION) ) {
                session_start();
            }
            Yii::app()->session['username'] = $user_name;
           

                    //判断当前值岗时间
            $time=time();
			$week=array("sun","monday","tuesday","wednesday","thursday","friday","sat");  
			$w = $week[date("w",$time)];
			// $w是当前星期几
			$b = date("H",$time);
			$c = "";

			//$c是当前值岗节
				  if($b>8&&$b<10){
				    $c = 1;
				  }else if($b<12){
				    $c = 2;
				  }else if($b<13){
				    $c = 0;
				  }else if($b<15){
				    $c = 3;
				  }else if($b<17){
				    $c = 4;
				  }else if($b<19){
				    $c = 5;
				  }else if($b>19){
				    $c = 6;
				   
				  }
			
			$dutyModel = new Signduty();
			$username1 = $_SESSION['username']; 
			$checkagain = Signduty::model();
			$sqlagain = "SELECT * FROM {{signduty}} WHERE username='username1' and week='$w' and class='$c' LIMIT 1";
			$again = $checkagain ->findAllBySql($sqlagain);
			
			if (!isset($again)) {
				if (isset($_SESSION['username'])) {
					$dutyModel->username = $user_name;
					$dutyModel->week = $w;
					$dutyModel->class = $c;
        			$dutyModel->logintime = $time;
					$dutyModel->save();
				}
				
			}

			       




            $this->redirect($this->createUrl("default/index"));
        }
        else{
            $this->redirect($this->createUrl("login/index/toLogin"));
        }



	}


	

	public function actionOut(){
		session_start();
		$user_name = $_SESSION['username'];
		//$sql0 = "SELECT did FROM {{Duty}} WHERE username = $user_name ORDER BY did DESC LIMIT 1";
		//var_dump($sql0);die();
		$did = Signduty::model()->find(
			array(
				'select' =>'did',
				'order' => 'did DESC',
				'limit' => 1,
				/*'condition' => 'did='.$did,*/ 
			));

		//var_dump($did['did']);
		$outtime = time();
		$id = $did['did'];
		$sql = "SELECT logintime FROM {{signduty}} WHERE did = $id ";
		$intime = Signduty::model()->findBySql($sql);
		$in = $intime['logintime'];
		$dutytime = $outtime - $in;
		if ($dutytime >= 5400) {
		unset(Yii::app()->session['username']);	
		Yii::app()->session->clear();
		Yii::app()->session->destroy();
		Yii::app()->user->logout();
		$dutytime = 0;
		$this->redirect(array('index'));
		}else{
			Yii::app()->session->clear();
			Yii::app()->session->destroy();
			Yii::app()->user->logout();
			$dutytime = 0;
			
			echo "<script type='text/javascript'> alert('时间未到');location.href=history.go(-1);</script>";
			//$this->redirect(array('index'));

        

		
	}
	}



}













