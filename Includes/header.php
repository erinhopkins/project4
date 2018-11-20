<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/reset.css" rel="stylesheet" type="text/css">
    
        <title>Code Club</title>
    </head>

    <body>
        <header>
            <div class="nav-header-main">
		<div class="nav_bar">
			<a class="nav_left" href="./index.php">
				<img src="img/wave.png" alt="logo goes here">
			</a>
					
               		<div class="nav_right">
				<ul class="nav_right_list">
					<li><a href="./index.php">Home</a></li>		
					<li><a href="./about.php">About</a></li>
					<li><a href="./events.php">Events</a></li>
					<li><a href="./forum.php">Forum</a></li>
					<li><a href="./contact.php">Contact</a></li>
				</ul>
			</div>
           	</div>
	</div>
		<div class="header-login">
              	<?php 
                	if(!isset($_SESSION['loggedin'])) {
				echo '<form action="includes/login.php" method="post">
					<input type="text" name="username" placeholder="Username...">
					<input type="password" name="password" placeholder="Password..."> 
					<button type="submit" name="login-submit">Login</button>
				      </form>

                            <form method="post" action="includes/signup.php">
                            <button type="submit" name="signup-submit">Sign Up</button></form>';
                            
                        } else if ($_SESSION['loggedin'] == true) {
                            echo '<form action="includes/logout.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                            </form>';                        
			}
                    ?>
                </div>
        </header>
	</body>
</html>
         






               
          
