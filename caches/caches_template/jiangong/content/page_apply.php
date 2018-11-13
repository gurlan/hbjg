<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container inner contanershadow">
    <?php include template("content","nav"); ?>
    <div class="content right">
        <?php include template("content","position"); ?>
        <div class="com_con">
            <div class="apply_tit">求职者请填写以下信息在线申请或者发送简历至&nbsp;<a href="mailto:<?php echo $config['email'];?>"><?php echo $config['email'];?></a></div>
            <div class="apply_form">
                <h3>在线申请</h3>
                <form name="myform" method="post" action="/index.php?m=formguide&c=index&a=show&formid=12&siteid=1" enctype="multipart/form-data">

                    <div class="apply_item">
                        <label class="name left">应聘岗位：</label>
                        <div class="col1 border left">
                            <select class="form-control" name="info[job]" id="position_id">
                            </select>
                        </div>
                        <div class="x left">*</div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">姓名：</label>
                        <div class="left">
                            <input name="info[name]" type="text" class="border xm">
                        </div>
                        <div class="x left">*</div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">性别：</label>
                        <div class="col2 left">
                            <label>
                                <input type="radio" value="男" name="info[sex]">男
                            </label>
                            <label>
                                <input type="radio" value="女" name="info[sex]">女
                            </label>
                        </div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">出生日期：</label>
                        <div class="left">
                            <input name="info[birthday]" type="text" class="border xm">
                        </div>
                        <div class="x left">*</div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">学历：</label>
                        <div class="col2 left">
                            <label>
                                <input type="radio" value="硕士以上" name="info[xueli]">硕士以上 </label>
                            <label>
                                <input type="radio" value="本科" name="info[xueli]">本科 </label>
                            <label>
                                <input type="radio" value="专科" name="info[xueli]">专科 </label>
                            <label>
                                <input type="radio" value="中专" name="info[xueli]">中专 </label>
                            <label>
                                <input type="radio" value="技校" name="info[xueli]">技校 </label>
                        </div>
                        <div class="x left">*</div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">户口所在地：</label>
                        <div class="form-control left">
                            <input name="info[hukou]" type="text" class="form-control border hk">
                        </div>
                        <div class="x left">*</div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">现居住地：</label>
                        <div class="form-control left">
                            <input name="info[juzhu]" type="text" class="form-control border hk">
                        </div>
                        <div class="x left">*</div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">手机：</label>
                        <div class="mobile left">
                            <input name="info[mobile]" type="text" class="mobile border hk">
                        </div>
                        <div class="x left">*</div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">E-mail：</label>
                        <div class="mobile left">
                            <input name="info[email]" type="text" class="mobile border hk">
                        </div>
                    </div>
                    <div class="apply_item apply_item1">
                        <label class="name left">工作经历：</label>
                        <textarea name="info[jingli]" cols="" rows="" class="form-control-text border left"></textarea>
                        <div class="x left">*</div>
                    </div>
                    <div class="apply_item">
                        <label class="name left">验证码：</label>
                        <div class="left">
                            <input name="info[code]" type="text" class="mobile border hk" style="text-transform:uppercase;">&nbsp;&nbsp;
                            <?php echo form::checkcode('code_img', '4', '18', 120, 40);?>&nbsp;&nbsp;
                            <span style="color:red; font-weight:600;">*</span>
                            <?php pc_base::load_sys_class('form', '', 0);?>
                            <a href="javascript:" onclick="$('#code_img').click()">看不清？换一张</a>
                        </div>
                    </div>
                    <div class="apply_item apply_item1">
                        <input type="submit" name="dosubmit" value="立即申请" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include template("content","foot"); ?>
