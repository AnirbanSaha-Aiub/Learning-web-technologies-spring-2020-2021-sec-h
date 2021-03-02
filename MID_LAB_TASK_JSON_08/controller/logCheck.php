<?php
	$myfile = fopen('../model/users.json', 'r');
	$data = fread($myfile, filesize('../model/users.json'));

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$users = json_decode($data, true);
			if($username == $users['username'] && $password == $users['password']){
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>
