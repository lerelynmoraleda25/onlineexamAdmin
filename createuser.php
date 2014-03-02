<?php 
	include_once('config.php');
	include_once('examDAO.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	$register = examDAO::createusers($fname,$lname,$email,$password);
	if($register) {
		
		echo "success from php";
	} else {
		echo "failed from php";
	}
?>