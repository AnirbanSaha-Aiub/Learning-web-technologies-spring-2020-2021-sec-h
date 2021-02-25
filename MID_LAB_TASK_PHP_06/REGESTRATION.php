<?php
  if(isset($_POST['submit']))
  {

    		$name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $confirm_password =$_POST['confirm_password'];
        $mm = $_POST['dd'];
        $dd = $_POST['mm'];
        $yyyy = $_POST['yyyy'];

    		 if($name == "" && $email == "" && $username == "" && $password == ""  && $dd == "" && $mm == "" && $yyyy == ""){
    		 	echo "null submission";
    		 }
        elseif($yyyy = range(1900,2021) && $dd = range(1,31) && $mm = range(1,12) && $password==$confirm_password){
    			echo "Successfully submitted";

        }
        else {
          echo "Invalid";
          }

  }


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>REGESTRATION</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <fieldset>
        <legend>REGESTRATION</legend>
          <table>
            <tr>
              <td>Name</td>
              <td>:<input type="text" name="name" value=""></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:<input type="email" name="email" value=""></td>
            </tr>
            <tr>
              <td>User Name</td>
              <td>:<input type="text" name="username" value=""></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:<input type="password" name="password" value=""></td>
            </tr>
            <tr>
              <td>Confirm Password</td>
              <td>:<input type="password" name="confirm_password" value=""></td>
            </tr>
            <tr>
              <td colspan="2">
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="m">Male
                    <input type="radio" name="gender" value="f">Female
                    <input type="radio" name="gender" value="o">Other
                </fieldset>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <fieldset>
                  <legend>Date of Birth</legend>
                    <input size="2" type="text" name="dd" value="">/
                    <input size="2" type="text" name="mm" value="">/
                    <input size="4" type="text" name="yyyy" value=""> (dd/mm/yyyy)
                </fieldset>
              </td>
            </tr>
          </table>
          <hr>
          <input type="submit" name="submit" value="Submit">
          <input type="reset" name="reset" value="Reset">
      </fieldset>
    </form>
  </body>
</html>
