<?php

	$servername ="localhost";
	$username ="root";
	$password ="";
	$db_name ="finance";
	
	$conn =mysqli_connect($servername,$username,$password,$db_name);
	
	if($conn)
	{
		//echo"OK ";
	}
	else
	{	
		echo"NOT ";
	}
?>