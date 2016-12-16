<?php
include_once "./config.inc.php";
mysql_query("SET NAMES utf8",$link);
$user=$_COOKIE['user'];
$target=$_GET['id'];
$result=mysql_query("SELECT * FROM $user",$link)or die(mysql_error());
$num=mysql_num_rows($result);
$delete_id=$target;
$delete=mysql_query("DELETE FROM $user WHERE id='$delete_id'",$link);
if($delete_id!=($num-1)){
	for($i=$delete_id+1;$i<=($num-1);$i++){
		mysql_query("UPDATE $user SET id='$i'-1 WHERE id='$i'",$link)or die(mysql_error());
											}
						}
if($delete){
	header( "location:show.php");
	}
else{
	echo ('<script language="JavaScript"> alert("刪除失敗");</script>');
	header("Refresh:0.5; url=\"show.php");
}












?>