<?php
/**
* 功能：利用过滤器，实现用户的登录验证
*/
   class SessionCheckFilter extends CFilter 
   {

    protected function preFilter($filterChain)
    {

         if (isset(yii::app()->session['username']))
         {
             $filterChain->run();
         }
         else
         {
             Yii::app()->runController("sign/login/index");
              

         }
    }


}
?>