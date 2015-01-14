<?php
session_start();
include('dbConfig.php');
$tb_name="staff";

// username and password sent from form
$username=$_POST["username"];
$password=$_POST["password"];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT 'Staff ID' FROM $tb_name WHERE `Login Name`= '$username' and Password='$password'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
list($uid)=mysql_fetch_row($result);

if($count==0)
{
echo "Wrong Username or Password";
header("location:loginError.php");
}
else if($count==1) {
header("location:menu.php");
}

include('closeDbConnection.php');

?>