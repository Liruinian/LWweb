<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>隔壁老王服务器</title>

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
  <h1>服务器状态查询</h1>
  <p>人少也要玩哦</p>
  </div></div>
  
  <img src="http://tietu.zuimc.com/server.php?hostname=%E9%9A%94%E5%A3%81%E8%80%81%E7%8E%8B%20%7C%20%E5%8E%9F%E7%89%88%20%E7%A9%BA/%E6%B5%B7%E5%B2%9B%20%E8%B5%B7%E5%BA%8A%E6%88%98%E4%BA%89%20%E7%B2%98%E6%B6%B2%E7%A7%91%E6%8A%80&host=play.mcgblw.top&line=1&srv=1">
  
<?php

$myfile=fopen('D:\test1.txt','r');
while(!feof($myfile)){
	echo fgets($myfile);
}
fclose($myfile)

?>
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