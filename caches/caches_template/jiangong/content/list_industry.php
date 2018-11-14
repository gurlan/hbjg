<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container inner contanershadow">
    <?php include template("content","nav"); ?>
    <div class="content right">
        <?php include template("content","position"); ?>
        <div class="com_con">
            <?php include template("content","menu"); ?>
            <div class="proCon">
                <ul class="proImg">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=94d0c983599e2adfe1901e0c2c55a6b8&action=lists&catid=%24catid&num=100&order=listorder+ASC%2Cinputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>'100',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <div><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a></div>
                        <p><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></p>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include template("content","foot"); ?>
<script>
    $(function () {
                for (var i = 0; i < $(".proImg li").length; i++) {
                    if ((i + 1) % 5 == 0) {
                        $(".proImg li").eq(i).css("margin-right", "0");
                    }
                }
            }
    )
</script>
