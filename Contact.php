<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     Contact Page
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
            CONTACT US
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
		<?php
			echo <<< Contact_Info
				<form action="" method="post">
					<div class="contactInfo">
						<h2>
							Please Enter Contact Information Below:
						</h2>
						
						Enter First Name:
						<br>
						<input name="fname" type="text" required=""/>
						<br><br>
						
						Enter Last Name:
						<br>
						<input name="lname" type="text" required=""/>
						<br><br>
						
						Preferred Email Address:
						<br>
						<input name="email" type="email" required=""/>
						<br><br>
						
						Type in message below:
						<br>				
						<input style="height: 200px;width:250px;" type="text" name="feedback" maxlength="500" required = "">
						
						<br><br>
						
						<input name="submit_contact_info" type="submit" value="Submit Info" />
						<br><br>
					</div>
				</form>
Contact_Info;
			
			if (isset( $_POST['submit_contact_info']))
			{
				include "dblogin.php";								//Connecting to database here
					
				if(isset($_POST['fname'])) $First_Name = $_POST['fname'];							//gets the fname array	
				else $First_Name = '';

				if(isset($_POST['lname'])) $Last_Name = $_POST['lname'];				//gets the lname array
				else $Last_Name = '';	


				if(isset($_POST['email'])) $Email = $_POST['email'];				//gets the email array
				else $Email = '';


				if(isset($_POST['feedback'])) $Feedback = $_POST['feedback'];				//gets the feedback array
				else $Feedback = '';
													
								
				if ($First_Name != '' && $Last_Name != '' && $Email != '' && $Feedback != '')
				{
					$First_Name = mysqli_real_escape_string($mysqli_link, $First_Name);
					$Last_Name = mysqli_real_escape_string($mysqli_link, $Last_Name);
					$Email = mysqli_real_escape_string($mysqli_link, $Email);
					$Feedback = mysqli_real_escape_string($mysqli_link, $Feedback);
								
					$member_id_result = mysqli_query($mysqli_link,"select Member_ID from member_table where Fname = '$First_Name'
						and Lname = '$Last_Name'");
				}
								
				while ($row = mysqli_fetch_array($member_id_result,MYSQLI_ASSOC))
				{
																									//if statement not binded die saying oh no!				
					$add_contact_info_stmt = mysqli_prepare($mysqli_link,"insert into contact_table(member_id,firstname,lastname,Email_Address,Feedback) values (?,?,?,?,?)");
				  
					if (! $add_contact_info_stmt->bind_param('sssss',$row["Member_ID"],$First_Name, $Last_Name, $Email, $Feedback)) die ('oh, no!');
			
					if (! $add_contact_info_stmt ->execute()) die ('did not execute!');			//executing here, if not executed, it dies
				}
																									//closing the statement	
				mysqli_close($mysqli_link);
				
				echo "<meta http-equiv='refresh' content='1;url=Contact_Confirmation.php'>";
			}
        ?>
    </body>
 	<?php
		include "footer.php";
	?>   
</html>