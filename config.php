<?php

	$servername = "localhost";
	$username = "id17617360_root";
	$password = "pApqgT)R0sJC~y^X";
	$dbname = "id17617360_indian_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>