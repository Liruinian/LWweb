<!-- 注意！缩略图大小为200px -->
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>隔壁老王服务器</title>

    <!-- Bootstrap -->
<link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Lightbox -->
<script type="text/javascript" src="js/lightbox/highslide-full.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox/highslide.css" />
<!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
     
    <![endif]-->
    
<script type="text/javascript">
	hs.graphicsDir = 'images/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	hs.dimmingOpacity = 0.75;

	// define the restraining box
	hs.useBox = true;
	hs.width = 640;
	hs.height = 480;

	// Add the controlbar
	hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: 1,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>
<style>
.frontphoto {
	width: 200px;
	height: 200px;
	margin: 0 auto;
	background: no-repeat left top;
	-webkit-background-size: 200px 200px;
	-moz-background-size: 200px 200px;
	background-size: 200px 200px;
	-webkit-border-radius: 100px;
	border-radius: 100px;
	-webkit-transition: -webkit-transform 0.2s ease-out;
	-moz-transition: -moz-transform 0.2s ease-out;
	-o-transition: -o-transform 0.2s ease-out;
	-ms-transition: -ms-transform 0.2s ease-out;
	margin-right:auto;
	margin-left:auto;
}
.frontphoto:hover {
	-webkit-transform: rotateZ(30deg);
	-moz-transform: rotateZ(30deg);
	-o-transform: rotateZ(30deg);
	-ms-transform: rotateZ(30deg);
	transform: rotateZ(30deg);
}
</style>
   </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
  <?php 
  include "nav.php";
  ?> 
  </div>
</nav>
<br>
<div class="jumbotron">
<div align="center">
  <h1>服务器相册</h1>
  <p>欢迎来到我们服务器！</p>
  <p><a href="http://ouags776n.bkt.clouddn.com/Minecraft%201.10.2%20%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%AE%A2%E6%88%B7%E7%AB%AF.zip" class="btn btn-primary btn-lg" role="button">下载客户端</a></p>
</div></div>
      <?php
	  include "banner.php";
	  ?>
      <hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-xs-12" align="center">
<div class="frontphoto">
<a href="images/Santen.jpg" class="highslide" onclick="return hs.expand(this)">
	<img src="images/Santen.jpg" alt="Highslide JS"
		title="点击放大" / class="frontphoto">
        
</a>
</div>
<hr>
        <h3>腐竹</h3><br>
        <p>Pipi_Santen</p>
<!--
	5 (optional). This is how you mark up the caption. The correct class name is important.
-->

<div class="highslide-caption">
	介绍！
</div>
</div>

<!-- Repetionion of the above -->
<div class="col-md-4 col-xs-12" align="center">
<div class="frontphoto">
<a href="images/Tim.jpg" class="highslide" onclick="return hs.expand(this)">
	<img src="images/Tim.jpg" alt="Highslide JS"
		title="点击放大" / class="frontphoto"></a>
</div>
<hr>
        <h3>技术</h3><br>
        <p>Tim_LRN2016</p>
<div class="highslide-caption">
	介绍！
</div></div>

<div class="col-md-4 col-xs-12" align="center">
<div class="frontphoto">
<a href="images/Apple.jpg" class="highslide" onclick="return hs.expand(this)">

<img src="images/Apple.jpg" alt="Highslide JS"
		title="点击放大" / class="frontphoto">
</a>
</div>
<hr>
        <h3>管理</h3><br>
        <p>MC_apple</p>
<div class="highslide-caption">
	写一些介绍吧！
    
</div></div>
</div></div>
<hr>
<div class="row">
<div class="col-md-6 col-md-offset-1">
<h2>服务器主城</h2>
<p>图片纪念</p>
</div>
<div class="col-md-5">
<img src="images/gallery1.jpg" alt="图片" class="img-thumbnail" style="height:400px; width:600px">
</div>
</div>
<hr>
<div class="row">
<div class="col-md-5 col-md-offset-1">
<img src="images/gallery2.jpg" alt="图片" class="img-thumbnail" style="height:400px; width:600px">
</div>
<div class="col-md-6">
<h2>玩家合照</h2>
<p>图片纪念</p>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6 col-md-offset-1">
<h2>原版生存服务器主城</h2>
<p>图片纪念</p>
</div>
<div class="col-md-5">
<img src="images/gallery3.jpg" alt="图片" class="img-thumbnail" style="height:400px; width:600px">
</div>
</div>
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
    
  </body>
</html>