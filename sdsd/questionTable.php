<?php 
	require_once('adminHandler.php');
	require_once('adminDAO.php');
	$obj = new adminHandler();
	$question = $obj->testGetQuest();
	
	
 ?>
 <html>
 <head>
 	<title>Question</title>
 	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
 </head>
 <body>
 <div id="container">
 	<div id = "addQuest">
 		<a href="#"><button>Add Question</button></a>
 	</div>
 	<div id="viewQuest">
	 	<table border = "1">
	 		<thead>
	 			<tr>
	 				<th>Question</th>
	 				<th>Action</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			<?php
	 			foreach($question as $record): {
	 				echo "<tr><td>".$record['question']."</td>";
	 				echo "<td><a href = 'updateQuestion.php?id=".$record['id']."'><button>Edit</button></a><a href = 'deleteAction.php?id=".$record['id']."'><button>Delete</button></a></td>";
	 				echo "</tr>";
	 			} 
	 			endforeach;
	 			 ?>
	 		</tbody>
	 	</table>
 	</div>
 </div>
 </body>
 </html>

