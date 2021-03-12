<!-- Nicholas MacFarland
     03/04/20
     CSIS 474-B01
     
     Description:
        This is the "Log In" page of the site that lets
            the customer create an account if they don't
            have an account. If they do have an account,
            they can sign in to their already existing account.
-->
<?php 
	session_start(); /* Starts the session */
	/* Check Login form submitted */
	
	include "dblogin.php";		//including this to get the 
									//database connection
	
							/***************************************
							 *       Logging into Website          *
							 *                                     *
							 ***************************************/
	if(isset($_POST['submit_log_in']))
	{
		// Define $username and $password
		$username = $_POST['username'];
		$password = $_POST['password'];
			
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			
		// To protect MySQL injection for Security purpose
		$SALT1 ="#dx5*";											//where i am creating salt1 and salt2 for my 
		$SALT2 = "#&z^";
			
		$encrypted = hash('ripemd128', $SALT1 . $password . $SALT2);
			
		$password = $encrypted;
			
		//Fetch information of registerd users and finds user match.
		$query = mysqli_query($mysqli_link,"SELECT * FROM member_table WHERE username= '$username' AND password= '$password'");
			
		$row = mysqli_num_rows($query);

		if ($row ==0) 
		{
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:orange'><h3>ERROR MESSAGE TO USER:</h3><br>Invalid Login Details</span>";
			echo "<div class='error_msg'>$msg</div>";
		} 
		else
		{
				//Initializing Session
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
				
			header("location:" . "log_in_confirmation.php"); // Redirecting To Other Page						
		}
		mysqli_close($mysqli_link);
	}
							/***************************************
							 *     Create Account in Database      *
							 *                                     *
							 ***************************************/
	
	else if(isset($_POST['submit_new_account']))
	{
		if(isset($_POST['username'])) $username = $_POST['username'];							//gets the name array	
		else $username = '';

		if(isset($_POST['fname'])) $Fname = $_POST['fname'];							//gets the name array	
		else $Fname = '';


		if(isset($_POST['lname'])) $Lname = $_POST['lname'];							//gets the password array
		else $Lname = '';

		if(isset($_POST['password'])) $password = $_POST['password'];							//gets the password array
		else $password = '';	


		if(isset($_POST['email'])) $email = $_POST['email'];									//gets the email array
		else $email = '';	
	
		define("SALT3","#dx5*");
		define("SALT4", "#&z^");
		$encrypted = hash('ripemd128', SALT3.$password.SALT4);
		

	
		if ($username != '' && $Fname != '' && $Lname != '' && $encrypted != '' && $email != '')									//if username, password, and email
		{																						 //does not have anything in them																					//gets the link for all username, password,																						 // and email.
			$username = mysqli_real_escape_string($mysqli_link, $username);
			$Fname = mysqli_real_escape_string($mysqli_link, $Fname);		
			$Lname = mysqli_real_escape_string($mysqli_link, $Lname);					
			$password = mysqli_real_escape_string($mysqli_link, $encrypted);
			$email = mysqli_real_escape_string($mysqli_link, $email);
	
																							//prepares the query here..
			$create_account_stmt = mysqli_prepare($mysqli_link,"insert into member_table (username,Fname,Lname,password,email) values (?,?,?,?,?)");
	  
			if (! $create_account_stmt->bind_param('sssss',$username, $Fname, $Lname, $password, $email)) die ('oh, no!');	//if statement not binded die saying oh no!
	
			if (! $create_account_stmt ->execute()) die ('did not execute!');									//executing here, if not executed, it dies
	  
			$create_account_stmt ->close();																		//closing the statement		
		
		
			$msg= "<span style='color:orange'><h3>MESSAGE TO USER:</h3><br>Account Created!!!</span>";
			echo "<div class='acct_created'>$msg</div>";
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
        <div class="ExistingLoginUser">
			<form action="" method="post" class="form--inline">
                <h3>
                    Existing User
                </h3>
				Click here to
				<a href="create_account.php">Create Account</a>
            
                <p>
                    Username:
                    <br>

                    <input name="username" type="text" required=""/>

                    <br>
                    Password:
                    <br>

                    <input name="password" type="password" required=""/>

                    <br>

                    <input name="submit_log_in" type="submit" value="submit" />
					<p>
						Temporary sign-in:
						<br>
						-----------------------
						<br>
						Username: "customer"
						<br>
						Password: "customer"
						<br>
						------------------------------------
						<br>
						First and Last Name of user for this specific log on:
						<br>
						-----------------------
						<br>
						First Name: "customer"
						<br>
						Last Name: "customer"
						
					</p>		
                </p>
			</form>
			
        </div>
        
    </body>
	<?php
		include "footer.php";
	?>
</html>