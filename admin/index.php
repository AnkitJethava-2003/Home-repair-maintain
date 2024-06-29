<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(35deg, #a4c639, #ffff, #a4c639);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background: linear-gradient(145deg, #fff76567, #fff2, #fff76567);
            padding: 20px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.4);
            width: 350px;
            height:275px;
            text-align: center;
        }

        h2 {
            color: #333333;
            font-size: 30px;
            font-family: Brush Script;
        }

        input {
            width: 100%;
            padding: 10px;
            background-color: #fff4;
            color: black;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            margin-bottom: 20px;
        }

        .log{
            margin-top: 10px;
            background: linear-gradient(45deg, #958989, #9995, #958989);
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .log:hover {
             background: linear-gradient(145deg, #9998, #999858, #9995);
             color: black;
             border-radius: 10px;
        }
        .login-container:hover {
            background-color: #ffff;
            border-radius: 10px;
        }
    </style>
	<link rel="shortcut icon" href="logo.png" />
</head>
<body class="bd">
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password"; placeholder="Password" required>
            <input type="submit" class="log" name="login" value="Login"> 
        </form>
    </div>
</body>
</html>


<?php
	
	if(isset($_POST['login']))
	{
		$username =$_POST['username'];
		$password =$_POST['password'];
	}
	
	$query ="SELECT *FROM Login WHERE id='$username'";
	$data =mysqli_query($conn,$query);
	
	while($res=mysqli_fetch_assoc($data))
	{
		if($password == $res["password"])
		{
			header("Location:ahome.php");
		}
	}
?>
