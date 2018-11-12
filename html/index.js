// JavaScript Document

//banner切换
$(document).ready(function(){ 
		$(".slider").cycle({
			fx:"scrollHorz", //不同效果对应参数件txt文件
			speed:1200,      //正整数，作用：图片渐变效果持续时间
			timeout:9000,   //正整数，作用：切换间隔时间
			pause:1,        //布尔值，作用：决定鼠标指上去时是否暂停
			next:"#next",
			prev:"#prev",
			pager:"#pager"
		}); 
   });
   
   //艺术之切换
   $(document).ready(function(){ 
		$(".imgcollect_slider").cycle({
			fx:"scrollHorz", //不同效果对应参数件txt文件
			speed:1200,      //正整数，作用：图片渐变效果持续时间
			timeout:9000,   //正整数，作用：切换间隔时间
			pause:1,        //布尔值，作用：决定鼠标指上去时是否暂停
			next:"#left",
			prev:"#right"
		}); 
   });
  //窗公益广告切换 
	$(document).ready(function(){ 
		$(".imgcollect_slider1").cycle({
			fx:"scrollHorz", //不同效果对应参数件txt文件
			speed:1200,      //正整数，作用：图片渐变效果持续时间
			timeout:9000,   //正整数，作用：切换间隔时间
			pause:1,        //布尔值，作用：决定鼠标指上去时是否暂停
			next:"#left1",
			prev:"#right1"
		}); 
   });

//集团公告
$(".news_wrap").slide({mainCell:".news_list",effect:"top",autoPlay:true,delayTime:900,prevCell:".aleft",nextCell:".aright",pnLoop:false});
//图片新闻
$(".picnews").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",
//下面startFun代码用于控制文字上下切换			
startFun:function(i){ $(".picnews .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-35});}});


//建筑总承包房地产开发 
 $("#tab1 li").hover(
     function(){
		   for(var i=0;i<=$("#tab1 li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $("#tab1 li").eq(i).find("a").addClass("now");
				  $(".block_one").eq(i).show();
				  $("#tab1_more li").eq(i).show();
				}else{
				  $("#tab1 li").eq(i).find("a").removeClass("now");
				  $(".block_one").eq(i).hide();
				  $("#tab1_more li").eq(i).hide();
				}
		   }
		    
		 },function(){}
  );
  
  //科技创新设计咨询建材物流
  $("#tab2 li").hover(
     function(){
		   for(var i=0;i<=$("#tab2 li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $("#tab2 li").eq(i).find("a").addClass("now");
				  $(".block_two").eq(i).show();
				  $("#tab2_more li").eq(i).show();
				}else{
				  $("#tab2 li").eq(i).find("a").removeClass("now");
				  $(".block_two").eq(i).hide();
				  $("#tab2_more li").eq(i).hide();
				}
		   }
		    
		 },function(){}
  );
 
  //海外事业项目投资
  $("#tab3 li").hover(
     function(){
		   for(var i=0;i<=$("#tab3 li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $("#tab3 li").eq(i).find("a").addClass("now");
				  $(".block_three").eq(i).show();
				  $("#tab3_more li").eq(i).show();
				}else{
				  $("#tab3 li").eq(i).find("a").removeClass("now");
				  $(".block_three").eq(i).hide();
				  $("#tab3_more li").eq(i).hide();
				}
		   }  
		 },function(){}
  );
 //党建园地工团建设子公司风采  
   $("#tab4 li").hover(
     function(){
		   for(var i=0;i<=$("#tab4 li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $("#tab4 li").eq(i).find("a").addClass("now");
				  $(".block_four").eq(i).show();
				  $("#tab4_more li").eq(i).show();
				}else{
				  $("#tab4 li").eq(i).find("a").removeClass("now");
				  $(".block_four").eq(i).hide();
				  $("#tab4_more li").eq(i).hide();
				}
		   }  
		 },function(){}
  );
  
  //政策风向媒体报道
   $("#tab5 li").hover(
     function(){
		   for(var i=0;i<=$("#tab5 li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $("#tab5 li").eq(i).find("a").addClass("now");
				  $(".block_five").eq(i).show();
				  $("#tab5_more li").eq(i).show();
				}else{
				  $("#tab5 li").eq(i).find("a").removeClass("now");
				  $(".block_five").eq(i).hide();
				  $("#tab5_more li").eq(i).hide();
				}
		   }  
		 },function(){}
  );
  
  //楷模剪影学习导航好文共享
   $("#tab6 li").hover(
     function(){
		   for(var i=0;i<=$("#tab6 li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $("#tab6 li").eq(i).find("a").addClass("now");
				  $(".block_six").eq(i).show();
				  $("#tab6_more li").eq(i).show();
				}else{
				  $("#tab6 li").eq(i).find("a").removeClass("now");
				  $(".block_six").eq(i).hide();
				  $("#tab6_more li").eq(i).hide();
				}
		   }	    
		 },function(){}
  );
  
  //管理论坛时尚生活
   $("#tab7 li").hover(
     function(){
		   for(var i=0;i<=$("#tab7 li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $("#tab7 li").eq(i).find("a").addClass("now");
				  $(".block_seven").eq(i).show();
				  $("#tab7_more li").eq(i).show();
				}else{
				  $("#tab7 li").eq(i).find("a").removeClass("now");
				  $(".block_seven").eq(i).hide();
				  $("#tab7_more li").eq(i).hide();
				}
		   }   
		 },function(){}
  );
  
  //艺术之窗公益广告
   $("#tab8 li").hover(
     function(){
		   for(var i=0;i<=$("#tab8 li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $("#tab8 li").eq(i).find("a").addClass("now");
				  $(".block_eight").eq(i).show();
				  $("#tab8_more li").eq(i).show();
				}else{
				  $("#tab8 li").eq(i).find("a").removeClass("now");
				  $(".block_eight").eq(i).hide();
				  $("#tab8_more li").eq(i).hide();
				}
		   }    
		 },function(){}
  );
  
  //友情链接
   $(".footlink_tit li").hover(
     function(){
		   for(var i=0;i<=$(".footlink_tit li").length;i++)
		   {
			   if($(this).index()==i)
			   {
				  $(".footlink_tit li").eq(i).find("a").addClass("now");
				  $(".footlink_nr").eq(i).show();
				}else{
				  $(".footlink_tit li").eq(i).find("a").removeClass("now");
				  $(".footlink_nr").eq(i).hide();
				}
		   }    
		 },function(){}
  ); 
  
  //工程图展滚动特效
	  var test=new Marquee(
	  {
		MSClass:["index_pictures","scrollcase_list"],
		Direction : 2,
		Step : 1,
		Width : 1100,
		Height : 220,
		Timer : 20,
		DelayTime : 0,
		WaitTime : 1000,
		ScrollStep: 0,
		SwitchType: 0,
		AutoStart : 1
	  });
/*	  $$("LeftButton4").onclick = function(){test.Direction=2};
      $$("RightButton4").onclick = function(){test.Direction=3};*/

$("a").focus(function(){this.blur();});

