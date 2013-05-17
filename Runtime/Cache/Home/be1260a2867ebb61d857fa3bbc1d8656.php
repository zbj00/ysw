<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($sitename); ?>-留言本</title>
<meta name="keywords" content="<?php echo ($keywords); ?>">
<meta name="description" content="<?php echo ($sitename); ?>求片留言本，本站管理员将在第一时间回复与处理你的回复！">
<!--ff.system.header -->
<script language="javascript">var Root='<?php echo ($root); ?>';var Sid='<?php echo ($sid); ?>';var Cid='<?php echo ($list_id); ?>';<?php if($sid == 1): ?>var Id='<?php echo ($vod_id); ?>';<?php else: ?>var Id='<?php echo ($news_id); ?>';<?php endif; ?></script>
<script language="javascript" src="__PUBLIC__/js/jquery.js" charset="utf-8"></script>
<script language="javascript" src="__PUBLIC__/js/jquery-autocomplete.js" charset="utf-8"></script>
<script language="javascript" src="__PUBLIC__/js/jquery-lazyload.js" charset="utf-8"></script>
<script language="javascript" src="__PUBLIC__/js/home.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/home.css">
<link rel="stylesheet" type="text/css" href="<?php echo ($tpl); ?>style.css">
<!--ff.tpl.js
<script language="javascript" src="<?php echo ($tpl); ?>js.js" charset="utf-8"></script>-->
<!--slide.js-->
<script language="javascript" src="<?php echo ($tpl); ?>/js/jquery.flexslider.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="<?php echo ($tpl); ?>flexslider.css">
<!--ff.留言本.表单验证 -->
<script language="javascript">
var reloadcode = function(){
	$('#safecode').attr('src','<?php echo ($root); ?>index.php?s=Vcode-Index-time='+new Date());
}
$(document).ready(function(){
	$('#gb_content').focus(function(){
		if($('#gb_content').val() == '请留下您的宝贵意见，最多200个字。'){
			$('#gb_content').val('');
		}
	});
	$('#gb_content').blur(function(){
		if($('#gb_content').val() == ''){
			$('#gb_content').val('请留下您的宝贵意见，最多200个字。');
		}
	});	
	$('#gb_vcode').focus(function(){
		$('#gb_vcode_html').html('<a href="javascript:reloadcode()"><img src="<?php echo ($root); ?>index.php?s=Vcode-Index" alt="看不清楚换一张" name="safecode" border="0" align="absbottom" id="safecode"></a>');
	});
	$("#guestbook").submit( function () {
		if($('#gb_content').val().length>200){
			$('#gb_tips').html('您输入的留言信息过长，请删减一些！');
  			return false;
		}
		if($('#gb_content').val() == '请留下您的宝贵意见，最多200个字。'){
			$('#gb_content').select();
			$('#gb_tips').html('请输入留言信息！');
  			return false;
		}
		if($('#gb_vcode').val() == ''){
			$('#gb_tips').html('请输入验证码！');
			return false;
		}		
	});
});
</script>
</head>
<body>
<div class="wrap">
    <div class="header">
    <div class="logo"><a href="<?php echo ($root); ?>"><img src="<?php echo ($tpl); ?>images/logo.gif" alt="<?php echo ($sitename); ?>"/></a></div>
    <div class="hots"><?php echo ($hotkey); ?></div>
    <div class="nav">
        <a href="<?php echo ($root); ?>"><strong>首页</strong></a>
        <?php if(is_array($list_menu)): $i = 0; $__LIST__ = $list_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(getlistson($ppvod['list_id']) == 1): ?><a href="<?php echo ($ppvod["list_url"]); ?>" <?php if(($ppvod["list_id"])  ==  $list_id): ?>class="on"<?php endif; ?><?php if(($ppvod["list_id"])  ==  $list_pid): ?>class="on"<?php endif; ?> <?php if(($ppvod["list_id"])  ==  $list_pid): ?>class="on"<?php endif; ?>><?php echo ($ppvod["list_name"]); ?></a><?php endif; ?>
        <?php if(is_array($ppvod["son"])): $i = 0; $__LIST__ = $ppvod["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvod["list_url"]); ?>" <?php if(($ppvod["list_id"])  ==  $list_id): ?>class="on"<?php endif; ?><?php if(($ppvod["list_id"])  ==  $list_pid): ?>class="on"<?php endif; ?>><?php echo ($ppvod["list_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>      
    </div>
    <div class="query">
    	<div><a href="<?php echo getlistname(1,'list_url');?>">电影</a>&nbsp;|&nbsp;<a href="<?php echo getlistname(2,'list_url');?>">电视剧</a>&nbsp;|&nbsp;<a href="<?php echo ($url_special); ?>">影视专题</a>&nbsp;|&nbsp;<a href="<?php echo ff_mytpl_url('my_new.html');?>">今日更新</a>&nbsp;|&nbsp;<a href="javascript:void(0)" id="fav">收藏本站</a>&nbsp;|&nbsp;<a href="<?php echo ($url_guestbook); ?>">留言反馈</a>&nbsp;|&nbsp;</div><div id="history"><a href="javascript:void(0);" class="list_hist"><strong>您的播放记录</strong></a></div>
    </div>
    <div class="search"><form id="ffsearch" name="ffsearch" method="post" action="<?php echo ($root); ?>index.php?s=vod-search"><input type="text" name="wd" id="wd" class="input" value="<?php echo ($wd); ?>"/><input type="submit" value="搜索" class="submit"/></form></div>
</div>
    <div class="vodlist_l box">
        <div class="top"><h3><a href="<?php echo ($root); ?>">首页</a></label> > 求片留言</h3></div>
        <div class="Gb">
			<div class="form">
            <form action="<?php echo ($root); ?>index.php?s=Gb-Insert" method="post" name="guestbook" id="guestbook">
            <input name="gb_cid" type="hidden" value="<?php echo $_GET["id"];?>" /><textarea name="gb_content" id="gb_content" class="gb_content" maxlength="200"><?php echo (($gb_content)?($gb_content):'请留下您的宝贵意见，最多200个字。'); ?></textarea>
            <input id="gb_button" class="gb_button" type="submit" value="发表留言"/>
            <?php if(C('user_vcode') == 1): ?><div class="vcode">验证码：<input name="gb_code" type="text" class="gb_vcode" id="gb_vcode"/> <span id="gb_vcode_html"></span></div><?php endif; ?>
            <label id="gb_tips"></label>
            </form>
            </div>
            <div class="list"><?php if(is_array($gb_list)): $i = 0; $__LIST__ = $gb_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><ul><li><?php if(empty($ppvod["user_face"])): ?><img src="<?php echo ($root); ?>Public/images/face/face_1.jpg" /><?php else: ?><img src="<?php echo ($ppvod["user_face"]); ?>" /><?php endif; ?>
            <p><span class="time"><?php echo (date('Y-m-d H:i:s',$ppvod["gb_addtime"])); ?></span>第<?php echo ($ppvod["gb_floor"]); ?>楼：<?php echo ($ppvod["user_name"]); ?><br /><span class="content"><?php echo (remove_xss(htmlspecialchars($ppvod["gb_content"]))); ?></span><?php if(!empty($ppvod["gb_intro"])): ?><br /><span class="intro">站长回复：<?php echo ($ppvod["gb_intro"]); ?></span><?php endif; ?></p>
            </li>
            </ul><?php endforeach; endif; else: echo "" ;endif; ?></div>
            <?php if($gb_count > C('user_gbnum')): ?><div class="pages"><?php echo ($gb_pages); ?></div><?php endif; ?>
        </div>
    </div>
    <div class="vodlist_r box">
    	<div class="top">
    		<h3><span>评分</span>影片排行榜</h3>
        </div>
        <ul id="bd200"><?php echo getadsurl('200200');?></ul>
        <ul><?php $gold_desc = ff_mysql_vod('limit:15;order:vod_gold desc,vod_hits desc'); ?><?php if(is_array($gold_desc)): $i = 0; $__LIST__ = $gold_desc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_gold"]); ?></span><em><?php echo ($i); ?></em><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>        
    </div>     
    <div class="blank"></div>
    <div class="ft">
    <div class="ft_l">
      <p>友情提示：请勿长时间观看影视，注意保护视力并预防近视，合理安排时间，享受健康生活。</p>
      <p>版权声明：本网站为非赢利性站点，本网站所有内容均来源于互联网相关站点自动搜索采集信息，相关链接已经注明来源。</p>
      <p>免责声明：本网站将逐步删除和规避程序自动搜索采集到的不提供分享的版权影视。本站仅供测试和学习交流。请大家支持正版。</p>
    </div>
    <div class="ft_r">
      <ul>
      	<li><a href="<?php echo ($url_map_rss); ?>" target="_blank">Rss</a></li>
        <li><a href="<?php echo ($url_map_baidu); ?>" target="_blank">SiteMap</a></li>
        <li><a href="mailto:<?php echo ($email); ?>" >联系我们</a></li>
      </ul>
    </div>
</div>
<span style="display:none"><?php echo ($tongji); ?></span>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F6692b1885dbf492c7817bfe47ed75fa6' type='text/javascript'%3E%3C/script%3E"));
</script>  
</div>
</body>
</html>