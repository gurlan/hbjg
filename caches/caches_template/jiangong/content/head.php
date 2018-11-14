<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="inhe v1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
<link rel="stylesheet" ID="skin" type="text/css" />
    <link rel="stylesheet" href="/statics/jiangong/css/css.css" type="text/css" />
<script type="text/javascript" src="/statics/jiangong/js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="/statics/jiangong/js/jquery.SuperSlide.2.1.1.js" ></script>
<script type="text/javascript" src="/statics/jiangong/js/MSClass.js" ></script>
<script type="text/javascript" src="/statics/jiangong/js/nav.js" ></script>
<script type="text/javascript" src="/statics/jiangong/js/jquery.cycle.all.js" ></script>
<script>
    $(function(){
        $('#play_btn').click(function(){
            $('#v_box').fadeIn(100);
        })
        $('#shut').click(function(){
            $('#v_box').fadeOut(100);
        });
    });

</script>
<style>
.v_box{width:700px;height:520px;background:#fff;position:fixed;top:50%;left:50%;z-index:522222;margin-top:-305px;margin-left:-350px;border-radius:5px;box-shadow: #333 0px 0px 10px;_position:absolute;*border:1px solid #333;border:1px solid #333;display:none;}
.v_box h3{color:#333;height:46px;font-size:18px;padding-left:28px;line-height:46px;overflow:hidden;font-weight:bold;}
.v_box div{width:650px;margin:0 auto;background:#000;}
.shut{position:absolute;width:30px;height:30px;display:block;top:8px;right:10px;color:#333;font-size:30px;line-height:22px;overflow:hidden;text-align:center;cursor:pointer;}
.shut:hover{text-decoration:none;color:#f00;}
.shut:active{color:#a40606;}
.h1::after{position: absolute;content:'';display: block;height: 6px;width: 220px;border-top:4px dotted #D6D6D6;left: 154px;top: 9px;}
.li7 span{margin-right:-2px;}
/*2017.12.29*/
.tiao{height:100px; margin-bottom:20px;}
</style>
</head>
<body >
<script type="text/javascript">
function SetCookie(name,value){
     var argv=SetCookie.arguments;
     var argc=SetCookie.arguments.length;
     var expires=(2<argc)?argv[2]:null;
     var path=(3<argc)?argv[3]:null;
     var domain=(4<argc)?argv[4]:null;
     var secure=(5<argc)?argv[5]:false;
     document.cookie=name+"="+escape(value)+((expires==null)?"":("; expires="+expires.toGMTString()))+((path==null)?"":("; path="+path))+((domain==null)?"":("; domain="+domain))+((secure==true)?"; secure":"");
}
function GetCookie(Name) {
     var search = Name + "=";
     var returnvalue = "";
     if (document.cookie.length > 0) {
           offset = document.cookie.indexOf(search);
           if (offset != -1) {
                 offset += search.length;
                 end = document.cookie.indexOf(";", offset);
                 if (end == -1)
                       end = document.cookie.length;
                 returnvalue=unescape(document.cookie.substring(offset,end));
           }
     }
     return returnvalue;
}
var thisskin;
thisskin=GetCookie("nowskin");
if(thisskin!="")
     skin.href=thisskin;
else
     skin.href="/statics/jiangong/css/style-red.css";
function changecss(url){
     if(url!=""){
           skin.href=url;
           var expdate=new Date();
           expdate.setTime(expdate.getTime()+(24*60*60*1000*30));
           //expdate=null;
                                   //以下设置COOKIES时间为1年,自己随便设置该时间..
           SetCookie("nowskin",url,expdate,"/",null,false);
     }
}
function stop(){
return false;
}
document.oncontextmenu=stop;
</script>
<?php $tmp=explode(',',$CATEGORYS[$catid][arrparentid]);$num=count($tmp);?>
<?php $parent = $CATEGORYS[$catid][parentid]?>
<?php if($num==1) { ?>

<?php $cat=$catid;?>

<?php } else { ?>

<?php $cat=$tmp[1];?>

<?php } ?>


<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c7d458a1e72062ec730d2aa044a863e7&action=lists&catid=26&num=1&moreinfo=1+order%3D&return=config\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$config = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>'1',));}?>
<?php $config = $config[1]?>
<div class="header">
  <div class="inner"> <a href="/"  class="logo left"><img src="/statics/jiangong/images/logo.png" ></a>
    <div class="hrig right">
      <div class="hriglink left"><a href="#"  >企业邮箱</a><a href=#" >网站地图</a><a href="" style="background:none;">加入收藏</a></div>
      <div class="cols left"><a onclick="changecss('/statics/jiangong/css/style.css')" href="javascript:return false;" title="蓝色主题"><img src="/statics/jiangong/images/blue.png" ></a><a onclick="changecss('/statics/jiangong/css/style-red.css')" href="javascript:return false;" title="红色主题"><img src="/statics/jiangong/images/red.png" ></a></div>
    </div>
  </div>
</div>
<div class="nav">
  <div class="inner">
    <ul>
      <li><a href="/"  <?php if($catid==0) { ?>  class="now" <?php } ?>>首页</a></li>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
      <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
      <li><a href="<?php echo $v['url'];?>"  _t_nav="<?php echo $v['catdir'];?>" <?php if($cat==$v[catid]) { ?> class="now" <?php } ?>><?php echo $v['catname'];?></a></li>
      <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  </div>
</div>
<div class="subnavback">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
    <?php $i=1?>
  <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
  <div class="subnav1" id="<?php echo $v['catdir'];?>" _t_nav="<?php echo $v['catdir'];?>">
    <div class="navigation">
      <dl class="dl<?php echo $i++?>">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c1ce63d1779fe818e0c6dd626ba8d02&action=category&catid=%24v%5B%27catid%27%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$v['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $l) { ?>
        <dd><a href="<?php echo $l['url'];?>" ><?php echo $l['catname'];?></a></dd>
        <?php $n++;}unset($n); ?>
      </dl>
    </div>
  </div>
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>