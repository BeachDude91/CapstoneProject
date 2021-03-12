<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     Checkout Page
     Description:
        This is the "Checkout" page of the site that is asking
			for the customers information for their credit card	
			and credentials to pay for order from shopping cart.
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
			<form class="pay_form" action="checkout_confirmation.php" method="post">
				<!--prompt user for email-->
				<h3>
					Enter the email address you would like your receipt sent to:
				</h3>
					
				<p>
					Email Address: 
					<input type="email" name="email" size="40" required="">
				</p><!--email input field-->

				<!--prompt user for name-->
				<h3>
					Enter your name as it appears on your payment card and shipping address:
				</h3>
					
				<p><!--name input fields-->
					First Name: <input type="text" name="fname" size="40" required="">&nbsp;&nbsp; <br><br>
					Last Name: <input type="text" name="lname" size="40" required="">
					
				</p>

				<p>
					Shipping Address 1: <input type="text" name="address1" size="40" required="">&nbsp;&nbsp;
					Shipping Address 2: <input type="text" name="address2" size="40">
					<br><br>
					City: <input type="text" name="city" size="40" required="">
					<br><br>
					State: <input type="text" name="state" size="40" required="">
					<br><br>
					Zipcode: <input type="number" name="zip" size="40" max="999999999" required="">
				</p>

				<!--prompt user for credit card information-->
				<h3>
					Enter your card information:
				</h3>
					
				<p>
					Card Type:
					<select name="card_type" required=""><!--dropdown to select a card type-->
						<option value="">select card</option>
						<option value="visa">Visa</option>
						<option value="master">Master Card</option>
						<option value="american">American Express</option>
						<option value="discover">Discover</option>
					</select>&nbsp;&nbsp;
						
					<!--number field to enter card number-->
					Card Number: 
						<input type="number" name="card_num" max="9999999999999999" required="">&nbsp;&nbsp;
					Expires:&nbsp;
					mm:
					<select name="mm" required=""><!--dropdown to select a month formatted as mm-->
							<option value="">mm</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
					</select>&nbsp;
							
					<!--number field to enter year formatted as yy-->
					yy:
					<input id="yy" type="number" name="yy" min="20" max="99" required="">&nbsp;&nbsp;
					<!--number field to enter 3 digit cvv-->
					3 digit cvv:
					<input id="cvv" type="number" name="cvv" max="999" required="">
				</p>
				
				<!--
				<ul class="order_totals" style="list-style: none">
					<li><pre>Pre-tax total:   $0.00</pre></li>
					<li><pre>Sales tax(2%):   $0.80</pre></li>
					<li><pre>Total with tax:  $0.00</pre></li>						
					<li>
						<input class="form_button" type="submit" name="submit_placed_order" value="Place Order">
					</li>
				</ul>
				-->

				<br>
				<input class="form_button" type="submit" name="submit_placed_order" value="Place Order">
			</form>	
			<br>
		</div>
		
		<br>
			
		
    </body>
	<?php
		include "footer.php";
	?>    
</html>