<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="proMenu">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d6f1f63e99a803e2e2a21808a93f003&action=category&catid=%24parent&num=2&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parent,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'2',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
    <a href="<?php echo $r['url'];?>" <?php if($r[catid] == $catid) { ?>class="current"<?php } ?>><?php echo $r['catname'];?></a>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</div>
