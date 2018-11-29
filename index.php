
<!DOCTYPE html>
<?php
	require "includes/header.php";
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="reset.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet" type="text/css">
    
        <title>UCF Pokémon Club</title>
    </head>

    <body>
		<header>
		    <nav class="nav-header-main">
			<!-- <a class="header-logo" href="index.php"> -->
			    <img src="img/logo.png" alt="UCF Pokémon Gym logo">
			    <!-- </a> -->

			<ul>
			    <li><a href="index.php">Home</a></li>
			    <li><a href="about.php">About</a></li>
			    <li><a href="events.php">Events</a></li>
			    <li><a href="contact.php">Contact</a></li>
			</ul>
		    </nav>

			<div class="header-login">
			    Welcome Traniner !<form action="logout.php" method="post">
				    <button type="submit" name="logout-submit">Logout</button>
				    </form>                </div>
		</header>
	   <p>HOME PAGE</p>


			<footer>
				<p>&copy;2018 UCF Pokémon Gym</p>
			</footer>
	</body>
</html>
