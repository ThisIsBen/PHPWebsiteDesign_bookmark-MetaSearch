<html>
<body>
<meta charset="utf-8">
<style>
	#_background {background-image:url('hkt-2.jpg');opacity:0.7;position:absolute;top:15%;left:25%;background-size:cover;height:500px;width:50%;float:left;BACKGROUND-ATTACHMENT:FIXED;}
	#content {background-color:#FFFFFF;position:absolute;opacity:0.8;top:15%;left:37%;height:500px;width:400px;overflow:scroll;}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<div id="_background"></div>
<?php
include_once "./config.inc.php";
mysql_query("SET NAMES utf8",$link);

print "<div id=\"content\">";
print "<a href=\"login.php?action=logout\">登出</a><br/><br>";
//$user_name=$_COOKIE['user'];

print "<a href=\"bookmark_edit.php\"><button type=\"button\" class=\"btn btn-success\"  >Edit</button>	
	  
        </a><br/><br/>";
session_start();
$host="localhost";
$username="root";  
$password="";
$database="hw3";
$No="";
mysql_connect($host,$username,$password);
mysql_select_db($database)or die( "Unable to select database");
///
    $username = $_SESSION['login_username'];
	$userpassword=$_SESSION['login_password'];
    $User_No_result=mysql_query("SELECT `No` FROM `user_info` WHERE `Account`= '$username' AND  `Password`= '$userpassword'");
	
	if (!$User_No_result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
	//if (mysql_num_rows($User_No_result)>=1){
    $row = mysql_fetch_array($User_No_result);
    
	$No=$row['No'];
	//echo $No;

   mysql_free_result($User_No_result);

///
$show=mysql_query("SELECT * FROM `bookmark` WHERE No='$No' ");
$num_row=mysql_num_rows($show);
if($num_row){

	while($row = mysql_fetch_row($show))
        {        //echo "user Id: " . $row['No'];
                 echo ("<a href=\"deletepage.php?id=$row[0]\"><img onMouseOver=\"onImg(this)\" onClick=\"return confirm('確定刪除？');\" style=\"margin-right:5; margin-bottom:13;\" align=\"middle\" height=\"18\" title=\"刪除\" src=\"delete.png\"></img></a><a style=\"color:blue;line-height:1;\" href= $row[2] target=\"_blank\" >$row[1]</a>"."<br>");
        }
		  }
else
	print "目前尚未有任何書籤!<br>";


	print "</div>"
?>
<script language="JavaScript">
function check(){
	if(addpage.url_name.value==""&&addpage.url.value=="")
		alert("未填入書籤名稱及網址");
	else if(addpage.url_name.value=="")
		alert("未填入書籤名稱");
	else if(addpage.url.value=="")
		alert("未填入網址");
	else
		addpage.submit();
}

function onImg(m){
	m.style.cursor="pointer";
}




</script>

	<div style="border:1;position:absolute;top:15%;left:75%;">
	<h2>新增書籤</h2>
	<form action="addpage.php" method="post" name="addpage">
	<input type="text" name="url_name" placeholder="名稱" style="width:300px; margin-top:30px" ><br>
	<textarea name="url" placeholder="http://" style="width:300px;height:100px;margin-top:15px"></textarea><br>

	<input type="button" value="加入書籤" onClick="check()" style="margin-top:15px;">
	</form>

	</div>
<iframe src="search_engine.html" frameborder="0" target="_parent" style="margin-left:1.5%;margin-top:3%;overflow:scroll;" height="600px" width="350px"></iframe>

	
</body>
</html>