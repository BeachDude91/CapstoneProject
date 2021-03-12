<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     
     Description:
        This is the "Log In" page of the site that shows
            the customers cart. If they do not have anything
            in their cart, the cart will let them know that 
            they haven't selected anything to place in their 
            cart. If they have selected items to buy, their
            items will be found in the description box, with
            the total cost of all items in a textbox and the 
            tax of all items selected. They may remove specific
            items by selecting an item from the description 
            box and clicking the remove item button. Otherwise
            if they are finished, they can click the submit
            button and complete their order.
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
            SHOPPING CART
        </div>
    </head>
    
    <hr>
    
    <div class="topnav">
      <a href="index.php">Home</a>
      <a href="Shop.php">Shop</a>
      <a href="Contact.php">Contact</a>
      <a class="active" href="#ShoppingCart">Shopping Cart</a>
	  <a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Log-out</a>
    </div>
    
    <hr>
    
	<body>
		<div class="ShoppingCartBox">
			<table>
				<tbody>
					<tr>
						<td>
							Product Image:
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						</td>							
						<td>
							Name of Item:
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						</td>	
						<td>
							Price Per Item:
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						</td>
						<td>
							Quantity of Items:
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						</td>
						<td>
							Total Price:
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
							&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						</td>
					</tr>
					
					<tr>
						<td><hr></td>
						<td><hr></td>
						<td><hr></td>
						<td><hr></td>
						<td><hr></td>
					</tr>
					
					<?php
						if (isset( $_GET['submit_shopping_cart']))
						{

							include "variables_shopping_cart.php";
							
							$main_total_without_tax = 0;
							$tax = number_format(0.80,2);
							$main_total_with_tax = 0;						
											//closing the statement	
							
							
							
							if($Mens_Gray_Shorts_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_mens_shorts.png' alt='mens_tennis_shirt'></td>";
									print "<td>$Mens_Gray_Shorts</td>";
									print "<td>$$Mens_Gray_Shorts_Price</td>";
									print "<td>$Mens_Gray_Shorts_Quantity</td>";
									$mens_gray_shorts_item_total = number_format($Mens_Gray_Shorts_Price * $Mens_Gray_Shorts_Quantity,2);
									$main_total_without_tax += $mens_gray_shorts_item_total;
									print "<td>$$mens_gray_shorts_item_total</td>";
								print "</tr>";						
							}
							if($Mens_Shorts_Bundle_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_mens_bundle_shorts.png' alt='sml_mens_bundle_shorts'></td>";
									print "<td>$Mens_Shorts_Bundle</td>";
									print "<td>$$Mens_Shorts_Bundle_Price</td>";
									print "<td>$Mens_Shorts_Bundle_Quantity</td>";
									$Mens_Shorts_Bundle_item_total = number_format($Mens_Shorts_Bundle_Price * $Mens_Shorts_Bundle_Quantity,2);
									$main_total_without_tax += $Mens_Shorts_Bundle_item_total;
									print "<td>$$Mens_Shorts_Bundle_item_total</td>";
								print "</tr>";							
							}
							if($Mens_Blue_Shirt_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_mens_blue_shirt.png' alt='sml_mens_blue_shirt'></td>";
									print "<td>$Mens_Blue_Shirt</td>";
									print "<td>$$Mens_Blue_Shirt_Price</td>";
									print "<td>$Mens_Blue_Shirt_Quantity</td>";
									$Mens_Blue_Shirt_item_total = number_format($Mens_Blue_Shirt_Price * $Mens_Blue_Shirt_Quantity,2);
									$main_total_without_tax += $Mens_Blue_Shirt_item_total;
									print "<td>$$Mens_Blue_Shirt_item_total</td>";
								print "</tr>";								
							}
							if($Mens_Horizontal_Striped_Shirt_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_mens_horizontal_striped_shirt.png' alt='sml_mens_horizontal_striped_shirt'></td>";
									print "<td>$Mens_Horizontal_Striped_Shirt</td>";
									print "<td>$$Mens_Horizontal_Striped_Shirt_Price</td>";
									print "<td>$Mens_Horizontal_Striped_Shirt_Quantity</td>";
									$Mens_Blue_Shirt_item_total = number_format($Mens_Horizontal_Striped_Shirt_Price * $Mens_Horizontal_Striped_Shirt_Quantity,2);
									$main_total_without_tax += $Mens_Blue_Shirt_item_total;
									print "<td>$$Mens_Blue_Shirt_item_total</td>";
								print "</tr>";								
							}
							if($Mens_White_Tennis_Shoes_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_mens_white_shoes.png' alt='sml_mens_white_shoes'></td>";
									print "<td>$Mens_White_Tennis_Shoes</td>";
									print "<td>$$Mens_White_Tennis_Shoes_Price</td>";
									print "<td>$Mens_White_Tennis_Shoes_Quantity</td>";
									$Mens_White_Tennis_Shoes_item_total = number_format($Mens_White_Tennis_Shoes_Price * $Mens_White_Tennis_Shoes_Quantity,2);
									$main_total_without_tax += $Mens_White_Tennis_Shoes_item_total;
									print "<td>$Mens_White_Tennis_Shoes_item_total</td>";
								print "</tr>";									
							}
							if($Mens_Red_Tennis_Shoes_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_mens_red_shoes.png' alt='sml_mens_red_shoes'></td>";
									print "<td>$Mens_Red_Tennis_Shoes</td>";
									print "<td>$$Mens_Red_Tennis_Shoes_Price</td>";
									print "<td>$Mens_Red_Tennis_Shoes_Quantity</td>";
									$Mens_Red_Tennis_Shoes_item_total = number_format($Mens_Red_Tennis_Shoes_Price * $Mens_Red_Tennis_Shoes_Quantity,2);
									$main_total_without_tax += $Mens_Red_Tennis_Shoes_item_total;
									print "<td>$Mens_Red_Tennis_Shoes_item_total</td>";
								print "</tr>";							
							}
							
							
										/* ************************************
										   ********  Womens Apparel ***********
										   ********** Found Below ************* 
										   ************************************ */	

										   
							if($Womens_Skirt_And_Tanktop_Bundle_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_womens_skirt_and_tanktop.png' alt='sml_womens_skirt_and_tanktop'></td>";
									print "<td>$Womens_Skirt_And_Tanktop_Bundle</td>";
									print "<td>$$Womens_Skirt_And_Tanktop_Bundle_Price</td>";
									print "<td>$Womens_Skirt_And_Tanktop_Bundle_Quantity</td>";
									$Womens_Skirt_And_Tanktop_Bundle_item_total = number_format($Womens_Skirt_And_Tanktop_Bundle_Price * $Womens_Skirt_And_Tanktop_Bundle_Quantity,2);
									$main_total_without_tax += $Womens_Skirt_And_Tanktop_Bundle_item_total;
									print "<td>$Womens_Skirt_And_Tanktop_Bundle_item_total</td>";
								print "</tr>";								
							}
							if($Womens_Skirt_Bundle_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_womens_skirt_bundle.png' alt='sml_womens_skirt_bundle'></td>";
									print "<td>$Womens_Skirt_Bundle</td>";
									print "<td>$$Womens_Skirt_Bundle_Price</td>";
									print "<td>$Womens_Skirt_Bundle_Quantity</td>";
									$Womens_Skirt_Bundle_item_total = number_format($Womens_Skirt_Bundle_Price * $Womens_Skirt_Bundle_Quantity,2);
									$main_total_without_tax += $Womens_Skirt_Bundle_item_total;
									print "<td>$Womens_Skirt_Bundle_item_total</td>";
								print "</tr>";								
							}		
							if($Womens_Tanktop_Bundle_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_womens_shirt_bundle.png' alt='sml_womens_shirt_bundle'></td>";
									print "<td>$Womens_Tanktop_Bundle</td>";
									print "<td>$$Womens_Tanktop_Bundle_Price</td>";
									print "<td>$Womens_Tanktop_Bundle_Quantity</td>";
									$Womens_Tanktop_Bundle_item_total = number_format($Womens_Tanktop_Bundle_Price * $Womens_Tanktop_Bundle_Quantity,2);
									$main_total_without_tax += $Womens_Tanktop_Bundle_item_total;
									print "<td>$Womens_Tanktop_Bundle_item_total</td>";
								print "</tr>";								
							}	
							if($Womens_Tanktop_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_womens_tanktop.png' alt='sml_womens_tanktop'></td>";
									print "<td>$Womens_Tanktop</td>";
									print "<td>$$Womens_Tanktop_Price</td>";
									print "<td>$Womens_Tanktop_Quantity</td>";
									$Womens_Tanktop_item_total = number_format($Womens_Tanktop_Price * $Womens_Tanktop_Quantity,2);
									$main_total_without_tax += $Womens_Tanktop_item_total;
									print "<td>$Womens_Tanktop_item_total</td>";
								print "</tr>";								
							}	
							if($Womens_Light_Blue_Shoes_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_womens_aqua_shoes.png' alt='sml_womens_aqua_shoes'></td>";
									print "<td>$Womens_Light_Blue_Shoes</td>";
									print "<td>$$Womens_Light_Blue_Shoes_Price</td>";
									print "<td>$Womens_Light_Blue_Shoes_Quantity</td>";
									$Womens_Light_Blue_Shoes_item_total = number_format($Womens_Light_Blue_Shoes_Price * $Womens_Light_Blue_Shoes_Quantity,2);
									$main_total_without_tax += $Womens_Light_Blue_Shoes_item_total;
									print "<td>$Womens_Light_Blue_Shoes_item_total</td>";
								print "</tr>";								
							}
							if($Womens_Lavender_Shoes_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_womens_lavender_shoes.png' alt='sml_womens_lavender_shoes'></td>";
									print "<td>$Womens_Lavender_Shoes</td>";
									print "<td>$$Womens_Lavender_Shoes_Price</td>";
									print "<td>$Womens_Lavender_Shoes_Quantity</td>";
									$Womens_Lavender_Shoes_item_total = number_format($Womens_Lavender_Shoes_Price * $Womens_Lavender_Shoes_Quantity,2);
									$main_total_without_tax += $Womens_Lavender_Shoes_item_total;
									print "<td>$Womens_Lavender_Shoes_item_total</td>";
								print "</tr>";								
							}						

										/* ************************************
										   ******* Tennis Accessories *********
										   ********** Found Below ************* 
										   ************************************ */						
										   
							
							if($Wilson_Tennis_Racquet_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_tennis_racquet.png' alt='sml_tennis_racquet'></td>";
									print "<td>$Wilson_Tennis_Racquet</td>";
									print "<td>$$Wilson_Tennis_Racquet_Price</td>";
									print "<td>$Wilson_Tennis_Racquet_Quantity</td>";
									$Wilson_Tennis_Racquet_item_total = number_format($Wilson_Tennis_Racquet_Price * $Wilson_Tennis_Racquet_Quantity,2);
									$main_total_without_tax += $Wilson_Tennis_Racquet_item_total;
									print "<td>$Wilson_Tennis_Racquet_item_total</td>";
								print "</tr>";								
							}							
							if($Head_Tennis_Racquet_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_tennis_racquet_2.png' alt='sml_tennis_racquet_2'></td>";
									print "<td>$Head_Tennis_Racquet</td>";
									print "<td>$$Head_Tennis_Racquet_Price</td>";
									print "<td>$Head_Tennis_Racquet_Quantity</td>";
									$Head_Tennis_Racquet_item_total = number_format($Head_Tennis_Racquet_Price * $Head_Tennis_Racquet_Quantity,2);
									$main_total_without_tax += $Head_Tennis_Racquet_item_total;
									print "<td>$Head_Tennis_Racquet_item_total</td>";
								print "</tr>";								
							}	
							if($Womens_Tennis_Backpack_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_womens_bagpack.png' alt='sml_womens_bagpack'></td>";
									print "<td>$Womens_Tennis_Backpack</td>";
									print "<td>$$Womens_Tennis_Backpack_Price</td>";
									print "<td>$Womens_Tennis_Backpack_Quantity</td>";
									$Womens_Tennis_Backpack_item_total = number_format($Womens_Tennis_Backpack_Price * $Womens_Tennis_Backpack_Quantity,2);
									$main_total_without_tax += $Womens_Tennis_Backpack_item_total;
									print "<td>$Womens_Tennis_Backpack_item_total</td>";
								print "</tr>";								
							}
							if($Womens_Big_Tennis_Bag_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_womens_big_bag.png' alt='sml_womens_big_bag'></td>";
									print "<td>$Womens_Big_Tennis_Bag</td>";
									print "<td>$$Womens_Big_Tennis_Bag_Price</td>";
									print "<td>$Womens_Big_Tennis_Bag_Quantity</td>";
									$Womens_Big_Tennis_Bag_item_total = number_format($Womens_Big_Tennis_Bag_Price * $Womens_Big_Tennis_Bag_Quantity,2);
									$main_total_without_tax += $Womens_Big_Tennis_Bag_item_total;
									print "<td>$Womens_Big_Tennis_Bag_item_total</td>";
								print "</tr>";								
							}	
							if($Mens_Head_Big_Tennis_Bag_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_mens_big_black_bag.png' alt='sml_mens_big_black_bag'></td>";
									print "<td>$Mens_Head_Big_Tennis_Bag</td>";
									print "<td>$$Mens_Head_Big_Tennis_Bag_Price</td>";
									print "<td>$Mens_Head_Big_Tennis_Bag_Quantity</td>";
									$Mens_Head_Big_Tennis_Bag_item_total = number_format($Mens_Head_Big_Tennis_Bag_Price * $Mens_Head_Big_Tennis_Bag_Quantity,2);
									$main_total_without_tax += $Mens_Head_Big_Tennis_Bag_item_total;
									print "<td>$Mens_Head_Big_Tennis_Bag_item_total</td>";
								print "</tr>";								
							}	
							if($Mens_Night_Blue_Bag_Quantity > 0)
							{
								print "<tr>";
									print "<td><img src='photos/sml_mens_big_blue_bag.png' alt='sml_mens_big_blue_bag'></td>";
									print "<td>$Mens_Night_Blue_Bag</td>";
									print "<td>$$Mens_Night_Blue_Bag_Price</td>";
									print "<td>$Mens_Night_Blue_Bag_Quantity</td>";
									$Mens_Night_Blue_Bag_item_total = number_format($Mens_Night_Blue_Bag_Price * $Mens_Night_Blue_Bag_Quantity,2);
									$main_total_without_tax += $Mens_Night_Blue_Bag_item_total;
									print "<td>$Mens_Night_Blue_Bag_item_total</td>";
								print "</tr>";								
							}



							$main_total_with_tax += ($main_total_without_tax + $tax);
							print "<tr>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td>Pre-tax price: $$main_total_without_tax</td>";
							print "</tr>";	
							
							print "<tr>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td>Tax: $$tax</td>";
							print "</tr>";	
								
							print "<tr>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td></td>";
								print "<td>Total with Tax: $$main_total_with_tax</td>";
							print "</tr>";	
					
							
						}
						else
						{
							print "<h2>****** Your Shopping Cart is Empty ******</h2>";
						}
					?>
					
					
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><button onclick="location.href = 'shop.php'" type='button'>Continue Shopping</button></td>
							</tr>
							
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							<td></td>
						<td><button onclick="location.href = 'checkout.php'" type='button'>Checkout</button></td>
					</tr>			
				</tbody>
			</table>	
				
		</div>
    </body>
	<?php
		include "footer.php";
	?>
</html>