
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
            <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?> "> male
            <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?> "> Female
            <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?> "> Other
            <br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
