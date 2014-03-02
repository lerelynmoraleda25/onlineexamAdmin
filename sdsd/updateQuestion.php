<?php
require_once('adminHandler.php');
require_once('adminDAO.php'); 

$id = (isset($_GET['id']) ? $_GET['id']:false);

$res = new adminHandler();
$result = $res->getupdateQuest($id);
$result1 = $res->getupdateOptions($id);
 ?>
 <html>
 <head>
 	<title>Update Question</title>
 </head>
 <body>
 <div>
 	<div>
 		<table>
 			<tr>
 				<td>
 					<input type = "hidden" value = "<?= $result['id']; ?>" />
 				</td>
 			</tr>
 			<tr>
 				<td>Question:</td>
 				<td><input type = "text" style = "width:300px;height:100px" value = "<?= $result['question']; ?>" /></td>
 			</tr>
 			<?php foreach($result1 as $id => $result1): $i++?>
 			<tr>
 				<td>Choice&nbsp;<?= $result1[$i]; ?></td>
 			</tr>
 			<?php endforeach; ?>
 		</table>
 	</div>
 </div>
 </body>
 </html>