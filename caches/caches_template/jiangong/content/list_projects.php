<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container inner contanershadow">

    <div class="menu left">
        <h3><?php echo $CATEGORYS[$cat]['catname'];?></h3>
        <ul class="menu_list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20610d1974a931dac9e75b2263171842&action=category&catid=%24parentid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
            <li><a href="<?php echo $r['url'];?>" <?php if($k==$catid) { ?> class="now"<?php } ?>><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="content right">
        <div class="loc loc1">
        <h3 class="left"><?php echo $CATEGORYS[$parentid]['catname'];?></h3>
        <ul class="loc_menu right">
            <li><a href="/" class="home">首页</a></li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dff9e03dea511dbf45a15693c096470a&action=category&catid=%24cat&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $i=1?>
                <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                     <li <?php if($i==count($data)) { ?>class="last"<?php } ?>><a href="<?php echo $r['url'];?>" <?php if($r[catid] == $parentid) { ?> class="now"  <?php } ?>><?php echo $r['catname'];?></a></li>
                <?php $i++?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        </div>
        <div class="com_con">
            <ul class="project">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=039787030e0a64b02a8df26dcd4a331e&action=lists&catid=%24catid&num=12&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <div class="pic"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>"></a></div>
                    <div class="txt"><a href="<?php echo $r['url'];?>"><p title="<?php echo $r['title'];?>"><?php echo $r['title'];?></p></a></div>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>

            <div class="page">
                <?php echo $pages;?>
            </div>
        </div>
    </div>
</div>
<?php include template("content","foot"); ?>
<script>
    $(function () {
                for (var i = 0; i < $(".project li").length; i++) {
                    if ((i + 1) % 4 == 0) {
                        $(".project li").eq(i).css("margin-right", "0");
                    } else {
                    }

                }
            }
    )
    $("a").focus(function () {
        this.blur();
    });
</script>