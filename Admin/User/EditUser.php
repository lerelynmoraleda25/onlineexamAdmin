<?php 
require_once('../../config.php');
require_once('../AdminDAO.php');

$id = $_GET['id'];
$view = AdminDAO::viewUserInfo($id);

 ?>

 <html>
<head>
	<title>Emamination Web App</title>
	<link type="text" rel="stylesheet" href="../../css/bootstrap.css">
  	<link type="text" rel="stylesheet" href="../../style.css">
 </head>
<body>
	<?php  include '../../header.php';?>
 	<div>
 		<form method = "POST" action = "UpdateUser.php">
 		<input type = "hidden" value = "<?= $id ?>" name = "id">
 		<input type = "text" name = "fname" value = "<?= $view['fname'] ?>"><br>
 		<input type = "text" name = "lname" value = "<?= $view['lname'] ?>"><br>
 		<input type = "email" name = "email" value = "<?= $view['email'] ?>"><br>
 		<input type = "password" name = "pass" value = "<?= $view['password'] ?>"><br>
 		<input type = "submit" value = "Update">
 		</form>
 	</div>
 </body>
 </html>