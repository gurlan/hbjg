<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container inner contanershadow">
    <?php include template("content","news_nav"); ?>
    <div class="content right">
        <div class="loc loc1">
            <h3 class="left"><?php echo $CATEGORYS[$catid]['catname'];?></h3>
            <ul class="loc_menu loc_menu_news right">
                <li><a href="/" class="home">首页</a></li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dff9e03dea511dbf45a15693c096470a&action=category&catid=%24cat&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                <li><a href="<?php echo $r['url'];?>" <?php if($k==$parent) { ?> class="now" <?php } ?>><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="com_con">
            <ul class="news_col">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=039787030e0a64b02a8df26dcd4a331e&action=lists&catid=%24catid&num=12&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $i=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php if($i<2) { ?>
                <li class="first">
                    <div class="tit"><a href="<?php echo $r['url'];?>" title=" <?php echo $r['title'];?>">
                        <?php echo $r['title'];?></a><span><?php echo date("Y-m-d",$r[inputtime]);?></span></div>
                    <div class="txt">&nbsp;<?php echo $r['description'];?>
                        <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></div>
                </li>
                <?php } ?>
                <?php $i++?>
                <?php $n++;}unset($n); ?>

                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php if($i>1) { ?>
                <li><a href="<?php echo $r['url'];?>" title=" <?php echo $r['title'];?>"><?php echo $r['title'];?></a><span><?php echo date("Y-m-d",$r[inputtime]);?></span>
                </li>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a><span><?php echo date("Y-m-d",$r[inputtime]);?></span>
                </li>
                <?php } ?>
                <?php $n++;}unset($n); ?>
            </ul>

            <div class="page page1">
                <?php echo $pages;?>
            </div>
        </div>
    </div>
</div>
<?php include template("content","foot"); ?>