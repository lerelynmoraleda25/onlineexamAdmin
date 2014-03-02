<?php 
	require_once('examDAO.php');
	class examhandler extends examDAO {

		public function __construct() {

		}
		public function testCreateusers($fname,$lname,$email,$password) {
			try{
				$result = parent::createusers($fname,$lname,$email,$password);
				if($result !== false){	
					return true;
				}else{
					return false;
				}
			} catch(Exception $e){
				error_log($e->getMessage());
				return false;
			}
		}

		public function testgetAnswer($id){
			try{
				$result = parent::getAnswer($id);
				if($result !== false){
					return true;
				}else{
					return false;
				}
			}catch(Exception $e){
				error_log($e->getMessage());
				return false;
			}
		}
		public function testgetLetter($id){
			try{
				$result = parent::getLetter($id);
				if($result !== false){
					return true;
				}else{
					return false;
				}
			}catch(Exception $e){
				error_log($e->getMessage());
				return false;
			}
		}

		public function testcountScore($answer){
			try{
				$result = parent::countScore($answer);
				if($result !== false){
					return true;
				}else{
					return false;
				}
			}catch(Exception $e){
				error_log($e->getMessage());
				return false;
			}
		}

		public function testadminLog($email, $password){
			try{
				$result = parent::adminLog($email, $password);
				if($result !== false){
					return true;
				}else{
					return false;
				}
			}catch(Exception $e){
				error_log($e->getMessage());
				return false;
			}
		}

		public function testGetQuest($id) {
			try {
				$result = parent::getQuest($id);
				if($result !== false) {
					return $result;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}
	}
 ?>