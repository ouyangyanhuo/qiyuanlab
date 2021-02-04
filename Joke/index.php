<?php
 
require_once 'curl.func.php';
 
$appkey = '5f8b580dbfb27003';//你的appkey
$pagenum = 1;
$pagesize = 1;;
$sort = 'rand';//addtime/rand
$url = "https://api.jisuapi.com/xiaohua/text?pagenum=$pagenum&pagesize=$pagesize&sort=$sort&appkey=$appkey";
$result = curlOpen($url, ['ssl'=>true]);
$jsonarr = json_decode($result, true);
//exit(var_dump($jsonarr));
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
<title>随机笑话</title>
<meta http-equiv="Cache-Control" content="no-siteapp">
<link href="./style/min.css" rel="stylesheet">
<style>
	.btn-primary.active, .btn-primary:active,  .btn-primary:hover, .open .dropdown-toggle.btn-primary .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
	    color: #fff;
	    border: 2px solid #1aaf5d;
	    background-color: #1aaf5d;
	    outline: none !important;
	}
	.btn-primary.btn-filled {
	    background: #1aaf5d;
	    color: #fff;
	}
	.btn:hover {
	    background: none;
	    color: #fff;
	    border-color: #1aaf5d;
	    background-color: #1aaf5d;
	}
	.btn-primary.active, .btn-primary:active, .open .dropdown-toggle.btn-primary {
	    background-image: none;
	}
	.btn-primary {
	    border-radius: 25px;
	    display: inline-block;
	    padding: 14px 28px 13px 28px;
	    line-height: 1;
	    border: 2px solid #1aaf5d;
	    font-family: "Raleway", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
	    font-weight: bold;
	    font-size: 11px;
	    text-transform: uppercase;
	    letter-spacing: 1px;
	    color: #1aaf5d;
	}
	.btn {
	    background: none;
	    -webkit-transition: all .3s ease;
	    -moz-transition: all .3s ease;
	    transition: all .3s ease;
	    min-width: 50px;
	}
	.btn-primary.focus, .btn-primary:focus {
		box-shadow: none !important;
	}
	.btn-xs {
	    padding: 8px 24px;
	    font-size: 12px;
	}
	.btn.active, .btn:active {
	    outline: 0;
	    background-image: none;
	    -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0.125) !important;
	    box-shadow: inset 0 3px 5px rgba(0,0,0,0.125) !important;
	}
	.badge-primary {
		background-color: #fff;
		border: 1px solid #1aaf5d;
		color: #1aaf5d;
	}
	.btn-primary.disabled, .btn-primary:disabled {
	    color: #888;
	    background-color: #fff;
	    border-color: #888;
	}


	.text-box {
		font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		max-width: 100%;
		width: 100%;
		color: #333333;
		white-space:nowrap;
		word-break:keep-all;
		height: 60px;
	}

	.text-box:before {
	  content: '';
	  display: inline-block;
	  vertical-align: middle;
	  height: 100%;
	}

	#sentence {
		vertical-align: middle;
	}

	.main-wrapper {
			height: 100vh;  
			display:flex;
			align-items:center;
	}



	@media (max-width: 1000px) { 
		.lead {
			font-size:1rem;
		}
	}

	@media (max-width: 600px) { 
		.lead {
			font-size:0.9rem;
		}
		.btn-primary {
			padding: 8px 24px;
		}
	}

	footer.short {
	    font-size: 16px;
	    color: #fff;
	}
	.bg-secondary-1 {
	    background-color: #2c3e50 !important;
	}
	footer {
	    padding-top: 80px;
	    padding-bottom: 80px;
	}
	footer.short .sub {
	    opacity: 0.5;
	}
	footer.short ul {
	    display: inline-block;
	    margin: 0px;
	    line-height: 24px;
	}

	footer.short ul li {
	    float: left;
	    margin-right: 32px;
	}
	ul {
    	list-style: none;
    	padding: 0px;
	}


	footer.short ul li a {
	    color: #fff;
	    opacity: 0.8;
	}

	footer.short {
		padding-bottom: 50px;
		padding-top: 50px;
	}

	.buttom-text {
		margin-top: 10px;
	}

	@media (max-width: 600px) { 
		footer.short {
			font-size: 14px;
			padding-bottom: 30px;
			padding-top: 50px;
		}
		footer.short ul {
		    padding-left: 12px;
		}
		footer.short ul li {
		    margin-right: 12px;
		}


	}
</style>
<script src="./style/fitty.js"></script>
</head>
<body>
<div class="bg-img"></div>
<style>
body {  
    /*此处背景色应该是从图片中提取主色调效果更佳 */  
    background-color: #F6F6F4;  
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
      
    background-image: url(http://p8.qhimg.com/bdr/__85/t011d2311d6497ca368.jpg);  
}  
.bg-img {  
    position: absolute;  
    top: 0;  
    left: 0;  
}  
</style>  
<div class="main-wrapper" style="position: relative; top: -6vh;">
<div class="container main-sentence">
	<div class="row justify-content-center text-center">
					
						<?php $result = $jsonarr['result']; foreach($result['list'] as $val)
{
    echo $val['content'];
} ?>
	            	
        	</div>
        	<div class="row justify-content-center">
        		<div class="col-4 col-xs-3 col-md-2 col-xl-2">
        			<a class="btn btn-primary btn-xs btn-block" style="margin-top: 30px;" id="javascript:history.go(0);" onclick="javascript:history.go(0);">换一句</a>
        		</div>
    </div>
</div>
</div>
<script type="text/javascript">
fitty(document.getElementById("sentence"),{"maxSize": 40})
</script>
</body>
</html>