<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(($list_pid)  ==  "2"): ?>《<?php echo ($vod_name); ?>》全集在线观看－<?php echo ($list_name); ?><?php else: ?>《<?php echo ($vod_name); ?>》高清在线观看-电影<?php echo ($vod_name); ?>下载<?php endif; ?>－<?php echo ($sitename); ?></title>
<?php if(in_array(($list_pid), explode(',',"2,3"))): ?><meta name="keywords" content="<?php echo ($vod_name); ?>,<?php echo ($vod_name); ?>在线观看,<?php echo ($vod_name); ?>全集,电视剧<?php echo ($vod_name); ?>,<?php echo ($vod_name); ?>下载,<?php echo ($vod_name); ?>主题曲,<?php echo ($vod_name); ?>剧情,<?php echo ($vod_name); ?>演员表">
<meta name="description" content="<?php echo ($vod_name); ?> <?php echo ($vod_name); ?>在线观看 <?php echo ($vod_name); ?>全集 电视剧<?php echo ($vod_name); ?>；<?php echo ($vod_name); ?>剧情：<?php echo (msubstr(h($vod_content),0,100)); ?>">
<?php else: ?>
<meta name="keywords" content="<?php echo ($vod_name); ?>下载,<?php echo ($vod_name); ?>在线观看,<?php echo ($vod_name); ?>高清下载,<?php echo ($vod_name); ?>qvod,<?php echo ($vod_name); ?>高清">
<meta name="description" content="<?php echo ($vod_name); ?>高清在线观看 <?php echo ($vod_name); ?>电影 <?php echo ($vod_name); ?>下载 <?php echo ($vod_name); ?>演员表 <?php echo ($vod_name); ?>上映时间：<?php echo ($vod_year); ?> <?php echo ($vod_name); ?>剧情：<?php echo (msubstr(h($vod_content),0,100)); ?>"><?php endif; ?>
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
    	<div><a href="<?php echo getlistname(1,'list_url');?>">电影</a>&nbsp;|&nbsp;<a href="<?php echo getlistname(2,'list_url');?>">电视剧</a>&nbsp;|&nbsp;<a href="<?php echo ($url_special); ?>">影视专题</a>&nbsp;|&nbsp;<a href="<?php echo ff_mytpl_url('my_new.html');?>">今日更新</a>&nbsp;|&nbsp;<a href="javascript:void(0)" id="fav">收藏本站</a>&nbsp;|&nbsp;<a href="<?php echo ($url_guestbook); ?>">留言反馈</a>&nbsp;|&nbsp;</div><div id="history"><a href="javascript:void(0);" class="list_hist"><strong>您的播放记录</strong></a></div>
    </div>
    <div class="search"><form id="ffsearch" name="ffsearch" method="post" action="<?php echo ($root); ?>index.php?s=vod-search"><input type="text" name="wd" id="wd" class="input" value="<?php echo ($wd); ?>"/><input type="submit" value="搜索" class="submit"/></form></div>
</div>
    <div class="box">
    	<div class="top">
    		<h3><span><a href="<?php echo ($vod_rssurl); ?>" target="_blank">订阅更新</a></span><a href="<?php echo ($root); ?>">首页</a> > <a href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></a> > <a href="<?php echo ($vod_readurl); ?>"><?php echo ($vod_name); ?></a></h3>
        </div>
        <div class="vod_l">
          <p class="pic"><a href="<?php echo ($vod_playurl); ?>"><img class="lazy" data-original="<?php echo ($vod_picurl); ?>" src="" alt="<?php echo ($vod_name); ?>全集观看" /></a></p>
          <p class="title w"><a href="<?php echo ($vod_readurl); ?>" class="title"><?php echo ($vod_name); ?></a><?php if(!empty($vod_title)): ?><span><?php echo ($vod_title); ?></span><?php endif; ?></p><?php if(in_array(($list_id), explode(',',"3,4,15,16,17,18,19,20,21,22"))): ?><?php if(!empty($vod_continu)): ?><p class="w">剧集状态：连载至<?php echo ($vod_continu); ?><?php if(($list_pid)  ==  "4"): ?>期<?php else: ?>集<?php endif; ?></p><?php endif; ?><?php endif; ?>
          <p class="w">影片类型：<a href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></a></p>
          <p class="w space">影片主演：<?php if(!empty($vod_actor)): ?><?php echo (ff_search_url($vod_actor)); ?><?php else: ?>未录入<?php endif; ?></p>
          <p class="w">影片导演：<?php if(!empty($vod_director)): ?><?php echo (ff_search_url($vod_director)); ?><?php else: ?>未录入<?php endif; ?></p>
          <p class="w">出产地区：<span><?php echo (($vod_area)?($vod_area):'未知'); ?></span>上映时间：<?php echo (($vod_year)?($vod_year):'未录入'); ?></p>
          <p class="w">对白语言：<span><?php echo (($vod_language)?($vod_language):'未知'); ?></span>更新时间：<?php echo (date('Y-m-d',$vod_addtime)); ?></p>
          <p class="up">请您打分：<?php if(c(url_html) == 1): ?><a href="javascript:void(0)" class="Up" id="Up">顶(<span><?php echo ($vod_up); ?></span>)</a><a href="javascript:void(0)" class="Down" id="Down">踩(<span><?php echo ($vod_down); ?></span>)</a>
<?php else: ?>
<a href="javascript:void(0)" class="Up">顶(<span><?php echo ($vod_up); ?></span>)</a><a href="javascript:void(0)" class="Down">踩(<span><?php echo ($vod_down); ?></span>)</a><?php endif; ?>
</label></p>
          <p class="k">关键字：<?php if(is_array($Tag)): $i = 0; $__LIST__ = $Tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ffvod): ++$i;$mod = ($i % 2 )?><a href="<?php echo (ff_tag_url($ffvod["tag_name"])); ?>"><?php echo ($ffvod["tag_name"]); ?></a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?></p>
        </div>
        <div class="vod_r"><?php echo getadsurl('vod300');?></div>
    </div>
    <div class="box2">
        <?php if(is_array($vod_playlist)): $playerkey = 0; $__LIST__ = $vod_playlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$playerkey;$mod = ($playerkey % 2 )?><h3><div><a href="<?php echo ff_play_url($vod_id,($playerkey-1),1,$vod_cid,$vod_name);?>">播放来源：<?php echo ($ppvod["playername"]); ?></a></div></h3>
        <div class="playlist wbox">
        	<?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvodson["playurl"]); ?>" target="_blank"><?php echo ($ppvodson["playname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php if(($playerkey)  ==  "1"): ?><div class="vod960"><?php echo getadsurl('vod960');?></div><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
    <div class="box2 vod_hot">
        <h3><div><a href="<?php echo ($vod_playurl); ?>">热播 <?php echo ($list_name); ?></a></div></h3>
        <ul class="hot wbox"><?php $hot_week = ff_mysql_vod('cid:'.$list_id.';limit:7;order:vod_hits_month desc,vod_addtime desc'); ?>
        <?php if(is_array($hot_week)): $i = 0; $__LIST__ = $hot_week;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><p><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><img class="lazy" data-original="<?php echo ($ppvod["vod_picurl"]); ?>" src="" alt="<?php echo ($ppvod["vod_name"]); ?>" /></a></p><h4 class="space"><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></h4></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
	</div>
     <div class="box2">
        <h3><div><a href="<?php echo ($vod_readurl); ?>"><?php echo ($vod_name); ?> 剧情介绍</a></div></h3>
        <div class="vod_content"><?php echo ff_content_url($vod_content,$Tag);?></div>
	</div> 
    <div class="top960"><?php echo getadsurl('top960');?></div>
    <script language="javascript">FF.History.Insert('<?php echo ($vod_name); ?>','<?php echo ($vod_readurl); ?>',10,7,'','');</script>
    <?php echo ($vod_hits_insert); ?>
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