<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="loc">
    <h3 class="left"><?php echo $CATEGORYS[$catid]['catname'];?></h3>
    <p class="right"><a href="/" class="home">首页</a><?php echo catpos($catid);?></p>
</div>
<script>

    $('.right>a:last').addClass('last')
</script>