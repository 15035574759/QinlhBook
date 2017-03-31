<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>碎言碎语-个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" href="/Public/index/css/index.css"/>
<link rel="stylesheet" href="/Public/index/css/style.css"/>
<script type="text/javascript" src="/Public/index/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/Public/index/js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
    <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>
      <div id="nav">
         <ul>
         <li><a href="<?php echo U('Index/index');?>">首页</a></li>
         <li><a href="<?php echo U('Index/about');?>">关于我</a></li>
         <li><a href="<?php echo U('Leave/shuo');?>">碎言碎语</a></li>
         <li><a href="<?php echo U('Diary/riji');?>">个人日记</a></li>
         <li><a href="<?php echo U('Photo/xc');?>">相册展示</a></li>
          <li><a href="<?php echo U('Index/student');?>">学无止境</a></li>
         <li><a href="<?php echo U('Leave/leave');?>">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
    </div>
    <!--header end-->
    <!--content start-->
    <div id="say">
     <div class="weizi">
           <div class="wz_text">当前位置：<a href="#">首页</a>><h1>碎言碎语</h1></div>
           </div>
           <?php if(is_array($res)): foreach($res as $key=>$v): ?><ul class="say_box">
                     <div class="sy">
                         <p><?php echo ($v["nr"]); ?></p>
                     </div>
                  <span class="dateview"><?php echo ($v["time"]); ?></span>
          </ul><?php endforeach; endif; ?>
     </div>
         <!--left end-->
         <!--right-->
         <div class="right" id="c_right">
           <div class="s_about">
          <h2>关于博主</h2>
           <img src="/Public/index/images/wode.jpg" width="230" height="320" alt="博主"/>
           <p>博主：秦林慧</p>
           <p>职业：高级工程师</p>
           <p>简介：活泼，开朗</p>
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
           <div class="link">
            <h2>友情链接</h2>
            <p>
            <a href="http://www.qlhbook.com">秦林慧个人博客</a><br>
             <a href="http://www.wdbook.com">王迪个人博客</a>
            </p>
           </div>
            <div class="link1">
            <h2>扫一扫</h2>
            <p><img src="/Public/index/images/ewm.png" width="230" height="220" alt="博主"/></p>
           </div>
         </div>
        <!--end-->
         <div class="clear"></div>
    </div>
    <!--content end-->
    <!--footer start-->
    <div id="footer">
     <p>Design by:少年 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="/Public/index/js/nav.js"></script>
</body>
</html>