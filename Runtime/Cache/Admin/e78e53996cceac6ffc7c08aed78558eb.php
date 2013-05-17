<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台用户管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/editor/kindeditor.js"></script>
<script language="javascript">
var resizediv = function() { 
	$leftwidth = $(window).width()/2-120;
	$('.jqmWindow').css({ left: $leftwidth});
}
$(document).ready(function(){
	$("#myform").submit(function(){
		if($feifeicms.form.empty('myform','special_name') == false){
			return false;
		}
	});
	$("#tabs>a").click(function(){
		var no = $(this).attr('id');
		var n = $("#tabs>a").length;
		showtab('tabs',no,n);
		$("#tabs>a").removeClass("on");
		$(this).addClass("on");
		return false;
	});	
	$(window).resize(resizediv);//窗口大小变化时
	resizediv();
});
</script>
</head>
<body class="body">
<!--图片预览框-->
<div id="showpic" class="showpic" style="display:none;"><img name="showpic_img" id="showpic_img" width="120" height="160"></div>
<?php if(($special_id)  >  "0"): ?><form name="update" action="?s=Admin-Special-Update" method="post" name="myform" id="myform">
  <input type="hidden" name="special_id" value="<?php echo ($special_id); ?>">
  <?php else: ?>
  <form name="add" action="?s=Admin-Special-Insert" method="post" name="myform" id="myform"><?php endif; ?>
<div class="title">
	<div class="tabs" id="tabs"><a href="javascript:void(0)" class="on" id="1"><?php echo ($tpltitle); ?>专题</a><a href="javascript:void(0)" id="2">其它设置</a></div>
    <div class="right"><a href="?s=Admin-Special-Show">返回专题管理</a></div>
</div>
<div class="form">
<table border="0" cellpadding="0" cellspacing="0" class="table" id="tabs1">
<input name="special_vids" type="hidden" value="<?php echo ($special_vids); ?>" />
<input name="special_nids" type="hidden" value="<?php echo ($special_nids); ?>" />
  <tr>
    <td class="tl">专题名称：</td>
    <td class="tr"><ul><input type="text" name="special_name" id="special_name" value="<?php echo ($special_name); ?>" maxlength="255" error="* 名称不能为空" class="w300"><span id="special_name_error">*</span></ul><?php if(!empty($special_id)): ?><ul><a href="#" onclick="divwindow('?s=Admin-Vod-Show-tid-<?php echo ($special_id); ?>','添加视频到专题');" title="点击查看内容">收录影视(<?php echo ($countvod); ?>)</a></ul><ul><a href="#" onclick="divwindow('?s=Admin-News-Show-tid-<?php echo ($special_id); ?>','添加资讯到专题');" title="点击查看内容">收录资讯(<?php echo ($countnews); ?>)</a></ul><?php endif; ?></td>
  </tr>
  <tr>
    <td class="tl">专题LOGO：</td>
    <td class="tr"><ul><input type="text" name="special_logo" id="special_logo" value="<?php echo ($special_logo); ?>" maxlength="255" class="w300" onMouseOver="if(this.value)showpic(event, this.value,'<?php echo C("upload_path");?>/');" onMouseOut="hiddenpic();"></ul><ul><iframe src="?s=Admin-Upload-Show-sid-special-fileback-special_logo" scrolling="no" topmargin="0" width="270" height="26" marginwidth="0" marginheight="0" frameborder="0" align="left"></iframe></ul></td>
  </tr>
  <tr>
    <td class="tl">专题Banner：</td>
    <td class="tr"><ul><input type="text" name="special_banner" id="special_banner" value="<?php echo ($special_banner); ?>" maxlength="255" class="w300" onMouseOver="if(this.value)showpic(event, this.value,'<?php echo C("upload_path");?>/');" onMouseOut="hiddenpic();"></ul><ul><iframe src="?s=Admin-Upload-Show-sid-special-fileback-special_banner" scrolling="no" topmargin="0" width="270" height="26" marginwidth="0" marginheight="0" frameborder="0" align="left"></iframe></ul></td>
  </tr>
  <tr>
    <td class="tl">SEO关键词：</td>
    <td class="tr"><ul><input type="text" name="special_keywords" id="special_keywords" value="<?php echo ($special_keywords); ?>" maxlength="255" class="w400">&nbsp;</ul></td>
  </tr>
  <tr>
    <td class="tl">SEO描述信息：</td>
    <td class="tr"><ul><input type="text" name="special_description" id="special_description" value="<?php echo ($special_description); ?>" maxlength="255" class="w400">&nbsp;</ul></td>
  </tr>   
  <tr>
    <td class="tl">专题简介：</td>
    <td class="tr padding-5050"><textarea name="special_content" id="content" style="width:99%;height:300px;"><?php echo ($special_content); ?></textarea></td>
  </tr> 
</table>
<table border="0" cellpadding="0" cellspacing="0" class="table" id="tabs2" style="display:none">
  <tr>
    <td class="tl">推荐星级：</td>
    <td class="tr" id="abc"><input name="special_stars" id="special_stars" type="hidden" value="<?php echo ($special_stars); ?>"><?php if(is_array($special_starsarr)): $i = 0; $__LIST__ = $special_starsarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ajaxstar): ++$i;$mod = ($i % 2 )?><img src="__PUBLIC__/images/admin/star<?php echo ($ajaxstar); ?>.gif" onClick="addstars('news',<?php echo ($i); ?>);" id="star_<?php echo ($i); ?>" class="navpoint"><?php endforeach; endif; else: echo "" ;endif; ?></td>
  </tr>
  <tr>
    <td class="tl">新闻状态：</td>
    <td class="tr"><select name="special_status" class="w70"><option value="1">显示</option><option value="0" <?php if(($special_status)  ==  "0"): ?>selected<?php endif; ?>>隐藏</option></select></td>
  </tr>  
  <tr>
    <td class="tl">标题颜色：</td>
    <td class="tr" id="abc"><select name="special_color" id="special_color" class="w70"><option>颜色</option>                               
    <option value='#000000' style='background-color:#000000' <?php if(($special_color)  ==  "#000000"): ?>selected<?php endif; ?>></option>
    <option value='#FFFFFF' style='background-color:#FFFFFF' <?php if(($special_color)  ==  "#FFFFFF"): ?>selected<?php endif; ?>></option>
    <option value='#008000' style='background-color:#008000' <?php if(($special_color)  ==  "#008000"): ?>selected<?php endif; ?>></option>
    <option value='#FFFF00' style='background-color:#FFFF00' <?php if(($special_color)  ==  "#FFFF00"): ?>selected<?php endif; ?>></option>
    <option value='#FF0000' style='background-color:#FF0000' <?php if(($special_color)  ==  "#FF0000"): ?>selected<?php endif; ?>></option>
    <option value='#0000FF' style='background-color:#0000FF' <?php if(($special_color)  ==  "#0000FF"): ?>selected<?php endif; ?>></option>
    <option value=''>无色</option></select></td>
  </tr>      
  <tr>
    <td class="tl">总人气：</td>
    <td class="tr"><input type="text" name="special_hits" id="special_hits" maxlength="15" value="<?php echo ($special_hits); ?>" class="w50"></td>
  </tr> 
  <tr>
    <td class="tl">月人气：</td>
    <td class="tr"><input type="text" name="special_hits_month" id="special_hits_month" maxlength="15" value="<?php echo ($special_hits_month); ?>" class="w50"></td>
  </tr> 
  <tr>
    <td class="tl">周人气：</td>
    <td class="tr"><input type="text" name="special_hits_week" id="special_hits_week" maxlength="15" value="<?php echo ($special_hits_week); ?>" class="w50"></td>
  </tr>
  <tr>
    <td class="tl">日人气：</td>
    <td class="tr"><input type="text" name="special_hits_day" id="special_hits_day" maxlength="15" value="<?php echo ($special_hits_day); ?>" class="w50"></td>
  </tr> 
  <tr>
    <td class="tl">评分值：</td>
    <td class="tr"><input type="text" name="special_gold" id="special_gold" value="<?php echo ($special_gold); ?>" maxlength="4" class="w50"></td>
  </tr> 
  <tr>
    <td class="tl">评分人数：</td>
    <td class="tr"><input type="text" name="special_golder" id="special_golder" value="<?php echo ($special_golder); ?>" maxlength="8" class="w50"></td>
  </tr> 
  <tr>
    <td class="tl">顶：</td>
    <td class="tr"><input type="text" name="special_up" id="special_up" value="<?php echo ($special_up); ?>" maxlength="8" class="w50"></td>
  </tr>
  <tr>
    <td class="tl">踩：</td>
    <td class="tr"><input type="text" name="special_down" id="special_down" value="<?php echo ($special_down); ?>" maxlength="8" class="w50"></td>
  </tr> 
  <tr>
    <td class="tl">时间：</td>
    <td class="tr"><input type="text" name="special_addtime" id="special_addtime" maxlength="15" value="<?php echo (date('Y-m-d H:i:s',$special_addtime)); ?>" class="w150"> <input name="checktime" type="checkbox" style="border:none;width:auto" value="1" <?php echo ($checktime); ?> title="勾选则使用系统当前时间"></td>
  </tr>
  <tr>
    <td class="tl">独立模板：</td>
    <td class="tr"><input type="text" name="special_skin" id="special_skin" value="<?php echo ($special_skin); ?>" maxlength="25" class="w150"></td>
  </tr>   
</table>
<ul class="footer">
	<input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置">
</ul>
</div>
</form>
<script type="text/javascript">
KE.show({
	id : 'content',
	resizeMode : 1,
	allowPreviewEmoticons : false,
	allowUpload : false,
	items : [
	'source', '|', 'fontsize', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
	'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
	'insertunorderedlist', '|', 'image', 'link', 'unlink', 'about']
});
//KE.show({ id : 'content'});
var $content = $('#content').val();
	document.getElementById("myform").onreset = function(){
	KE.html('content', $content);
}
</script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery-jqmodal.js"></script>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/jquery-jqmodal.css' />
<style>#dia_title{height:25px;line-height:25px}.jqmWindow{height:200px;}#dia_content{height:100%}</style>
<div class="jqmWindow" id="dialog">
<div id="dia_title"><span class="jqmTitle"></span><a href="javascript:void(0)" class="jqmClose" title="关闭窗口"></a></div>
<div id="dia_content"></div>
</div>
<script language="JavaScript" type="text/javascript">
//弹出浮动层 $('#dialog').jqm({modal: true, trigger: 'a.showDialog'});
$('#dialog').jqm({modal: true, trigger: '#window',zIndex: 500});
</script>
<style>
#dia_title{height:25px;line-height:25px}
.jqmWindow{height:500px;width:800px;top:10px;left:310px;overflow:hidden}
</style>
<br /><center>Version：<font color="#FF0000"><?php echo L("ppvod_version");?></font></center>
</body>
</html>