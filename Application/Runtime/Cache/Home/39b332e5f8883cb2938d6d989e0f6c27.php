<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="/boke/TP/Public/admin/css/common.css"/>
<link rel="stylesheet" href="/boke/TP/Public/index/css/index.css"/>
<link rel="stylesheet" href="/boke/TP/Public/index/css/style.css"/>
<script type="text/javascript" src="/boke/TP/Public/index/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/boke/TP/Public/index/js/jquery.SuperSlide.2.1.1.js"></script>
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
         <div class="left" id="c_left">
           <div class="s_tuijian">
           <h2>文章<span>推荐</span></h2>
           </div>
          <div class="content_text">
          <?php if(is_array($res)): foreach($res as $key=>$v): ?><!--wz-->
           <div class="wz">
            <h3><a href="#" title="<?php echo ($v["bt"]); ?>"><?php echo ($v["bt"]); ?></a></h3>
             <dl>
               <dt><img src="/boke/TP/<?php echo ($v["photo"]); ?>" width="200"  height="123" alt=""></dt>
               <dd>
                 <p class="dd_text_1"><?php echo ($v["ms"]); ?></p>
               <p class="dd_text_2">
               <span class="left author"><?php echo ($v["name"]); ?></span><span class="left sj"><?php echo ($v["time"]); ?></span>
               <span class="left fl">分类:<a href="#"><?php echo ($v["s_name"]); ?></a></span><span class="left yd"><a href="/boke/TP/index.php/Home/Index/read?id=<?php echo ($v["id"]); ?>" title="阅读全文">阅读全文</a>
               </span>
                <div class="clear"></div>
               </p>
               </dd>
               <div class="clear"></div>
             </dl>
            </div>
           <!--wz end--><?php endforeach; endif; ?>
                    
           </div>
            
         </div>
         <!--left end-->

         <!--right-->
         
         <!--right end-->

         <div class="clear"></div>
    </div>
    <!--content end-->
    <!--footer start-->
    <div id="footer">
     <p>Design by:<a href="http://www.duanliang920.com" target="_blank">少年</a> 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="/boke/TP/Public/index/js/nav.js"></script>
</body>
</html>