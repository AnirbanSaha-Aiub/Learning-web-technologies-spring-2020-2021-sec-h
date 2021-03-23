<?php
	$title= "change password Page";
	require_once('header.php');

?>



<center>
	<form method="post" action="../controller/chaPass.php">
		<table border="0" cellspacing="0" cellpadding="5">

			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="cpas" /><br />
						New Password<br />
						<input type="password" name="npass" /><br />
						Retype New Password<br />
						<input type="password" name="rnpass"/>
						<hr />
						<input type="submit" name="Change" value="Change" />
						<!-- <a href="home.html">Home</a> -->
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>


<?php include('footer.php'); ?>
