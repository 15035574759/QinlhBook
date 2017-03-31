<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>个人日记-个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="/boke/admin/Public/admin/css/common.css"/>
<link rel="stylesheet" href="/boke/admin/Public/index/css/index.css"/>
<link rel="stylesheet" href="/boke/admin/Public/index/css/style.css"/>
<link rel="stylesheet" href="/boke/admin/Public/index/css/animate.css"/>
<script type="text/javascript" src="/boke/admin/Public/index/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/boke/admin/Public/index/js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
     <!--header start-->
    <div id="header">
      <?php if($name == ''): ?><h1>个人博客<span style="font-size:15px;"></span></h1>
      <?php else: ?>
        <h1>个人博客<span style="font-size:15px;">【欢迎 <font color="red"><?php echo ($name); ?></font> 光临】<a href="<?php echo U('Index/UserEnd');?>">退出</a></span></h1><?php endif; ?>
        <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p> 
    </div>
<!--header end-->
 <!--nav-->
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
<!--nav end-->
    <!--content start-->
    <div id="content">
       <!--left-->
         <div class="left" id="riji">
           <div class="weizi">
           <div class="wz_text">当前位置：<a href="<?php echo U('Index/index');?>">首页</a>><h1>个人日记</h1></div>
           </div>
           <div class="rj_content">
                <!--时光-->
                <?php if(is_array($res)): foreach($res as $key=>$v): ?><div class="shiguang animated bounceIn">
                    <div class="left sg_ico">
                    <img src="/boke/admin/<?php echo ($v["photo"]); ?>" width="120" height="120" alt=""/>
                    </div>
                    <div class="right sg_text" style="text-indent:2em;">
                    <img src="/boke/admin/Public/index/images/left.png" width="13" height="16" alt="左图标"/>
                    <p><?php echo ($v["rj"]); ?></p>
                    <p align="right">时间:&nbsp;<?php echo ($v["time"]); ?></p>
                    </div>
                    <div class="clear"></div>
                  </div><?php endforeach; endif; ?>
              <!--时光 end-->
                   <div class="list-page"><?php echo ($page); ?></div>  
           </div>
         </div>
         <!--end left -->

         <!--right-->
          <!--right-->
    <div class="right" id="c_right">
           <div class="s_about">
          <h2>关于博主</h2>
           <img src="/boke/admin/Public/index/images/wode.jpg" width="230" height="320" alt="博主"/>
           <p>博主：秦林慧</p>
           <p>职业：高级工程师</p>
           <p>简介：活泼，开朗</p>
           <p>
           <a href="tencent://message/?uin=745722006&Site=http://www.hcm602.cn&Menu=yes" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span class="left b_2"></span></a>
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
                  <?php if(is_array($recom)): foreach($recom as $key=>$v): ?><li><a href="<?php echo U('Index/read');?>?id=<?php echo ($v["id"]); ?>" title="<?php echo ($v["bt"]); ?>"><?php echo ($v["bt"]); ?></a></li><?php endforeach; endif; ?>
              </ul>
              <ul>
                  <?php if(is_array($new)): foreach($new as $key=>$v): ?><li><a href="<?php echo U('Index/read');?>?id=<?php echo ($v["id"]); ?>" title="<?php echo ($v["bt"]); ?>"><?php echo ($v["bt"]); ?></a></li><?php endforeach; endif; ?>
              </ul>
              <ul>
                 <?php if(is_array($rand)): foreach($rand as $key=>$v): ?><li><a href="<?php echo U('Index/read');?>?id=<?php echo ($v["id"]); ?>" title="<?php echo ($v["bt"]); ?>"><?php echo ($v["bt"]); ?></a></li><?php endforeach; endif; ?>
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
            <p><img src="/boke/admin/Public/index/images/ewm.png" width="230" height="220" alt="博主"/></p>
           </div>
         </div>
         <!--right end-->
    </div>
<!--end  right-->
         <!--right end-->
         
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
    <script  type="text/javascript" src="/boke/admin/Public/index/js/nav.js"></script>
</body>
</html>