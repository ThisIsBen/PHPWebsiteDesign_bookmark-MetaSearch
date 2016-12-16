<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script language="JavaScript">
function onImg(m){
m.style.cursor="pointer";
m.src="next_page.png";
}


function offImg(m){
m.style.cursor="";
m.src="next.png";

}

function onImg_logo(m){
m.style.cursor="pointer";
}

function offImg_logo(m){
m.style.cursor="";
}



</script>
<script type='text/javascript'>
function go_edit()
{
	
	window.location.href="bookmark_edit.php";
}
</script>	
</head>

<body>

<h1>Search Engine</h1>
<form action="search.php?action=1" method=post>
<input type=text placeholder="輸入搜尋內容" name=q size=25>
<input type=hidden name=next value="">
<input name=btnG type=submit value="搜尋">
</form>
	<br>
	<a href="search_engine.html" title="返回Search Engine"><img align="absmiddle" src="back.png" width="20"></img>返回</a><br><br>
	<form method="get" action="search.php">
	<img src="yahoo_logo.png" id="yahoo_logo" title="YAHOO奇摩" width="100" style="position:absolute;top:1%;background-color:#FFFF77;margin-left:70" onMouseOver="onImg_logo(this)" onMouseOut="offImg_logo(this)" onclick="location.href='search.php?action=1'"></img>
	<img src="sina_logo.png"  id="sina_logo" title="SINA新浪" width="100" style="position:absolute;top:1.5%;background-color:#BBFF66;margin-left:200" onMouseOver="onImg_logo(this)" onMouseOut="offImg_logo(this)" onclick="location.href='search.php?action=2'"></img>
	</form>	

<?php
include_once "./search_show.php";
header("Content-Type:text/html; charset=utf-8");
if($_GET){
	if(!isset($target)){
	$target=$_COOKIE['url'];
	if($_GET['action']=="1")
		$url_yahoo="http://tw.search.yahoo.com/search?q=".$target;
	if($_GET['action']=="2")
		$url_sina="http://find.sina.com.tw/".$target;
					}

}

if($_POST){
	$target=$_POST['q'];
	if(preg_match('/http:(.*?)/', $target)){
		if($_GET['action']=="1")
			$url_yahoo=$target;
		if($_GET['action']=="2")
			$url_sina=$target;
		}
		
	else{
	setcookie('url',$target);
	if($_GET['action']=="1")
		$url_yahoo="http://tw.search.yahoo.com/search?q=".$target;
	if($_GET['action']=="2")
		$url_sina="http://find.sina.com.tw/".$target;	
		}
}


if($_GET['action']=="1"){
echo'<script language="JavaScript">
var a=document.getElementById("yahoo_logo");
var b=document.getElementById("sina_logo");
a.style.border="3px solid red";
b.style.border="";
</script>';
	$contents_yahoo= file_get_contents($url_yahoo);
	$contents_yahoo=str_replace(array("\r","\n","\t","\s"), '', $contents_yahoo);  
	$title_yahoo='/<a id="link-[0-9]+"[^>]*>(.*?)<\/a>/';	
	$content_yahoo='/<div class="abstr"[^>]*>(.*?)<\/div><span class/';	
	$next_yahoo='/<a id="pg-next" href="(.*?)"/';
	
	preg_match_all($title_yahoo, $contents_yahoo, $match_title_yahoo);
	preg_match_all($content_yahoo, $contents_yahoo, $match_content_yahoo);
	preg_match($next_yahoo, $contents_yahoo, $next_yahoo_url);
	$href_yahoo[]=10;
	for($i=0;$i<10;$i++)
		preg_match('/href="(.*?)"/',$match_title_yahoo[0][$i],$href_yahoo[$i]);
								
	show($_GET['action'],$match_title_yahoo,$match_content_yahoo,$href_yahoo);
	
echo'
	<form action="search.php?action=1" method="post" name="yahoo">
	<input type="hidden" name="q" value="'.$next_yahoo_url[1].'" >
	<img src="next.png" height="50" title="下一頁" onMouseOver="onImg(this)" onMouseOut="offImg(this)" onClick="yahoo.submit()"></img>
	</form>	';	

}
	
if($_GET['action']=="2"){
echo'
<script language="JavaScript">
var a=document.getElementById("sina_logo");
var b=document.getElementById("yahoo_logo");
a.style.border="3px solid red";
a.style.top="1%";
b.style.border="";
</script>';
	$contents_sina= file_get_contents($url_sina);
	$contents_sina=str_replace(array("\r","\n","\t","\s"), '', $contents_sina);  	
	$title_sina='/<DIV style="word-warp:break-word;overflow:hidden; width:590px;"><A rel="nofollow"[^>]*>(.*?)<\/A>/';
	$content_sina='/<div style="word-warp:break-word;overflow:hidden; width:590px;">(.*?)<br><span class/';
	$href_sina='/&url=(.*?)" target="_blank">(.*?)<\/DIV>/';
	$next_sina='/\'> <big><a href=\'(.*?)\' rel=\'nofollow\'>下一頁<\/a>/';

	preg_match_all($title_sina, $contents_sina, $match_title_sina);
	preg_match_all($content_sina, $contents_sina, $match_content_sina);
	preg_match_all($href_sina, $contents_sina, $match_href_sina);
	preg_match($next_sina, $contents_sina, $next_sina_page);
	$next_sina_url="http://find.sina.com.tw/".$next_sina_page[1];
	show($_GET['action'],$match_title_sina,$match_content_sina,$match_href_sina);	
	
echo'
	<form action="search.php?action=2" method="post" name="sina">
	<input type="hidden" name="q" value="'.$next_sina_url.'" >
	<img src="next.png" height="50" title="下一頁" onMouseOver="onImg(this)" onMouseOut="offImg(this)" onClick="sina.submit()"></img>
	</form>	'	;		
}	
	

?>

<button type="button" class="btn btn-success" onclick="go_edit()" >Edit</button>	
	  
        
</body>
</html>