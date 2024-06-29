<?php
	include("connection.php");

	$id =$_GET['de'];

	$query="DELETE FROM career WHERE id='$id'";
	$data =mysqli_query($conn,$query);

	if($data)
	{
		header("Location:desapply.php");
	}
	else
	{
		echo"DATA IS NOT DELETE";
	}
?>