<?php include('dbConfig.php')
?>
	
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Reservations</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/styles_002.css">

<link rel="stylesheet" type="text/css" href="css/style.php">
</head>
<body>

<?php
	$rid=intval($_GET['rowid']);
	$query="select ReservationStatus from Reservation where ReservationID='$rid'";
	$res=mysql_query($query);
	$row = mysql_fetch_array($res);
	
	if(! $row[0] == "Reserved"){
		die('Cannot check-in an unreserved status'.mysql_error());
	}
	$update_query="update Reservation set ReservationStatus='Occupied' where ReservationID='$rid'";
	$result=mysql_query($update_query);
	 
	if($result)
	{
	   echo "Check-in Successful";
	}
	else
	{
		echo "Check-in unsuccessful";
	}
?>
</body>
</html>