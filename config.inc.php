<?php

$host="140.116.245.148";
$user="f74029046";
$upwd="Justpeter123";
$db="f74029046";

$link=mysql_connect($host,$user,$upwd) or die ("Unable to connect!");
mysql_select_db($db, $link) or die ("Unable to select database!");

?>