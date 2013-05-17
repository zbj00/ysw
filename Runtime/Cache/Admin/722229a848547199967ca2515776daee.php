<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台用户管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script language="javascript">
$(document).ready(function(){
	$feifeicms.show.table();
});
</script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
  <thead>
    <tr class="ct">
      <th class="l">标签名称</th>
      <th class="l" width="80">收录数量</th>
      <th class="l" width="80">所属模型</th>
      <th class="r" width="60">相关操作</th>
    </tr>
  </thead>
  <form action="?s=Admin-Admin-Delall" method="post" name="myform" id="myform"> 
  <?php if(is_array($list_tag)): $i = 0; $__LIST__ = $list_tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><tbody>
  <tr>
    <td class="l pd"><?php echo ($ppvod["tag_name"]); ?></td>
    <td class="l ct"><?php echo ($ppvod["tag_count"]); ?>条</td>
    <td class="l ct"><?php echo (getsidname($ppvod["tag_sid"])); ?></td>
    <td class="r ct"><a href="<?php echo ($ppvod["tag_url"]); ?>" title="查看所标识的具体数据">查看</a> <a href="?s=Admin-Tag-Del-id-<?php echo urlencode($ppvod['tag_name']);?>" onClick="return confirm('确定删除?')"  title="删除用户资料">删除</a></td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>   
  <tfoot>
   <tr><td colspan="4" class="r pages"><?php echo ($pages); ?></td></tr>  
  </tfoot>
  </form>
</table>
<br /><center>Version：<font color="#FF0000"><?php echo L("ppvod_version");?></font></center>
</body>
</html>