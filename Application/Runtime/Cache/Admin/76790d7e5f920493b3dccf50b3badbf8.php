<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>文章列表</title>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge"><?php echo ($topLeaveNum); ?></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header">
                            <strong>留言</strong>
                            <div class="progress thin">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                        </li>
                    <?php if(is_array($topLeaveData)): foreach($topLeaveData as $key=>$v): ?><li class="avatar">
                            <a href="<?php echo U('Leave/leave_show');?>?id=<?php echo ($v["id"]); ?>">
                                <img src="/boke/admin/Public/admin/index/images/1.png" alt=""/>
                                <div><?php echo ($v["name"]); ?> 留言</div>
                                <small><?php echo ($v["time"]); ?></small>
                                <span class="label label-info">NEW</span>
                            </a>
                        </li><?php endforeach; endif; ?>
                        <li class="dropdown-menu-footer text-center">
                            <a href="<?php echo U('Leave/leave');?>">查看全部留言</a>
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
                        <!-- <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li> -->
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
     <h4>文章管理</h4>
     <div id="search">   
          <form action="/boke/admin/index.php/Admin/Article/design" method="post">
            <div class="form-group">
                  <!-- <label class="col-sm-2 control-label" for="selector1">Dropdown Select</label> -->
                  <div class="col-sm-8">
                      <select id="selector1" class="form-control1" name="search_sort" style="width:90%;">
                            <option>==请选择==</option>
                          <?php if(is_array($title)): foreach($title as $key=>$v): ?><option value="<?php echo ($v["s_id"]); ?>" id="getChd"><?php echo ($v["s_name"]); ?></option><?php endforeach; endif; ?>
                      </select>
                  </div>
            </div>
            <div class="input-group">
                <input class="form-control1 input-search" name="search" placeholder="请输入标题. . ." type="text" style="width:278px;">
                <span class="input-group-btn">
                    <button class="btn btn-success" type="button" id="getTextSearch" style="margin-right:350px;">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
          </form>
     </div>
  <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>文章列表</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
          <table class="table table-striped">
            <tbody>
                <tr>
                  <th>ID</th>
                  <th>标题</th>
                  <th>分类</th>
                  <th>点击量</th>
                  <th>发布人</th>
                  <th>更新时间</th>
                  <th>评论</th>
                  <th>操作</th>
              </tr>
              <?php if(is_array($res)): foreach($res as $key=>$v): ?><tr>
                  <td><?php echo ($v["id"]); ?></td>
                  <td><a target="_blank" href="http://localhost/boke/admin/index.php/Home/Index/read?id=<?php echo ($v["id"]); ?>" title="<?php echo ($v["bt"]); ?>"><?php echo ($v["bt"]); ?></a> </td>
                  <td><?php echo ($v["s_name"]); ?></td>
                  <td><?php echo ($v["click"]); ?></td>
                  <td><?php echo ($v["name"]); ?></td>
                  <td><?php echo ($v["time"]); ?></td>
                  <td><a href="/boke/admin/index.php/Admin/Article/comment_show">查看</a></td>
                  <td>
                      <a class="link-update" href="/boke/admin/index.php/Admin/Article/articleUpdate?id=<?php echo ($v["id"]); ?>">修改</a>
                      <a class="link-del" href="/boke/admin/index.php/Admin/Article/articleDelete?id=<?php echo ($v["id"]); ?>">删除</a>
                  </td>
              </tr><?php endforeach; endif; ?>
            </tbody>
          </table>
           <div class="list-page"><?php echo ($page); ?></div>
        </div>
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
<!-- <script src="/boke/admin/Public/admin/index/js/jquery.1.12.js"></script> -->
</body>
</html>
<script>
  $(function(){
      //下拉菜单搜索
      $("#selector1").change(function(){
        $(".list-page").hide();
          var s_id = $(this).val();
          var url = "/boke/admin/index.php/Admin/Article/article_class";
          $.get(url,{'s_id':s_id},function(msg){
            str = '<tbody>\
                <tr>\
                  <th>ID</th>\
                  <th>标题</th>\
                  <th>分类</th>\
                  <th>点击量</th>\
                  <th>发布人</th>\
                  <th>更新时间</th>\
                  <th>评论</th>\
                  <th>操作</th>\
              </tr>';
            for(var i=0;i<msg.length;i++){
              str += '<tr>\
                  <td>'+msg[i]['id']+'</td>\
                  <td><a target="_blank" href="http://localhost/boke/admin/index.php/Home/Index/read?id='+msg[i]['id']+'" title="<?php echo ($v["bt"]); ?>">'+msg[i]['bt']+'</a> </td>\
                  <td>'+msg[i]['s_name']+'</td>\
                  <td>'+msg[i]['click']+'</td>\
                  <td>'+msg[i]['name']+'</td>\
                  <td>'+msg[i]['time']+'</td>\
                  <td><a href="/boke/admin/index.php/Admin/Article/comment_show">查看</a></td>\
                  <td>\
                      <a class="link-update" href="#">修改</a>\
                      <a class="link-del" href="#">删除</a>\
                  </td>\
              </tr>\
              </tbody>';
            }

              $("table").html(str);//追加替换
          },'json')
      })

      //普通搜素
      $("#getTextSearch").click(function(){
        $(".list-page").hide();
        var search = $(":input[name='search']").val();
          var url = "/boke/admin/index.php/Admin/Article/getTextSearch";
          $.get(url,{'search':search},function(msg){
            str = '<tbody>\
                <tr>\
                  <th>ID</th>\
                  <th>标题</th>\
                  <th>点击量</th>\
                  <th>发布人</th>\
                  <th>更新时间</th>\
                  <th width="300px">评论</th>\
                  <th>操作</th>\
              </tr>';
            for(var i=0;i<msg.length;i++){
              str += '<tr>\
                  <td>'+msg[i]['id']+'</td>\
                  <td><a target="_blank" href="http://localhost/boke/admin/index.php/Home/Index/read?id='+msg[i]['id']+'" title="<?php echo ($v["bt"]); ?>">'+msg[i]['bt']+'</a> </td>\
                  <td>'+msg[i]['s_name']+'</td>\
                  <td>'+msg[i]['click']+'</td>\
                  <td>'+msg[i]['name']+'</td>\
                  <td>'+msg[i]['time']+'</td>\
                  <td><a href="/boke/admin/index.php/Admin/Article/comment_show">查看</a></td>\
                  <td>\
                      <a class="link-update" href="#">修改</a>\
                      <a class="link-del" href="#">删除</a>\
                  </td>\
              </tr>\
              </tbody>';
            }
            $("table").html(str);//追加替换
          },'json');

      })
  })
</script>