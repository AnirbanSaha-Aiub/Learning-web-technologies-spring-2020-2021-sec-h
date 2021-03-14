<?php

	if(isset($_POST['signup'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$name = $_POST['name'];
		$userType =  $_POST['userType'];

		if($id == "" || $name == "" || $password == "" || $repass == "" || $userType == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$users = [
							'id'=>$id,
							'password'=>$password,
							'name'=> $name,
							'userType'=> $usersType
						];

				$data = json_encode($users);
				$userData = fopen("../model/users.json", "w");
				fwrite($userData, $data);
				fclose($userData);

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
