<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['Regester'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$userType = $_POST['userType'];

		if($id == "" || $email == "" || $name == "" || $password == "" ||$userType == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$user = [
							'id' => $id,
							'password' => $password,
							'name' => $name,
							'email' => $email,
							'userType' => $userType
						];

				$status = insertUser($user);

				if($status){
					header('location: ../view/login.html');
				}else{
					echo "error";
				}

			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
