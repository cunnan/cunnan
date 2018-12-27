(function($){
	//定义插件
	$.extend({ 
		//修改nav的样式
		"nav":function(){
			                     //插件实现的功能
									$(".nav").css({
										"margin":0,
										"padding":0,
										"display":"none"			
									});
								//插件的动态效果
								   $(".nav").parent().hover(
																		function(){
																			//鼠标划入li ul滑下
																			$(this).find(".nav").slideDown(1);
																		},
																		function(){
																			//鼠标划出li 子节点ul滑上
																			$(this).find(".nav").slideUp(1);
																		}
																		);
	                       	       }
	     
	            });
	
}(jQuery));














