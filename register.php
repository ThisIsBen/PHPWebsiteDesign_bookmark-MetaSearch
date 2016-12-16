<html>
<head>
</head>
<?php
session_start();
$host="localhost";
$username="root";  
$password="";
$database="hw3";
mysql_connect($host,$username,$password);
mysql_select_db($database)or die( "Unable to select database");
//echo  "to test whether this account has been used <br>";
$inputAccount=$_POST['username'];
$inputPassword=$_POST['password'];
$inputEmail=$_POST['email'];

$_SESSION['login_username']=$inputAccount;
$_SESSION['login_password']=$inputPassword;
//$month=$_POST['month'];
//$day=$_POST['day'];
//echo $person."<br>".$password."<br>".$month."<br>".$day;
$query = "SELECT  `Account`, `Password`, `Email` FROM `user_info` WHERE Account='$inputAccount' AND Password='$inputPassword'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result)) {
    //echo  "$row[account]<BR>\n";
    if($row['Account']==$inputAccount)
    {
        $existed=1;
        break;	
    }
    else
        $existed=0;
}
if($existed)
{
    echo "The account has existed<br>";
}
else
{
	//assign a number to identify each user.
    $User_No_result=mysql_query("SELECT COUNT(*) FROM user_info ");
	
	
	$User_No = mysql_fetch_array($User_No_result, MYSQL_NUM) ;
    

	mysql_free_result($User_No_result);
	$_SESSION['user_no']=$User_No[0];
    //
	
	
	//echo $User_No[0];
    echo "No such person so you can register<br>";
    $sql="INSERT INTO user_info(No,Account, Password, Email) VALUES ('$User_No[0]','$inputAccount','$inputPassword','$inputEmail' )";
    $register = mysql_query($sql);
    if ($register  === TRUE)
    {
        echo "New record created successfully";
        //go to customized page
        $_SESSION['login_username'] = $_POST['username'];
        $url = "search.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
        echo "Welcome ".$_SESSION['login_username']."<br>";
    } 
    else
    {
        echo "Error: " . $sql . "<br>" ;
    }
}
?>