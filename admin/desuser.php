<?php
	include("head.php");
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>despaly all login data</title>

<style type="text/css">

.tab{
	margin-top: 80px;
	margin-left:-117px;
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
.adbut{
	background-color:red;
	border:none;
	background-color:#5e50f9;
	border-radius: 3px;
	height: 40px;
	width: 120px;
	margin-top:20px;
	margin-left:10px;
}
.aa{
	text-decoration:none; 
	color:#ffff;
}
.adbut:hover{
	background-color:#6393bd;
	cursur:pointer;
}
.adbut a:hover{
	color:black;
}
</style>
</head>
<body>
<button class="adbut"><a href="adduser.php" style="text-decoration:none;" class="aa">ADD USER</a></button>
<table class="tab" width="100%">
	<tr align ="center" width="100%">
		<td class="hed" width='15%'><b>Id</b></td>
		<td class="hed" width='15%'><b>Password</b></td>
		<td class="hed" width='15%'><b>Name</b></td>
		<td class="hed" width='10%'><b>Mobile</b></td>
		<td class="hed" width='10%'><b>Branch</b></td>
		<td class="hed" width='10%'><b>City</b></td>
		<td class="hed" width='12.5%'><b>Edit</b></td>
		<td class="hed" width='12.5%'><b>Delete</b></td>
	</tr>

<?php
	
	include("connection.php");
	
	$query ="SELECT *FROM login";
	$data =mysqli_query($conn,$query);
	
	while($row=mysqli_fetch_assoc($data)) 
	{
		echo "
			<tr class='tbo' align ='center' width='100%'>
				<td width='15%'><b>".$row['id']."</b></td>
				<td width='15%'><b>".$row['password']."</b></td>
				<td width='15%'><b>".$row['name']."</b></td>
				<td width='10%'><b>".$row['mobile']."</b></td>
				<td width='10%'><b>".$row['branch']."</b></td>
				<td width='10%'><b>".$row['city']."</b></td>
				<td width='12.5%'><button class='edbut'><a href='eduser.php?ed=".$row['id']."' style='text-decoration: none; color:#ffff;'>Edit</a></button></td>
				<td width='12.5%'><button class='debut'><a href='deuser.php?de=".$row['id']."' style='text-decoration: none; color:#ffff;'>Delete</a></button></td>
			</tr>
		";
	}

?>
</table>
</body>
</html>