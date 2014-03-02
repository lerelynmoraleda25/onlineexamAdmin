<?php
	session_start();
	include_once('config.php');
    include_once('examDAO.php');
	$answer = $_POST['option'];

	if(!empty($answer)){
		$_SESSION['num']++;
		examDAO::countScore($answer);
		header('Location: home.php');
	}else{
		header('Location: home.php');
	}
?>