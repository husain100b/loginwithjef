<?php  

session_start();

require_once('classes/membership.php');
$membership = new Membership();

// If the user clicks the 'Log Out' link on the index page.
if (isset($_GET['status']) && $_GET['status'] == 'loggedout') {
	$membership->log_User_Out();
}

// Did the user enter a password/username and click submit
if ($_POST && !empty($_POST['username']) && !empty($_POST['pwd'])) {
	$response = $membership->validate_User($_POST['username'], $_POST['pwd']);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="css/style.css">

	<!-- jQuery -->
	<script src="js/jquery-3.1.0.min.js"></script>

	<!-- Custom Scripts -->
	<script src="js/main.js"></script>

</head>
<body>
	
	<!-- Login Start -->
	<div id="login">
		<form action="" method="post">
			<h2>Login <small>enter your credentials</small></h2>
			<p>
				<label for="username">Username: </label>
				<input type="text" name="username">
			</p>
			<p>
				<label for="pwd">Password: </label>
				<input type="password" name="pwd">
			</p>
			<p>
				<input type="submit" name="submit" id="submit"  value="Login">
			</p>
		</form>
		<?php if (isset($response)) echo "<h4 class='alert'> . $response . </h4>";  ?>

	</div> <!-- /Login End -->

	

	
</body>
</html>