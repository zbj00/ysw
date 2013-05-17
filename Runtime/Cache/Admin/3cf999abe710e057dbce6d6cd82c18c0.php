<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>数据库备份</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<form action="?s=Admin-Data-Delall" method="post" id="myform" name="myform">
  <thead>
    <tr class="ct">
      <th class="l" width="5%">ID</th>
      <th class="l">文件名</th>
      <th class="l" width="5%">卷号</th>
      <th class="l" width="6%">大小</th>
      <th class="l" width="14%">备份时间</th>
      <th class="r" width="12%">相关操作</th>
    </tr>
  </thead><?php if(is_array($list_restore)): $i = 0; $__LIST__ = $list_restore;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><tbody> 
  <tr>
  	<td class="l pd"><input type="checkbox" name="ids[]" value="<?php echo ($ppvod["filename"]); ?>" style='border:none'><?php echo ($i); ?>、</td>
    <td class="l pd"><?php echo ($ppvod["filename"]); ?></td>
    <td class="l ct"><?php echo ($ppvod["number"]); ?></td>
    <td class="l ct"><?php echo ($ppvod["filesize"]); ?> M</td>
    <td class="l ct"><?php echo ($ppvod["maketime"]); ?></td>
    <td class="r ct"><a href="?s=Admin-Data-Back-id-<?php echo ($ppvod["pre"]); ?>" onClick="return confirm('导入数据会删除现在数据库的所有信息,请确定是否导入?')">导入</a> <a href="?s=Admin-Data-Del-id-<?php echo ($ppvod["filename"]); ?>" onClick="return confirm('确定删除?')">删除</a> <a href="?s=Admin-Data-Down-id-<?php echo ($ppvod["filename"]); ?>">下载</a></td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
  <tfoot>
    <tr>
      <td colspan="6" class="r"><input type="button" value="全选" class="submit" onClick="checkall('all');"> <input name="" type="button" value="反选" class="submit" onClick="checkall();"> <input type="submit" class="submit" value="删除" onClick="return confirm('确定要删除备份文件吗?')"/> <label>只需要点击任意一个文件的导入链接，程序会自动导入剩余文件!</label></td>
    </tr>  
  </tfoot> 
</form>            
</table>
<br /><center>Version：<font color="#FF0000"><?php echo L("ppvod_version");?></font></center>
</body>
</html>