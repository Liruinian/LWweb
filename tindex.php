<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>个人网页</title>

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
  <div class="container">
  <?php 
  include "nav.php";
  ?> 
  </div>
</nav>
<br>
<div class="visible-xs">
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
  <span class="glyphicon glyphicon-warning-sign"></span>
  <strong>注意！</strong> 检测到您正在使用小屏幕设备访问，显示效果可能不佳！
</div>
</div>
<div class="jumbotron" align="center" style="background-image: url(http://static.bootcss.com/expo/img/d/dd/2de797545de56274f03a5920eb3a1.jpg)">
  <h1>世界你好!</h1>
  <p>这仅仅是测试版</p>
  <p><a class="btn btn-primary btn-lg" role="button">稍后上线</a></p>
</div>
      <?php
	  include "banner.php";
	  ?>
      <hr>
      <div class="row">
      <div class="col-md-5 col-xs-12">
      <?php
  include "icon.php";
  ?>
  </div>
  <div class="col-md-5 col-xs-12">
      <div id="mytags" class="mytags">
    <h3 class="demo-panel-title"><center>个人标签</center></h3>
<div class="list-group">
  <a href="about.php" class="list-group-item active">
    <h4 class="list-group-item-heading">学生</h4>
    <p class="list-group-item-text">简介一下你的个人标签</p>
  </a>
  <a href="about.php" class="list-group-item active">
    <h4 class="list-group-item-heading">摄影</h4>
    <p class="list-group-item-text">简介一下你的个人标签</p>
  </a>
  <a href="about.php" class="list-group-item active">
    <h4 class="list-group-item-heading">编程</h4>
    <p class="list-group-item-text">简介一下你的个人标签</p>
  </a>
</div>
        </div></div></div>  
        <hr>
    <div class="row" style="background-color:#000000">
    <div class="col-md-4 col-md-offset-1">
           <div id="myvideo" class="myvideo">
           <style>
		   div.myvideo { height: auto; }
		   </style>
            <div align="left">
          <video class="video-js" preload="auto" data-setup="{}">
            <source src="http://static.smartisanos.cn/common/video/smartisant1.mp4" type="video/mp4">
</video>
        </div> <!-- /video -->
        </div>
        </div>
        <div class="col-md-6">
        <div class="videotext">
        <style>
		div.videotext {
			color:#ffffff
		}
		</style>
	     <span class="demo-text-note"><center><h3>视频标题</h3></center></span>
						<p class="lead"><h6>你可以在这里放一些介绍视频内容的话。</h6><br><h7>&nbsp;&nbsp;例如：这就是老罗锤子手机的宣传视频。老罗的情怀贬值了，砸死你的锤子！！！这个视频做的还是不错的，No detail can be too detailed</h7></p>
       </div></div></div></div>
        <hr>
        <div class="row">
      		<div class="col-md-5 col-md-offset-1">
        
	      		<span class="demo-text-note">实例标题</span>
	          <blockquote>
	            <p>你可以在这里展示你的座右铭，例如：活着就是为了改变世界</p>
	            <small>史蒂夫乔布斯</small>
	          </blockquote>
      		</div>

            <div class="col-md-6">
            <span class="demo-text-note">小字体</span>
	          <p><small>你可以在这里放一些你想说的话或者做一个简要的自我介绍，这些文字最终将用小字体表示出来</small></p>
      		</div></div>
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