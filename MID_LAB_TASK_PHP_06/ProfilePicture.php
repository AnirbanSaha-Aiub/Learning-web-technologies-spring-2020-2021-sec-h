<?php
    if(isset($_POST['submit']))
      {

          $supported_image = array('jpg','jpeg','png');
      		$ext = strtolower(pathinfo($_POST['file'], PATHINFO_EXTENSION));
      		if (in_array($ext, $supported_image) === true)
      		{
            if(getimagesize($_POST['file']) < 4194304)
        		{
        			echo "Image is successfully Uploaded";
        		}
            else
        		{
        			     echo "Invalid Image";
        		}

      		}
      		else
      		{
      			     echo "Invalid Image";
      		}
        }
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <fieldset>
        <legend>Profile Picture</legend>
        <img src="user.png" alt="">
        <br>
        <input type="file" name="file" value="">
        <hr>
        <br>
        <input type="submit" name="submit" value="Submit">
      </fieldset>
    </form>
  </body>
</html>
