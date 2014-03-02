<?php 
	require_once('adminHandler.php');
	require_once('adminDAO.php');
	require_once('../config.php');

	$id = (isset($_GET['id']) ? $_GET['id']:false);

	$res = new adminHandler();
	$result = $res->deleteQuest($id);

	if ($result === false) {
		echo "<script>alert('Unable to delete Question Number ".$id."!');window.location.href='questionTable.php';</script>";
	} else {
		echo "<script>alert('Successfully deleted Question Number ".$id."!');window.location.href='questionTable.php';</script>";
	}
 ?>