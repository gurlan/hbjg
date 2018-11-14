<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container contanershadow">
    <div class="loc inner" id="honor_loc">
        <h3 class="left"><?php echo $CATEGORYS[$catid]['catname'];?></h3>
        <p class="right"><a href="/" class="home">首页</a> > <?php echo catpos($catid);?></p>
    </div>

    <div class="honor_tit">
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dff9e03dea511dbf45a15693c096470a&action=category&catid=%24cat&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
            <li><a href="<?php echo $r['url'];?>" <?php if($k==$parent) { ?> class="now"<?php } ?>><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>

    <div class="honor_con inner">
        <script type="text/javascript" src="/statics/jiangong/js/honor.js"></script>
        <div class="mainNav_c">
            <div class="honor" style="clear:both;">
                <div id="imageFlow">
                    <div class="top"></div>
                    <div class="bank">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=73478b9b872a0027d805cafbba76fa3d&action=lists&catid=%24catid&num=120&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 120;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a rel="<?php echo $r['thumb'];?>" title="<?php echo $r['title'];?>" target="_blank"></a>

                        <?php $n++;}unset($n); ?>
                    </div>
                    <div class="text">
                        <div class="title">Loading</div>
                        <div class="legend"></div>
                    </div>
                    <div class="scrollbar"><img class="track" src="/statics/jiangong/goh.png" alt="">
                        <img class="arrow-left"src="/statics/jiangong/images/gol.png" alt="">
                        <img class="arrow-right" src="/statics/jiangong/images/ggor.png" alt="">
                        <img class="bar" src="/statics/jiangong/images/ggo.png" alt=""></div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php include template("content","foot"); ?>