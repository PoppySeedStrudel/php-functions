<?php
/** script to really log out an user and delete all data in the session cookie
 *  
 *  
 */
	session_start();
	$_SESSION = array();
	session_unset();
	session_destroy();
	
	header("Location:welcome.php");
	
?>