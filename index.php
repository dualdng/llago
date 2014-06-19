<!doctypehtml>
<?php include('include/functions.php');
if(!isset($_GET['page']))
{
		$page=1;
}
else
{
		$page=$_GET['page'];
}
?>
<html>
<title>Line|Brague</title>
<head>
<meta name='keywords' content='' >
<meta name='description' content='' >
<meta http-equiv='content-type' content='text/html;charset=utf-8'>
<link rel=”icon” href=”favicon.ico” mce_href=”favicon.ico” type=”image/x-icon”>
<link rel=”shortcut icon” href=”favicon.ico” mce_href=”favicon.ico” type=”image/x-icon”>
<link rel='stylesheet' href='style/main.css' /> 
<link rel='stylesheet' href='phzoom/phzoom.css' /> 
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<!--<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>-->
<script type="text/javascript" src="phzoom/phzoom.js"></script>
<script type='text/javascript' src='js/main.js' ></script>
<script type="text/javascript"> 
var scrollFunc=function(e){ 
    ee=e || window.event; 
    var t1=document.getElementById("wheelDelta"); 
    var t2=document.getElementById("detail"); 
    if(e.wheelDelta){//IE/Opera/Chrome 
	
        t1.value=e.wheelDelta; 
		if(t1.value<0)
		{document.getElementById("navibar").style.height="0px";
		}
		else if(t1.value>0)
		{document.getElementById("navibar").style.height="50px";
		}

    }else if(e.detail){//Firefox 
        t2.value=e.detail; 
    } 
} 
/*注册事件*/ 
if(document.addEventListener){ 
    document.addEventListener('DOMMouseScroll',scrollFunc,false); 
}//W3C 
window.onmousewheel=document.onmousewheel=scrollFunc;//IE/Opera/Chrome 
</script> 

</head>
<body>
		<header>
				<div id='name'><h1>LINES</h1></div>
				<div id='hitokoto'><h2>没有人可以回到过去重新开始，但谁都可以从现在开始，书写一个全然不同的结局</h2></div>
				<div id='brague_logo'><img src='image/brague_logo.png' ?></div>

				</header>

				<div class='wipe-overlay'></div>
				<div id='mousewheel'><label for="wheelDelta">滚动值:</label>(IE/Opera)<input type="text" id="wheelDelta"/> 
				<label for="detail">滚动值:(Firefox)</label><input type="text" id="detail"/> 
				</div>

<nav id='navibar'>
<ul>
<li>
<a href='<?php echo 'http://'.$_SERVER['HTTP_HOST'];?>'>Home</a>
</li>
<li>
<a href='#'>bmenu2</a>
<ul>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href='#'></a></li>
<li><a href='#'></a></li>
</ul>
</li>
<li>
<a href='#'>bmenu3</a>
<ul>
<li><a href='#'></a></li>
<li><a href='#'></a></li>
<li><a href='#'></a></li>
<li><a href='#'></a></li>
<li><a href='#'></a></li>
</ul>
</li>
<li>
<a href='http://www.uuuuj.com'>About</a>
<ul>
<li><a href='http://www.uuuuj.com'></a></li>
</ul>
</li>
<li>
<div class='foot'> Powered by <a href='http://www.uuuuj.com'>Brague</a></div>
</ul>
</nav>
<div class='spinner'></div>
<article>
<div id='line'>
<?php
show_line($page);?>
</div>
</article>
<div class='more'>
<?php
echo '<a id=\'loadmore\' href=\'include/show_line.php?page='.($page+1).'\'>';
?>
加载更多
</a>
<a id='randmore' href='javascript:rand_line()'>试试手气</a>
</div>
<div  class='page_nav'>
</div>
</body>
</html>
