<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{
			$status = validateUser($id, $password);
			if($status){
				$_SESSION['flag'] = true;
				$_SESSION['id'] = $id;
				$type = getUsertype($id);

				if($type == 'User'){
						header('location: ../view/user_home.html');
				 	}
				 	else {
				 		header('location: ../view/admin_home.html');
				 	}

				  }






			// $users = json_decode($data, true);
			// if($id == $users['id'] && $password == $users['password']){
			// 	if( $users['userType'] == 'User'){
			// 		header('location: ../view/user_home.html');
			// 	}
			// 	else {
			// 		header('location: ../view/admin_home.html');
			// 	}
			//
			// }
			else{
				echo "invalid user";
			}
		}

	}
?>
