

<!DOCTYPE html>
<html>
    <head>
    <title></title>
    </head>
    <body>
        <form class="" action="dob.php" method="post">
            <fieldset>
              <legend>Date of Birth</legend>
              <table>
                  <tr>
                      <td>dd<br><input type="text" name="dob" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; }?> "> / </td>
                      <td>mm<br><input type="text" name="dob" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; }?>"> / </td>
                      <td>yyyy<br><input type="text" name="dob" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; }?>"></td>
                  </tr>
              </table>
              <input type="submit" name="submit" value="Submit"><br>
            </fieldset>

          </form>
    </body>
</html>
