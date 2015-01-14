
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
<form action="makeReservation.php" method="post" name="makeReservation" onSubmit="return validate()"><br><br><br><br>
	  <table align="center">
	  <tr>
	  
	  <td>GuestID</td>
	  <td><input type="text" name="guestid"/></td>
	  </tr>
	  
	  <td>Date of arrival</td>
	  <td><input type="text" name="arrivaldate"/></td>
	  </tr>
	  
	  <tr>
	  <td>Length of Stay</td>
	  <td><input type="text" name="lengthofstay"/></td>
	  </tr>
	  
	  <tr>
	  <td>Type of Room</td>
	  <td>
	  <select name="typeofroom">
	  <option>single</option>
	  <option>double</option>
	  <option>twin</option>
	  <option>triple</option>
	  </select>
	  </td>
	  </tr>
	  
	  <tr>
	  <td>
	<input type="submit" value="Reserve" name="reserve" size="50" style="width:120px; height:21px;background-color:#97694F;color:#380474;font-family:Arial;font-size:13px;z-index:83"/>
	</td>

	<td align="left"><a href="menu.php" style="text-decoration:none"><input type="button" value="Cancel" name="cancel" size="50" style="width:120px; height:21px;background-color:	#97694F;color:#380474;font-family:Arial;font-size:13px;z-index:83"/></a></td>
	<td align="left"><a href="createGuestForm.php" style="text-decoration:none"><input type="button" value="Create Guest" name="create" size="50" style="width:120px; height:21px;background-color:	#97694F;color:#380474;font-family:Arial;font-size:13px;z-index:83"/></a></td>
	
	  
	  </tr>
    </table>
 </form>
<script language="javascript">

function validate()
{

var x=document.forms["makeReservation"]["GuestID"].value
if (x==null || x=="")
  {
  alert("Please enter the guestID");
  return false;
  }
}

</script>
</body>

</html>