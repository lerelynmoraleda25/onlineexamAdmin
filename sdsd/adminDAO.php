<?php 
	require_once('../config.php');

	class adminDAO{
		public static function LoginAdmin($email, $password){
			global $db;

			$query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' ";
			$result = $db->query($query);

			if(!empty($result)){
				return $result;
			}else{
				return false;
			}
		} 

		public static function getQuest() {
			global $db;

				$query = "SELECT *
						  from questions";		

				$result = $db->query($query);
				if ($result) {
					return $result;
				} else {
					return false;
				}
		}

		public static function deleteQuest($id){
			global $db;

			$query = "DELETE FROM questions WHERE id = '$id'";
			$result = $db->query($query);

			if(!empty($result)){
				return $result;
			}else{
				return false;
			}
		}

		public static function getupdateQuest($id) {
			global $db;

				$query = "SELECT * FROM questions WHERE id = '$id'";
				$result = $db->query($query);
				$res = $result->fetch_assoc();
				if (!empty($res)) {
					return $res;
				} else {
					return false;
				}
		}

		public static function getupdateOptions($id) {
			global $db;

				$query = "SELECT * FROM choices WHERE question_id_fk = '$id'";
				$result = $db->query($query);
				if ($result->num_rows > 0) {
					$ans = array();
					for ($i = 0; $i < $result->num_rows; $i++) {
						$row = $result->fetch_assoc();
						$ans[] = $row;
					}
					$result->free();
					return $ans;
				} else {
					return false;
				}
		}
	}

 ?>