<?php
	session_start();
	echo "success";
?>

<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<div><?= "Your score is: "." ".$_SESSION['score'] ?></div>
		<div><a href="logout.php">Logout</a> </div>
	</div>
</body>
</html>