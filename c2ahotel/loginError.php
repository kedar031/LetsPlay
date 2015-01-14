<?php 
include('session.php');
include('header_login.php');    
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LOG IN</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/styles_002.css">

<link rel="stylesheet" type="text/css" href="css/style.php">

<script>
function login_validation()

{
<!--if(document.getElementById('username').value.length==0 && document.getElementById('password').value.length==0)
<!--alert("Provide the login-details");-->-->
if(document.getElementById('username').value.length==0){
alert("Please provide the Username");
return false;}
if (document.getElementById('password').value.length==0){
alert("Please provide the Password");
return false;}
}
</script>
</head>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="login" method="post" action="loginValidation.php" onSubmit="return login_validation()">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Invalid login, please try again </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="username" id="username" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" id="password" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<body>