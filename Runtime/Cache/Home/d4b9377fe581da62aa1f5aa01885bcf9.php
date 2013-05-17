<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>《<?php echo ($vod_name); ?>》<?php if(($list_pid)  ==  "2"): ?><?php echo ($vod_playername); ?><?php echo ($vod_jiname); ?>在线观看<?php else: ?>-电影<?php echo ($vod_name); ?><?php endif; ?>-<?php echo ($sitename); ?></title>
<?php if(in_array(($list_pid), explode(',',"2,3"))): ?><meta name="keywords" content="<?php echo ($vod_name); ?><?php echo str_replace(array('第','集'),array('',''),$vod_jiname);?>,<?php echo ($vod_name); ?><?php echo ($vod_jiname); ?>,<?php echo ($vod_name); ?><?php echo ($vod_jiname); ?>在线观看,<?php echo ($vod_name); ?>全集<?php echo str_replace(array('第','集'),array('',''),$vod_jiname);?>,电视剧<?php echo ($vod_name); ?><?php echo ($vod_jiname); ?>">
<meta name="description" content="<?php echo ($vod_name); ?>高清在线观看 <?php echo ($vod_name); ?>电影 <?php echo ($vod_name); ?>下载 <?php echo ($vod_name); ?>演员表 <?php echo ($vod_name); ?>上映时间：<?php echo ($vod_year); ?> <?php echo ($vod_name); ?>剧情：<?php echo (msubstr(h($vod_content),0,100)); ?>">
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
</div>
<div class="player">
    <ul><li class="left"><?php echo ($vod_player); ?></li><li class="right"><?php echo getadsurl('play300');?></li></ul>
</div>
<div class="wrap">
	<div class="play960"><?php echo getadsurl('play960');?></div>
    <?php if(C(url_html) == 0): ?><?php if(is_array($vod_playlist)): $i = 0; $__LIST__ = $vod_playlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(($ppvod["playname"])  ==  $vod_playname): ?><div class="box2">
        <h3><div><span><a href="<?php echo UU('Home-gb/show',array(id=>$vod_id),false,true);?>" target="_blank">报错</a></span><a href="<?php echo ($vod_playurl); ?>">播放来源：<?php echo ($ppvod["playername"]); ?></a></div></h3>
        <div class="playlist"><?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvodson["playurl"]); ?>" <?php if(($ppvodson["playpath"])  ==  $vod_playpath): ?>class="on"<?php endif; ?>><?php echo ($ppvodson["playname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
    </div><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?>
    <div class="box2 vod_hot">
        <h3><div><a href="<?php echo ($vod_playurl); ?>">热播 <?php echo ($list_name); ?></a></div></h3>
        <ul class="hot wbox"><?php $hot_week = ff_mysql_vod('cid:'.$list_id.';limit:7;order:vod_hits_month desc,vod_addtime desc'); ?>
        <?php if(is_array($hot_week)): $i = 0; $__LIST__ = $hot_week;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><p><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><img class="lazy" data-original="<?php echo ($ppvod["vod_picurl"]); ?>" src="" alt="<?php echo ($ppvod["vod_name"]); ?>" /></a></p><h4 class="space"><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></h4></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
	</div>
    <div class="player_l">
    	<div class="banner468">
        	<?php echo getadsurl('banner468');?>
        </div>
        <div class="box2 player_l">
            <h3><div><a href="<?php echo ($vod_readurl); ?>">我来说两句</a></div></h3>
            <div id="Comment" class="Comment">评论加载中...</div>
        </div>
    </div>
    <div class="player_r">
         <div class="box2">
            <div class="gold">
            	<p><?php if(c(url_html) == 1): ?><span class="Gold" id="Gold"><?php echo ($vod_gold); ?></span> <span class="Goldnum"><?php echo ($vod_gold); ?></span>分 (<span class="Golder"><?php echo ($vod_golder); ?></span>人评价过此片)
<?php else: ?>
<span class="Gold"><?php echo ($vod_gold); ?></span> <span class="Goldnum"><?php echo ($vod_gold); ?></span>分 (<span class="Golder"><?php echo ($vod_golder); ?></span>人评价过此片)<?php endif; ?></p>
                <p class="share"><span>分享至：</span><div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"><a class="bds_qzone"></a><a class="bds_tsina"></a><a class="bds_tqq"></a><a class="bds_renren"></a><a class="bds_kaixin001"></a><a class="bds_baidu"></a><a class="bds_tsohu"></a><a class="bds_taobao"></a><a class="bds_t163"></a><a class="shareCount"></a></div><script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=498946" ></script><script type="text/javascript" id="bdshell_js"></script><script type="text/javascript">var bds_config = {'wbUid':2316894025};document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();</script></p>
            </div>
        </div>
        <div class="box2">
            <h3><div><a href="<?php echo ($vod_readurl); ?>">剧情介绍</a></div></h3>
            <ul class="intro">
            <li><a href="<?php echo ($vod_playurl); ?>"><img src="<?php echo ($vod_picurl); ?>" alt="<?php echo ($vod_name); ?>全集观看"/></a><h2><a href="<?php echo ($vod_readurl); ?>" class="title"><?php echo ($vod_name); ?></a><?php if(!empty($vod_title)): ?><span><?php echo ($vod_title); ?></span><?php endif; ?></h2>
              <?php if(in_array(($list_id), explode(',',"3,4,15,16,17,18,19,20,21,22"))): ?><?php if(!empty($vod_continu)): ?><p>状态：连载至<?php echo ($vod_continu); ?><?php if(($list_pid)  ==  "4"): ?>期<?php else: ?>集<?php endif; ?></p><?php endif; ?><?php endif; ?>
              <p>类型：<a href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></a></p>
              <p>主演：<?php if(!empty($vod_actor)): ?><?php echo (ff_search_url($vod_actor)); ?><?php else: ?>未录入<?php endif; ?></p>
              <p>导演：<?php if(!empty($director)): ?><?php echo (ff_search_url($director)); ?><?php else: ?>未录入<?php endif; ?></p>
              <p>地区：<?php echo (($vod_area)?($vod_area):'未知'); ?></p></li>
            </ul>
        </div>
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