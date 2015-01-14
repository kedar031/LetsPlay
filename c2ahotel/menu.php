<html><head>
<meta charset="UTF-8">
<title>Main Menu</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>

<body>
<div id="wrapper"> <!-- wraps a border around the form -->
<div id="navMenu">
<h2> Main Menu </h2>
<br><br>
<ul>
	<li><a href="#">Reservations</a>
		<ul>
			<li><a href="makeReservationForm.php">Make a Reservation</a></li><li>
			</li><li><a href="cancelReservationForm.php">Cancel a Reservation</a></li><li>
			</li><li><a href="#">Confirm a Reservation</a></li><li>
		</li></ul>
	</li>
</ul>
<ul>		
	<li><a href="#">Check-in,Check-out</a>
		<ul>
			<li><a href="checkinReservation.php">Check-in</a></li><li>
			</li><li><a href="checkoutReservation.php">Check-out</a></li><li>
			</li><li><a href="#">Check-in Report</a></li>
		</ul>	
	</li>
</ul>		
<ul>
	<li><a href="#">Stock Control</a>
		<ul>
			<li><a href="#">Remove Stock</a></li><li>
			</li><li><a href="#">Manual Ordering</a></li><li>
			</li><li><a href="#">Receive Stock</a></li><li>
		</li></ul>
	</li>

	<li><a href="#">File Maintenance</a>
		<ul>
			<li><a href="#">Staff Maintenance Menu</a>
				<ul>
					<li><a href="#">Add a Staff Member</a></li><li>
					</li><li><a href="#">Delete a Staff Member</a></li><li>
					</li><li><a href="#">Amend/View a Staff Member</a></li>
				</ul>
			</li>
			<li><a href="#">Stock Maintenance Menu</a>
				<ul>
					<li><a href="../stock/insert_stock.html">Add a Stock Item</a></li><li>
					</li><li><a href="#">Delete a Stock Item</a></li><li>
					</li><li><a href="#">Amend/View a Stock Item</a></li>
				</ul>
			</li>
			<li><a href="#">Guest Maintenance Menu</a>
				<ul>
					<li><a href="../guest/addGuest.html">Add a Guest</a></li><li>
					</li><li><a href="#">Delete a Guest</a></li><li>
					</li><li><a href="#">Amend/View a Guest</a></li>
				</ul>
			</li>
			<li><a href="#">Room Maintenance Menu</a>
				<ul>
					<li><a href="#">Add a Room</a></li><li>
					</li><li><a href="#">Delete a Room</a></li><li>
					</li><li><a href="#">Amend/View a Room</a></li>
				</ul>
			</li>	
		</ul>
	</li>
<ul>
<li><a href="#">Extras</a></li>
<div id="quit">
<a href="#">Quit</a>
</div>
</ul>
</ul></div>
</div>


</body></html>