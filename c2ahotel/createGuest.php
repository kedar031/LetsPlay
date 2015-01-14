<?php include('dbConfig.php');

	  $id=$_POST["guestid"];
	  $forename=$_POST["forename"];
	  $surname=$_POST["surname"];
	  $street=$_POST["street"];
	  $town=$_POST["town"];
	  $county=$_POST["county"];
	  $phoneno=$_POST["phoneno"];
	  $email=$_POST["email"];
	    	  
	 
	  $tb_guest="guest";
	  $query_guest="insert into $tb_guest(GuestID,Forename,Surename,Street,Town,County,PhoneNo,Email) values('$id','$forename','$surname','$street','$town','$county','$phoneno','$email')";
	  $result_user=mysql_query($query_guest);
	 	  
	   header("location:createValidation.php");
?>

