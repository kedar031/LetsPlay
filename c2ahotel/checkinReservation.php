<?php include('dbConfig.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
$query_list=mysql_query("select * from reservation");


    echo "<table border='1' class='db-table' align='center'>
    <tr>
    <th>ReservationID</th>
    <th>ReservationDate</th>
	<th>ArrivalDate</th>
	<th>Duration</th>
	<th>RoomID</th>
	<th>ReservationStatus</th>
	<th>GuestID</th>
	<th>Check-in</th>
    </tr>";

    while($row = mysql_fetch_array($query_list))
      {
	   $rid=$row['ReservationID'];
	   echo '<tr>
          <td>',$row['ReservationID'],'</td>
		  
          <td style="text-align:center">$',$row['ReservationDate'],'</td>
          <td style="text-align:center">',$row['ArrivalDate'],'</td>
		  <td style="text-align:center">',$row['Duration'],'</td>
		  <td style="text-align:center">',$row['RoomID'],'</td>
	      <td style="text-align:center">',$row['ReservationStatus'],'</td>
		  <td style="text-align:center">',$row['GuestID'],'</td>
		  <td align="left"><a href="checkinRow.php?rowid='.$rid.'" style="text-decoration:none"><input type="button" value="Check-in" name="checkin"/></a></td>
        </tr>';
      }
    echo '</table><br>';

?>
</body>
</html>