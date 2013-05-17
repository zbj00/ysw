<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>电视直播-湖南卫视直播-cctv5直播-<?php echo ($sitename); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>">
<meta name="description" content="<?php echo ($description); ?>">
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
    	<div><a href="<?php echo getlistname(1,'list_url');?>">电影</a>&nbsp;|&nbsp;<a href="<?php echo getlistname(2,'list_url');?>">电视剧</a>&nbsp;|&nbsp;<a href="<?php echo getlistname(23,'list_url');?>">新闻资讯</a>&nbsp;|&nbsp;<a href="<?php echo ($url_special); ?>">影视专题</a>&nbsp;|&nbsp;<a href="<?php echo ff_mytpl_url('my_tv.html');?>" class="tv">电视直播</a>&nbsp;|&nbsp;<a href="<?php echo ff_mytpl_url('my_new.html');?>">今日更新</a>&nbsp;|&nbsp;<a href="javascript:void(0)" id="fav">收藏本站</a>&nbsp;|&nbsp;<a href="<?php echo ($url_guestbook); ?>">留言反馈</a>&nbsp;|&nbsp;</div><div id="history"><a href="javascript:void(0);" class="list_hist"><strong>您的播放记录</strong></a></div>
    </div>
    <div class="search"><form id="ffsearch" name="ffsearch" method="post" action="<?php echo ($root); ?>index.php?s=vod-search"><input type="text" name="wd" id="wd" class="input" value="<?php echo ($wd); ?>"/><input type="submit" value="搜索" class="submit"/></form></div>
</div>
     <div class="box">
       	<iframe src="http://union.feifeicms.com/live" width="960" height="540" frameborder="0" scrolling="no"></iframe>
    </div>
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