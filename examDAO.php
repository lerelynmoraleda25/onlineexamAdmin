<?php 
	require_once('config.php');
	class examDAO{

		public function createusers($fname,$lname,$email,$password){
			global $db;

			$res = $db->query("SELECT * FROM examinee WHERE  
								email  in ('$email')");	

			if($res->num_rows >0){
				echo "Email" ." ". $email ." ". "already taken\n"."";
			}else{
			    $sql = "INSERT INTO `onlineExam`.`examinee` 
			    				   (`id`, `fname`, `lname`, `email`, `password`) 
			     	 		VALUES (NULL, '$fname', '$lname', '$email', '$password')";

					$result = $db->query($sql);

					if($result){
						echo "success";
						return true;

					}else{
						return false;
					}		
				}
		}
		

		public static function loguser($email, $password){
		global $db;
		$query = "SELECT * FROM examinee WHERE email = '{$email}' and password = '{$password}'";
		$result = $db->query($query);
		if ($result->num_rows > 0){
			$_SESSION['email'] = $email;
			echo "<script>alert('Login Succesfully.');window.location.href='home.php';</script>";
		}
		else{
			 echo "<script>alert('need to enter the correct username and password');</script>";
			 
			 }
	}
	public static function getQuest($id) {
		global $db;
		if($id<=10){
			$query = "SELECT distinct question
					  from Questions 
					  where id = '{$id}'";		

			$result = $db->query($query);
			if ($result) {
				while($row = $result->fetch_assoc()){;
				return $row['question'];
			}
			} else {
				return false;
			}
		}else{
			
		}
	}
	public static function getAnswer($id) {
		global $db;
		if($id<=10){
			$query = "SELECT *
					  from choices 
					  where question_id_fk = '{$id}'";		
				$result = $db->query($query);
				if ($result->num_rows > 0) {
					$ans = array();
					for ($i = 0; $i < $result->num_rows; $i++) {
						$row = $result->fetch_assoc();
						$ans[$row['id']] = $row['answer'];
					}
					$result->free();
					return $ans;
				} else {
					return false;
				}
		}else{
			
		}
		
	}
	public static function getLetter($id) {
			global $db;
			if($id<=10){
			$query = "SELECT *
					  from choices 
					  where question_id_fk = '{$id}'";		
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$ans = array();
				for ($i = 0; $i < $result->num_rows; $i++) {
					$row = $result->fetch_assoc();
					$ans[$row['id']] = $row['letter'];
				}
				$result->free();
				return $ans;
			} else {
				return false;
			}
		}else{
			
		}
		
	}
	
	public static function countScore($answer){
		global $db;
		$sql = "SELECT * FROM choices WHERE answer = '{$answer}' AND is_correct = '1'";
		$count = $db->query($sql);
		if($count->num_rows > 0){
			session_start();
			$_SESSION['score']++;
			return true;
		}else{
			return false;
		}

	}

	public static function adminLog($email, $password){
		global $db;
		$sql = $query = "SELECT * FROM admin WHERE email = '$email' and password = sha1('$password')";
		$result = $db->query($query);
		if($result->num_rows > 0){
			return true;
		}else{
			return false;
		}
	}
}
 ?>