/*******************************
 * @author Mr.Think
 * @author blog http://mrthink.net/
 * @2010.11.10
 * @可自由转载及使用,但请注明版权归属
 *******************************/
//调用bgIframe,解决IE6下遮住下拉列表的问题
//bgIframe函数 Copyright (c) 2006 Brandon Aaron (http://brandonaaron.net)
;(function($){
$.fn.bgIframe = $.fn.bgiframe = function(s) {

	// This is only for IE6
	if ( $.browser.msie && /6.0/.test(navigator.userAgent) ) {
		s = $.extend({
			top     : 'auto', // auto == .currentStyle.borderTopWidth
			left    : 'auto', // auto == .currentStyle.borderLeftWidth
			width   : 'auto', // auto == offsetWidth
			height  : 'auto', // auto == offsetHeight
			opacity : true,
			src     : 'javascript:false;'
		}, s || {});
		var prop = function(n){return n&&n.constructor==Number?n+'px':n;},
		    html = '<iframe class="bgiframe"frameborder="0"tabindex="-1"src="'+s.src+'"'+
		               'style="display:block;position:absolute;z-index:-1;'+
			               (s.opacity !== false?'filter:Alpha(Opacity=\'0\');':'')+
					       'top:'+(s.top=='auto'?'expression(((parseInt(this.parentNode.currentStyle.borderTopWidth)||0)*-1)+\'px\')':prop(s.top))+';'+
					       'left:'+(s.left=='auto'?'expression(((parseInt(this.parentNode.currentStyle.borderLeftWidth)||0)*-1)+\'px\')':prop(s.left))+';'+
					       'width:'+(s.width=='auto'?'expression(this.parentNode.offsetWidth+\'px\')':prop(s.width))+';'+
					       'height:'+(s.height=='auto'?'expression(this.parentNode.offsetHeight+\'px\')':prop(s.height))+';'+
					'"/>';
		return this.each(function() {
			if ( $('> iframe.bgiframe', this).length == 0 )
				this.insertBefore( document.createElement(html), this.firstChild );
		});
	}
	return this;
};
})(jQuery);

//选择标签至文本域插件
;(function(){
	

	$.fn.extend({
		
		iSelectTags:function(options){
			var iset={
				name:'.tagsbox',//表单或class或id名
				drop:$('#dropbox'),//弹出框定位
				pseudoClass:$('#dropbox>p>a'),//可选择的标签定位
				close:$('em.close'),//关闭按钮定位
				separator:',',//标签间分隔符,建议使用英文逗号
				maxCount:10 //默认限制个数,也可以设置表单的data-count值覆盖默认值
			}
            options=$.extend(iset, options || {});
			
			var _input=$(iset.name);
			var _inputVal=_input.val();
			var _arr=new Array(); //存放标签的数组
			var _left=_input.offset().left; //左绝对距离
			var _top=_input.offset().top+_input.outerHeight(); //上绝对距离,此处要加上表单的高度
			var _dropW=_input.outerWidth()-parseInt(_input.css('border-left-width'))-parseInt(_input.css('border-right-width'))-parseInt(iset.drop.css('paddingLeft'))-parseInt(iset.drop.css('paddingRight'));
			iset.drop.css({'position':'absolute','left':_left+'px','top':_top+'px','width':_dropW+'px'});
			//弹出框的宽度,此处计算的是与表单实际宽度相等的.也可以直接在样式中定义.
			var _txt=null;
			var _maxCount=parseInt(_input.attr('data-count'));//限制选择个数
			if(isNaN(_maxCount)){
				_maxCount=iset.maxCount
			}
			
			_input.click(function(){
				iset.drop.show();
				iset.drop.bgiframe();//调用bgiframe插件,解决ie6下select的z-index无限大问题
            }).bind('keyup change',function(){
				//可以在此处扩展手动输入标签情况下的相关判断
				//if语句可避免清空重新选择时第一个字符为逗号
				if ($(this).val() == '') {
					_arr = new Array();
				}else {
					_arr = $(this).val().split(iset.separator);//当用户手动删除或修改标签值后更新标签值
				}
			});
			
			$(document).click(function(e){
				//点击非弹出框区域时关闭弹出框
				//下面的 if语句是用来判断传入的是class还是id
				if(iset.name.charAt(0)=='#'){
					if(e.target.id!=iset.name.substring(1)){
						iset.drop.hide();
						}
				}else if(iset.name.charAt(0)=='.'){
					if(e.target.className!=iset.name.substring(1)){
						iset.drop.hide();
						}
				}
			});
			
			iset.drop.click(function(e){
				//阻止弹出框区域默认事件
				e.stopPropagation();
			});
			
			iset.pseudoClass.click(function(){
				//标签选择
				_txt=$(this).text();
				//下面的$.inArray是用来判断是否重复
				//若想反馈重复提示或走出限制个数提示,可改进下面的if语句
				if(($.inArray(_txt,_arr)==-1) && (_arr.length<_maxCount )){
					_arr.push(_txt);
					_inputVal=_arr.join(iset.separator);
					_input.val(_inputVal);
				}
				
			});
			//关闭按钮
			iset.close.click(function(){
				iset.drop.hide();
			});
		}
	});
})(jQuery);

//插件调用
$(function(){
	$('.demo').iSelectTags();
	
	/*
	 * 还可以传入参数调用
	 $('#test').iSelectTags({
		name:'#test',
		drop:$('.drop'),
		...
	});
	 */
	$(".demo input").click(function(){
		$(this).addClass('tagsbox');
	});
		
});