<?php 
	require_once('adminHandler.php');
	require_once('adminDAO.php');

	$email = $_POST['userlog'];
	$password = $_POST['passlog'];

	echo "Hello";
	$obj = new adminHandler();
	$result = $obj->LoginAdmin($email, $password);
	if($result !== false){
		echo "<script>alert('you successfully logged in!'); document.location.href='admin.php';</script>";
	}else{
		echo "<script>alert('you unsuccessfully logged in!'); document.location.href='adminlogin.php';</script>";
	}
 ?>