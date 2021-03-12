<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     
     Description:
        This is the "Home" page of the site that has
            information about the site and their goals.
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
      <a class="active" href="#index">Home</a>
      <a href="Shop.php">Shop</a>
      <a href="Contact.php">Contact</a>
      <a href="Shopping_Cart.php">Shopping Cart</a>
	  <a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Log-out</a>
    </div>
    
    <hr>
    
    <body>
        
        <div class="HomePageImg1">
		<br>
            <img src="Photos/TennisCourtNight_HR.jpg">
        </div>
        
        <div class="message">
            <h1>
                Facts About Us
            </h1>
            
            <p>  
                    We specialize in getting tennis gear to improve your game!!
                    <br>
                    Selling tennis racquets, tennis bags, clothes, and more!!
            </p> 
            
            <div class="hr1">
                <hr>
            </div>  
        </div>
    </body>
	<?php
		include "footer.php";
	?>
</html>