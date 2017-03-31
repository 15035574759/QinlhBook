<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="/boke/admin/Public/admin/css/common.css"/>
<link rel="stylesheet" href="/boke/admin/Public/index/css/index.css"/>
<link rel="stylesheet" href="/boke/admin/Public/index/css/style.css"/>
<link rel="stylesheet" href="/boke/admin/Public/index/css/style111.css" type="text/css" />
<script type="text/javascript" src="/boke/admin/Public/index/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/boke/admin/Public/index/js/jquery.SuperSlide.2.1.1.js"></script>
<!-- <script type="text/javascript" src="/boke/admin/Public/index/js/jquery-1.7.2.js"></script> -->
<script type="text/javascript" src="/boke/admin/Public/index/js/zySearch.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<style>
  #zySearch
  {
    float: right;
    margin:40px -100px 0 0;
    width:500px;
  }
</style>
<body>
        <!-- 搜索 -->
<form action="/boke/admin/index.php/Home/Index/index" method="post" id="myform" name="myform" enctype="multipart/form-data">
  <div class="zySearch" id="zySearch"></div>
</form>
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
         <li><a href="<?php echo U('Diary/diary');?>">个人日记</a></li>
         <li><a href="<?php echo U('Photo/photo');?>">相册展示</a></li>
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
               <dt><img src="/boke/admin/<?php echo ($v["photo"]); ?>" width="200"  height="123" alt=""></dt>
               <dd>
                 <p class="dd_text_1"><?php echo ($v["ms"]); ?></p>
               <p class="dd_text_2">
               <span class="left author"><?php echo ($v["name"]); ?></span><span class="left sj"><?php echo ($v["time"]); ?></span>
               <span class="left fl">分类:<a href="#"><?php echo ($v["s_name"]); ?></a></span><span class="left yd"><a href="/boke/admin/index.php/Home/Index/read?id=<?php echo ($v["id"]); ?>" title="阅读全文">阅读全文</a>
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
            <a href="http://www.qlhbook.com" target="_blank">秦林慧个人博客</a><br>
             <a href="http://www.pyd66.com" target="_blank">庞瑜东个人博客</a>
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

         <div class="clear"></div>
    </div>
    <!--content end-->
    <!--footer start-->
    <div id="footer">
     <p>Design by:<a href="http://www.duanliang920.com" target="_blank">少年</a> 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="/boke/admin/Public/index/js/nav.js"></script>
</body>
<script type="text/javascript">
    $("#zySearch").zySearch({
      "width":"355",
      "height":"33",
      "parentClass":"pageTitle",
      "callback":function(keyword){
        console.info("搜索的关键字");
        console.info(keyword);
      }
    });
</script>
</html>