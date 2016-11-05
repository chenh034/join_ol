$(function () {  
	    //hover某处显示悬浮框  
	    $(".team li img").mouseover(function(e){  
	        //获取鼠标位置函数  
	        console.log($(this).html());
	        var mousePos = mousePosition(e);  
	        var  xOffset = 20;  
	        var  yOffset = 10;  
	        $("#tooltip").css("display","block").css("position","absolute").css("top",(mousePos.y - yOffset) + "px").css("left",(mousePos.x + xOffset) + "px");  
	        // $("#tooltip").append("悬浮窗内容");  

	        // $.ajax({
	        // 	type:'post',
	        // 	url:'data.php',

	        // 	success:function(data){
	        // 		$("#tooltip").append(data); 
	        // 	}

                 
	        // });
	    $("#tooltip").append('content');
	              
	     });  
	     //鼠标离开表格隐藏悬浮框  
	     $(".team li img").mouseout(function(){  
	         $("#tooltip").empty();  
	         $("#tooltip").css("display","none");  
	     });  
	  
	});
	//获取鼠标坐标  
	function mousePosition(ev){   
	    ev = ev || window.event;   
	    if(ev.pageX || ev.pageY){   
	        return {x:ev.pageX, y:ev.pageY};   
	    }   
	    return {   
	        x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,   
	        y:ev.clientY + document.body.scrollTop - document.body.clientTop   
	    };   
	} 