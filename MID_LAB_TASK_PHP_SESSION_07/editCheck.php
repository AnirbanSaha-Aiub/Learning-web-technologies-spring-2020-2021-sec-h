<?php
	session_start();

	if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $email = $_POST['email'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $gender = $_POST['gender'];
    $dd = $_POST['dd'];
    $mm = $_POST['mm'];
    $yyyy = $_POST['yyyy'];


		if($name == "" || $email == ""  || $gender == "" || $dd == "" || $mm == "" || $yyyy == ""  ){
			echo "null submission...";
		}else{

				$user = [
          'name'=>$name,
          'email'=>$email,
          'username'=>$username,
          'password'=>$password,
          'gender'=> $gender,
          'dd'=>$dd,
          'mm'=>$mm,
          'yyyy'=>$yyyy
						];


				$_SESSION['current_user'] = $user;

				header('location: veiwProfile.php');

			}
		}


?>
