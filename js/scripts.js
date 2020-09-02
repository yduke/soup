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
//read data output random one
	$.post("././data.dat",null,function(data){
		var strs = new Array();
		strs=data.split(/[(\r\n)\r\n]+/); 
		var str = strs[Math.floor(Math.random()*strs.length)];
		$('#sentence').html(str);
	});
//animsition	
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