<?php
	
	include_once('config.php');
    include_once('examDAO.php');
  
 	$userlog = $_POST['userlog'];
 	$passlog =sha1($_POST['passlog']);

 	if(!empty($userlog) && !empty($passlog)){
		$log = ExamDAO::loguser($userlog, $passlog);
		echo "success";
		
	}else{
		echo "Please Login";
	}
	
?>