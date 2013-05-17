<?php if (!defined('THINK_PATH')) exit();?><?php echo '<?'; ?>
xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">
<channel>
<title><?php echo ($sitename); ?></title> 
<description><?php echo ($sitename); ?></description> 
<link><?php echo ($siteurl); ?></link> 
<language>zh-cn</language> 
<docs><?php echo ($sitename); ?></docs> 
<generator>Rss Powered By <?php echo ($siteurl); ?></generator> 
<image>
<url><?php echo ($siteurl); ?>Public/images/logo.gif</url> 
</image>
<?php if(is_array($list_map)): $i = 0; $__LIST__ = $list_map;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><item>
<title><?php echo (htmlspecialchars($ppvod["vod_name"])); ?><?php echo (htmlspecialchars($ppvod["vod_title"])); ?></title> 
<link><?php echo get_base_url($siteurl,$ppvod['vod_readurl']);?></link>
<author><?php echo (htmlspecialchars($ppvod["vod_actor"])); ?></author>
<pubDate><?php echo (date('Y-m-d H:i:s',$ppvod["vod_addtime"])); ?></pubDate>
<description><![CDATA["<?php echo (msubstr($ppvod["vod_content"],0,200)); ?>"]]></description> 
</item><?php endforeach; endif; else: echo "" ;endif; ?>
</channel>
</rss>