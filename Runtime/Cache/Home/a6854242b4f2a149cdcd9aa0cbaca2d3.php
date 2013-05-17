<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="baidu_union_verify" content="45145372335a0bb6be163849872fd601">
<title><?php echo ($title); ?></title>
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
<body><?php $vod_stars = ff_mysql_vod('limit:14;order:vod_stars desc,vod_hits desc');
$vod_news = ff_mysql_vod('limit:36;order:vod_addtime desc');
$vod_hot_tv = ff_mysql_vod('limit:21;cid:2;order:vod_gold desc,vod_hits desc');
$vod_hot_dm = ff_mysql_vod('limit:10;cid:3;order:vod_gold desc,vod_hits desc');
$vod_hot_dy = ff_mysql_vod('limit:10;cid:1;order:vod_gold desc,vod_hits desc'); ?>
<div class="wrap"><div class="header">
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
<div class="flexslider">
  <ul class="slides">
    <li>
		<img src="./Tpl/defalut/images/slides/1.jpg"></img>
    </li>
    <li>
		<img src="./Tpl/defalut/images/slides/2.jpg" ></img>
    </li>
    <li>
		<img src="./Tpl/defalut/images/slides/3.jpg" ></img>
    </li>
	<li>
		<img src="./Tpl/defalut/images/slides/django.jpg" ></img>
    </li>
  </ul>
</div>
<div class="box">
    <div class="top"><h3><a href="<?php echo ($root); ?>">热播节目推荐</a></h3></div>
    <ul class="imgh4 index_stars"><?php if(is_array($vod_stars)): $i = 0; $__LIST__ = $vod_stars;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><p><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><img class="lazy" data-original="<?php echo ($ppvod["vod_picurl"]); ?>" src="" alt="<?php echo ($ppvod["vod_name"]); ?>" /></a></p><h4><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></h4></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
    </fflist></ul>
</div>
 <div class="box">
    <div class="top"><h3><span>今天到目前已更新<strong><?php echo getcount(999);?></strong>部</span><a href="<?php echo ff_mytpl_url('my_new.html');?>">最新更新节目</a></h3></div>
    <ul class="hang1"><?php if(is_array($vod_news)): $i = 0; $__LIST__ = $vod_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 4 )?><li><b><?php echo (getcolordate('m-d',$ppvod["vod_addtime"])); ?></b><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (getcolor(msubstr($ppvod["vod_name"],0,12),$ppvod['vod_color'])); ?></a></li>
    <?php if(($mod)  ==  "0"): ?></ul><?php if(in_array(($i), explode(',',"8,16,24,32"))): ?><ul class="hang1"><?php else: ?><ul class="hang2"><?php endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></ul>
</div> 
<div class="index960"><?php echo getadsurl('index960');?></div>
<div class="index_right">
    <div class="top1">
    <div class="top"><span>评分</span><h2>电视剧</h2></div>
    <ul><?php if(is_array($vod_hot_tv)): $i = 0; $__LIST__ = $vod_hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_gold"]); ?></span><h3><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></h3></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div>
    <!-- -->
    <div class="top2">
    <div class="top"><span>评分</span><h2>动漫</h2></div>
    <ul><?php if(is_array($vod_hot_dm)): $i = 0; $__LIST__ = $vod_hot_dm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_gold"]); ?></span><h3><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></h3></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div>
    <!-- -->
    <div class="top3">
    <div class="top"><span>评分</span><h2>电影</h2></div>
    <ul><?php if(is_array($vod_hot_dy)): $i = 0; $__LIST__ = $vod_hot_dy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_gold"]); ?></span><h3><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></h3></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div>
</div>    
<div class="index_left">
    <?php $cid_arr = array(15,16,17,18,3,1); ?>
    <?php if(is_array($cid_arr)): $k = 0; $__LIST__ = $cid_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$k;$mod = ($k % 2 )?><?php if(in_array(($ppcid), explode(',',"1,3"))): ?><?php $vod_new = ff_mysql_vod('cid:'.$ppcid.';limit:30;order:vod_addtime desc'); ?>
        <div class="news1">
    <?php else: ?>
        <?php $vod_new = ff_mysql_vod('cid:'.$ppcid.';limit:12;order:vod_addtime desc'); ?>
        <div class="news2"><?php endif; ?>
        <div class="top"><span><a href="<?php echo getlistname($ppcid,'list_url');?>">显示更多</a></span><h2><a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a></h2></div>
        <ul><?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($i); ?></span><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="links">
    <div class="title">
        <h4><span><a href="mailto:<?php echo ($email); ?>" target="_blank">申请友链</a></span>友情链接</h4>
    </div>
    <ul><?php if(is_array($list_link)): $i = 0; $__LIST__ = $list_link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvod["link_url"]); ?>" target="_blank"><?php echo ($ppvod["link_name"]); ?></a>┆<?php endforeach; endif; else: echo "" ;endif; ?></ul>
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
</script></div>
</body>
<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true
  });
});
</script>
</html>