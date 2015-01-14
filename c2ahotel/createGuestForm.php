
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>LOG IN</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/styles_002.css">

<link rel="stylesheet" type="text/css" href="css/style.php">
</head>
<body>
<form action="createGuest.php" method="post" name="createGuest" onSubmit="return validate()"><br><br><br><br>
	  <table align="center">
	  <tr>
	  
	  <td>Guest ID</td>
	  <td><input type="text" name="guestid"/></td>
	  </tr>
	  
	  <td>Forename</td>
	  <td><input type="text" name="forename"/></td>
	  </tr>
	  
	  <tr>
	  <td>Surname</td>
	  <td><input type="text" name="surname"/></td>
	  </tr>
	  
	  
	  <tr>
	  <td>Street</td>
	  <td><input type="text" name="street"/></td>
	  </tr>
	  
	  
	  <tr>
	  <td>Town</td>
	  <td><input type="text" name="town"/></td>
	  </tr>
	  
	  
	  <tr>
	  <td>County</td>
	  <td><input type="text" name="county"/></td>
	  </tr>
	  
	  
	  <tr>
	  <td>PhoneNo</td>
	  <td><input type="text" name="phoneno"/></td>
	  </tr>
	  
	  
	  <tr>
	  <td>Email</td>
	  <td><input type="text" name="email"/></td>
	  </tr>
	  
	  <tr>
	  <td>
	<input type="submit" value="Create" name="create" size="50" style="width:120px; height:21px;background-color:#97694F;color:#380474;font-family:Arial;font-size:13px;z-index:83"/>
	</td>

	<td align="left"><a href="menu.php" style="text-decoration:none"><input type="button" value="Cancel" name="cancel" size="50" style="width:120px; height:21px;background-color:	#97694F;color:#380474;font-family:Arial;font-size:13px;z-index:83"/></a></td>
	
	  
	  </tr>
    </table>
 </form>