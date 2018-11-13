<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>

<?php $banner = getads(11)?>
<div class="bigPicbox">
    <div class="slider">
        <?php $n=1;if(is_array($banner[d])) foreach($banner[d] AS $r) { ?>
        <div style="background-image:url(<?php echo $r['imageurl'];?>);"></div>
        <?php $n++;}unset($n); ?>
    </div>
    <div id="arrow">
        <div class="inner" style="width:1200px; height:410px;">
            <div id="pager"></div>
            <div id="prevnext">
                <a href="javascript:void(0);" id="prev"><img src="/statics/jiangong/images/prev.png"></a>
                <a href="javascript:void(0);" id="next"><img src="/statics/jiangong/images/next.png"></a>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="scrollnews">
        <div class="inner">
            <p class="left"><a href="article_cat.php-id=70.htm"><b>集团公告</b></a></p>
            <div class="news_wrap left">
                <ul class="news_list">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e5ee6293db194c4d8777ee73cb16ea4b&action=position&posid=18&order=listorder+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder ASC','limit'=>'6',));}?>
                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <li><a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>"><?php echo $val['title'];?></a><span><?php echo date("Y-m-d",$val[inputtime]);?></span>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <div class="arrow">
                    <a href="javascript:void(0);" class="aleft"><img src="/statics/jiangong/images/iconup.png"></a>
                    <a href="javascript:void(0);" class="aright"><img src="/statics/jiangong/images/icondown.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="tiao inner">
        <?php $banner = getads(12)?>
        <img src="<?php echo $banner['d']['0']['imageurl'];?>"/>
    </div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c598cfa624e66654f9983ced7cfc3946&action=position&posid=18&order=listorder+ASC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder ASC','limit'=>'5',));}?>
    <div class="hotnews inner">
        <div class="focusPic left">
            <div class="picnews">
                <ul class="pic">
                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <li><img src="<?php echo $val['thumb'];?>"></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <div class="txt-bg"></div>
                <div class="txt">
                    <ul>
                        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                        <li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <ul class="num">
                    <?php $i=1?>
                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <li><a><?php echo $i;?></a><span></span></li>
                    <?php $i++?>
                    <?php $n++;}unset($n); ?>

                </ul>
            </div>
        </div>
        <div class="innews right">
            <div class="innews_tit"><h3 class="left"><a href="<?php echo $CATEGORYS['159']['url'];?>"><?php echo $CATEGORYS['159']['catname'];?></a></h3>
                <p class="right"><a href="<?php echo $CATEGORYS['159']['url'];?>">更多</a></p></div>
            <ul class="innews_list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=99ed15e433581efef990fcecd08da011&action=lists&catid=159&num=1&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'159','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'159','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $i=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php if($i==0) { ?>
                <li class="first">
                    <h3><a href="<?php echo $r['url'];?>" title=" <?php echo $r['title'];?>"><?php echo $r['title'];?></a></h3>
                    <p><?php echo $r['description'];?></p>
                </li>
                <?php } ?>
                <?php $i++?>
                <?php $n++;}unset($n); ?>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=316734f1791e9fe5c34e87a147a42dc6&action=lists&catid=159&num=7&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'159','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'159','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $i=0?>
                <?php if($i>0) { ?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a><span>(<?php echo date("m-d",$val[inputtime]);?>)</span></li>
                <?php } ?>
                <?php $i++?>
                <?php $n++;}unset($n); ?>

            </ul>
        </div>
    </div>
    <div class="midads1 inner">
        <div class="midads1_pannel left">
            <?php $banner = getads(13)?>

            <a href="" target="_blank">  <img src="<?php echo $banner['d']['0']['imageurl'];?>"/></a>
        </div>
        <div class="midads1_search right">
            <form action="http://www.hbjgjt.cn/search.php" method="post">
                <input type="text" class="txt left" name="keywords" value="热搜：党的群众路线教育实践活动"
                       onfocus="if(this.value=='热搜：党的群众路线教育实践活动'){this.value='';}"
                       onblur="if(this.value==''){this.value='热搜：党的群众路线教育实践活动';}"><input type="submit" value=" "
                                                                                         class="btn right">
            </form>
        </div>
    </div>
    <div class="colcon1 inner">
        <div class="pannel01 left">
            <div class="pub_tit">
                <ul class="channel" id="tab1">
                    <li><a href="javascript:void(0);" class="now"><?php echo $CATEGORYS['162']['catname'];?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $CATEGORYS['163']['catname'];?></a></li>
                </ul>
                <ul class="pub_more" id="tab1_more">
                    <li><a href="<?php echo $CATEGORYS['162']['url'];?>">更多</a></li>
                    <li style="display:none;"><a href="<?php echo $CATEGORYS['163']['url'];?>">更多</a></li>
                </ul>
            </div>

            <div class="block_one">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2966f59dbd786f8cf32ac0abe82189a9&action=lists&catid=162&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'162','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'162','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>

            <div class="block_one" style="display:none;">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11b55e1bbee6176b777b88647d41b29d&action=lists&catid=163&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'163','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'163','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
        </div>

        <div class="pannel01 pannelmar left">
            <div class="pub_tit">
                <ul class="channel channel2" id="tab2">
                    <li><a href="javascript:void(0);" class="now"><?php echo $CATEGORYS['164']['catname'];?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $CATEGORYS['165']['catname'];?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $CATEGORYS['166']['catname'];?></a></li>
                </ul>
                <ul class="pub_more" id="tab2_more">
                    <li><a href="<?php echo $CATEGORYS['164']['url'];?>">更多</a></li>
                    <li style="display:none;"><a href="<?php echo $CATEGORYS['165']['url'];?>">更多</a></li>
                    <li style="display:none;"><a href="<?php echo $CATEGORYS['166']['url'];?>">更多</a></li>
                </ul>
            </div>

            <div class="block_two">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51669e4bc8322637f379c35fa2705411&action=lists&catid=164&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'164','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'164','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>

            <div class="block_two" style="display:none;">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fc10151aa89258136a04fb004937799b&action=lists&catid=165&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'165','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'165','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>

            <div class="block_two" style="display:none;">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2522956d3c391b18179ea6f3a31b991b&action=lists&catid=166&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'166','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'166','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>

        </div>

        <div class="pannel02 right">
            <div class="channel3">
                <h3 class="h31"><a href="<?php echo $CATEGORYS['210']['url'];?>"><?php echo $CATEGORYS['210']['catname'];?></a></h3>
                <p><a href="<?php echo $CATEGORYS['210']['url'];?>">更多</a></p>
            </div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d5b20c912ee639edc3f7b73fd5554f28&action=lists&catid=210&num=1&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'210','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'210','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="videoimg">
                <a href="javascript:void(0);" id="play_btn"><img src="<?php echo $r['thumb'];?>"></a>
            </div>
            <div class="videotit"><a href=""><?php echo $r['title'];?></a></div>
            <?php $n++;}unset($n); ?>
        </div>

    </div>
    <div class="hr"></div>
    <div class="colcon2 inner">
        <div class="pannel01 left">
            <div class="pub_tit">
                <ul class="channel" id="tab3">
                    <li><a href="javascript:void(0);" class="now"><?php echo $CATEGORYS['167']['catname'];?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $CATEGORYS['168']['catname'];?></a></li>
                </ul>
                <ul class="pub_more" id="tab3_more">
                    <li><a href="<?php echo $CATEGORYS['167']['url'];?>">更多</a></li>
                    <li style="display:none;"><a href="<?php echo $CATEGORYS['168']['url'];?>">更多</a></li>
                </ul>
            </div>

            <div class="block_three">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e23a58b6b71ca876eb8d6987f306a915&action=lists&catid=167&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'167','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'167','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>

            <div class="block_three" style="display:none;">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b5f6a45ec812fb20215fdd4fb611e17&action=lists&catid=168&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'168','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'168','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
        </div>

        <div class="pannel01 pannelmar left">
            <div class="pub_tit">
                <ul class="channel channel2" id="tab4">
                    <li><a href="javascript:void(0);" class="now"><?php echo $CATEGORYS['169']['catname'];?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $CATEGORYS['170']['catname'];?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $CATEGORYS['171']['catname'];?></a></li>
                </ul>
                <ul class="pub_more" id="tab4_more">
                    <li><a href="<?php echo $CATEGORYS['169']['url'];?>">更多</a></li>
                    <li style="display:none;"><a href="<?php echo $CATEGORYS['170']['url'];?>">更多</a></li>
                    <li style="display:none;"><a href="<?php echo $CATEGORYS['171']['url'];?>">更多</a></li>
                </ul>
            </div>

            <div class="block_four">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7c68dcc8ad029d6841471e5f8ba829c8&action=lists&catid=169&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'169','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'169','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>

            <div class="block_four" style="display:none;">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b9f53138664b7659650a51ddd4ec89f1&action=lists&catid=170&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'170','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'170','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>

            <div class="block_four" style="display:none;">
                <ul class="listcon">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6075e87959f3a30d4b5cda84a48df493&action=lists&catid=171&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'171','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'171','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
        </div>

        <div class="pannel02 right">
            <div class="channel3 channel33">
                <h3 class="h32"><a href="<?php echo $CATEGORYS['196']['url'];?>"><?php echo $CATEGORYS['196']['catname'];?></a></h3>
                <p><a href="<?php echo $CATEGORYS['196']['url'];?>">更多</a></p>
            </div>
            <ul class="bidlist">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7c4232f0b9c9a0fa317a567875d09cc7&action=lists&catid=196&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'196','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'196','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <div class="midads2 inner">
        <a href="" target="_blank">
            <?php $banner = getads(14)?>

             <img src="<?php echo $banner['d']['0']['imageurl'];?>"/>

        </a>
    </div>
    <div class="colcon3 inner">
        <div class="colconL left">
            <div class="colconLT">

                <div class="pannel01 left">
                    <div class="colconL_tit">
                        <ul class="channel4" id="tab5">
                            <li><a href="javascript:void(0);" class="now"><?php echo $CATEGORYS['172']['catname'];?></a></li>
                            <li><a href="javascript:void(0);"><?php echo $CATEGORYS['173']['catname'];?></a></li>
                        </ul>
                        <ul class="pub_more" id="tab5_more">
                            <li><a href="<?php echo $CATEGORYS['172']['url'];?>">更多</a></li>
                            <li style="display:none;"><a href="<?php echo $CATEGORYS['173']['url'];?>">更多</a></li>
                        </ul>
                    </div>
                    <div class="block_five">
                        <ul class="listcon listcon_zc">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c33752066208343cacc3b451343974e9&action=lists&catid=172&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'172','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'172','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <div class="block_five" style="display:none;">
                        <ul class="listcon listcon_zc">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc72a76dce2ee357bf30810da70ca5c9&action=lists&catid=173&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'173','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'173','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>


                <div class="pannel01 right">
                    <div class="colconL_tit">
                        <ul class="channel4" id="tab6">
                            <li><a href="javascript:void(0);" class="now"><?php echo $CATEGORYS['174']['catname'];?></a></li>
                            <li><a href="javascript:void(0);"><?php echo $CATEGORYS['175']['catname'];?></a></li>
                            <li><a href="javascript:void(0);"><?php echo $CATEGORYS['176']['catname'];?></a></li>
                        </ul>
                        <ul class="pub_more" id="tab6_more">
                            <li><a href="<?php echo $CATEGORYS['174']['url'];?>">更多</a></li>
                            <li style="display:none;"><a href="<?php echo $CATEGORYS['175']['url'];?>">更多</a></li>
                            <li style="display:none;"><a href="<?php echo $CATEGORYS['176']['url'];?>">更多</a></li>
                        </ul>
                    </div>
                    <div class="block_six">
                        <ul class="listcon listcon_zc">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b225da9b0236f288b16eeef7e0dc81c&action=lists&catid=174&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'174','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'174','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <div class="block_six" style="display:none;">
                        <ul class="listcon listcon_zc">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=46bbc777edb2b0d8cab74133162e124c&action=lists&catid=175&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'175','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'175','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <div class="block_six" style="display:none;">
                        <ul class="listcon listcon_zc">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=87d4a1d4a62566e52012529db14c1ab1&action=lists&catid=176&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'176','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'176','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="colconLB">

                <div class="pannel01 left">
                    <div class="colconL_tit">
                        <ul class="channel4" id="tab7">
                            <li><a href="javascript:void(0);" class="now"><?php echo $CATEGORYS['177']['catname'];?></a></li>
                            <li><a href="javascript:void(0);"><?php echo $CATEGORYS['178']['catname'];?></a></li>
                        </ul>
                        <ul class="pub_more" id="tab7_more">
                            <li><a href="<?php echo $CATEGORYS['177']['url'];?>">更多</a></li>
                            <li style="display:none;"><a href="<?php echo $CATEGORYS['178']['url'];?>">更多</a></li>
                        </ul>
                    </div>
                    <div class="block_seven lt_bg">
                        <ul class="listcon listcon_zc">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0552ffd71e2f0de35d725c406b158f7a&action=lists&catid=177&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'177','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'177','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <div class="block_seven lt_bg" style="display:none;">
                        <ul class="listcon listcon_zc">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7f078b2b7a3a1fbafbf738c5ceccd8f2&action=lists&catid=178&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'178','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'178','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>


                <div class="pannel01 right">
                    <div class="colconL_tit">
                        <ul class="channel4" id="tab8">
                            <li><a href="javascript:void(0);" class="now"><?php echo $CATEGORYS['183']['catname'];?></a></li>
                            <li><a href="javascript:void(0);"><?php echo $CATEGORYS['184']['catname'];?></a></li>
                        </ul>
                        <ul class="pub_more" id="tab8_more">
                            <li><a href="<?php echo $CATEGORYS['183']['url'];?>">更多</a></li>
                            <li style="display:none;"><a href="<?php echo $CATEGORYS['184']['url'];?>">更多</a></li>
                        </ul>
                    </div>

                    <div class="block_eight">
                        <div class="imgcollect">
                            <div class="imgcollect_slider">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bb5e64ad71aec75dfcb2a91b9ae47cee&action=lists&catid=183&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'183','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'183','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <div>
                                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt=""><?php echo $r['title'];?></a>
                                </div>
                                <?php $n++;}unset($n); ?>
                            </div>
                            <div id="leftright">
                                <a href="javascript:void(0);" id="left"><img src="/statics/jiangong/images/arrowleft.png"></a>
                                <a href="javascript:void(0);" id="right"><img src="/statics/jiangong/images/arrowright.png"></a>
                            </div>
                        </div>
                    </div>

                    <div class="block_eight" style="display:none;">
                        <div class="imgcollect">
                            <div class="imgcollect_slider1">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6aa959cc022691a95264bde59d2cfa5b&action=lists&catid=184&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'184','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'184','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <div>
                                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" alt=""><?php echo $r['title'];?></a>
                                </div>
                                <?php $n++;}unset($n); ?>
                            </div>
                            <div id="leftright">
                                <a href="javascript:void(0);" id="left"><img src="/statics/jiangong/images/arrowleft.png"></a>
                                <a href="javascript:void(0);" id="right"><img src="/statics/jiangong/images/arrowright.png"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="colconR right">
            <ul class="zt_list">
                <li class="first"><a href="javascript:"><img src="/statics/jiangong/images/zt_list1.jpg"></a></li>
                <li><a href="javascript:" target="_blank"><img src="/statics/jiangong/images/1481933871225514433.jpg"></a></li>
                <li><a href="javascript:" target="_blank"><img src="/statics/jiangong/images/1481933894504247021.jpg"></a></li>
                <li><a href="javascript:" target="_blank"><img src="/statics/jiangong/images/1481933920251021515.jpg"></a></li>
            </ul>
            <div class="serv_tit">便民服务</div>
            <ul class="serv_list">
                <li><span><img src="/statics/jiangong/images/weather_01.png"></span><a
                        target="_blank">天气查询</a></li>
                <li><span><img src="/statics/jiangong/images/weather_02.png"></span><a
                        target="_blank">空气质量</a></li>
                <li><span><img src="/statics/jiangong/images/weather_03.png"></span><a
                        target="_blank">万年历查询</a></li>
                <li><span><img src="/statics/jiangong/images/weather_04.png"></span><a
                        target="_blank">车牌查询</a></li>
                <li><span><img src="/statics/jiangong/images/weather_05.png"></span><a
                        target="_blank">公交线路查询</a></li>
                <li><span><img src="/statics/jiangong/images/weather_06.png"></span><a
                        target="_blank">火车时刻</a></li>
                <li><span><img src="/statics/jiangong/images/weather_07.png"></span><a
                        target="_blank">飞机航班</a></li>
                <li><span><img src="/statics/jiangong/images/weather_08.png"></span><a
                        target="_blank">英语词典</a></li>
            </ul>
        </div>
    </div>
    <div class="scrollcase">
        <div class="inner">
            <div class="scrollcase_tit">
                <h3><a href="<?php echo $CATEGORYS['156']['url'];?>"><?php echo $CATEGORYS['156']['catname'];?></a></h3>
                <p class="pub_more"><a href="<?php echo $CATEGORYS['156']['url'];?>">更多</a></p>
            </div>
            <div id="index_pictures">
                <ul id="scrollcase_list">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=db43adacbaa271cb098891bc7b228396&action=lists&catid=156&num=100&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 100;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'156','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'156','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <div><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>"></a></div>
                        <p><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></p>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footlink inner">
        <div class="footlink_tit">
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=75f4e96090b271b617651415436c0a42&action=category&catid=205&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'205','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                 <?php $i= 0;?>
                <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                <li><a href="javascrpt:void(0);" <?php if($i<1) { ?> class="now" <?php } ?>><?php echo $r['catname'];?></a></li>
                <?php $i++?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <!--<li><a href="javascrpt:void(0);">友情链接</a></li>-->
            </ul>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=75f4e96090b271b617651415436c0a42&action=category&catid=205&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'205','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
        <?php $i= 0;?>
        <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
        <div class="footlink_nr"  <?php if($i>0) { ?>  style="display:none;"<?php } ?>>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1893b001ab88f11d5955aa1fa3c24&action=lists&catid=%24catid&num=30&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 30;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['link'];?>"><?php echo $r['title'];?></a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
        </div>
        <?php $i++?>
        <?php $n++;}unset($n); ?>




    </div>
    <div class="copy">
        <div>
            <p class="first">版权所有&nbsp;&copy;&nbsp;<?php echo $config['copyright'];?>&nbsp;&nbsp;&nbsp;<?php echo $config['beian'];?>&nbsp;
                &nbsp;<a target="_blank" href="#" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/statics/jiangong/images/beian.png" style=" vertical-align:middle;"/>&nbsp;<?php echo $config['police'];?>&nbsp;</a>
            </p>
            <p>电话:&nbsp;<?php echo $config['tel'];?>&nbsp;&nbsp;&nbsp;传真:&nbsp;<?php echo $config['fax'];?>&nbsp;&nbsp;&nbsp;E-mail:<a href="<?php echo $config['email'];?>"><?php echo $config['email'];?></a></p>
            <p>地址:&nbsp;<?php echo $config['addr'];?>&nbsp;&nbsp;&nbsp;邮编:&nbsp;<?php echo $config['code'];?></p>
        </div>
    </div>
</div>

<div id="v_box" class="v_box">
    <a id="shut" class="shut">×</a>
    <h3>视频播放</h3>
    <div id="video" class="overlay-video-v2-plug">
        <embed id="CuPlayerVideo_video_embed" src="JZminiPlayer.swf" type="application/x-shockwave-flash"
               allowscriptaccess="always" allowfullscreen="true" wmode="Transparent"
               flashvars="autoplay=true&file=cn.flv&img=start.jpg" height="430" width="650">
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="/statics/jiangong/js/index.js"></script>
