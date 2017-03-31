<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/boke/TP/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/boke/TP/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/boke/TP/Public/admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                       <li><a href="<?php echo U("Article/design");?>"><i class="icon-font">&#xe008;</i>文章管理</a></li>
                        <li><a href="<?php echo U("Diary/diary");?>"><i class="icon-font">&#xe005;</i>日记管理</a></li>
                        <li><a href="<?php echo U("Index/sort");?>"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="<?php echo U("Leave/leave");?>"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="<?php echo U("Comment/comment");?>"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Login/login_show');?>"><i class="icon-font">&#xe017;</i>管理员管理</a></li>
                        <li><a href="<?php echo U('Login/role');?>"><i class="icon-font">&#xe037;</i>角色管理</a></li>
                        <li><a href="<?php echo U('Login/node');?>"><i class="icon-font">&#xe046;</i>节点管理</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">文章管理</a><span class="crumb-step">&gt;</span><span>新增文章</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content" style="margin-left:100px;">
                <form action="/boke/TP/index.php/Admin/Login/login_save_pro" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table style="height:500px;" class="insert-tab" width="100%">
                        <tbody>
                        <input type="hidden" value="<?php echo ($arr["id"]); ?>" name="id">
                            <tr>
                                <th><i class="require-red">*</i>管理员姓名：</th>
                                <td>
                                    <input class="common-text required" id="title" name="username" size="50" value="<?php echo ($arr["username"]); ?>" type="text" placeholder="请输入管理员姓名">
                                </td>
                               </tr> 
                               <tr>
                                <th><i class="require-red">*</i>密码：</th>
                                <td>
                                     <input class="common-text required" id="title" name="password" size="50" value="******" type="password" placeholder="请输入管理员密码">
                                </td>
                                </tr> 
                                <tr>
                                <th><i class="require-red">*</i>管理员性别：</th>
                                <td>
                                    <input class="common-text required" id="title" name="sex" size="50" value="<?php echo ($arr["sex"]); ?>" type="text" placeholder="请输入管理员姓名">
                                </td>
                                </tr> 
                                <tr>
                                <th><i class="require-red">*</i>管理员年龄：</th>
                                <td>
                                    <input class="common-text required" id="title" name="age" size="50" value="<?php echo ($arr["age"]); ?>" type="text" placeholder="请输入管理员姓名">
                                </td>
                                </tr>
                            </tr>
      <!--                       <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="smallimg" id="" type="file"><input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/></td>
                            </tr> -->

                            <tr>
                                <th><i class="require-red">*</i>角色：</th>
                                <td>
                                
                                    <?php if(is_array($res)): foreach($res as $key=>$v): if( $v["role_id"] == $v["p"] ): ?><input checked type="checkbox" name="role_id[]" value="<?php echo ($v["role_id"]); ?>"><?php echo ($v["role_name"]); ?>&nbsp;&nbsp;

                                        <?php else: ?>
                                        
                                     <input  type="checkbox" name="role_id[]" value="<?php echo ($v["role_id"]); ?>"><?php echo ($v["role_name"]); ?>&nbsp;&nbsp;<?php endif; endforeach; endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td class="fabu" >
                                    <input style="margin-left:20px;" class="btn btn-primary btn6 mr10" value="修改" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>