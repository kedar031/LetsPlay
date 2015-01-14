<?php
	//session
	session_start();

	// set timeout period in seconds
 $inactive = 600;
     
	// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['start']) ) {
    $session_life = time() - $_SESSION['start'];
if($session_life > $inactive)
    { 
	
	 session_destroy();
	 header("Location: logout.php"); }
    }
$_SESSION['start'] = time();
?>