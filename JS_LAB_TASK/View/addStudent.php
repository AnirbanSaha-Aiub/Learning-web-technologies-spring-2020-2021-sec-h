<?php
	$title= "add student";
	include('header.php');
?>
                <ul>
                  <li><a href="addStudent.php">Add Student</a></li>
                  <li><a href="viewStudent.php">View Student</a></li>
                  <li><a href="editrequestlist.php">Edit Request</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>
                </ul>
              </td>

              <td>
                <form  class="" action="../Controller/regCheckStudent.php" method="post">
                  <fieldset >
                    <legend>REGESTRATION</legend>
                      <table align="center">
                        <tr>
                          <td>Name</td>
                          <td>:<input type="text" name="name" placeholder="Enter Full Name"></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:<input type="email" name="email" value=""></td>
                        </tr>
                        <tr>
                          <td>Mobile No</td>
                          <td>:<input type="number" name="mobile" value=""></td>
                        </tr>
                        <tr>
                          <td>Id</td>
                          <td>:<input type="text" name="id" value=""></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>:<input type="password" name="password" value=""></td>
                        </tr>
                        <tr>
                          <td>Confirm Password</td>
                          <td>:<input type="password" name="repass" value=""></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td>
                            :<input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other
                          </td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td>:<input type="date" name="dob" value=""></td>
                        </tr>
                        <tr>
                          <td>Present Address</td>
                          <td>:<input type="text" name="p_address" value=""></td>
                        </tr>
                        <tr>
                          <td>Class</td>
                          <td>:<select name="class">
                              <option value="Six">Six</option>
                              <option value="Seven">Seven</option>
                              <option value="Eight">Eight</option>
                              <option value="Nine">Nine</option>
                              <option value="Ten">Ten</option>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td>Section</td>
                          <td>:<select  name="section">
                              <option value="A">A</option>
                              <option value="B">B</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>Roll No</td>
                          <td>:<input type="number" name="roll" value=""></td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>




      <?php include('footer.php'); ?>
