<?php
	session_start();
	if(isset($_COOKIE['flag']))
	{
?>
<center>
<?php

	}else{
		header('location: login.html');
	}

?>