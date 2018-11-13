<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container contanershadow">
    <div class="loc inner" id="honor_loc">
        <h3 class="left"><?php echo $CATEGORYS[$catid]['catname'];?></h3>
        <p class="right"><a href="/" class="home">首页</a>  > <?php echo catpos($catid);?></p>
    </div>


    <div class="honor_tit">
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dff9e03dea511dbf45a15693c096470a&action=category&catid=%24cat&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
            <li><a href="<?php echo $r['url'];?>" <?php if($k==$catid) { ?> class="now"<?php } ?>><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>

    <div class="honor_con inner" style="min-height:380px;">
        <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;" class="honor_table"><thead>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2318b1106bf442b017ffaa5759fc83d8&action=category&catid=%24parent&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parent,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
        <td><?php echo $r['catname'];?></td>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </thead>
            <tbody>
            <tr>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2318b1106bf442b017ffaa5759fc83d8&action=category&catid=%24parent&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parent,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                <td>
                    <blockquote>
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cc35e2deff0fb9d5f54e417d43eb6c58&action=lists&catid=%24r%5Bcatid%5D&num=120&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 120;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$r[catid],'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><?php echo $r['title'];?></li>
                            <?php $n++;}unset($n); ?>

                        </ul>
                    </blockquote>
                </td>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </tr>
            </tbody>
        </table>
    </div>

</div>
<?php include template("content","foot"); ?>
<script>
    $(".honor_tit ul li").hover(function(){
                $(this).find("dl").slideDown("0.2");
            },function(){
                $(this).find("dl").slideUp("0.2");
            }
    )
</script>