<!doctype html>
<html lang="zh-CN">
<!-- saved from url=(0020)http://www.nows.fun/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>毒鸡汤 - 壮士可要来一碗！</title>
	<meta name="description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
	<meta name="keywords" content="鸡汤,毒鸡汤,馊鸡汤">
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta name="author" content="yatang@126.com,dukeyin" />
	<meta property="og:title" content="毒鸡汤 - 壮士可要来一碗！" />
	<meta property="og:url" content="https://www.dukeyin.com/soup/" />
	<meta property="og:image" content="./img/logo.svg" />
	<meta property="og:site_name" content="毒鸡汤 - 壮士可要来一碗！" />
	<meta property="og:description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。"/>
	<link rel="icon" href="./img/soup.png" type="image/x-icon" id="page_favionc">
	<link href="./style.css" rel="stylesheet">
	<link rel="alternate icon" type="image/png" href="./img/soup.png">
	<link rel="stylesheet" href="//cdn.staticfile.org/animsition/4.0.2/css/animsition.min.css">
	<script src="//cdn.staticfile.org/jquery/1.11.0/jquery.min.js"></script>
	<script src="//cdn.staticfile.org/animsition/4.0.2/js/animsition.min.js"></script>
</head>
<body>
<div class="top-wrap"> 
<div class="container">
	<div class="row" style="margin-top: 30px;">
	    <div class="col">
	      <a href="" id="logo_a"><img class="logo" src="./img/logo.svg" alt="毒鸡汤"></a>
	    </div>
	    <div class="col">
	    	<div class="float-right">
	    		<a class="btn btn-primary btn-filled btn-xs" href="https://github.com/yduke/soup" target="_blank">GitHub</a>
	    	</div>
	    </div>
		</div>
</div>
</div>
<div class="main-wrapper animsition">
	<div class="container main-sentence justify-content-center text-center">
		<div class="row">
			<span id="sentence" style=""><script src="api.php"></script></span>
		</div>
		<div class="row">
			<span id="bar" data-progress="10"></span>
		</div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col text-center">
	            <p>Original by <a target="_blank" href="https://github.com/egotong/nows">egotong</a>, improved by <a target="_blank" href="https://www.dukeyin.com/">Duke Yin</a></p>
	    </div>
  		</div>
	</div>
</div>
<script>
window.onload = function(){
	var bar = document.getElementById("bar");
	var int=setInterval(function(){
		bar.dataset.progress--;
		if(bar.dataset.progress<=9){
			bar.dataset.progress='0'+ bar.dataset.progress;
			bar.style.width = bar.dataset.progress *10-10 +'%'
		}
		if(bar.dataset.progress==0){
			clearInterval(int);
			window.location.reload();
		}
	},1000);
};
jQuery(document).ready(function($){
 $('.main-wrapper').animsition({
	inDuration: 800,
    outDuration: 200,
	linkElement: 'a:not([target="_blank"]):not([href^="#"])',
	timeout: true,
	timeoutCountdown: 5000,
 });
url = window.location.href;
$('#logo_a').attr("href",url);
 });
</script>
</body>
</html>