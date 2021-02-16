
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="degree.php" method="post">
      <fieldset>
        <legend>Degree</legend>
        <input type="checkbox" name="Degree" value="<?php if(isset($_POST['degree'])){ echo $_POST['degree']; }?> "> SSC
        <input type="checkbox" name="Degree" value="<?php if(isset($_POST['degree'])){ echo $_POST['degree']; }?> "> HSC
        <input type="checkbox" name="Degree" value="<?php if(isset($_POST['degree'])){ echo $_POST['degree']; }?> "> BSc
        <br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
