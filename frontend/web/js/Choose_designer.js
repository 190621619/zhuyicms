$(function(){
	var nuber=0;
//	$(document).on("click",".bot_input",function(ev){
	touch.on(".bot_input","tap",function(ev){
		var lengtha=$(".box_sjs li").length;
		var index=$(this).parents(".pro_here").index();
		var src=$(this).parents(".here_bottom").find(".here_head img").attr("src");
		
			if($(this).hasClass('icon-weixuanzhong')){
				if(lengtha<3){
				$(this).addClass("icon-xuanzhong").removeClass('icon-weixuanzhong');
				var lii="<li id='li_"+index+"'><img src="+src+"/><i class='iconfont icon-shanchu shanchu'></i></li>";
				$(".box_sjs").append(lii);
				}
				else{
					alert("最多选择3个")
				}
			}else {
				$(this).addClass("icon-weixuanzhong").removeClass('icon-xuanzhong');
				$("#li_"+index).remove();
			};
		
		
		var length=$(".designer_box .icon-xuanzhong").length;
		if(length>0){
			$("#htmll").text("人工匹配");
		}else {
			$("#htmll").text("你可以不选择设计师，我们将为你人工匹配");
		};
	});
	
	$(document).on("click",".box_sjs li",function(){
		
		var id=$(this).attr("id");
		var last=parseInt(id.substr(-1));
		$(".designer_box .pro_here:eq("+last+")").find(".input_box").addClass("icon-weixuanzhong").removeClass("icon-xuanzhong");
		$(this).remove();
		var lenfth=$(".box_sjs li").length;
		if(lenfth==0){
			$("#htmll").text("你可以不选择设计师，我们将为你人工匹配");
		}
	})
		$(document).on("click",".rg_pp",function(ev){
			if($(this).find(".iconfont").hasClass("icon-xuanzhong")){
				$(this).find(".iconfont").addClass("icon-weixuanzhong").removeClass("icon-xuanzhong")
			}else{
				$(this).find(".iconfont").addClass("icon-xuanzhong").removeClass("icon-weixuanzhong")
			}
		});
		touch.on(".navv_tj","tap",function(ev){
			if($(".bot_navv .rg_pp .iconfont").hasClass("icon-weixuanzhong")&&$(".box_sjs li").length==0){
				alert("请选择设计师或者勾选人工匹配");
			}
		})
		
		touch.on(".click_more","tap",function(ev){
		
			if(nuber==0){
				$(".designer_box>.pro_here:eq(3),.designer_box>.pro_here:eq(4),.designer_box>.pro_here:eq(5)").show();
				nuber++;
				var top=$("#topa").offset().top; 
				$(window).scrollTop(top)
			}else{
				$(".designer_box>.pro_here").show();
				
				$(".click_more").html("最多从中选择三位优先匹配<br>  更多设计师,住艺会帮你人工匹配")
				var top=$("#topb").offset().top	;
					$(window).scrollTop(top);
			}
		})
                
                touch.on(".navv_tj","tap",function(ev){
                    var html="";
                    var length=$(".pro_here .icon-xuanzhong").length;
                    $(".pro_here .icon-xuanzhong").each(function(index){
                         var val= $(this).parents(".pro_here").attr("value_id");
                        if(index==length-1){
                             html+=val;
                        }else{
                             html+=val+"$";
                        }
                     
                      
                    })
                    alert(html);
                })
                
});