<?php



	if(isset($_POST['submit']))
	{

		$name 		= $_POST['Degree'];

		if($name == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}else{
		echo "Invalid request...";
	}
?>
