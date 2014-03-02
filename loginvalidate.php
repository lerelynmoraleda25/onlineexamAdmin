<?php 
	session_start();
	include_once('config.php');
	include_once('examDAO.php');
	$_SESSION['num'] = 1;
	$_SESSION['score'] = 0;
	$email = $_POST['userlog'];
	$password = sha1($_POST['passlog']);
	if(!empty($email) && !empty($password)){
		$log = ExamDAO::loguser($email, $password);
		echo "success";
		
	}else{
		echo "Please Login";
	}
 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 </body>
 </html>