<?php



	if(isset($_POST['submit']))
	{

		$name 		= $_POST['email'];

		if($name == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="email.php" method="post">
      <fieldset>


      <legend>Email</legend>

        <input type="email" name="email" value=""><br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
