<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container inner contanershadow">
    <?php include template("content","nav"); ?>
    <div class="content right">
        <?php include template("content","position"); ?>
        <div class="com_con">
            <div class="job_tit"><span class="w1 w1line">招聘岗位</span> <span class="w2 w1line">招录人数</span> <span class="w3 w1line">工作地点</span> <span class="w4 w1line">学历/学位</span> <span class="w5">详情</span></div>
            <div class="job_list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7e2ca7d72d68aa0e385b3c1cdc3f89ef&action=lists&catid=%24catid&num=100&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 100;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php if($loop) { ?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><span><?php echo $r['zhiwei'];?></span><span><?php echo $r['renshu'];?></span><span><?php echo $r['address'];?></span><span>><?php echo $r['xueli'];?></span><span>查看</span></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php } else { ?>
                资料上传中...
                <?php } ?>
            </div>
            <div class="hrlx">
                <h3>人力资源中心</h3>
                <div><b>地址:&nbsp;</b>石家庄市友谊北大街146号人力资源部<br>
                    <b>电话:&nbsp;</b><?php echo $config['tel'];?><br>
                    <b>邮箱:&nbsp;</b><a href="<?php echo $config['email'];?>"><?php echo $config['email'];?></a></div>
            </div>
        </div>
    </div>
</div>
<?php include template("content","foot"); ?>