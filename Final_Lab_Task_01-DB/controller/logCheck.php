<?php
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'task_01');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			//$user = $_SESSION['current_user'];
			$sql = "select * from user where user_name='$username' and password='$password'";
			$result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);
			if($count == 1) {
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>
