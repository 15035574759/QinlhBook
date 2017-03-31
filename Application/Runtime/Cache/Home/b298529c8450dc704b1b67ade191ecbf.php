<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>留言板-个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="/boke/admin/Public/admin/css/common.css"/>
<link rel="stylesheet" href="/boke/admin/Public/index/css/index.css"/>
<link rel="stylesheet" href="/boke/admin/Public/index/css/style.css"/>

<link rel="Stylesheet" type="text/css" href="/boke/admin/Public/index/style/loginDialog.css" />
<script type="text/javascript" src="/boke/admin/Public/index/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="/boke/admin/Public/index/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/boke/admin/Public/index/js/jquery.SuperSlide.2.1.1.js"></script>
<!-- <script type="text/javascript" src="/boke/admin/Public/index/js/jquery-1.9.1.min.js"></script>
 --><!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
     <!-- 搜索 -->
<form action="/boke/admin/index.php/Home/Leave/index" method="post" id="myform" name="myform" enctype="multipart/form-data">
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
             </p><span><a href="javascript:;" id="example" style="">登录账号</a></span>
           </div>
            

            <!-- 弹出对话框 -->
                <div id="LoginBox">
        <div class="row1">
            登录账号窗口<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="name" placeholder="账号/邮箱" />
           
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码: <span class="inputBox">
                <input type="text" id="email" placeholder="邮箱" />
            
        </div>
        <div class="row">
            <a href="#" id="loginbtn">登录</a>
        </div>
    </div >
        <img style="margin-left:30px;" src="/boke/admin/Public/index/images/ad.png"><br>
        <img style="margin-left:30px;" src="/boke/admin/Public/index/images/ad1.gif">
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
    <!--footer-->
    <div id="footer">
     <p>Design by:少年 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="/boke/admin/Public/index/js/nav.js"></script>
</body>
</html>

<script>
  $("#add").click(function(){
    var nr=$("#nr").val();
    var name=$("#name").val();
    var time=$("#time").val();
    //alert(nr);
    $.ajax({
      type:"post",
      url:"<?php echo U('Leave/leave_cha');?>",
      data:{nr:nr},
      success:function(msg){
        //alert(msg);
        if(msg=='ok'){
          $("#list tr :last").after("<tr><td>"+'<font style="color:green;">'+name+':'+'&nbsp;'+nr+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+time+'</font>'+"</td></tr>");
        }else{
          alert("添加失败");
        }
      }
    })
    
  });


  $(function ($) {
    //弹出登录
    $("#example").hover(function () {
      $(this).stop().animate({
        opacity: '1'
      }, 600);
    }, function () {
      $(this).stop().animate({
        opacity: '0.6'
      }, 1000);
    }).on('click', function () {
      $("#LoginBox").fadeIn("slow");
    });

    $(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
      $("#LoginBox").fadeOut("fast");
      $("#mask").css({ display: 'none' });
    });
  });
</script>