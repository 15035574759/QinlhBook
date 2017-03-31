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
<link rel="Stylesheet" type="text/css" href="/boke/admin/Public/index/css/loginDialog.css" />
<script type="text/javascript" src="/boke/admin/Public/index/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/boke/admin/Public/index/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/boke/admin/Public/index/js/zySearch.js"></script>

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<style>

dl{float: left;margin:10px 0 0 0;height:80px;border-bottom:1px #7B7B7B solid;}
dt{float: left;}
dt img{border-radius: 25px;}
dd{width: 700px;text-indent: 0.5em;}
.getTime{margin-left:380px;}

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
   
       <!--nav end-->
    <!--content start-->
    <div id="content">
         <!--left-->
         <div class="left" id="c_left">
           <div class="s_tuijian">
           <h2>文章<span>推荐</span></h2>
           </div>
          <div class="content_text">
            <p align="center" style="font-size:30px;"><font color="#CD00CD"><?php echo ($articleData["bt"]); ?></font></p>
            <p class="box">发布时间：<?php echo ($articleData["time"]); ?><span>&nbsp;&nbsp;编辑：<?php echo ($articleData["name"]); ?>&nbsp;&nbsp;</span>阅读量:<font color="#FF1493">【<?php echo ($articleData["click"]); ?>】</font></p>
           <!--wz end-->
                <p class="run"><?php echo ($articleData["nr"]); ?></p> 
           </div>
            <input type="hidden" name="art_id" value="<?php echo ($articleData["id"]); ?>">
           <!--  <input type="hidden" id="name" value="<?php echo ($articleData["name"]); ?>">
             <input type="hidden" id="time" value="<?php echo ($articleData["time"]); ?>"> -->

            <div id="box1">
                  <div class="s_comment">
                     <h2>评论<span>查看</span></h2>
                  </div>
                <div class="content_content">
                    

                      <?php if(is_array($commintData)): foreach($commintData as $key=>$v): ?><dl>
                              <dt>
                              <?php if(($v["user_id"] == 1)): ?><img src="/boke/admin/123.jpg" alt="log" height="50" width="50"/>
                              <?php else: ?>
                                  <img src="/boke/admin/<?php echo ($v["head"]); ?>" alt="log" height="50" width="50"/><?php endif; ?>
                              </dt>
                              <dd><?php echo ($v["username"]); ?><font class="getTime"><?php echo ($v["time"]); ?>发表</font></dd>
                              <dd class="getNr"><?php echo ($v["nr"]); ?></dd>
                          </dl><?php endforeach; endif; ?>
      
                      <div class="fbCommint">
                         <h1>发表<span>评论</span></h1>
                      </div>
                      <div style="margin:10px 0 0 10px;">
                            <span>用户名：游客</span>
                            <textarea name="content" id="nr" rows="5" cols="85" placeholder="请输入评论内容"></textarea>
                            <br>
                            <span id="addContent"></span>
                      </div>
                      <p style="margin-left:150px;margin-top:20px;">
                          <input type="button" value="发送" class="btn btn-primary btn6 mr10" id="add">
                          <input type="button" style="display:none" value="匿名发送" class="btn btn-primary btn6 mr10" id="anonymity">
                      </p>
                      <span style="color:#9C99B2;margin-left:20px;">* 以上用户言论只代表其个人观点，不代表book网站的观点或立场</span> 

                </div>
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
    
    <!-- 登录弹出层 -->
    <div id="LoginBox">
        <div class="row1">
            登录账号<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="txtName" placeholder="账号/邮箱" name="username" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn">*</a>
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码: <span class="inputBox">
                <input type="text" id="txtPwd" name="password" placeholder="密码" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn2">*</a>
        </div>
        <div class="row">
            <a href="javascript:;" id="loginbtn">登录</a>
        </div>
    </div>


    <div id="footer">
     <p>Design by:<a href="http://www.duanliang920.com" target="_blank">少年</a> 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="/boke/admin/Public/index/js/nav.js"></script>
</body>

</html>
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
<script>
//用户评论
  $("#add").click(function(){
    var name = "<?php echo ($name); ?>";
    if(name == '')
    {
      $("body").append("<div id='mask'></div>");
       $("#mask").addClass("mask").fadeIn("slow");
       $("#LoginBox").fadeIn("slow");
    }
    else
    {
      var content = $("#nr").val();//品论内容
      var art_id = $("input[name='art_id']").val();
      if(content == ""){$("#addContent").append("<font color='red'>请输入评论内容</font>");return false;}
      // alert(art_id);die;
      var url = "<?php echo U('Index/commentGet');?>";
      $.get(url,{'content':content,'art_id':art_id,'name':name},function(msg){
        // alert(msg);
        if(msg == 0)
        {
            alert("评论失败");
            return false;
        }
        else
        {
            window.location.reload();
        }
      },'json')
    }
      
  });
  
  /**
   * 匿名发送
   * @param  {[type]} ){                } [description]
   * @return {[type]}     [description]
   */
   $("#anonymity").click(function(){
      $("#addContent").empty();
      var name = "<?php echo ($name); ?>";
      var content = $("#nr").val();//品论内容
      var art_id = $("input[name='art_id']").val();
      if(content == ""){$("#addContent").append("<font color='red'>请输入评论内容</font>");return false;}
      // alert(art_id);die;
      var url = "<?php echo U('Index/commentGet');?>";
      $.get(url,{'content':content,'art_id':art_id,'name':name},function(msg){
        // alert(msg);
        if(msg == 0)
        {
            alert("评论失败");
            return false;
        }
        else
        {
            window.location.reload();
        }
      },'json')
   })


   //用户登录
   $("#loginbtn").click(function(){
     $("#addContent").empty();
      var name = $("input[name='username']").val();
      var password = $("input[name='password']").val();
      var url = "/boke/admin/index.php/Home/Index/userLogin";
      $.get(url,{'name':name,'password':password},function(msg){
         if(msg['success'] == 1)
         {
            $("#LoginBox").fadeOut("fast");
            $("#mask").css({ display: 'none' });
            window.location.reload();
         }
         else
         {
            alert(msg['return']);
            // return false;
         }
      },'json')
   }) 
    //关闭弹出层
    $(".close_btn").click(function(){
      $("#anonymity").show();
      $("#add").hide();
      $("#LoginBox").fadeOut("fast");
      $("#mask").css({ display: 'none' });
    })
</script>