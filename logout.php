<?php # Script 12.6 - logout.php
// This page lets the user logout.



// If no session variable exists, redirect the user:
if (!isset($_SESSION['user_id'])) {

	// Need the functions:
	require ('login_functions.inc.php');
	redirect_user();	
	
} else { // Cancel the session:

	$_SESSION = array(); // Clear the variables.
	session_destroy(); // Destroy the session itself.
	setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0); // Destroy the cookie.

}

// Set the page title and include the HTML header:
$page_title = 'Logged Out!';
include ('includes/header.html');

// Print a customized message:
echo "<h1>Logged Out!</h1>
<p>You are now logged out!</p>";


include ('includes/footer.html');
?>
