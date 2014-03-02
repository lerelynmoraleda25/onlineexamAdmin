<?php 
	
	class adminHandler{
		public function LoginAdmin($email, $password){
			try{
				$result = adminDAO::loginAdmin($email,$password);

				if (!empty($result)) {
					return $result;
				} else {
					return false;
				}
			}catch(Exception $e){
				error_log($e->getMessage());
				return false;
			}
		}

		public function testGetQuest() {
			try {
				$result = adminDAO::getQuest();
				if(!empty($result)) {
					return $result;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function deleteQuest($id){
			try{
				if (!empty($id)) {
					return $id;
				} else {
					return false;
				}

				$result = adminDAO::deleteQuest($id);
				if(!empty($result)){
					return $result;
				}else{
					return false;
				}
			}catch(Exception $e){
				error_log($e->getMessage());
				return false;
			}
		}

		public function getupdateQuest($id) {
			try {
				$result = adminDAO::getupdateQuest($id);
				if(!empty($result)) {
					return $result;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function getupdateOptions($id) {
			try {
				$result = adminDAO::getupdateQuest($id);
				if(!empty($result)) {
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