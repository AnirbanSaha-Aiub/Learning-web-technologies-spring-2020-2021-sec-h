<?php
	$title= "Update course";
	include('header.php');
	include_once('../model/courseModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
                <ul>
                  <li><a href="addCourse.php">Create Course</a></li>
                  <li><a href="viewCourse.php">View Course</a></li>
                </ul>
              </td>
              <td>
                <form action="../controller/updateCheckCourse.php" method="post">

                <fieldset>
                  <legend>Update Course</legend>
                    <table align="center">
                      <tr>
                        <td>Id</td>
                        <td>:<input type="text" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Course Name</td>
                        <td>:<input type="text" name="name" value="<?php echo $updatemyinfo['course_name']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Class</td>
                        <td>:<select name="class">
                            <option  <?php  if($updatemyinfo['class']=="Six"){?> selected="true" <?php } ?>  value="Six">Six</option>
                            <option  <?php  if($updatemyinfo['class']=="Seven"){?> selected="true" <?php } ?>  value="Seven">Seven</option>
                            <option  <?php  if($updatemyinfo['class']=="Eight"){?> selected="true" <?php } ?>  value="Eight">Eight</option>
                            <option  <?php  if($updatemyinfo['class']=="Nine"){?> selected="true" <?php } ?>  value="Nine">Nine</option>
                            <option  <?php  if($updatemyinfo['class']=="Ten"){?> selected="true" <?php } ?>  value="Ten">Ten</option>
                          </select>
                        </td>
                      <tr>
                        <td>Description</td>
                        <td>:<textarea name="description" rows="3" cols="20"><?php echo $updatemyinfo['description']; ?></textarea></td>
                      </tr>

                      </table>

                    <hr>
                    <center>
                      <input type="submit" name="update" value="Update">
                  </center>
                </fieldset>







            </td>
            </tr>
            </table>
            </td>
            </tr>




            <?php include('footer.php'); ?>