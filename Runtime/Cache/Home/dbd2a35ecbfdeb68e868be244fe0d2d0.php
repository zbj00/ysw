<?php if (!defined('THINK_PATH')) exit();?><?php if(!empty($cm_list)): ?><ul class="list"><?php if(is_array($cm_list)): $i = 0; $__LIST__ = $cm_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><div class="autoheight">
        <p><span class="time"><?php echo (date('Y-m-d',$ppvod["cm_addtime"])); ?></span><strong><?php echo ($ppvod["cm_floor"]); ?>楼 <?php echo (remove_xss(htmlspecialchars($ppvod["user_name"]))); ?></strong><br /><?php echo (remove_xss(htmlspecialchars($ppvod["cm_content"]))); ?></p>
    </div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
    <?php if($cm_count > C('user_cmnum')): ?><div class="pages"><?php echo ($cm_pages); ?></div><?php endif; ?><?php endif; ?>
<!--发表评论-->
<div class="form">
    <textarea name="comment_content" id="comment_content" rows="5" onfocus="if(this.value=='请在这里发表您的个人看法，最多200个字。'){this.value='';}" onblur="if(this.value==''){this.value='请在这里发表您的个人看法，最多200个字。';};" maxlength="200">请在这里发表您的个人看法，最多200个字。</textarea>
    <p><span id="comment_tips"></span><input id="comment_button" class="cm_button" onclick="FF.Comment.Post();" type="button" value="发表评论"/></p>
</div>