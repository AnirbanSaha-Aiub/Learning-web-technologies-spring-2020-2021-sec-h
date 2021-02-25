<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Profile</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td colspan="2">
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="logo.png" alt=""></td>
              <td align = "right">
                Logged in as
                <a href="viewProfile.php"><?php $user = $_SESSION['current_user']; $name= $user['name']; echo "$name"; ?></a>|
                <a href="logout.php">Logout</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td width="250px">
          <h3>Account</h3>
          <hr>
          <ul>
            <li><a href="Dashboard.php">Dashbord</a></li>
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="EditProfile.php">Edit Profile</a></li>
            <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
            <li><a href="ChangePassword.php">Change Password</a></li>
            <li><a href="publicHome.php">Logout</a></li>
          </ul>
        </td>
        <td>

        </td>
      </tr>

      <tr>
        <td align="center" colspan="2" >Copyright Ⓒ 2017</td>
      </tr>

    </table>

  </body>
</html>

<?php

	}else{
		header('location: login.html');
	}

?>
