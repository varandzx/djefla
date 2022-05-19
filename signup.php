<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo '<script>alert("please entre some valid informations")</script>';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="signup_css.css">
	<style>
		#button{
			color:white;
			background-color:#1B9CFC;
			border-radius:50px ;
		}
		.log_admin{
			text-decoration: none;
			color:#CD9928;
			
		}

	</style>
</head>
<body>

	<style type="text/css">
	
	

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" autofocus placeholder="Username or email" name="user_name"><br><br>
			<input id="text" type="password" autofocus placeholder="Password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a class="log_admin" href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>