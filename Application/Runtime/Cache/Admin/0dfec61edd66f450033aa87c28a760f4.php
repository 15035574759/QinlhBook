<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统登录</title>
<link href="/boke/admin/Public/admin/login/css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<link href="/boke/admin/Public/admin/login/css/demo.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/boke/admin/Public/admin/login/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/boke/admin/Public/admin/login/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="/boke/admin/Public/admin/login/js/Validform_v5.3.2_min.js"></script>
</head>
<body>
<div class="header">
  <h1 class="headerLogo"><a title="后台管理系统" target="_blank" href="#"><img alt="logo" class="log" src="/boke/admin/Public/admin/login/images/logo1.png"></a><span style="margin-left:200px;"><iframe width="345" scrolling="no" height="98" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=19&icon=1&num=3"></iframe></span></h1>
	<!-- <div class="headerNav"> -->
		<!-- <a target="_blank" href="">华软官网</a>
		<a target="_blank" href="">关于华软</a>
		<a target="_blank" href="">开发团队</a>
		<a target="_blank" href="">意见反馈</a>
		<a target="_blank" href="">帮助</a>	 -->
		
	<!-- </div> -->
</div>

<div class="banner">

<div class="login-aside">
  <div id="o-box-up"></div>
  <div id="o-box-down"  style="table-layout:fixed;">
   <div class="error-box"></div>
   
   <form action="/boke/admin/index.php/Admin/Login/user_login" method="post">
   <div class="fm-item">
	   <label for="logonId" class="form-label">用户名：</label>
	   <input type="text" placeholder="输入账号" name="username" class="i-text" ajaxurl="demo/valid.jsp"  datatype="s6-18" errormsg="用户名至少6个字符,最多18个字符！"  >    
       <div class="ui-form-explain"></div>
  </div>
  
  <div class="fm-item">
	   <label for="logonId" class="form-label">登录密码：</label>
	   <input type="password" value="" maxlength="100" name="password" class="i-text" datatype="*6-16" placeholder="请设置密码！" errormsg="密码范围在6~16位之间！">    
       <div class="ui-form-explain"></div>
  </div>
  
  <!-- <div class="fm-item pos-r">
	   <label for="logonId" class="form-label">验证码</label>
	   <input type="text" value="输入验证码" maxlength="100" id="yzm" class="i-text yzm" nullmsg="请输入验证码！" >    
       <div class="ui-form-explain"><img src="/boke/admin/Public/admin/login/images/yzm.jpg" class="yzm-img" /></div>
  </div> -->
  
  <div class="fm-item">
	   <label for="logonId" class="form-label"></label>
	   <input type="submit" value="" tabindex="4" id="send-btn" class="btn-login"> 
       <div class="ui-form-explain"></div>
  </div>
  
  </form>
  
  </div>

</div>

	<div class="bd">
		<ul>
			<li style="background:url(/boke/admin/Public/admin/login/themes/theme-pic1.jpg) #CCE1F3 center 0 no-repeat;"></a></li>
			<li style="background:url(/boke/admin/Public/admin/login/themes/theme-pic2.jpg) #BCE0FF center 0 no-repeat;"></li>
		</ul>
	</div>

	<div class="hd"><ul></ul></div>
</div>
<script type="text/javascript">jQuery(".banner").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });</script>


<div class="banner-shadow"></div>

<div class="footer">
   <p>Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://www.freemoban.com/">www.freemoban.com</a></p>
</div>
 
</body>
</html>