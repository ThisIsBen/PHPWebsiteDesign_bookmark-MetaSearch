<html>
<head>
<script>
function go_back_bookmark()
{
window.location.href="user_bookmark.php";


}
</script>
</head>
<body>
<?php
session_start();
$host="localhost";
$username="root";  
$password="";
$database="hw3";
mysql_connect($host,$username,$password);
mysql_select_db($database)or die( "Unable to select database");
//echo  "to test whether this account has been used <br>";
$updateAccount=$_POST['newusername'];
$updatePassword=$_POST['newpassword'];
$updateEmail=$_POST['newemail'];
//$month=$_POST['month'];
//$day=$_POST['day'];
//echo $person."<br>".$password."<br>".$month."<br>".$day;

//get user No
        
	$username = $_SESSION['login_username'];
	$userpassword=$_SESSION['login_password'];
    $User_No_result=mysql_query("SELECT `No` FROM `user_info` WHERE `Account`= '$username' AND  `Password`= '$userpassword'");
	
	
	if (!$User_No_result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
	if (mysql_num_rows($User_No_result)==1){
    $row = mysql_fetch_array($User_No_result);
    //echo "user Id: " . $row['No'];
	
	$No=$row['No'];
}
else{
    echo "not found!";
}
  //$row = mysql_fetch_row($User_No_result);

   //echo $row[0];
   mysql_free_result($User_No_result);

//
$query = "UPDATE `user_info` SET `Account`='$updateAccount',`Password`='$updatePassword',`Email`='$updateEmail' WHERE `No`='$No'";
$updateresult = mysql_query($query);
$updated="";
///


if ($updateresult  === TRUE)
{
        echo "<script type='text/javascript'>";
        echo "alert(\"The account has updated\")";
        echo "</script>";
		$_SESSION['login_username']=$updateAccount;
		$_SESSION['login_password']=$updatePassword;
} 

else
{
	
	   echo "<script type='text/javascript'>";
        echo "alert(\"The account can't be updated\")";
        echo "</script>"; 
	    
}
header("location: show.php");
?>


</body>
</html>