<?php
/**
 * 前台控制器
 */
class IndexController extends Controller{
	public function filters(){
		return array(
				array(
					'system.web.widgets.COutputCache + index',
					'duration'	=> 30,

					),
			);
	}
	/**
	 * 默认方法
	 */
	public function actionIndex(){
        
        $sql = "SELECT * FROM {{article}} order by aid desc limit 0,8";
		$activityInfo = Article::model()->findAllBySql($sql);
		$total = Article::model()->count();
        
        $sql = "SELECT * FROM {{announce}} order by id desc limit 0,4";
		$announceInfo = Announce::model()->findAllBySql($sql);

		$scrollInfo = Scroll::model()->findAllByAttributes(array('is_show'=>1));



		// 获取当前的时间段，以判断当前时刻属于哪节岗
 
		$year = date('Y');   //年份
		$month = date('n');  //月份
		$day = date('j');    //日

		$date = $year.'年'.$month.'月'.$day.'日';
        
        // 获取各个时刻的时间戳
		$t_800 = mktime(8,0,0,$month,$day,$year);
		$t_930 = mktime(9,30,0,$month,$day,$year);
		$t_1000 = mktime(10,0,0,$month,$day,$year);
		$t_1130 = mktime(11,30,0,$month,$day,$year);
		$t_1330 = mktime(13,30,0,$month,$day,$year);
		$t_1500 = mktime(15,0,0,$month,$day,$year);
		$t_1530 = mktime(15,30,0,$month,$day,$year);
		$t_1700 = mktime(17,0,0,$month,$day,$year);
		$t_1730 = mktime(17,30,0,$month,$day,$year);
		$t_1900 = mktime(19,0,0,$month,$day,$year);
		$t_1930 = mktime(19,30,0,$month,$day,$year);
		$t_2100 = mktime(21,0,0,$month,$day,$year);

		// 获取当前为星期几，并用数字表示
		if (date('w')) {
			$week = date('w');

		}else{
			
			$week = 7;
		}
		switch (date('w')) {
			case '0':
				$week = 7;
				$weekStr = '星期日';
				break;
			case '1':
				$week = 1;
				$weekStr = '星期一';
				break;
			case '2':
				$week = 2;
				$weekStr = '星期二';
				break;
			case '3':
				$week = 3;
				$weekStr = '星期三';
				break;
			case '4':
				$week = 4;
				$weekStr = '星期四';
				break;
			case '5':
				$week = 5;
				$weekStr = '星期五';
				break;
			case '6':
				$week = 6;
				$weekStr = '星期六';
				break;
			
			default:
				# code...
				break;
		}

 
        // 判断当前时刻属于哪节岗
		$now = time();


		if ($now>$t_800&&$now<$t_930) {
			$course = 1;
			$range = '8:00~9:30';
			
		}elseif($now>$t_1000&&$now<$t_1130){
			$course = 2;
			$range = '10:00~11:30';
		}elseif ($now>$t_1330&&$now<$t_1500) {
			$course = 3;
			$range = '13:30~15:00';
		}elseif ($now>$t_1530&&$now<$t_1700) {
			$course = 4;
			$range = '15:30~17:00';
		}elseif ($now>$t_1730&&$now<$t_1900) {
			$course = 5;
			$range = '17:30~19:00';
		}elseif ($now>$t_1930&&$now<$t_2100) {
			$course = 6;
			$range = '19:30~21:00';
		}else{
			$course = 0;
			$range = '';
		}

		if ($course) {
			// 拼接岗次代号
			$time = 'duty'.$week.'-'.$course;

			$dutyInfo = Duty::model()->findByAttributes(array('time'=>$time));
			
		}else{
			$dutyInfo = '无';
		}

        if ($dutyInfo != '无') {
        	# code...
        	$dutyInfo = explode(',', $dutyInfo->name);
        	
        }


         
		
		$this->render('index',array('activityInfo'=>$activityInfo,
			                        'total'=>$total,
			                        'announceInfo'=>$announceInfo,
			                        'scrollInfo'=>$scrollInfo,
			                        'dutyInfo'=>$dutyInfo,
			                        'weekStr'=>$weekStr,
			                        'range'=>$range,
			                        'date'=>$date,
			                        //'course'=>$course
			                        ));
	}
    
    public function actionDetail($aid){

    	$activityInfo = Article::model()->findByPk($aid);

    	$this->render('detail',array('activityInfo'=>$activityInfo));
    }

    public function actionAnnounce($id){

    	$announceInfo = Announce::model()->findByPk($id);

    	$this->render('announce',array('announceInfo'=>$announceInfo));

    }


    public function actionAjax($page){
    	$offset = $page*8;
    	$sql = "SELECT aid,title,thumb FROM {{article}} order by aid desc limit $offset,8";
    	
		$activityInfo = Article::model()->findAllBySql($sql);

		$info = CJSON::encode($activityInfo);
		print_r($info);

    }
public function actionPhp(){

    	echo phpinfo();

    }


}