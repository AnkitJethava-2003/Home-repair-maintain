<?php
	include("head.php");
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>despaly all contects</title>

<style type="text/css">

.tab{
	margin-top: 50px;
	height: 10px;
	border: 1px solid grey;
	border-radius: 5px;
	box-shadow: 5px black;  	
	width: 70%;
}		

.hed{
	font-size: 17px;
	font-family: bold;
	color: #ffff;
	background-color: #4B49AC;
	padding-bottom: 5px;
	padding-top:5px; 
}
.tbo
{
	border-top:6px solid #ffff;
	box-shadow:7px 7px 20px #8ea0b984;
	font-size: 17px;
	font-family: bold;
	color: solid black;	
	background-color: #8ea0b994; 
	height:40px;
}
.edbut{
	background-color:green;
	border:none;
	border-radius: 3px;
	height: 30px;
	width: 90px; 
	margin-top: 5px;
	margin-bottom: 5px;
	margin-left:10px; 
	margin-right: 10px; 
}
.debut{
	background-color:red;
	border:none;
	border-radius: 3px;
	height: 30px;
	width: 90px; 
	margin-top: 5px;
	margin-bottom: 5px;
}
.edbut:hover{
	background-color: red;
}
.debut:hover{
	background-color: green;
}
</style>
</head>
<body>
<table class="tab">
	<tr align ="center">
		<td class="hed"><b>Id</b></td>
		<td class="hed"><b>Name</b></td>
		<td class="hed"><b>Mobile</b></td>
		<td class="hed"><b>Email</b></td>
		<td class="hed"><b>Address</b></td>
		<td class="hed"><b>Service</b></td>
		<td class="hed"><b>Edit</b></td>
		<td class="hed"><b>Delete</b></td>
	</tr>

<?php
	
	include("connection.php");
	
	$query ="SELECT *FROM inquiry";
	$data =mysqli_query($conn,$query);
	
	while($row=mysqli_fetch_assoc($data)) 
	{
		echo "
			<tr class='tbo' align ='center'>
				<td><b>".$row['id']."</b></td>
				<td><b>".$row['name']."</b></td>
				<td><b>".$row['mobile']."</b></td>
				<td><b>".$row['email']."</b></td>
				<td><b>".$row['address']."</b></td>
				<td><b>".$row['service']."</b></td>
				<td><button class='edbut'><a href='edinquiry.php?ed=".$row['id']."' style='text-decoration: none; color:#ffff;'>Edit</a></button></td>
				<td><button class='debut'><a href='deinquiry.php?de=".$row['id']."' style='text-decoration: none; color:#ffff;'>Delete</a></button></td>
			</tr>
		";
	}


?>
</table>
</body>
</html>