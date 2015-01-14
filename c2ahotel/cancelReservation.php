<?php 
	  
	  $id=$_POST["reservationid"];
	  
	  $tb_reservation="reservation";
	  
	  $query_cancel="delete from $tb_reservation where ReservationID='$id'";
	  $result=mysql_query($query_cancel);
	  $count=mysql_num_rows($result);
	  echo "$count";
		if( $count != 1 ) {
			echo "DB Update failed";
			header("location:menu.php");
		}
		
	   header("location:cancelValidation.php");
?>