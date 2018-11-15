<?php
	$server = "localhost";
	$username = "er886379";
	$password = "Vega$2018";
	$database = "er886379";

	$connection = mysqli_connect("$server" , "$username" , "$password", "$database") or die(mysql_error());  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect.
?>
