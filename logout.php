<?php
	session_start(); 								/* Starts the session */
	session_destroy(); 								/* Destroy started session */
	echo "<h1>You have been logged out and the session has been destroyed.<br>You will be redirected in 5 seconds to the log-in screen.</h1>";
	header("Refresh:5;url=logIn.php"); 					/* Redirect to login page */
	exit;
?>