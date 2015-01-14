<?php include('dbConfig.php');
	 
	  $id=$_POST["guestid"];
	  $date=$_POST["dateofarrival"];
	  $lenofstay=$_POST["lengthofstay"];
	  $typeofroom=$_POST["typeofroom"];
	  $set=true;
		
	  $tb_reservation="reservation";
	  $max_rid_query = "select MAX(ReservationID) from $tb_reservation";
	  
	  $max_rid=mysql_query($max_rid_query);
	  $max_rid = $maxrid + 1;
	  echo "$max_rid";
		
	  $query_reserve="insert into $tb_reservation(ReservationID,ReservationDate,Duration,ReservationStatus,GuestID) values(108,'$date','$lenofstay','Reserved','$id')";
	  
	  $result=mysql_query($query_reserve);
	  $count=mysql_num_rows($result);
	  echo "$count";
		if( $count != 1 ) {
			echo "DB Update failed";
			header("location:menu.php");
		}
		
	   header("location:reserveValidation.php");
?>