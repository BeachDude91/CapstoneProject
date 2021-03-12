<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     
     Description:
        This is the "Shop" page of the site that has
            the sites inventory on what a customer can buy.
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
            SHOP
        </div>
    </head>
    
    <hr>
    
    <div class="topnav">
      <a href="index.php">Home</a>
      <a class="active" href="#Shop">Shop</a>
      <a href="Contact.php">Contact</a>
      <a href="Shopping_Cart.php">Shopping Cart</a>
	  <a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Log-out</a>
    </div>
    
    <hr>
    
    
    <body>
        
		
		
		
        <!-- Beginning of Mens Apparel Box -->
        <form action="Shopping_Cart.php" method="get">
		
			<div class="shop_side_note">
				<h3>****** Add to Shopping Cart Button at Bottom of Store Page ******</h3>
			</div>
			
			<div class="MensApparelBox">
				<div class="ShopTitle_1">
					<h2>
						Mens Apparel
					</h2>
				</div>
			
				<div class="MenShorts1">
					
					<input type="hidden" name="inventory_id_1" value="1">
				
					<img src="Photos/Mens_Tennis_Shorts_1.jpeg" />
					<input type="hidden" name="mens_gray_shorts" value="Mens Gray Tennis Shorts">
					<p>
						Price: $29.99
					</p>
					<input type="hidden" name="mens_gray_shorts_price" value="29.99">
					
					<input type="number" name="mens_gray_shorts_qty" min="0" value="0">
					<br>
					<!-- <input name="men_apparel_submit_1" type="submit" value="Add to Shopping Cart" /> -->
				</div>


				
				<div class="MenShorts2">
				
					<input type="hidden" name="inventory_id_2" value="2">
				
					<img src="Photos/Mens_tennis_shorts_2.jpg" />
					<input type="hidden" name="mens_tennis_shorts_bundle" value="Mens Tennis Shorts Bundle">
					<p>
						Price: $79.99
					</p>
					<input type="hidden" name="mens_tennis_shorts_bundle_price" value="79.99">
					
					<input type="number" name="mens_tennis_shorts_bundle_qty" min="0" value="0">
					<br>
					<!-- <input name="men_apparel_submit_2" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				
				<div class="MenShirts1">
				
					<input type="hidden" name="inventory_id_3" value="3">
				
					<img src="Photos/Mens_Shirt_1.jpg" />
					<input type="hidden" name="mens_blue_shirt" value="Mens Tennis Blue Shirt">
					<p>
						Price: $39.99
					</p>
					
					<input type="hidden" name="mens_blue_shirt_price" value="39.99">
					<input type="number" name="mens_blue_shirt_qty" min="0" value="0">
					
					<br>
					<!-- <input name="men_apparel_submit_3" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				<div class="MenShirts2">
				
					<input type="hidden" name="inventory_id_4" value="4">
				
					<img src="Photos/Mens_Shirt_2.jpg" />
					<input type="hidden" name="mens_horizontal_striped_shirt" value="Mens Horizontal Striped Shirt">
					<p>
						Price: $49.99
					</p>
					
					<input type="hidden" name="mens_horizontal_striped_shirt_price" value="49.99">
					<input type="number" name="mens_horizontal_striped_shirt_qty" min="0" value="0">
					
					<br>
					<!-- <input name="men_apparel_submit_4" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				<div class="MenShoes1">
				
					<input type="hidden" name="inventory_id_5" value="5">
				
					<img src="Photos/Mens_Tennis_Shoes_1.jpg" />
					<input type="hidden" name="mens_white_tennis_shoes" value="Mens White Tennis Shoes">
					<p>
						Price: $89.99
					</p>
					
					<input type="hidden" name="mens_white_shoes_price" value="89.99">
					<input type="number" name="mens_white_shoes_qty" min="0" value="0">
					
					<br>
					<!-- <input name="men_apparel_submit_5" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				
				<div class="MenShoes2">
				
					<input type="hidden" name="inventory_id_6" value="6">
				
					<img src="Photos/Mens_Tennis_Shoes_2.jpg" />
					<input type="hidden" name="mens_red_tennis_shoes" value="Mens Red Tennis Shoes">
					<p>
						Price: $89.99
					</p>
					
					<input type="hidden" name="mens_red_tennis_shoes_price" value="89.99">
					<input type="number" name="mens_red_tennis_shoes_qty" min="0" value="0">
					
					<br>
					<!-- <input name="men_apparel_submit_6" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				
				
			</div>
			

			
			<!-- Ending of Mens Apparel Box -->
			

			
			<!-- Beginning of Womens Apparel Box -->
			
			<div class="WomensApparelBox">
				<div class="ShopTitle_2">
					<h2>
						Womens Apparel
					</h2>
				</div>
				
				<div class="WomenSkirtAndTanktop1">
					<img src="Photos/Womens_Tanktop_And_Skirt_1.jpg" />
					<input type="hidden" name="womens_skirt_and_tanktop_bundle" value="Womens Skirt and Tanktop Bundle">
					<p>
						Price: $29.99
					</p>
					
					<input type="hidden" name="womens_skirt_and_tanktop_bundle_price" value="29.99">
					<input type="number" name="womens_skirt_and_tanktop_bundle_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				<div class="WomenSkirt2">
					<img src="Photos/Womens_Skirts_2.PNG" />
					<input type="hidden" name="womens_skirt_bundle" value="Womens Skirt Bundle">
					<p>
						Price: $19.99
					</p>
					
					<input type="hidden" name="womens_skirt_bundle_price" value="19.99">
					<input type="number" name="womens_skirt_bundle_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				
				<div class="WomenTanktop1">
					<img src="Photos/Womens_Shirts_1.jpg" />
					<input type="hidden" name="womens_tanktop_bundle" value="Womens Tanktop Bundle">
					<p>
						Price: $19.99
					</p>
					
					<input type="hidden" name="womens_tanktop_bundle_price" value="19.99">
					<input type="number" name="womens_tanktop_bundle_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				<div class="WomenTanktop2">
					<img src="Photos/Womens_Tanktop_2.jpg" />
					<input type="hidden" name="womens_single_tanktop" value="Womens Tanktop">
					<p>
						Price: $19.99
					</p>
					
					<input type="hidden" name="womens_single_tanktop_price" value="19.99">
					<input type="number" name="womens_single_tanktop_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				<div class="WomenShoes1">
					<img src="Photos/womens_shoes_1.jpg" />
					<input type="hidden" name="womens_light_blue_shoes" value="Womens Light Blue Shoes">
					<p>
						Price: $19.99
					</p>
					
					<input type="hidden" name="womens_light_blue_shoes_price" value="19.99">
					<input type="number" name="womens_light_blue_shoes_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				 <div class="WomenShoes2">
					<img src="Photos/Womens_Tennis_Shoes_2.jpg" />
					<input type="hidden" name="womens_lavender_shoes" value="Womens Lavender Shoes">
					<p>
						Price: $19.99
					</p>
					
					<input type="hidden" name="womens_lavender_shoes_price" value="19.99">
					<input type="number" name="womens_lavender_shoes_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>

			</div>
			
						<!-- Ending of Womens Apparel Box -->
			
			
						<!-- Beginning of Tennis Accessories Box -->
			
			<div class="TennisAccessoriesBox">
				<div class="ShopTitle_3">
					<h2>
						Tennis Accessories
					</h2>
				</div>
				
				<div class="TennisAccessory1">
					<img src="Photos/Racquet_2.jpg" />
					<input type="hidden" name="wilson_tennis_racquet" value="Wilson Tennis Racquet">
					<p>
						Price: $99.99
					</p>
					
					<input type="hidden" name="wilson_tennis_racquet_price" value="99.99">
					<input type="number" name="wilson_tennis_racquet_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				<div class="TennisAccessory2">
					<img src="Photos/Racquet_3.jpg" />
					<input type="hidden" name="head_tennis_racquet" value="Head Tennis Racquet">
					<p>
						Price: $89.99
					</p>
					
					<input type="hidden" name="head_tennis_racquet_price" value="89.99">
					<input type="number" name="head_tennis_racquet_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				
				<div class="TennisAccessory3">
					<img src="Photos/Tennis_Bag_1.jpg" />
					<input type="hidden" name="womens_tennis_backpack" value="Womens Tennis Backpack">
					<p>
						Price: $19.99
					</p>
					
					<input type="hidden" name="womens_tennis_backpack_price" value="19.99">
					<input type="number" name="womens_tennis_backpack_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				<div class="TennisAccessory4">
					<img src="Photos/Tennis_Bag_2.png" />
					<input type="hidden" name="womens_big_tennis_bag" value="Womens Big Tennis Bag">
					<p>
						Price: $199.99
					</p>
					
					<input type="hidden" name="womens_big_tennis_bag_price" value="199.99">
					<input type="number" name="womens_big_tennis_bag_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				<div class="TennisAccessory5">
					<img src="Photos/Tennis_Bag_4.jpg" />
					<input type="hidden" name="mens_black_big_tennis_bag" value="Mens Black Big Tennis Bag">
					<p>
						Price: $29.99
					</p>
					
					<input type="hidden" name="mens_head_big_tennis_bag_price" value="29.99">
					<input type="number" name="mens_head_big_tennis_bag_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
				
				
				<div class="TennisAccessory6">
					<img src="Photos/Tennis_Bag_5.jpg" />
					<input type="hidden" name="mens_night_blue_big_tennis_bag" value="Mens Blue Colored Big Tennis Bag">
					<p>
						Price: $79.99
					</p>
					
					<input type="hidden" name="mens_night_blue_big_tennis_bag_price" value="79.99">
					<input type="number" name="mens_night_blue_big_tennis_bag_qty" min="0" value="0">
					
					<br>
					<!-- <input name="Submit1" type="submit" value="Add to Shopping Cart" /> -->
				</div>
			</div>
            
                <!-- Ending of Tennis Accessories Box -->
				
			<div class="hr3">
				<hr>
			</div>
			
			<div class="div_shop_submit_button">
				<br>
				<input class="form_button" type="submit" name="submit_shopping_cart" value="Add to Shopping Cart">
				<br>
				<br>
			</div>
			
			<div class="hr3">
				<hr>
			</div>
		</form>			
    </body>
 	<?php
		include "footer.php";
	?>   
</html>