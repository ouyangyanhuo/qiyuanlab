<div class="mdui-typo">
<footer>
<p>Copyright © 2019-2020 <a href="https://www.kpan.me/">Origin Lab Project.</a> All rights reserved.</p>
<p>Version 2.5 By <a href="https://www.symbk.cn">Magneto</a></p>
</footer>
</div>
</div>
<!--源表情通用js文件-->
<script type="text/javascript" src="js/jquery.js"></script>

<!--图片暗箱JS-->
<script src="./Plugin/LightBox/Lightbox.min.js"></script>
<script type="text/javascript">
	$('.example img').zoomify();
</script>
<script>
	function lazyload() {
	var images = document.getElementsByTagName('img');
	var len = images.length;
    var n = 0;      //存储图片加载到的位置，避免每次都从第一张图片开始遍历		
    return function() {
    var seeHeight = document.documentElement.clientHeight;
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    for(var i = n; i < len; i++) {
        if(images[i].offsetTop < seeHeight + scrollTop) {
            if(images[i].getAttribute('src') === './img/loading.gif') {
                images[i].src = images[i].getAttribute('data-src');
			}
			n = n + 1;
			}
		}
		}
	}
	var loadImages = lazyload();
	loadImages();          //初始化首页的页面图片
	window.addEventListener('scroll', loadImages, false);
</script>