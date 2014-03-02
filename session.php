<?php
	session_start();
	
	if ($_SESSION['num'] < 1){
	$id = 0;
	$_SESSION['num'] = $id + 1;
	
	}

?>