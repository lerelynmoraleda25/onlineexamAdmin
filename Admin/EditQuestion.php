<?php
require_once('AdminDAO.php');
require_once('../config.php');

$id = $_GET['id'];
$choices= AdminDAO::getAnswer($id);
$question = AdminDAO::getQuestion($id);
$i = 1;
 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<form method = "POST" action = "UpdateQuestion.php">
 		<input type = "text" value = "<?php echo $question; ?>" name = "ques"><br>
 		<input type = "hidden" value = "<?php echo $id; ?>" name = "id">
 		<?php
 			foreach ($choices as $id => $choices){  $i++; $cor = "is_correct".$i; $opt = "opt".$i; ?>
 			<input type = "text" value = "<?php echo $choices; ?>" name = "<?php echo $opt; ?>">
 			<input type = "radio" name = "<?php echo $cor; ?>" value = "0">
 			<input type = "radio" name = "<?php echo $cor; ?>" value = "1"><br>
 			<?php } ?>
 			<input type = "submit" name = "button" value = "Update">
 		</form>
 </body>
 </html>