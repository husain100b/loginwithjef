<?php  

// session_start();

require_once('classes/membership.php');
$membership = new Membership();

$membership->confirm_Member();


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	
	<!-- Main Content -->
	<div class="container">
		<p>
			You reached the page that store all the secret launch codes.
		</p>
		<a href="login.php?status=loggedout">Log Out</a>
	</div>
	<!-- /End Main Content -->

	

	
</body>
</html>