<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minecraft 隔壁老王服务器</title>

    <!-- Bootstrap -->
<link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
     
    <![endif]-->
    <script src="http://cdn.bootcss.com/pace/1.0.1/pace.js"></script>   
    <style>
	.body{
		font:Microsoft Yahei,微软雅黑,Lato
	}
	</style>
    </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <style>
  nav.navbar navbar-default navbar-fixed top {
	width:70%;
	margin-left:auto;
	margin-right:auto;
	border-radius: 15px;
  }
  </style>
  <!-- 加载导航条 -->
  <div class="container">
  <?php 
  include "nav.php";
  ?> 
  </div>
</nav>
<br>
<!-- 加载小屏提示框 -->
<div class="visible-xs">
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
  <span class="glyphicon glyphicon-warning-sign"></span>
  <strong>注意！</strong> 检测到您正在使用小屏幕设备访问，显示效果可能不佳！
</div>
</div>

<div class="jumbotron" align="center" style="background-image: url(http://211.149.234.45/images/main.jpg)">
  <h1>我的世界 隔壁老王服务器主页</h1>
  <p>.</p>
  <h4 class="list-group-item-heading">. </h4>
  <p class="list-group-item-text"> .</p>
  <p><a href="http://ouags776n.bkt.clouddn.com/Minecraft%201.10.2%20%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%AE%A2%E6%88%B7%E7%AB%AF.zip" class="btn btn-primary btn-lg" role="button">下载客户端</a></p>
</div>
<!-- 加载幻灯片 -->
      <?php
	  include "banner.php";
	  ?>
      <!-- 加载格栅系统和头像 -->
      <div class="row">
      <div class="col-md-5 col-xs-12">
      <br>
      <?php
  include "icon.php";
  ?>
  </div>
  <div class="col-md-5 col-xs-12">
      <div id="mytags" class="mytags">
    <h3 class="demo-panel-title"><center>服务器介绍</center></h3>
<div class="list-group">
<style>
.list-group{
	background-color:#48c9b0;
	border-color:#48c9b0;
}
.list-group-item.active{
background-color:#48c9b0;
border-color:#48c9b0；
}</style>
  <a href="about.php" class="list-group-item active">
    <h4 class="list-group-item-heading">稳定性好</h4>
    <p class="list-group-item-text">西部数码服务器 知名二线IDC 稳定不卡顿</p>
  </a>
  <a href="about.php" class="list-group-item active">
    <h4 class="list-group-item-heading">可玩性高</h4>
    <p class="list-group-item-text">空岛 海岛 粘液科技 原版生存 起床战争 总有一款适合你</p>
  </a>
  <a href="about.php" class="list-group-item active">
    <h4 class="list-group-item-heading">灵活性强</h4>
    <p class="list-group-item-text">可使用1.8-1.13版本联机 粘液科技要求1.9-1.13</p>
  </a>
</div>
        </div></div></div>  
        <!-- 加载视频 -->
    <div class="row" style="background-color:#000000">
    <div class="col-md-4 col-xs-12 col-md-offset-1">
           <div id="myvideo" class="myvideo">
           <style>
		   div.myvideo { height: auto;
		   margin-top:auto;
		   margin-bottom:auto;
		    }
		   </style>
            <div align="left">
          <video class="video-js" preload="auto" data-setup="{}">
            <source src="http://ouags776n.bkt.clouddn.com/Minecraft%27s%20End%20%28music%20video%29.mp4" type="video/mp4">
</video>
        </div> <!-- /video -->
        </div>
        </div>
        <div class="col-md-6 col-xs-12">
        <div class="videotext">
        <style>
		div.videotext {
			color:#ffffff
		}
		</style>
	     <span class="demo-text-note"><center><h3>宣传视频</h3></center></span>
						<p class="lead"><h6>暂时无视频</h6></p><br><p>&nbsp;&nbsp;抱歉<br>您可以先听下这首歌：Minecraft's end</p>
       </div></div></div></div>
      <?php 
  include "footer.php";
  ?> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="js/flat-ui.min.js"></script>
    <script src="js/application.js"></script>
    <script>
	videojs.options.flash.swf = "js/video-js.swf"
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/move-top.js"</script>
  </body>
</html>