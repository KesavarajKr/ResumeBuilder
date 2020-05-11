<?php
	
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$db_name = "resumeproject";

	$con = mysqli_connect($localhost,$username,$password,$db_name);

	if(!$con)
	{
		echo "Database Not Connect";
	}
	
?>