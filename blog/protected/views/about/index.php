<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>卓音在线</title>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/join.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/jquery.pagination.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/pagination.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/join.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/join_about.css">
    <script type="text/javascript">
        $(function(){
            var initPagination = function() {
                var num_entries = <?php echo $total ?>; //数据总数
                // 创建分页
                $("#Pagination").pagination(num_entries, {
                    num_edge_entries: 1, //边缘页数
                    num_display_entries: 2, //主体页数
                    callback: pageselectCallback,
                    items_per_page: 4, //每页显示项
                    prev_text: "前一页",
                    next_text: "后一页"
                });
             };

            function pageselectCallback(page_index){
                page_index=page_index;
                $.ajax({
                    url:"<?php echo Yii::app()->request->baseUrl ?>/index.php?r=about/ajax&page="+page_index,//路径
                    dataType: "json",//数据
                    // data:{page:page_index},//传的参数
                    success:function(data){
                        var content = '';   
                        var baseUrl = "<?php echo Yii::app()->request->baseUrl ?>";         
                        $.each(data,function(n,value){//data你要被循环的数组或对象，回调函数每次循环做什么事
                            $(".honor .honor_content").empty();//empty


                            content += "<img src='"+baseUrl+'/uploads/honer/'+value.thumb+"'>";


                                                   
                        });
                        

                        $(".honor .honor_content").html(content);
                    }
                });
                return false;
            }

            //ajax加载

            $(".honor .honor_content").load("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=about/ajax&page=0", null, initPagination);
        });
    </script>
</head>
<body>
<div id="top">
        <div id="top_content">
            <div id="top_logo">
                <img src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/top_logo.png">
            </div>
            <div id="top_nav">
                <ul>
                    <li class="duang"><a href="<?php echo  $this->createUrl('index/index') ?>">首页</a></li>
                    <li><a href="<?php echo  $this->createUrl('team/index') ?>">团队</a></li>
                    <li><a href="<?php echo  $this->createUrl('compo/index') ?>">作品</a></li>
                    <li id="yes"><a href="<?php echo  $this->createUrl('about/index') ?>">关于我们</a></li>
		    <li><a href="<?php echo  $this->createUrl('/sign') ?>">值岗签到</a></li>

                </ul>
            </div>
        </div>
    </div>

<div id="first">
        <p>www.myjoin.cn</p>
        <p>东北师范大学·卓音工作室</p>
    </div>
    <div class="culture">
        <div class="notice_top">
            <p class="big">团队文化</p>
            <div class="img"></div>
            <p class="small">TEAM CULTURE</p>
        </div>
        <div class="culture_content">
            <img src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/join_about/culture.png">
            <p>
                卓音工作室正式成立于2000年3月25日，隶属于东北师范大学学生就业指导服务中心，主要承担“东北高
师就业联盟网"、“学生就业指导服务中心网站"、“卓音在线"的设计、开发与维护工作。卓音工作室以“信息
创造竞争力"为工作理念，致力于为大学毕业生提供方便、快捷、个性化的就业信息服务，全力建设全国大学生
就业网首席品牌。卓音  暗含卓越 团结 join job information
            </p>
        </div>
        <div class="p"></div>
        <div class="join_logo">
            <div></div>
            <p>该识别由英文字母“JOIN”变形构成。主体形象为一个人环抱着地球，象
征着卓音人远大的志向，团结、参与、互动的卓音精神，同时也体现了信息无
极限的网络工作特点。</p>
        </div>
    </div>
    <div class="honor">
        <div class="notice_top">
            <p class="big">我们的荣誉</p>
            <div class="img"></div>
            <p class="small">OUR HONOR</p>
        </div>
        <div class="honor_content">
            
        </div>

        <div id="Pagination" class="pagination"></div>

    </div>
    <div class="environment">
        <div class="notice_top">
            <p class="big">工作环境</p>
            <div class="img"></div>
            <p class="small">ENVIRONMENT</p>
        </div>
        <div class="environment_content">
            <img src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/join_about/environment1.png">
            <img src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/img/join_about/environment2.png">
            <p>卓音工作室位于东北师范大学行政楼四楼，占地一百余平米，分为休息区，工作区，会议区，教师间，储物间，服务器间。拥
有八台一体机，十八台高配置台式机等设备。</p>
        </div>
    </div>