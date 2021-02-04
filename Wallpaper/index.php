<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wallpaper</title>
    <meta name="keywords" content="电脑桌面壁纸,高清电脑桌面壁纸,电脑桌面壁纸下载,电脑高清桌面壁纸" />
    <meta name="description" content="起源实验室在线壁纸提供高清电脑壁纸下载,包括美女,游戏,动漫,动物,汽车,体育,广告,影视,明星,风景,绘画,节日,花卉等经典壁纸"/>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link type="text/css" rel="stylesheet" href="css/BackTop.css" />
    <link href="css/Scroll_Bar.css" rel="stylesheet" type="text/css">
    <!-- jQuery文件 -->
    <script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!--滚动加载插件-->
    <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
    <!--全屏滚动插件-->
    <script type="text/javascript" src="js/jquery.onepage-scroll.min.js"></script>
    <!--页面核心js文件-->
    <script type="text/javascript" src="js/wallpaper.js"></script>
    <link rel="stylesheet" href="css/wallpaper.css">
</head>
<body>
<div class="banner">
    <h1 href="https://www.kpan.me" class="webTitle" title="起源实验室">Wallpaper</h1>
    <ul id="banner">
        <li onclick="loadData('360new', true);changeTitle(this)">最新壁纸</li>
        <li class="tags">
            分类壁纸
            <ul id="tags"></ul>
        </li>
        <li onclick="loadData('bing', true);changeTitle(this)">必应美图</li>
        <li onclick="loadData('ciba', true);changeTitle(this)" title="金山词霸每日一句壁纸">每日英语</li>
    </ul>
</div>
<div class="container">
    
    <div class="jigsaw" id="walBox"></div>  <!-- id="walBox" -->
    
    <a id="toolBall" target="_blank" href="javascript:void(0);" class="uptoTop"></a>
    
    <div id="loadmore">壁纸加载中……</div>
</div><!-- class="container" -->
<!--由底至顶-->
<a href="#" class="scroll-up" style="display: none;"><i class="mdui-icon material-icons">vertical_align_top</i></a>
<script src="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1/scrollTop/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1.1/scrollTop/menu.js"></script>
<!--由底至顶END-->
</body>
</html>