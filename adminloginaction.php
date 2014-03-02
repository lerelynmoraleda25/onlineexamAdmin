<?php 
	include_once('examhandler.php');

	$email = $_POST['userlog'];
	$password = $_POST['passlog'];

	$obj = new examhandler();
	$result = $obj->testadminLog($email, $password);
	if($result !== false){
		echo "<script>alert('you successfully logged in!'); document.location.href='admin.php';</script>";
	}else{
		echo "<script>alert('you unsuccessfully logged in!'); document.location.href='adminlogin.php';</script>";
	}
 ?>