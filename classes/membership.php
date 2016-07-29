<?php

require 'mysql.php';


class Membership {

	function validate_user($un, $pwd){
		$mysql = new Mysql();
		$ensure_credentials = $mysql->verify_Username_and_Pass($un, md5($pwd));

		if ($ensure_credentials) {
			$_SESSION['status'] = 'authorized';
			header('location: index.php');
		} else {
			return "Please enter a correct username and password";
		} 
	} // end valid user

	function log_User_Out(){
		if(isset($_SESSION['status'])){
			unset($_SESSION['status']);

			if (isset($_COOKIE[session_name()])) 
				setcookie(session_name(), '', time() - 1000);
				session_destroy();
		}
	}

	function confirm_Member(){
		session_start();
		if ($_SESSION['status'] !='authorized') header('location: login.php');

	}

}