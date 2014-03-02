<?php 
require_once('AdminDAO.php');
require_once('../config.php');
$max = AdminDAO::questionNumbers();
echo $max + 1;
 ?>
<html>
<head>
	<title>Emamination Web App</title>

  	<link type="text" rel="stylesheet" href="../assets/css/style.css">
</head>
<body id = "td">
	<div><a href = "AddQuestion.php">Add Question</a></div>
	<div><?php for($i = 1; $i <= $max + 1; $i++){
		$j = 0;
		$choices= AdminDAO::getAnswer($i);
		$question = AdminDAO::getQuestion($i);
		if($choices == false || $question == false){
			continue;
		}else{
		?>
		<table id = "table">
			<tr>
				<td width = 500px id = "td" style = "background-color: gray">
				<?php
				echo $question."<br>";
				?>
				</td>
				<td>
					<a href="EditQuestion.php?id=<?php echo $i; ?>">Edit</a>
					<a href = "DeleteQuestion.php?id=<?php echo $i; ?>" onclick = "return confirm('Are you sure you want to delete this question?')">Delete</a>
				</td>
			</tr>
			<tr>
				<td>
				<?php
				foreach($choices as $id => $choices){ $j++;
					echo $choices."<br>";
				} ?>
				</td>
				<td>
				</td>
			</tr>
		</table>

	<?php } } ?>


</div>
<a href="MainPage.php?id=<?php echo $i; ?>">Back</a>

</body>
</html>