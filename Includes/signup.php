<?php
    require "header.php";
?>

<?php
	include("db_connect.php");
	
	if(isset($_POST['submit'])) {	//If data in form field
		//Store form values into variables using the POST method
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$email = $_POST['email'];
			
		$sql = "SELECT * FROM project4 WHERE username='" . $username . "' LIMIT 1"; //Check to see if account already exists
		$result = mysqli_query($connection, $sql); //store results of query in $result var
		
		if(mysqli_num_rows($result) == 1){	//If at least one result
			echo "Account already exists. Please try a new username."; //account already exists
		
		} else {	//If new account
			$sql = "INSERT INTO project4 (username,email,password) VALUES('$username','$email','$password')"; //prepare to add stats to database table
			mysqli_query($connection, $sql); //run the query
			echo "Account successfully created. Log in to get started! You will be redirected to the login page in 5 seconds.";
			header("Refresh: 5; url=./index.php"); //Takes user to login page in 5 secs
		}
	
	} else {
		// do nothing
	}
	
?>

<html>
	<body>
            <h2>Sign Up</h2>
			<br>
            <h3>Please fill out all the fields below.</h3>

            <form method="post" action="" class="form-signup">
                <!--Username-->
                <input type="username" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username']?>" class="signupinput"/> 
                <br />

				<!--Email-->
                <input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>" class="signupinput"/> 
                <br />

                <!--Password-->
                <input type="password" name="password" placeholder="Password" class="signupinput"/> 
                <br />

                <button type="submit" name="submit">Submit</button>

            </form>
	</body>
</html>

<?php
	include("footer.php");
?>