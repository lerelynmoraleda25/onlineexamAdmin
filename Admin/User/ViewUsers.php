<?php 
require_once('../../config.php');
require_once('../AdminDAO.php');


$max  = AdminDAO::userNumber();

 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div>
 		<div>
 			<table border = '1'>
 				<?php for($i = 1; $i <= $max; $i++){   
 					$user = AdminDAO::viewUser($i);
 				 ?>
 				<tr>
 					
 					<td> <a href="viewall.php?id= <?php echo $i; ?>"><?php echo $user; ?></a></td>
 					<td><a href = "EditUser.php?id= <? echo $i; ?>">Edit</a>|Delete</td>
 				</tr>
 				 <?php } ?>
 			</table>
 			
 		</div>
 	</div>
 	<a href="../MainPage.php">Back</a>
 </body>
 </html>