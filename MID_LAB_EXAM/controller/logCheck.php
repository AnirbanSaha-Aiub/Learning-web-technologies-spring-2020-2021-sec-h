<?php
	$myfile = fopen('../model/users.json', 'r');
	$data = fread($myfile, filesize('../model/users.json'));

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{
			$users = json_decode($data, true);
			if($id == $users['id'] && $password == $users['password']){
				if( $users['userType'] == 'user'){
					header('location: ../view/user_home.html');
				}
				else {
					header('location: ../view/admin_home.html');
				}

			}
			else{
				echo "invalid user";
			}
		}

	}
?>
