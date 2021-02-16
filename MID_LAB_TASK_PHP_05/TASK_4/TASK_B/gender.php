<?php



	if(isset($_POST['submit']))
	{

		$name 		= $_POST['gender'];

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

    <form class="" action="gender.php" method="post">
      <fieldset>


        <legend>Grnder</legend>
            <input type="radio" name="gender" value="male"> male
            <input type="radio" name="gender" value="male"> Female
            <input type="radio" name="gender" value="male"> Other
            <br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
