<?php

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$users = [
							'username'=>$username,
							'password'=>$password,
							'email'=> $email
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
