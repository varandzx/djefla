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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo '<script>alert("wrong password")</script>';;
		}else
		{
			echo '<script>alert("wrong password")</script>';;
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="login_css.css">
	<title>Login</title>
	<style>
		.log{
			text-decoration: none;
			color:#CD9928;
		}
		.log_admin{
			text-decoration: none;
			color:#CD9928;
			
		}
		#button{
			color:white;
			background-color:#1B9CFC;
			border-radius:50px ;
		}
	</style>
</head>
<body>

	<style type="text/css">
	
	

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" autofocus placeholder="Username or email" name="user_name"><br><br>
			<input id="text" type="password" autofocus placeholder="Password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a class="log" href="signup.php">Click to Signup</a><br><br>
			<a class="log_admin" href="admin/login_admin.php"> Login as admin</a><br><br>
		</form>
	</div>
</body>
</html>