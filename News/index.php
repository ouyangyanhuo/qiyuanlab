<?php
 
require_once 'curl.func.php';
 
$appkey = '5f8b580dbfb27003';//你的appkey
$channel='头条';//utf8 新闻频道(头条,财经,体育,娱乐,军事,教育,科技,NBA,股票,星座,女性,健康,育儿)
$url = "https://api.jisuapi.com/news/get?channel=$channel&appkey=$appkey";
$result = curlOpen($url, ['ssl'=>true]);
$jsonarr = json_decode($result, true);
if($jsonarr['status'] != 0)
{
    echo $jsonarr['msg'];
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>新闻</title>
<meta http-equiv="Cache-Control" content="no-siteapp">
<link href="./style/min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="./style/BackTop.css" />
<link href="./style/Scroll_Bar.css" rel="stylesheet" type="text/css">
<!--第三方元素-->
<link rel="stylesheet" href="//lib.baomitu.com/mdui/0.4.3/css/mdui.min.css">
<script src="//lib.baomitu.com/mdui/0.4.3/js/mdui.min.js"></script>
</head>
<body>
	<div class="bg-img"></div>
<style>  
body {  
    /*此处背景色应该是从图片中提取主色调效果更佳 */  
    background-color: #708c84;  
}  
.bg-img, body, html {  
    width: 100%;  
    height: 100%;  
}  
.bg-img {  
    display: block;  
    background-repeat: repeat; /* 重复 */  
    background-size: cover;       /* 覆盖 */
    background-position: 50%;     /* 居中 */  
      
    filter: url(blur.svg#blur); /* FireFox, Chrome, Opera */  
      
    -webkit-filter: blur(80px); /* Chrome, Opera */  
       -moz-filter: blur(80px);  
        -ms-filter: blur(80px);      
            filter: blur(80px);  
      
    filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=80, MakeShadow=false); /* IE6~IE9 */  
      
    background-image: url(http://p9.qhimg.com/bdr/__85/t016ad88ddaf2ae2d92.jpg);  
}  
.bg-img {  
    position: absolute;  
    top: 0;  
    left: 0;  
}  
</style>  
<div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999"> 
<div class="container">
	<div class="row" style="margin-top: 30px;">
	    <div class="col">
	      <img src="./style/logo.png" >
	    </div>
</div>
</div>
</div>
<br><br><br><br><br><br>
<div class="main-wrapper" style="position: relative; top: -6vh;">
<div class="container main-sentence">
<div class="row justify-content-center">
	<div class="col-11 col-md-8 col-xl-7">
		<div class="text-box">
            <div class="mdui-panel">
<?php $result = $jsonarr['result']; 
{ echo '<h3>'.'当前共'.$result['num'].'条头条新闻'.'</h3>'; }
foreach($result['list'] as $val) {
  echo "<div class='mdui-panel-item'>";
    echo "<div class='mdui-panel-item-header'>";
    { echo $val['title'];}
    echo "<small>";
    echo " ——";
    { echo $val['src'];}
    echo "</small>";
    echo "</div>";
    echo "<div class='mdui-panel-item-body'>";
      echo "<p>";
      { echo $val['time'];}
      echo "<br>";
      { echo $val['content'];}
      echo "<br>";
      echo "原地址:";
      { echo $val['url'];}
      echo "</p>";
    echo "</div>";
  echo "</div>";
  echo "<br>";
}?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--由底至顶-->
<a href="#" class="scroll-up" style="display: none;"><i class="mdui-icon material-icons">vertical_align_top</i></a>
<script src="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1/scrollTop/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1.1/scrollTop/menu.js"></script>
<!--由底至顶END-->
</body>
</html>