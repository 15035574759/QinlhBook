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
                        <li><a href="/boke/TP/index.php/Admin/Index/design"><i class="icon-font">&#xe008;</i>文章管理</a></li>
                        <li><a href="/boke/TP/index.php/Admin/Index/diary"><i class="icon-font">&#xe005;</i>日记管理</a></li>
                        <li><a href="/boke/TP/index.php/Admin/Index/sort"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="/boke/TP/index.php/Admin/Index/leave"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="/boke/TP/index.php/Admin/Index/comment"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="s_name">
                                    <option value="0">全部</option>
                                    <?php if(is_array($res)): foreach($res as $key=>$v): ?><option value="<?php echo ($v["s_id"]); ?>"><?php echo ($v["s_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                            </td>
                            <th width="70">标题:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="bt" type="search"></td>
                            
                            <td><button class="btn btn-primary btn2" name="sub" value="" onclick="checksub()">查询</button></td>
                        </tr>
                    </table>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/boke/TP/index.php/Admin/Index/article"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>标题</th>
                            <th>点击量</th>
                            <th>发布人</th>
                            <th>更新时间</th>
                            <th width="300px">评论</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($res)): foreach($res as $key=>$v): ?><tr>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><a target="_blank" href="#" title="<?php echo ($v["bt"]); ?>"><?php echo ($v["bt"]); ?>…</a> </td>
                            <td><?php echo ($v["click"]); ?></td>
                            <td><?php echo ($v["name"]); ?></td>
                            <td><?php echo ($v["time"]); ?></td>
                            <td><a href="/boke/TP/index.php/Admin/Index/comment_show">查看</a></td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="#">删除</a>
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

<script>
function checksub(){
    var s_name=document.getElementById('s_name').value;
    var bt=document.getElementById('bt').value;
    //alert(bt);die;
    var ajax=new XMLHttpRequest();
    ajax.open("get","/boke/TP/index.php/Admin/Index/design?s_name="+s_name+"&bt="+bt);
    ajax.send();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){
            document.getElementById("p1").innerHTML=ajax.responseText;
        }
    }
    
}
 
</script>