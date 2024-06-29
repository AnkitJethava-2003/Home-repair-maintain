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
<table class="tab" width="100%">
	<tr align ="center" width="100%">
		<td class="hed" width='20%'><b>name</b></td>
		<td class="hed" width='15%'><b>mobile</b></td>
		<td class="hed" width='20%'><b>email</b></td>
		<td class="hed" width='15%'><b>applyfor</b></td>
		<td class="hed" width='10%'><b>Edit</b></td>
		<td class="hed" width='10%'><b>Delete</b></td>
	</tr>

<?php
	
	include("connection.php");
	
	$query ="SELECT *FROM career";
	$data =mysqli_query($conn,$query);
	
	while($row=mysqli_fetch_assoc($data)) 
	{
		echo "
			<tr class='tbo' align ='center' width='100%'>
				<td width='20%'><b>".$row['name']."</b></td>
				<td width='15%'><b>".$row['mobile']."</b></td>
				<td width='20%'><b>".$row['email']."</b></td>
				<td width='15%'><b>".$row['applyfor']."</b></td>
				<td width='10%'><button class='edbut'><a href='edapply.php?ed=".$row['id']."' style='text-decoration: none; color:#ffff;'>Edit</a></button></td>
				<td width='10%'><button class='debut'><a href='deapply.php?de=".$row['id']."' style='text-decoration: none; color:#ffff;'>Delete</a></button></td>
			</tr>
		";
	}

?>
</table>
</body>
</html>