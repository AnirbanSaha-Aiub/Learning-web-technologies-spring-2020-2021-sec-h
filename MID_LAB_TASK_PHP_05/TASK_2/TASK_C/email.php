
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

        <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?> "><br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
