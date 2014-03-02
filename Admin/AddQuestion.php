<?php 
require_once('../config.php');
require_once('AdminDAO.php');
$max = AdminDAO::questionNumbers();
$key = $max + 1;
 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div>
 		<div>
 			<form method = "POST" action = "AddQuestionPro.php">
 				<input type = "text" name = "question"><br>
 				<input type = "hidden" value = "<?php  echo $key; ?>" name = "fk"><br>
 				<?php for($i = 1; $i < 5; $i++){ $choices = "choice".$i; $cor = "correct".$i;
 					?> <input type = "text" name = "<?php echo $choices; ?>">
 					<input type = "radio" name = "<?php echo $cor; ?>" value = "0" >
 					<input type = "radio" name = "<?php echo $cor; ?>" value = "1" ><br>
 					<?php
 				} ?>
 				<input type = "submit" value = "Add Question">
 			</form>
 		</div>
 </div>
 </body>
 </html>