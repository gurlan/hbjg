<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container inner contanershadow">
    <?php include template("content","news_nav"); ?>
    <div class="content right">
        <?php include template("content","position"); ?>
        <div class="com_con">
            <div class="job_tit"><span class="w1 w1line">招聘岗位</span> <span class="w2 w1line">招录人数</span> <span class="w3 w1line">工作地点</span> <span class="w4 w1line">学历/学位</span> <span class="w5">详情</span></div>
            <div class="job_list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=09c82f460dda798c2295b72933d0b466&action=lists&catid=%24catid&num=100&moreinfo=1+order%3D&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 100;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php if($data) { ?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><span class="w1" style="display: block;height: 32px;line-height: 32px;text-align: center;float: left;"><?php echo $r['title'];?></span>
                        <span class="w2" style="display: block;height: 32px;line-height: 32px;text-align: center;float: left;"><?php echo $r['renshu'];?></span>
                        <span class="w3" style="display: block;height: 32px;line-height: 32px;text-align: center;float: left;"><?php echo $r['address'];?></span>
                        <span class="w4" style="display: block;height: 32px;line-height: 32px;text-align: center;float: left;"><?php echo $r['xueli'];?></span>
                        <span class="w5" style="display: block;height: 32px;line-height: 32px;text-align: center;float: left;">
                            <a href="<?php echo $r['url'];?>">查看</a></span></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php } else { ?>
                资料上传中...
                <?php } ?>
            </div>
            <div class="hrlx" style="clear: both">
                <h3>人力资源中心</h3>
                <div><b>地址:&nbsp;</b>石家庄市友谊北大街146号人力资源部<br>
                    <b>电话:&nbsp;</b><?php echo $config['tel'];?><br>
                    <b>邮箱:&nbsp;</b><a href="<?php echo $config['email'];?>"><?php echo $config['email'];?></a></div>
            </div>
        </div>
    </div>
</div>
<?php include template("content","foot"); ?>