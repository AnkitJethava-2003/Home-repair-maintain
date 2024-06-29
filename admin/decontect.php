<?php
	include("connection.php");

	$id =$_GET['de'];

	$query="DELETE FROM contact WHERE id='$id'";
	$data =mysqli_query($conn,$query);

	if($data)
	{
		header("Location:descontect.php");
	}
	else
	{
		echo"DATA IS NOT DELETE";
	}
?>