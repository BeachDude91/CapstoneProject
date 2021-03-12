<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     Checkout Confirmation Page
     Description:
        This is the "Checkout" page of the site that gives a confirmation
			to the customer name and telling customer that a digital receipt
			was sent to the customers email that was just given.
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
            PAYMENT HANDLER
        </div>
    </head>
    
    <hr>
    
    <div class="topnav">
      <a href="index.php">Home</a>
      <a href="Shop.php">Shop</a>
      <a href="Contact.php">Contact</a>
      <a class="active" href="#Shopping_Cart.php">Shopping Cart</a>
	  <a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Log-out</a>
    </div>
    
    <hr>
    
    
    <body>
        
		<div class="checkout_div">
			<?php
				if (isset( $_POST['submit_placed_order']))
				{
					$fname = $_POST["fname"];
					$lname = $_POST["lname"];
				 	$email = $_POST["email"];
					
					echo "<h3>Thank you '$fname $lname', your items will be shipped to <br> your address within 3 business days.</h3>";
					echo "<h3>You have been sent a digital receipt to the email '$email', that was given to us.</h3>";
					echo "<h3><br>Have a good day!!!</h3>";
				}
			?>
		</div>
		<br>
		
    </body>
	<?php
		include "footer.php";
	?>    
</html>