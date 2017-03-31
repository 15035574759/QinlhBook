<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>留言板-个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="/boke/TP/Public/admin/css/common.css"/>
<link rel="stylesheet" href="/boke/TP/Public/index/css/index.css"/>
<link rel="stylesheet" href="/boke/TP/Public/index/css/style.css"/>
<script type="text/javascript" src="/boke/TP/Public/index/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/boke/TP/Public/index/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/boke/TP/Public/index/js/jquery-1.9.1.min.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
      <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>    
    </div>
     <!--header end-->
    <!--nav-->
     <div id="nav">
        <ul>
         <li><a href="/boke/TP/index.php/Home/Index/index">首页</a></li>
         <li><a href="/boke/TP/index.php/Home/Index/about">关于我</a></li>
         <li><a href="/boke/TP/index.php/Home/Index/shuo">碎言碎语</a></li>
         <li><a href="/boke/TP/index.php/Home/Index/riji">个人日记</a></li>
         <li><a href="xc.html">相册展示</a></li>
         <li><a href="learn.html">学无止境</a></li>
         <li><a href="/boke/TP/index.php/Home/Index/leave">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
       <!--nav end-->
    <!--content start-->
    <div id="content">
       <!--left-->
         <div class="left" id="guestbook">
           <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>留言板</h1></div>
           </div>
           
           <div class="g_content">
           <table id="list">
          
           <?php if(is_array($res)): foreach($res as $key=>$v): ?><input type="hidden" id="name" value="<?php echo ($v["name"]); ?>">
            <input type="hidden" id="time" value="<?php echo ($v["time"]); ?>">
           <tr>
              <td>
              <?php if(($v["name"] == '游客')): ?><p style="color:green;"><?php echo ($v["name"]); ?>:&nbsp;&nbsp;<?php echo ($v["nr"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["time"]); ?></p><?php endif; ?>
                 <?php if(($v["name"] == '秦林慧')): ?><p style="margin-left:400px;color:red;">博主:&nbsp;&nbsp;<?php echo ($v["nr"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["time"]); ?></p><?php endif; ?>
              </td>
          </tr><?php endforeach; endif; ?>
              
            </table>
           </div>

           <div class="g_content">
             <p><textarea name="nr" id="nr" rows="5" cols="85" placeholder="。。。请输入留言内容"></textarea></p>
             <p style="margin-left:150px;margin-top:35px;">
              <input type="button" value="发送" class="btn btn-primary btn6 mr10" id="add">
             </p>
           </div>
          
         </div>
         <!--end left -->
         <!--right-->
          <div class="right" id="c_right">
          <div class="s_about">
          <h2>关于博主</h2>
           <img src="/boke/TP/Public/index/images/my.jpg" width="230" height="230" alt="博主"/>
           <p>博主：XX</p>
           <p>职业：web前端、视觉设计</p>
           <p>简介：</p>
           <p>
           <a href="#" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span class="left b_2"></span></a>
           <div class="clear"></div>
           </p>
          </div>
          <!--栏目分类-->
           <div class="lanmubox">
              <div class="hd">
               <ul><li>精心推荐</li><li>最新文章</li><li class="hd_3">随机文章</li></ul>
              </div>
              <div class="bd">
                <ul>
					<li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
					<li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
					<li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
					<li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
					<li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
				</ul>
                 <ul>
					<li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
					<li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
					<li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
					<li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
					<li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
				</ul>
                 <ul>
					<li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
					<li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
					<li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
					<li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
					<li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
				</ul>
                 
                
              </div>
           </div>
           <!--end-->
         </div>
         <!--end  right-->
         <div class="clear"></div>
         
    </div>
    <!--content end-->
    <!--footer-->
    <div id="footer">
     <p>Design by:少年 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="/boke/TP/Public/index/js/nav.js"></script>
</body>
</html>

<script>
  $("#add").click(function(){
    var nr=$("#nr").val();
    var name=$("#name").val();
    var time=$("#time").val();
    //alert(nr);
    $.ajax({
      type:"post",url:"<?php echo U('Index/leave_cha');?>",data:{nr:nr},success:function(msg){
        //alert(msg);
        if(msg=='ok'){
          $("#list tr :last").after("<tr><td>"+'<font style="color:green;">'+name+':'+'&nbsp;'+nr+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+time+'</font>'+"</td></tr>");
        }else{
          alert("添加失败");
        }
      }
    })
    
  });

  
  

</script>