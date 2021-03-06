<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html id="p1">
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">分类管理</span></div>
        </div>
        <div class="search-wrap">
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/boke/TP/index.php/Admin/Login/node_add"><i class="icon-font"></i>新增节点</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                             <th>节点名</th>
                            <th>控制器</th>
                            <th>方法</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($res)): foreach($res as $key=>$v): ?><tr>
                            <td><?php echo ($v["node_id"]); ?></td>
                            <td><?php echo ($v["title"]); ?></td>
                            <td><?php echo ($v["controller"]); ?></td>
                            <td><?php echo ($v["action"]); ?></td>
                            <td>
                            
                            <a class="link-del" href="/boke/TP/index.php/Admin/Login/role_del?id=<?php echo ($v["node_id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    
                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>