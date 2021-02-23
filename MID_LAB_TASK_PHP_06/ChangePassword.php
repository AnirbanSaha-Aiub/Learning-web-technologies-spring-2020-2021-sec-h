<?php



	if(isset($_POST['submit']))
	{

		$c_pass = $_POST['c_pass'];
    $n_pass =$_POST['n_pass'];
    $rn_pass = $_POST['rn_pass'];

		if($c_pass == "" and $n_pass == "" and $rn_pass == ""){
			echo "null submission";
    }elseif($c_pass != $n_pass and $n_pass == $rn_pass){
		 	echo "Password is successfully changed";
		}else {
      echo "Invalid Password";
    }
	}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CHANGE PASSWORD</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <fieldset>
        <legend>CHANGE PASSWORD</legend>
        <table>
          <tr>
            <td>Current Password:</td>
            <td><input type="password" name="c_pass" value=""></td>
          </tr>
          <tr>
            <td>New Password:</td>
            <td><input type="password" name="n_pass" value=""></td>
          </tr>
          <tr>
            <td>Retype New Password:</td>
            <td><input type="password" name="rn_pass" value=""></td>
          </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Submit"> <br>
      </fieldset>
    </form>
  </body>
</html>
