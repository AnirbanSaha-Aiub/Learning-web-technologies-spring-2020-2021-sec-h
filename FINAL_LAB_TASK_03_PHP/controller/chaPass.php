<?php

	require_once('../model/userModel.php');

	if(isset($_POST['Change']))
	{

		if($_POST['cpas'] == "" || $_POST['npass'] == "" || $_POST['rnpass'] == "")
		{
			echo "null submission...";
		}
		elseif($_POST['npass'] != $_POST['rnpass'])
		{
			echo "New password and Retype New password mismatch!";
		}
		else
		{
			session_start();
			$User = getUserById($_SESSION['id']);
			$id = $User['id'];
			$password = $User['password'];
			$newPass = $_POST['npass'];
			if($_POST['cpas'] != $password)
			{
				echo "Your entered current password is wrong";
			}
			else
			{
				$check = changePassword($id, $newPass);
				if($check)
				{
					echo "Password changed!";
				}
				else
				{
					echo "Error occured!";
				}
			}
		}

	}

?>
