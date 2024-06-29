<?php

	include("connection.php");
	
	$id =$_GET['de'];
	
	$query ="DELETE FROM login WHERE id='$id'";
	$data =mysqli_query($conn,$query);

	if($data)
	{
		header("Location:desuser.php");
	}
	else
	{
		echo"DATA NOT DELETE";
	}
?>