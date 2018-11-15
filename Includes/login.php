<?php
	session_start();
	include("db_connect.php");

	if((isset($_POST['login-submit'])) && (!isset($_SESSION['loggedin']))) {//if not already logged in and form has been submitted
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		// $password = mysql_real_escape_string($password);
		$sql = "SELECT * FROM project3 WHERE username='" . $username . "' AND password='".$password."' LIMIT 1"; //See if entered username/pass == username/pass in database
		$result = mysqli_query($connection, $sql); //Execute the sql query and store result in $result
		if (mysqli_num_rows($result) == 1){		//if account exists
			$row = mysqli_fetch_row($result);	//$row stores numerical array of data returned from sql query
			$_SESSION['loggedin'] = true;
			$_SESSION['logged_in_user'] = $username;


			echo "You are now logged in " . $_SESSION['logged_in_user'] . ". You will be redirected to the homepage.";
		}else{
            echo "<div class='signupsuccess'>Username or Password are incorrect. Click <a href='index.php'>HERE</a> to try again.</div>";
		}
	} else {

	}


	if (isset($_SESSION['loggedin'])) {
		header("Refresh: 3; url=index.php");
	}
?>
