<link rel="shortcut icon" href="/favicon.ico"/>
    <!-- 图片暗箱样式 -->
    <link rel="stylesheet" href="./Plugin/LightBox/Lightbox.min.css">
    <!-- 滚动条 -->
    <link href="css/Scroll_Bar.css" rel="stylesheet" type="text/css">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- 页面通用自定义css文件 -->
    <link rel="stylesheet" href="css/style.css" />
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--返回顶部插件-->
    <script type="text/javascript" src="js/scrolltopcontrol.js"></script>
<style>
#choose-tool span{
    color: #23527c;
    cursor: pointer;
}
#choose-tool span:hover{
    color: #23527c;
    text-decoration: underline;
}
#choose-tool .active span{
    color: #777;
    cursor: default;
}
#choose-tool .active span:hover{
    color: #777;
    cursor: default;
    text-decoration: none;
}
</style>
<!--滚动加载插件-->
<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
<script type="text/javascript">
$(function() {
    $(".lazy").lazyload({
        effect: "show",     // effect(特效),值有show(直接显示),fadeIn(淡入),slideDown(下拉)等,常用fadeIn
        failurelimit: 4,    //加载N张可加区域外的图片
        threshold: 100 //距离屏幕180px即开始加载
    });
    
    $('#choose-tool li').click(function(){
        if($(this).attr('class') == 'active') return false;
        $('.active').removeClass("active");
        $(this).addClass("active");
        if($(this).data("class") !== ".tool-item") $(".tool-item").hide();
        $($(this).data("class")).fadeIn(0);
    });
});
</script>
    <!--动态背景插件-->
    <script type='text/javascript' src='js/jquery.particleground.min.js'></script>
    <!--加载动态背景-->
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#particles').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
        });
    </script>
    </head> 
<body>
<div id="particles"></div>
<div class="container nav-main">