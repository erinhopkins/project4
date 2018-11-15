<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="reset.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet" type="text/css">
    
        <title>Grace Community Church</title>
    </head>

    <body>

        <header>
            <nav class="nav-header-main">
                <a class="header-logo" href="index.php">
                    <img src="img/wave.png" alt="GCC logo">
                    </a>
                
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Visit</a></li>
                    <li><a href="#">Sermons</a></li>
                    <li><a href="give.php">Give</a></li>
                </ul>
            </nav>

                <div class="header-login">
                    <?php 
                        if(!isset($_SESSION['loggedin'])) {
							  echo '<form action="login.php" method="post">
									<input type="text" name="username" placeholder="Username...">
									<input type="password" name="password" placeholder="Password..."> 
									<button type="submit" name="login-submit">Login</button>
								</form>

                            <form method="post" action="signup.php">
                            <button type="submit" name="signup-submit">Sign Up</button></form>';
                            
                        } else if ($_SESSION['loggedin'] == true) {
                            echo '<form action="logout.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                            </form>
							
							<a href="changepassword.php">Change Password</a>' ;
                        }
                    ?>
                </div>
        </header>
         






               
          