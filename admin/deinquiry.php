<?php
	include("connection.php");

	$id =$_GET['de'];

	$query="DELETE FROM inquiry WHERE id='$id'";
	$data =mysqli_query($conn,$query);

	if($data)
	{
		header("Location:desinquiry.php");
	}
	else
	{
		echo"DATA IS NOT DELETE";
	}
?>