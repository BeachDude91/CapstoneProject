<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     
     Description:
        This is the "Contact" page of the site that lets
            the customer send feedback and send questions if
            the customer has any.
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
            CONTACT CONFIRMATION
        </div>
    </head>
    
    <hr>
    
    <div class="topnav">
      <a href="index.php">Home</a>
      <a href="Shop.php">Shop</a>
      <a class="active" href="#contact">Contact</a>
      <a href="Shopping_Cart.php">Shopping Cart</a>
	  <a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Log-out</a>
    </div>
    
	<hr>
    
    <body>
		<div class="contactInfo">
				<h2>Contact Information Request Received</h2>
				<p>
					Please check your email in the time frame of
					<br>
					36 hours. Thank you for your patients and for contacting us.
				</p>		
		</div>
        
    </body>
	<?php
		include "footer.php";
	?>    
</html>