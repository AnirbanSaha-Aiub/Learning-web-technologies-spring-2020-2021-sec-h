<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
              <td colspan="2">
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="">Male
                    <input type="radio" name="gender" value="">Female
                    <input type="radio" name="gender" value="">Other
                </fieldset>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <fieldset>
                  <legend>Date of Birth</legend>
                    <input size="2" type="text" name="dob" value="">/
                    <input size="2" type="text" name="dob" value="">/
                    <input size="4" type="text" name="dob" value=""> (dd/mm/yyyy)
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
