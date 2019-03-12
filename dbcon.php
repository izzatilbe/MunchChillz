<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "munchandchillz";

	$conn = mysqli_connect($host, $username, $password);

	mysqli_select_db($conn, $dbname);
?>