<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     Log In Confirmation Page
     Description:
        This is the "Log In Confirmation" page of the site that 
			lets you know that you've been logged into the site.
-->



<?php 	
	session_start(); /* Starts the session */
	if (!isset($_SESSION['username'])) 
	{
	    if (!isset($_SESSION['password']))
		{
			header("Refresh:5;url=LogIn.php");
			echo "<h1>Please go and log in first before entering site, <br> you will be redirected in 5 seconds to the log-in screen.</h1>";
			exit;
			
		}

	}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="TennisHubb.css">
        <link rel="stylesheet" type="text/css" href="Top_Menu_Navigation.css">
        <div class="title">
            <title>
                TENNIS HUBB SITE
            </title>
            TENNIS HUBB
        </div>
    </head>
    
    <hr>
    
    <div class="topnav">
      <a href="index.php">Home</a>
      <a href="Shop.php">Shop</a>
      <a href="Contact.php">Contact</a>
      <a href="Shopping_Cart.php">Shopping Cart</a>
	  <a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Log-out</a>
    </div>
    
    <hr>
    
    <body>
        
        <div class="log_in_confirmation">
			<h1>
				<br>
				Welcome to the Tennis Hubb Site!!
				<br>
				~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				<br>
				Go ahead and look around on the site by clicking around in the top menu
				<br>
				on each page. 
				<br>
				~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				<br>
				If you want to log out, click log out!
				<br><br>
			</h1>
			
		</div>
    </body>
	<?php
		include "footer.php";
	?>
</html>