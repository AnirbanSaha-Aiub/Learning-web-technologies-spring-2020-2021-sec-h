
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="blood.php" method="post">
      <fieldset>


        <legend>Blood Group</legend>
        <select class="blood" name="blood">
          <option value="<?php if(isset($_POST['blood'])){ echo $_POST['blood']; }?>">A+</option>
          <option value="<?php if(isset($_POST['blood'])){ echo $_POST['blood']; }?>">A-</option>
          <option value="<?php if(isset($_POST['blood'])){ echo $_POST['blood']; }?>">B+</option>
          <option value="<?php if(isset($_POST['blood'])){ echo $_POST['blood']; }?>">AB+</option>
          <option value="<?php if(isset($_POST['blood'])){ echo $_POST['blood']; }?>">AB-</option>
          <option value="<?php if(isset($_POST['blood'])){ echo $_POST['blood']; }?>">B-</option>
          <option value="<?php if(isset($_POST['blood'])){ echo $_POST['blood']; }?>">O+</option>
          <option value="<?php if(isset($_POST['blood'])){ echo $_POST['blood']; }?>">O-</option>

        </select>
        <br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
