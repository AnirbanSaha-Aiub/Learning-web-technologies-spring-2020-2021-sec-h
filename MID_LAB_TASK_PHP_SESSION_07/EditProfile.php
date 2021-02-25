<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
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
					<form class="" action="editCheck.php" method="post">


					<fieldset>
						<legend>Edit Profile</legend>
						<table>
							<tr>
								<td>Name</td>
								<td>
									: <input type="name" name="name" value="<?php $user = $_SESSION['current_user']; $name= $user['name']; echo "$name"; ?>">
								</td>
							</tr>

							<tr>
								<td>Email</td>
								<td>
									: <input type="email" name="email" value="<?php $user = $_SESSION['current_user']; $email= $user['email']; echo "$email"; ?>">
								</td>
							</tr>

							<tr>
								<td>Gender</td>
								<td>
									: <input type="gender" name="gender" value="<?php $user = $_SESSION['current_user']; $gender= $user['gender']; echo "$gender"; ?>">
									</td>
							</tr>

							<tr>
								<td>Date of Birth</td>
								<td>
									: <input size="2" type="text" name="dd" value="<?php $user = $_SESSION['current_user']; $dd= $user['dd']; echo "$dd"; ?>">/
									<input size="2" type="text" name="mm" value="<?php $user = $_SESSION['current_user']; $mm= $user['mm']; echo "$mm"; ?>">/
									<input size="4" type="text" name="yyyy" value="<?php $user = $_SESSION['current_user']; $yyyy= $user['yyyy']; echo "$yyyy"; ?>"> (dd,mm,yyyy)
								</td>
							</tr>

						</table>
						<hr>
						<input type="submit" name="submit" value="Submit">
					</fieldset>
				</form>

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
