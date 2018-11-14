<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","ad"); ?>
<div class="container inner contanershadow">
    <?php include template("content","nav"); ?>
    <div class="content right">
        <?php include template("content","position"); ?>
        <div class="com_con">
            <?php include template("content","menu"); ?>
            <div class="proCon">
                <?php echo $content;?>
              </div>
        </div>
    </div>
</div>
<?php include template("content","foot"); ?>