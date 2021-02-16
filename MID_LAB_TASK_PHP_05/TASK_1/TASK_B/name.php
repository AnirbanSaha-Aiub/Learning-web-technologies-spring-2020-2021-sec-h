<?php



	if(isset($_POST['submit']))
	{

		$name 		= $_POST['name'];

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

    <form class="" action="name.php" method="post">
      <fieldset>

      <legend>Name</legend>

        <input type="text" name="name" value=""><br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
