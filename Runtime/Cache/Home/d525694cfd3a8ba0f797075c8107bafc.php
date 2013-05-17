<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php if(!empty($list_keywords)): ?><?php echo ($list_keywords); ?><?php else: ?>最新<?php echo ($list_name); ?>,<?php echo ($keywords); ?><?php endif; ?>">
<meta name="description" content="最新<?php echo ($list_name); ?>包含的影片有<?php if(is_array($vod_list)): $i = 0; $__LIST__ = $vod_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php echo (msubstr($ppvod["vod_name"],0,10)); ?>,<?php endforeach; endif; else: echo "" ;endif; ?>完全免费在线观看！">
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
    <div class="top960"><?php echo getadsurl('top960');?></div>
    <div class="vodlist_r box">
        <div class="top">
            <h3><span>评分</span><a href="#">点播排行榜</a></h3>
        </div>
        <ul><?php $gold_desc = ff_mysql_vod('limit:30;order:vod_gold desc,vod_hits desc'); ?><?php if(is_array($gold_desc)): $i = 0; $__LIST__ = $gold_desc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_gold"]); ?></span><em><?php echo ($i); ?></em><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>        
    </div>   
    <div class="vodlist_l box">
      <div class="top">
          <h3><a href="<?php echo ($root); ?>">首页</a></label> > <?php echo ($search_wd); ?></h3>
      </div>
      <?php $vod_list = ff_mysql_vod('wd:'.$search_wd.';actor:'.$search_actor.';year:'.$search_year.';language:'.$search_language.';area:'.$search_area.';letter:'.$search_letter.';limit:8;page:true;order:vod_addtime desc');$page = $vod_list[0]['page']; ?>
      <?php if(($vod_list["0"]["count"])  >  "0"): ?><?php if(is_array($vod_list)): $i = 0; $__LIST__ = $vod_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><ul><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="点击播放《<?php echo ($ppvod["vod_name"]); ?>》" /></a>
        <h2><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a><em><?php echo ($ppvod["vod_gold"]); ?></em><?php if(!empty($ppvod["vod_title"])): ?><span><?php echo ($ppvod["vod_title"]); ?></span><?php endif; ?></h2>
        <p>主演∶<?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
        <p>地区∶<?php echo (($ppvod["vod_area"])?($ppvod["vod_area"]):'未录入'); ?> 上映时间∶<?php echo (date('Y-m-d',$ppvod["vod_addtime"])); ?></p>
        <p class="content"><?php echo (msubstr($ppvod["vod_content"],0,100,'utf-8',true)); ?></p>
        <p><a href="<?php echo ($ppvod["vod_readurl"]); ?>">影片详情</a> | <a href="<?php echo ($ppvod["vod_playurl"]); ?>">在线观看</a> | 影评(<?php echo ($ppvod["vod_golder"]); ?>)</p>
        </ul><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="pages"><?php echo ($page); ?></div>
      <?php else: ?>
       	 <ul>对不起,没有搜索到<<?php echo ($search_wd); ?><?php echo ($search_actor); ?><?php echo ($search_director); ?><?php echo (($search_year)?($search_year):''); ?><?php echo ($search_language); ?><?php echo ($search_letter); ?>>相关内容!</ul><?php endif; ?>    
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