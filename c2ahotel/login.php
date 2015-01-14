<?php 
include('session.php');
include('header_login.php');    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LOG IN</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/styles_002.css">

<link rel="stylesheet" type="text/css" href="css/style.php">
<!-- This is javascript -->
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
<div id="content"><div class="loginbox clearfix onecolumn">
  <div class="loginpanel">
         <div class="subcontent loginsub">
		 <div class="desc">
          Login here using your username and password<br></div>
                <form id="login" method="post" action="loginValidation.php" onSubmit="return login_validation()">
          <div class="loginform">
            <div class="form-label"><label for="username">Username</label></div>
            <div class="form-input">
              <input type="text" value="" size="15" id="username" name="username">
            </div>
            <div class="clearer"><!-- --></div>
            <div class="form-label"><label for="password">Password</label></div>
            <div class="form-input">
              <input type="password" value="" size="15" id="password" name="password">
			  <br>
              <input type="submit" value="Login">
              
            </div>
            <div class="clearer"><!-- --></div>
          </div>
        </form>
      </div>
     
     </div>
</div>
</div>
<div id="footer"></div>
</body>