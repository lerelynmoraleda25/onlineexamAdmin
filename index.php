<?php 
	session_start();
?>

<html>
<center><head><h2>REGISTRATION FORM</h2></center>
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div>
		<div id = "border" style = "margin-left:550px">
		<form method='POST' action='createuser.php' id = "regForm">	
			<input type='text' name='fname' id='fname' placeholder = "name"> 
			<input type='text' name='lname' id='lname' placeholder = "lastname">
			<input type='email' name='email' id='email' placeholder = "email address">
			<input type='password' name='password' id='password' placeholder = "password">
			<input type='password' id='confirm_pass' placeholder = "confirm password">
			<button type='submit' name='register' id = "reg">Register</button>	
		</form>
		</div>
		<div id = "ack"></div>
		<div>
				<div class = " login" style = "margin-left:550px">
					<form method = "post" id = "logForm" action = "loginvalidate.php">
					<input type = "email" placeholder = "email" id = "logemail" name = "userlog"><br>
					<input type = "password" placeholder = "password" id = "logpassword" name = "passlog"><br>
					<button id = "loginbtn">Login</button>
					</form>
					<div id = "warning"></div>
					
				</div>
			</div>
			<div id = "regField">
	</div>
		<script type="text/javascript" src="assets/js/jquery.1.10.2.js"></script>
		<script type="text/javascript" src="assets/js/reg.js"></script>
		<script type="text/javascript" src="assets/js/log.js"></script>
</body>
</html>