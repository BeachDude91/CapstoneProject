<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     
     Description:
        This is the "Log In" page of the site that lets
            the customer create an account if they don't
            have an account. If they do have an account,
            they can sign in to their already existing account.
-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="TennisHubb.css">
        <link rel="stylesheet" type="text/css" href="Top_Menu_Navigation.css">
        <div class="title">
            <title>
                TENNIS HUBB SITE
            </title>
            LOG IN TO ENTER SITE
        </div>
    </head>
    
    <hr>
    
    <div class="topnav">
      <a href="#index.php">Home</a>
      <a href="#Shop.php">Shop</a>
      <a href="#Contact.php">Contact</a>
      <a href="#Shopping_Cart.php">Shopping Cart</a>
      <a class="active" href="#LogIn">Log In</a>
    </div>
    
    <hr>
    
    <body>
        <div class="CreateLogInUser">
			<form action="LogIn.php" method="post" class="form--inline">
				<p>
					<h3>
						Create Account
					</h3>
					
					Username:
					<br>

					<input name="username" type="text" required=""/>
					<br>
					<br>
					First Name:
					<br>

					<input name="fname" type="text" required=""/>
					<br>
					<br>
					Last Name:
					<br>

					<input name="lname" type="text" required=""/>
					<br>
					<br>
					Password:
					<br>
					
					<input name="password" type="password" required=""/>
					<br>
					<br>
					Email Address:
					<br>
					<input name="email" type="email" required=""/>

					<br>
					<br>
					<input name="submit_new_account" type="submit" value="submit" />
				</p>
			</form>
        </div>
        
    </body>
	<?php
		include "footer.php";
	?>
</html>