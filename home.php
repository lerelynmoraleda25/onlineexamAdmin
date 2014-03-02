<?php
	include('session.php');
	include_once('config.php');
	include_once('examDAO.php');
	define('QUESTION_NUMBERS', 10);
	$opt = array(null, 'A', 'B', 'C', 'D');
	$i = 0;
	$quest = examDAO::getQuest($_SESSION['num']);
	$choices = examDAO::getAnswer($_SESSION['num']);
?>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<div><?php echo $_SESSION['email'];  ?></div>
			<div><?php  echo $quest; ?></div>
			<div>
				<?php if($_SESSION['num'] > 10){
					header('Location: result.php');
				}else{ ?>
				<form method = "POST" action = "next.php" id = "nextForm">
					<input type = "hidden" value = "<?= $answers ?>" name = "anwers">
					<?php foreach($choices as $id => $choices): $i++?>
					<input type = "radio" value = "<?= $choices ?>" name = "option" id = "opt">  <?= $opt[$i] ?>) <?=$choices?><br>
					<?php endforeach ?>
					<button id = "nextBtn">NEXT</button>
				</form>
				<?php } ?>
			</div>
			
			<div><a href="logout.php">Logout</a> </div>
	</div>

</body>
</html>
			
					

	