<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Validation :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/boke/admin/Public/admin/index/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/boke/admin/Public/admin/index/css/style.css" rel='stylesheet' type='text/css' />
<link href="/boke/admin/Public/admin/index/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/boke/admin/Public/admin/index/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/boke/admin/Public/admin/index/js/bootstrap.min.js"></script>

 <script type="text/javascript" src="/boke/admin/Public/public/ueditor.config.js"></script>
  <script type="text/javascript" src="/boke/admin/Public/public/ueditor.all.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <!-- 引入公共目录 -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><font style="font-size:23px;">我的博客系统</font></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header">
                            <strong>留言</strong>
                            <div class="progress thin">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                        </li>
                        <li class="avatar">
                            <a href="#">
                                <img src="/boke/admin/Public/admin/index/images/1.png" alt=""/>
                                <div>新的 留言</div>
                                <small>1 minute ago</small>
                                <span class="label label-info">NEW</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer text-center">
                            <a href="#">View all messages</a>
                        </li>   
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/boke/admin/Public/admin/index/images/1.png"><span class="badge">9</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header text-center">
                            <strong>账户</strong>
                        </li>
                        <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> 消息提醒 <span class="label label-info">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> 消息 <span class="label label-success">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 评论 <span class="label label-warning">42</span></a></li>
                        <!-- <li class="dropdown-menu-header text-center">
                            <strong>设置</strong>
                        </li> -->
                        <!-- <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                        <li class="divider"></li>
                        <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li> -->
                        <li class="m_2"><a href="<?php echo U('Login/tuichu');?>"><i class="fa fa-lock"></i> 退出</a></li>  
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo U("Index/index");?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>控制台</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-laptop nav_icon"></i>文章管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U("Article/design");?>">文章列表</a>
                                </li>
                                 <li>
                                    <a href="<?php echo U("Article/article");?>">文章添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>分类管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href='<?php echo U("Sort/sort");?>'>分类列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Sort/sort_add');?>">分类添加</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>消息管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U("Leave/leave");?>">用户留言</a>
                                </li>
                                <li>
                                    <a href="<?php echo U("Comment/comment");?>">用户评论</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>日记管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U("Diary/diary");?>">我的日记</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Diary/diary_add');?>">书写日记</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       <!--  <li>
                            <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>
                        </li> -->
                         <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>相册管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Photo/photo');?>">相册列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Photo/photo_add');?>">添加相册</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>权限管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Limits/login_show');?>">管理员管理</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Limits/role_show');?>">角色管理</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Limits/node_show');?>">节点管理</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level
                        <!-- </li> -->
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>高级管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Login/password_save');?>">修改密码</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Login/tuichu');?>">退出</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        <div class="col-md-12 graphs">
       <div class="xs">
        <h3>日记添加</h3>
        <div class="well1 white">
        <form action="/boke/admin/index.php/Admin/Diary/diary_save" method="post" enctype="multipart/form-data">
        <input type="hidden" name="diary_id" value="<?php echo ($diary_id); ?>">
          <fieldset>
            <div class="form-group">
              <label class="control-label">时间</label>
              <input type="text" name="time" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" style="width:500px;" required="" value="<?php echo ($diarySaveData["time"]); ?>">
            </div>
            <div class="form-group">
              <label class="control-label">题目</label>
              <input type="text" name="title" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" style="width:500px;" required="" value="<?php echo ($diarySaveData["title"]); ?>">
            </div>
            <div class="form-group">
              <label class="control-label">心情图片</label>
              <!-- <input name="photo"  id="" type="file" style="width:500px;"> -->
               <input type="file" name="photo" style="margin-left:105px;">
            </div>
            <div class="form-group">
              <label class="control-label normal">内容</label>
            <textarea name="rj" class="common-textarea" id="content" cols="30" style="width: 98%;height:500px;" rows="10" placeholder="请输入今天的心情"><?php echo ($diarySaveData["rj"]); ?></textarea>
            </div>
             <div class="form-group" style="margin-left:400px;">
              <button type="submit" class="btn btn-primary">发布</button>
              <button type="reset" class="btn btn-default">重置</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="copy_layout">
      <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://www.17sucai.com/" target="_blank">17素材网</a> </p>
   </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="/boke/admin/Public/admin/index/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/boke/admin/Public/admin/index/js/metisMenu.min.js"></script>
<script src="/boke/admin/Public/admin/index/js/custom.js"></script>
</body>
<script>
//引入编辑器
    var ue = UE.getEditor('content');
</script>
</html>